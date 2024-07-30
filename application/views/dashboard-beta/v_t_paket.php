<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket Wisata</title>
</head>
<body>
    <h1>Tambah Paket Wisata</h1>
    <form action="<?php echo base_url('dashboard/aksiTambahPaket') ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><?php echo form_error('Nama_Paket') ?></td>
            </tr>
            <tr>
                <td>Nama Paket</td>
                <td>:</td>
                <td><input type="text" name="Nama_Paket"></td>
            </tr>
            <tr>
                <td><?php echo form_error('Kategori') ?></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                    <select name="Kategori">
                        <option value="entertainment">Entertainment</option>
                        <option value="food">Food</option>
                        <option value="culture">Culture</option>
                        <option value="nature">Nature</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><?php echo form_error('Harga') ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="Harga"></td>
            </tr>
            <tr>
                <td><?php echo form_error('Lokasi') ?></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>:</td>
                <td>
                    <select name="Lokasi">
                        <option value="Badung">Kabupaten Badung</option>
                        <option value="Bangli">Kabupaten Bangli</option>
                        <option value="Buleleng">Kabupaten Buleleng</option>
                        <option value="Gianyar">Kabupaten Gianyar</option>
                        <option value="Jembrana">Kabupaten Jembrana</option>
                        <option value="Karangasem">Kabupaten Karangasem</option>
                        <option value="Klungkung">Kabupaten Klungkung</option>
                        <option value="Tabanan">Kabupaten Tabanan</option>
                        <option value="Denpasar">Kota Denpasar</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><?php echo form_error('Deskripsi') ?></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><textarea name="Deskripsi"></textarea></td>
            </tr>
            <tr>
                <td><?php echo form_error('Waktu_Tour') ?></td>
            </tr>
            <tr>
                <td>Waktu Tour</td>
                <td>:</td>
                <td><input type="text" name="Waktu_Tour"></td>
            </tr>
            <tr>
                <td>Pengunjung Maskimal</td>
                <td>:</td>
                <td><input type="number" name="max"></td>
            </tr>
            <tr>
                <td><?php echo form_error('gambar_1') ?></td>
            </tr>
            <tr>
                <td>Upload Gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar_1"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
