<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Paket Wisata</title>
</head>
<body>
    <h1>Data Paket Wisata</h1>
    <a href="<?php echo base_url('dashboard/tambahPaket/') ?>">Tambah Paket</a>
    <table border="1px black">
        <tr>
            <td>No</td>
            <td>Nama Paket</td>
            <td>Kategori</td>
            <td>Harga</td>
            <td>Lokasi</td>
            <td>Deskripsi</td>
            <td>Waktu Tour</td>
            <td>Penyedia</td>
            <td>QR Code</td>
            <td>Aksi</td>
        </tr>
        <?php 
            $no = 1; // Initialize the counter
            foreach ($paket_wisata as $key): 
        ?>
        <tr>
            <td><?php echo $no; ?></td> <!-- Display the counter -->
            <td><?php echo $key['Nama_Paket']; ?></td>
            <td><?php echo $key['Kategori']; ?></td>
            <td><?php echo $key['Harga']; ?></td>
            <td><?php echo $key['Lokasi']; ?></td>
            <td><?php echo $key['Deskripsi']; ?></td>
            <td><?php echo $key['Waktu_Tour']; ?></td>
            <td><?php echo $key['Nama_Perusahaan']; ?></td>
            <td><?php echo $key['QR_Code']; ?></td>
            <td>
                <a href="<?php echo base_url('dashboard/editPaket/'.$key['ID_Paket']); ?>">Edit</a>
                <a href="<?php echo base_url('dashboard/HapusPaket/'.$key['ID_Paket']); ?>">Delete</a>
            </td>
        </tr>
        <?php 
            $no++; // Increment the counter
            endforeach;
        ?>
    </table>
    <a href="<?php echo base_url('dashboard/') ?>">Back</a>
</body>
</html>
