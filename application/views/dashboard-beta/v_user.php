<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1px black">
        <tr>
            <td>No</td>
            <td>ID User</td>
            <td>Full Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Aksi</td>
        </tr>
        <?php 
            $no = 1; // Initialize the counter
            foreach ($user as $key): 
        ?>
        <tr>
            <td><?php echo $no; ?></td> <!-- Display the counter -->
            <td><?php echo $key['ID_User']; ?></td>
            <td><?php echo $key['Full_Name']; ?></td>
            <td><?php echo $key['Email']; ?></td>
            <td><?php echo $key['Password']; ?></td>
            <td>
                <a href="<?php echo base_url('dashboard/editUser/'.$key['ID_User']); ?>">Edit</a>
                <a href="<?php echo base_url('dashboard/hapusUser/'.$key['ID_User']); ?>">Delete</a>
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
