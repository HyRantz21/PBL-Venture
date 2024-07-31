<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

    <!-- Custom fonts for this template-->
    <link href=<?php echo base_url("assets/vendor/fontawesome-free/css/all.min.css")?> rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href=<?php echo base_url("assets/css/sb-admin-2.min.css")?> rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <div class="mt-4 dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('assets/Image/Traveler Hd Transparent, Travel, Travel Clipart, Earth PNG Image For Free Download.jpeg'); ?>">
                            </div>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" id="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Loker User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table border="1px black" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                        <!-- <a href="<?php echo base_url('dashboard/editUser/'.$key['ID_User']); ?>" class="btn-primary p-2">Edit</a> -->
                                        <a href="<?php echo base_url('dashboard/hapusUser/'.$key['ID_User']); ?>" class="btn-danger p-2">Delete</a>
                                    </td>
                                </tr>
                                <?php 
                                    $no++; // Increment the counter
                                    endforeach;
                                ?>
                            </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Paket Wisata</h6>
                        </div>
                        <!-- <a href="<?php echo base_url('dashboard/tambahPaket/'); ?>">Tambah Paket</a> -->
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
                                        <td>Pengunjung Maks</td>
                                        <td>Gambar 1</td>
                                        <td>Aksi</td>
                                    </tr>
                                    </thead>
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
                                        <td><?php echo $key['max']; ?></td>
                                        <td>
                                            <?php if (!empty($key['gambar_1']) || file_exists('C:/xampp/htdocs/PBL-Venture/assets/Image' . $key['gambar_1'])): ?>
                                                <!-- Display uploaded image -->
                                                <img src="<?php echo base_url($key['gambar_1']); ?>" alt="Image" style="width:100px; height:auto;">
                                            <?php else: ?>
                                                <!-- Display default image if no image exists -->
                                                <img src="<?php echo base_url('assets/Image/default_image.jpg'); ?>" alt="No Image" style="width:100px; height:auto;">
                                            <?php endif; ?>
                                            <?php if (!empty($key['gambar_2']) || file_exists('C:/xampp/htdocs/PBL-Venture/assets/Image' . $key['gambar_1'])): ?>
                                                <!-- Display uploaded image -->
                                                <img src="<?php echo base_url($key['gambar_2']); ?>" alt="Image" style="width:100px; height:auto;">
                                            <?php else: ?>
                                                <!-- Display default image if no image exists -->
                                                <img src="<?php echo base_url('assets/Image/default_image.jpg'); ?>" alt="No Image" style="width:100px; height:auto;">
                                            <?php endif; ?>
                                            <?php if (!empty($key['gambar_3']) || file_exists('C:/xampp/htdocs/PBL-Venture/assets/Image' . $key['gambar_1'])): ?>
                                                <!-- Display uploaded image -->
                                                <img src="<?php echo base_url($key['gambar_3']); ?>" alt="Image" style="width:100px; height:auto;">
                                            <?php else: ?>
                                                <!-- Display default image if no image exists -->
                                                <img src="<?php echo base_url('assets/Image/default_image.jpg'); ?>" alt="No Image" style="width:100px; height:auto;">
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('dashboard/editPaket/'.$key['ID_Paket']); ?>" class="btn-primary p-2">Edit</a>
                                            <a href="<?php echo base_url('dashboard/HapusPaket/'.$key['ID_Paket']); ?>" class="btn-danger p-2">Delete</a>
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
                
                   
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Loker User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User Name</th>
                                        <th>Package Name</th>
                                        <th>Total Harga</th>
                                        <th>Total Pengunjung</th>
                                        <th>Tanggal Reservasi</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach ($reservasi as $key): 
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo htmlspecialchars($key['Full_Name']); ?></td>
                                        <td><?php echo htmlspecialchars($key['Deskripsi']); ?></td>
                                        <td><?php echo htmlspecialchars($key['total_harga']); ?></td>
                                        <td><?php echo htmlspecialchars($key['total_adult']); ?></td>
                                        <td><?php echo htmlspecialchars($key['Tanggal_Reservasi']); ?></td>
                                        <td>
                                            <a href="<?php echo base_url('dashboard/confirmReservation/'.$key['ID_Reservasi']); ?>" class="btn btn-success">Confirm</a>
                                            <a href="<?php echo base_url('dashboard/deleteReservation/'.$key['ID_Reservasi']); ?>" class="btn btn-danger">Denied</a>
                                        </td>
                                    </tr>
                                    <?php 
                                        $no++;
                                        endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Loker User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
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
                                                    <option value="" disabled selected>Silahkan Pilih :</option>
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
                                            <td>Upload Gambar 1</td>
                                            <td>:</td>
                                            <td><input type="file" name="gambar_1"></td>
                                        </tr>
                                        <tr>
                                            <td>Upload Gambar 2</td>
                                            <td>:</td>
                                            <td><input type="file" name="gambar_2"></td>
                                        </tr>
                                        <tr>
                                            <td>Upload Gambar 3</td>
                                            <td>:</td>
                                            <td><input type="file" name="gambar_3"></td>
                                        </tr>
                                        <tr>
                                            <td><button type="submit">Simpan</button></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('auth/logout'); ?>">Logout</href=>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js'); ?>"></script>
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            // Tangkap klik pada link sidebar
            document.querySelectorAll('.nav-link').forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    // Ambil URL dari link
                    const url = this.getAttribute('href');
                    // Muat konten dengan AJAX
                    loadContent(url);
                });
            });
            
            // Fungsi untuk memuat konten dinamis
            function loadContent(url) {
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('container-fluid').innerHTML = data;
                    })
                    .catch(error => console.error('Error loading content:', error));
            }
        });
    </script>
</body>

</html>