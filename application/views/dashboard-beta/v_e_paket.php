<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Paket Wisata</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Paket Wisata</h1>
        <form action="<?php echo base_url('dashboard/aksiEditPaket/' . $paket['ID_Paket']) ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Nama_Paket">Nama Paket</label>
                <input type="text" class="form-control" id="Nama_Paket" name="Nama_Paket" value="<?php echo $paket['Nama_Paket']; ?>">
                <?php echo form_error('Nama_Paket', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label for="Kategori">Kategori</label>
                <select class="form-control" id="Kategori" name="Kategori">
                    <option value="entertainment" <?php echo $paket['Kategori'] == 'entertainment' ? 'selected' : ''; ?>>Entertainment</option>
                    <option value="food" <?php echo $paket['Kategori'] == 'food' ? 'selected' : ''; ?>>Food</option>
                    <option value="culture" <?php echo $paket['Kategori'] == 'culture' ? 'selected' : ''; ?>>Culture</option>
                    <option value="nature" <?php echo $paket['Kategori'] == 'nature' ? 'selected' : ''; ?>>Nature</option>
                </select>
                <?php echo form_error('Kategori', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label for="Harga">Harga</label>
                <input type="number" class="form-control" id="Harga" name="Harga" value="<?php echo $paket['Harga']; ?>">
                <?php echo form_error('Harga', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label for="Lokasi">Lokasi</label>
                <select class="form-control" id="Lokasi" name="Lokasi">
                    <option value="Badung" <?php echo $paket['Lokasi'] == 'Badung' ? 'selected' : ''; ?>>Kabupaten Badung</option>
                    <option value="Bangli" <?php echo $paket['Lokasi'] == 'Bangli' ? 'selected' : ''; ?>>Kabupaten Bangli</option>
                    <option value="Buleleng" <?php echo $paket['Lokasi'] == 'Buleleng' ? 'selected' : ''; ?>>Kabupaten Buleleng</option>
                    <option value="Gianyar" <?php echo $paket['Lokasi'] == 'Gianyar' ? 'selected' : ''; ?>>Kabupaten Gianyar</option>
                    <option value="Jembrana" <?php echo $paket['Lokasi'] == 'Jembrana' ? 'selected' : ''; ?>>Kabupaten Jembrana</option>
                    <option value="Karangasem" <?php echo $paket['Lokasi'] == 'Karangasem' ? 'selected' : ''; ?>>Kabupaten Karangasem</option>
                    <option value="Klungkung" <?php echo $paket['Lokasi'] == 'Klungkung' ? 'selected' : ''; ?>>Kabupaten Klungkung</option>
                    <option value="Tabanan" <?php echo $paket['Lokasi'] == 'Tabanan' ? 'selected' : ''; ?>>Kabupaten Tabanan</option>
                    <option value="Denpasar" <?php echo $paket['Lokasi'] == 'Denpasar' ? 'selected' : ''; ?>>Kota Denpasar</option>
                </select>
                <?php echo form_error('Lokasi', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label for="Deskripsi">Deskripsi</label>
                <textarea class="form-control" id="Deskripsi" name="Deskripsi" rows="3"><?php echo $paket['Deskripsi']; ?></textarea>
                <?php echo form_error('Deskripsi', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label for="Waktu_Tour">Waktu Tour</label>
                <input type="text" class="form-control" id="Waktu_Tour" name="Waktu_Tour" value="<?php echo $paket['Waktu_Tour']; ?>">
                <?php echo form_error('Waktu_Tour', '<div class="text-danger">', '</div>'); ?>
            </div>

            <input type="hidden" name="ID_Paket" value="<?php echo $paket['ID_Paket']; ?>">
            <input type="hidden" name="existing_image" value="<?php echo $paket['gambar_1']; ?>">

            <div class="form-group">
                <label for="max">Maksimal Pengunjung</label>
                <input type="number" class="form-control" id="max" name="max" value="<?php echo $paket['max']; ?>">
                <?php echo form_error('max', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label for="gambar_1">Upload Gambar 1</label>
                <input type="file" class="form-control-file" id="gambar_1" name="gambar_1">
                <?php echo form_error('gambar_1', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label for="gambar_2">Upload Gambar 2</label>
                <input type="file" class="form-control-file" id="gambar_2" name="gambar_2">
            </div>

            <div class="form-group">
                <label for="gambar_3">Upload Gambar 3</label>
                <input type="file" class="form-control-file" id="gambar_3" name="gambar_3">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
