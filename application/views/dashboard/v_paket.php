<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Paket Wisata</title>
</head>
<body>
<div class="container-fluid" id="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Paket Wisata</h6>
            </div>
            <a href="<?php echo base_url('dashboard/tambahPaket/'); ?>">Tambah Paket</a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Paket</td>
                            <td>Kategori</td>
                            <td>Harga</td>
                            <td>Lokasi</td>
                            <td>Deskripsi</td>
                            <td>Waktu Tour</td>
                            <td>QR Code</td>
                            <td>Aksi</td>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td>No</td>
                            <td>Nama Paket</td>
                            <td>Kategori</td>
                            <td>Harga</td>
                            <td>Lokasi</td>
                            <td>Deskripsi</td>
                            <td>Waktu Tour</td>
                            <td>QR Code</td>
                            <td>Aksi</td>
                        </tr>
                        </tfoot>
                        <tbody>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    <a href="<?php echo base_url('dashboard/') ?>">Back</a>
</body>
</html>
