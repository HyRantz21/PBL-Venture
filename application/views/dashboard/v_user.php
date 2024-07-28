<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid" id="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Loker User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <td>No</td>
                            <td>ID User</td>
                            <td>Full Name</td>
                            <td>Email</td>
                            <td>Password</td>
                            <td>Aksi</td>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td>No</td>
                            <td>ID User</td>
                            <td>Full Name</td>
                            <td>Email</td>
                            <td>Password</td>
                            <td>Aksi</td>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php 
                            $no = 1; // Initialize the counter
                            foreach ($user as $key): 
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td> <!-- Display the counter -->
                            <td><?php echo htmlspecialchars($key['ID_User']); ?></td>
                            <td><?php echo htmlspecialchars($key['Full_Name']); ?></td>
                            <td><?php echo htmlspecialchars($key['Email']); ?></td>
                            <td><?php echo htmlspecialchars($key['Password']); ?></td>
                            <td>
                                <a href="<?php echo base_url('dashboard/editUser/'.$key['ID_User']); ?>">Edit</a>
                                <a href="<?php echo base_url('dashboard/hapusUser/'.$key['ID_User']); ?>">Delete</a>
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
    </div>
</body>
</html>