<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paket_wisata extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload'); // Load the upload library

    }

    public function getPaketByCategory($category)
    {
        $this->db->where('Kategori', $category);
        $query = $this->db->get('paket_wisata');
        return $query->result_array();
    }
    
    public function getPaketByPlace($Lokasi)
    {
        $this->db->where('Lokasi', $Lokasi);
        $query = $this->db->get('paket_wisata');
        return $query->result_array();
    }

    public function getPaket()
    {
        $this->db->select('paket_wisata.*');
        $this->db->from('paket_wisata');
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    public function inputPaket()
{
    // Konfigurasi untuk upload gambar
    $config['upload_path'] = './assets/Image';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 3072; // 3MB ukuran maksimum dalam kilobyte

    $this->upload->initialize($config);

    // Inisialisasi array untuk menyimpan path gambar
    $gambar_paths = array();

    // Fungsi untuk mengupload gambar
    function upload_image($gambar_name, &$gambar_paths)
    {
        $CI =& get_instance(); // Mendapatkan instance CI

        // Cek max size
        if ($_FILES[$gambar_name]['size'] >= $CI->upload->max_size * 1024) {
            echo "Size " . $gambar_name . " lebih dari 3 MB";
            return false; // Hentikan eksekusi jika ukuran file lebih dari 3 MB
        }

        if ($CI->upload->do_upload($gambar_name)) {
            $upload_data = $CI->upload->data();
            $gambar_paths[$gambar_name] = 'assets/Image/' . $upload_data['file_name'];
        } else {
            echo "GAGAL UPLOAD " . $gambar_name . ": " . $CI->upload->display_errors();
            return false; // Hentikan eksekusi jika upload gagal
        }

        return true;
    }

    // Upload semua gambar
    if (!upload_image('gambar_1', $gambar_paths) || !upload_image('gambar_2', $gambar_paths) || !upload_image('gambar_3', $gambar_paths)) {
        return false; // Hentikan eksekusi jika salah satu upload gagal
    }

    // Data yang akan dimasukkan ke database
    $data = array(
        'Nama_Paket' => $this->input->post('Nama_Paket'),
        'Kategori' => $this->input->post('Kategori'),
        'Harga' => $this->input->post('Harga'),
        'Lokasi' => $this->input->post('Lokasi'),
        'Deskripsi' => $this->input->post('Deskripsi'),
        'Waktu_Tour' => $this->input->post('Waktu_Tour'),
        'max' => $this->input->post('max'),
        'gambar_1' => $gambar_paths['gambar_1'], // Simpan path gambar 1
        'gambar_2' => $gambar_paths['gambar_2'], // Simpan path gambar 2
        'gambar_3' => $gambar_paths['gambar_3'], // Simpan path gambar 3
    );

    // Masukkan data ke database
    return $this->db->insert('paket_wisata', $data);
}


    public function savefilename($gambar)
    {
        $data = [
            'filename' => $gambar,
        ];
        $this->db->insert('gambar_1', $data);
    }


    public function getPaketById($id_paket)
    {
        $this->db->where('ID_Paket', $id_paket);
        $query = $this->db->get('paket_wisata');
        return $query->row_array();
    }

    public function deleteDataPaket($id)
    {
        $this->db->where('ID_Paket', $id);
        return $this->db->delete('paket_wisata');
    }
    
    public function updateDataPaket()
    {
        // Konfigurasi upload gambar
        $config['upload_path'] = './assets/Image';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 3072; // 3MB ukuran maksimum dalam kilobyte
        $this->upload->initialize($config);

        // Array untuk menyimpan path gambar
        $image_paths = array();

        // List nama file gambar
        $gambar_names = array('gambar_1', 'gambar_2', 'gambar_3');

        // Loop untuk setiap gambar
        foreach ($gambar_names as $gambar_name) {
            if (!empty($_FILES[$gambar_name]['name'])) {
                if ($this->upload->do_upload($gambar_name)) {
                    $upload_data = $this->upload->data();
                    $image_paths[$gambar_name] = 'assets/Image/' . $upload_data['file_name'];
                } else {
                    echo "GAGAL UPLOAD $gambar_name: " . $this->upload->display_errors();
                    return false; // Hentikan eksekusi jika upload gagal
                }
            } else {
                // Jika tidak ada gambar baru, gunakan gambar yang ada
                $image_paths[$gambar_name] = $this->input->post('existing_' . $gambar_name);
            }
        }

        // Data yang akan diperbarui
        $data = array(
            'Nama_Paket' => $this->input->post('Nama_Paket'),
            'Kategori' => $this->input->post('Kategori'),
            'Harga' => $this->input->post('Harga'),
            'Lokasi' => $this->input->post('Lokasi'),
            'Deskripsi' => $this->input->post('Deskripsi'),
            'Waktu_Tour' => $this->input->post('Waktu_Tour'),
            'max' => $this->input->post('max'),
            'gambar_1' => $image_paths['gambar_1'], // Path gambar yang diupdate atau gambar yang ada
            'gambar_2' => $image_paths['gambar_2'], // Path gambar yang diupdate atau gambar yang ada
            'gambar_3' => $image_paths['gambar_3'], // Path gambar yang diupdate atau gambar yang ada
        );

        // Update data di database
        $this->db->where('ID_Paket', $this->input->post('ID_Paket'));
        return $this->db->update('paket_wisata', $data);
    }
}
