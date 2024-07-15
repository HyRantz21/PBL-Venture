<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perusahaan</title>
</head>
<body>
    <h1>Data Perusahaan</h1>
    <a href="<?php echo base_url('dashboard/tambahPerusahaan/') ?>">Tambah Perusahaan</a>
    <table border="1px black">
        <tr>
            <td>No</td>
            <td>Nama Perusahaan</td>
            <td>Alamat</td>
            <td>Nomor Telepon</td>
            <td>Email</td>
            <td>Password</td>
            <td>Aksi</td>
        </tr>
        <?php 
            $no = 1; // Initialize the counter
            if (is_array($perusahaan) && count($perusahaan) > 0) { // Ensure $perusahaan is an array and not empty
                foreach ($perusahaan as $key): 
        ?>
        <tr>
            <td><?php echo $no; ?></td> <!-- Display the counter -->
            <td><?php echo $key['Nama_Perusahaan']; ?></td>
            <td><?php echo $key['Alamat']; ?></td>
            <td><?php echo $key['Nomor_Telepon']; ?></td>
            <td><?php echo $key['Email']; ?></td>
            <td><?php echo $key['Password']; ?></td>
            <td>
                <a href="<?php echo base_url('dashboard/editPerusahaan/'.$key['ID_Perusahaan']); ?>">Edit</a>
                <a href="<?php echo base_url('dashboard/HapusPerusahaan/'.$key['ID_Perusahaan']); ?>">Delete</a>
            </td>
        </tr>
        <?php 
                    $no++; // Increment the counter
                endforeach;
            } else {
                echo "<tr><td colspan='7'>No data available</td></tr>";
            }
        ?>
    </table>
    <a href="<?php echo base_url('dashboard/') ?>">Back</a>
</body>
</html>
