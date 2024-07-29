<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>Content Detail</title>
</head>
<style>
    body {
        height: 100%;
        width: 100%;
    }

    /*NavBar*/
    .Brand{
        font-weight: 700; 
        font-size: 50px;
        color: black;
        word-break: break-all;
        padding-right: 30px;
    }

    .nav-item, .nav-item-profile {
        border-radius: 10px;
        padding: 10px;
        font-weight: 500;
        color: black;
        font-size: 20px;
        text-decoration: none;
        transition: 0.3s ease-in-out;
        padding-left: 5px;
    }

    .nav-item:hover {
        color: white;
        background-color: black;
        transition: 0.3s ease-in-out;
        padding: 10px;
    }

    .nav-item-profile:hover{
        color: white;
        background-color: black;
        transition: 0.3s ease-in-out;
        padding: 10px;
    }
    
    .bar {
        max-width: 20px;
        border: 0;
        margin: 5px;
        position: absolute;
        padding: 10px;
        padding-left: 50px;
        border-radius: 10px;
        background-image: url('assets/Icon/search.png');
        background-size: 20px;
        background-position: left 20px center;
        background-repeat: no-repeat;
        z-index: 1;
        font-weight: 500;
        transition: 0.5s ease-in-out;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
    }

    .bar:focus-within{
        transition: 0.5 ease-in-out;
        max-width: 250px;
    }

    .section1{
        display: flex;
        gap: 0px 5px;
    }

    .section1 button{
        border: 0;
        padding: 0;
        overflow: hidden;
    }

    .tImg1, .tImg2, .tImg3{
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        object-fit: cover;
        width: 100%;
        height: 430px;
        transition: transform 0.3s ease-in-out;
    }

    .tImg1:hover, .tImg2:hover, .tImg3:hover{
        transform: scale(1.1); 
        transition: transform 0.3s ease-in-out; 
    }

    /*Overview*/
    .layOverview{
        margin: 10px 0px 10px 0px;
        width: 100%;
        display: grid;
        grid-template-columns: 4fr 2fr;
        gap: 0px 5px;
    }

    .overview{
        border: solid 1px;
        border-radius: 20px;
        padding: 10px;
    }
    
    .overview h2{
        margin: 0;
        font-weight: 700; 
        font-size: 30px;
        color: black;
        word-break: break-all;
        padding-right: 30px;
    }
    .overview h6{
        font-weight: 500; 
        font-size: 15px;
        color: gray;
        word-break: break-all;
        padding-right: 30px;
    }
    .panel{
        max-width: 470px;
        border-radius: 20px;
        min-height: 300px;
        background-color: rgb(255, 255, 255);
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        display: grid;
        grid-template-rows: 30% 50% 10%;
    }

    .price{
        padding: 15px;
        background-color: rgb(59, 59, 59);
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        color: white;
    }
    
    .People, .date{
        justify-content: center;
        align-items: center;
        display: grid;
        grid-template-columns: 40px 80%;
        margin: 10px 0px;
    }
    
    .max p{
        display: flex;
        margin: 0;
        padding-right: 50px;;
        justify-content: end;
    }

    .person, .calendar {
        width: 30px;
    }

    .People input[type="number"], .date input[type="date"] {
        padding: 8px;
        width: 95%;
        border: 2px solid #ccc;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 500;
    }
    
    .laybtn{
        display: flex;
        justify-content: end;
        padding: 10px;
    }

    .order{
        border-radius: 15px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
        width: 100%;
        height: 50px;
        background-color: rgb(59, 59, 59);
        color: white;
        font-weight: 600;
        font-size: 20px;
        transition: 0.3s ease-in-out;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
    }

    .order:hover{
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
        transition: 0.3s ease-in-out;
    }

    .order-panel {
        padding: 10px;
        border-radius: 20px;
        position: fixed;
        top: 50%;
        left: 50%;
        width: 350px;
        min-height: 350px;
        transform: translate(-50%, -50%);
        border: 1px solid #ccc;
        border-radius: 20px;
        background-color: #ffffff;
        z-index: 10;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
        color: #adadad;
    }

    .QRcode {
        display: block;
        margin: 10px auto;
        max-width: 100%;
        height: auto;
    }

    .pay{
        display: flex;
        justify-content: center;
        border: none;
        background-color: black;
        color: white;
        width: 100%;
        height: 50px;
        border-radius: 15px;
        font-size: 25px;
        font-weight: 500;
    }

    .order-panel .close-btn:hover {
        color: #000000;
    }

    /*Universal*/
    container{
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        padding: 10px;
    }

    .link{
        text-decoration: none;
    }

    .p{
        color: gray;
        font-weight: 500;
    }

    /*Responsive*/
    @media (max-width: 770px) {
        .section1{
            width: 100%;
        }
        .layOverview{
            grid-template-columns: 1fr;
            gap: 5px;
        }
        .panel{
            margin-top: 5px;
            width: 100%;
            max-width: none;
            margin-bottom: 10px;
        }
        .laybtn{
            justify-content: center;
        }
    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg mb-2">
            <div class="container">
                <a class="link" href="<?php echo base_url('main'); ?>"><h1 class="Brand">Venture</h1></a> 
                <div class="LayoutItem">  
                    <a class="nav-item" href="<?php echo base_url("WishlistCon/")?>"><img src="" alt="">Wishlist</a>      
                    <a class="nav-item" href="<?php echo base_url("HistoryCon/")?>"><img src="" alt="">History</a>
                    <a class="nav-item" href="<?php echo base_url('ReservationCon'); ?>"><img src="" alt="">Reservation</a>
                    <a class="nav-item" href="#"><img src="" alt="">Contact Us</a>
                    <a class="nav-item-profile" href="<?php echo base_url("profile/")?>"><img src="" alt="">Profile</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mb-4">
        <section class="">
            <div class="section1">
                <button onclick="openModal('assets/Image/31d037cebdaf4a318b586751e3dc1d397482fd3f.jpg')"><img src="assets/Image/31d037cebdaf4a318b586751e3dc1d397482fd3f.jpg" alt="" class="tImg1"></button>
                <button onclick="openModal('assets/Image/8c0b5f0914c97c30c94a9cbe3d257f2e3583fc6c.jpg')"><img src="assets/Image/8c0b5f0914c97c30c94a9cbe3d257f2e3583fc6c.jpg" alt="" class="tImg2"></button>
                <button onclick="openModal('assets/Image/e742e0ad10409b7065e565dfb95a9046e55205c0.jpg')"><img src="assets/Image/e742e0ad10409b7065e565dfb95a9046e55205c0.jpg" alt="" class="tImg3"></button>
            </div>
        </section>
        <section class="layOverview">
            <div class="overview">
                <h2><?= $detail->Nama_Paket ?></h2>
                <h6><?= $detail->Lokasi ?></h6>
                <p class="p"><?= $detail->Deskripsi ?></p>
            </div>
            <div class="panel">
                <div class="price">
                    <h2>Price</h2>
                    <h3 id="pricePerAdult">Rp.<?= $detail->Harga ?></h3>
                </div>

                <div class="formwrap">
                    <div class="People">
                        <img src="assets/Icon/person-fill.png" alt="" class="person">
                        <input type="number" id="adult" name="adult" min="0" max="<?= $detail->max ?>" value="0" oninput="calculateTotal()">
                    </div>
                    <div class="max">
                        <p>Maximum: <?= $detail->max ?></p>
                    </div>
                    <div class="date">
                        <img src="assets/Icon/calendar3.png" alt="" class="calendar">
                        <input type="date" id="date">
                    </div>
                    
                </div>

                <div class="laybtn">
                    <button class="order" onclick="displayTotal()">Check Reservation</button>
                </div>
                <div id="orderPanel" class="order-panel" style="display: none;">
                    <button class="close-btn" onclick="closeOrderPanel()">X</button>
                    <h2>Your Order</h2>
                    <div class="wrapOutput">
                        <div class="Name"><?= $detail->Nama_Paket ?></div>
                        <div id="orderDate"></div>
                        <div id="orderAdults"></div>
                        <div id="orderTotalPrice"></div>
                    </div>
                    <img src="" alt="" class="QRcode">
                    <form action="<?php echo site_url('ContentCon/reserve'); ?>" method="post">
                        <input type="hidden" name="ID_Paket" value="<?php echo $detail->ID_Paket; ?>">
                        <input type="hidden" name="Full_Name" value="<?php echo $this->session->userdata('Full_Name'); ?>">
                        <input type="hidden" name="Deskripsi" value="<?php echo $detail->Deskripsi; ?>">
                        <!-- Anda dapat menambahkan input lain sesuai kebutuhan -->
                        <button type="submit" class="pay">Confirm</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script>
        // Fungsi untuk membuka gambar dalam modal
        function openModal(imageSrc) {
            // Membuat elemen modal jika belum ada
            let modal = document.getElementById('imageModal');
            if (!modal) {
                modal = document.createElement('div');
                modal.id = 'imageModal';
                modal.style.position = 'fixed';
                modal.style.left = '0';
                modal.style.top = '0';
                modal.style.width = '100%';
                modal.style.height = '100%';
                modal.style.backgroundColor = 'rgba(0,0,0,0.8)';
                modal.style.display = 'flex';
                modal.style.justifyContent = 'center';
                modal.style.alignItems = 'center';
                modal.style.zIndex = '1000';
                modal.style.cursor = 'pointer';

                const img = document.createElement('img');
                img.id = 'modalImage';
                img.style.maxWidth = '90%';
                img.style.maxHeight = '90%';
                modal.appendChild(img);

                modal.onclick = function() {
                    modal.style.display = 'none';
                }

                document.body.appendChild(modal);
            }

            // Mengatur sumber gambar dan menampilkan modal
            document.getElementById('modalImage').src = imageSrc;
            modal.style.display = 'flex';
        }

        let pricePerAdult = <?= $detail->Harga ?>; // Set harga dari server

        function calculateTotal() {
            const adultInput = document.getElementById('adult');
            const numberOfAdults = adultInput.value;

            const totalPrice = numberOfAdults * pricePerAdult;
            document.getElementById('totalPrice').textContent = `Rp. ${totalPrice.toLocaleString('id-ID')}`;
        }

        function displayTotal() {
            const adultInput = document.getElementById('adult');
            const numberOfAdults = adultInput.value;
            const dateInput = document.getElementById('date');
            const selectedDate = dateInput.value;

            const totalPrice = numberOfAdults * pricePerAdult;

            const orderPanel = document.getElementById('orderPanel');
            const orderAdults = document.getElementById('orderAdults');
            const orderTotalPrice = document.getElementById('orderTotalPrice');
            const orderDate = document.getElementById('orderDate');

            orderAdults.textContent = `Number of Adults: ${numberOfAdults}`;
            orderTotalPrice.textContent = `Total Price: Rp. ${totalPrice.toLocaleString('id-ID')}`;
            orderDate.textContent = `Reservation Date: ${selectedDate}`;
            orderPanel.style.display = 'block';
        }

        function closeOrderPanel() {
            const orderPanel = document.getElementById('orderPanel');
            orderPanel.style.display = 'none';
        }
    </script>
</body>
</html>