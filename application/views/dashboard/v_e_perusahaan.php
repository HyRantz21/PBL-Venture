<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Perusahaan</title>
</head>
<body>
    <h1>Edit Perusahaan</h1>
    <form action="<?php echo base_url('dashboard/aksiEditPerusahaan') ?>" method="post">
        <input type="hidden" name="ID_Perusahaan" value="<?php echo $perusahaan['ID_Perusahaan']; ?>">
        <table>
            <tr>
                <td><?php echo form_error('Nama_Perusahaan') ?></td>
            </tr>
            <tr>
                <td>Nama Perusahaan</td>
                <td>:</td>
                <td><input type="text" name="Nama_Perusahaan" value="<?php echo set_value('Nama_Perusahaan', $perusahaan['Nama_Perusahaan']); ?>"></td>
            </tr>
            <tr>
                <td><?php echo form_error('Alamat') ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="Alamat" value="<?php echo set_value('Alamat', $perusahaan['Alamat']); ?>"></td>
            </tr>
            <tr>
                <td><?php echo form_error('Nomor_Telepon') ?></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><input type="text" name="Nomor_Telepon" value="<?php echo set_value('Nomor_Telepon', $perusahaan['Nomor_Telepon']); ?>"></td>
            </tr>
            <tr>
                <td><?php echo form_error('Email') ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="Email" value="<?php echo set_value('Email', $perusahaan['Email']); ?>"></td>
            </tr>
            <tr>
                <td><?php echo form_error('Password') ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="Password" value="<?php echo set_value('Password', $perusahaan['Password']); ?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Update</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
