<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Paket Wisata</title>
</head>
<body>
    <h1>Edit Paket Wisata</h1>
    <form action="<?php echo base_url('dashboard/aksiEditPaket/' . $paket['ID_Paket']) ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><?php echo form_error('Nama_Paket') ?></td>
            </tr>
            <tr>
                <td>Nama Paket</td>
                <td>:</td>
                <td><input type="text" name="Nama_Paket" value="<?php echo $paket['Nama_Paket']; ?>"></td>
            </tr>
            <tr>
                <td><?php echo form_error('Kategori') ?></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td><input type="text" name="Kategori" value="<?php echo $paket['Kategori']; ?>"></td>
            </tr>
            <tr>
                <td><?php echo form_error('Harga') ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="Harga" value="<?php echo $paket['Harga']; ?>"></td>
            </tr>
            <tr>
                <td><?php echo form_error('Lokasi') ?></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>:</td>
                <td><input type="text" name="Lokasi" value="<?php echo $paket['Lokasi']; ?>"></td>
            </tr>
            <tr>
                <td><?php echo form_error('Deskripsi') ?></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><textarea name="Deskripsi"><?php echo $paket['Deskripsi']; ?></textarea></td>
            </tr>
            <tr>
                <td><?php echo form_error('Waktu_Tour') ?></td>
            </tr>
            <tr>
                <td>Waktu Tour</td>
                <td>:</td>
                <td><input type="text" name="Waktu_Tour" value="<?php echo $paket['Waktu_Tour']; ?>"></td>
            </tr>
            <input type="hidden" name="ID_Paket" value="<?php echo $paket['ID_Paket']; ?>"> <!-- Hidden field for ID_Paket -->
            <input type="hidden" name="existing_image" value="<?php echo $paket['gambar_1']; ?>"> <!-- Hidden field for existing image -->
            <tr>
                <td><?php echo form_error('gambar_1') ?></td>
            </tr>
            <tr>
                <td>Upload Gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar_1"></td>
            </tr>
            <tr>
                <td><button type="submit">Update</button></td>
            </tr>
        </table>
    </form>
</body>
</html>