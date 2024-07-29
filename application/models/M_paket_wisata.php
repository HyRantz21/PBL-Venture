<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paket_wisata extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload'); // Load the upload library

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

        // Cek max size
        if ($_FILES['gambar_1']['size'] >= $config['max_size'] * 1024) {
            echo "Size lebih dari 3 MB";
            return false; // Hentikan eksekusi jika ukuran file lebih dari 3 MB
        }

        if ($this->upload->do_upload('gambar_1')) {
            $upload_data = $this->upload->data();
            $path = 'assets/Image/' . $upload_data['file_name'];
        } else {
            echo "GAGAL UPLOAD: " . $this->upload->display_errors();
            return false; // Hentikan eksekusi jika upload gagal
        }

        // Data yang akan dimasukkan ke database
        $data = array(
            'Nama_Paket' => $this->input->post('Nama_Paket'),
            'Kategori' => $this->input->post('Kategori'),
            'Harga' => $this->input->post('Harga'),
            'Lokasi' => $this->input->post('Lokasi'),
            'Deskripsi' => $this->input->post('Deskripsi'),
            'Waktu_Tour' => $this->input->post('Waktu_Tour'),
            'gambar_1' => $path, // Simpan path gambar
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

        // Cek jika gambar baru diupload
        if (!empty($_FILES['gambar_1']['name'])) {
            if ($this->upload->do_upload('gambar_1')) {
                $upload_data = $this->upload->data();
                $image_path = 'assets/Image/' . $upload_data['file_name'];
            } else {
                echo "GAGAL UPLOAD: " . $this->upload->display_errors();
                return false; // Hentikan eksekusi jika upload gagal
            }
        } else {
            // Jika tidak ada gambar baru, gunakan gambar yang ada
            $image_path = $this->input->post('existing_image');
        }

        // Data yang akan diperbarui
        $data = array(
            'Nama_Paket' => $this->input->post('Nama_Paket'),
            'Kategori' => $this->input->post('Kategori'),
            'Harga' => $this->input->post('Harga'),
            'Lokasi' => $this->input->post('Lokasi'),
            'Deskripsi' => $this->input->post('Deskripsi'),
            'Waktu_Tour' => $this->input->post('Waktu_Tour'),
            'gambar_1' => $image_path, // Path gambar yang diupdate atau gambar yang ada
        );

        // Update data di database
        $this->db->where('ID_Paket', $this->input->post('ID_Paket'));
        return $this->db->update('paket_wisata', $data);
    }
}
