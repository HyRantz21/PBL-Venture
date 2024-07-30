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
        grid-template-rows: 30% 40% 20%;
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
        color: grey;
        font-weight: 600;
        display: flex;
        margin-top: 10px;
        margin-bottom:-10px;
        padding-right: 50px;
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
        margin-top: 20px;
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

    .container{
        padding: 10px;
    }

    .link{
        text-decoration: none;
    }

    .p{
        color: gray;
        font-weight: 500;
    }

    .m1{
        margin-top:-20px;
    }

    .custom-alert {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px 30px;
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 15px;
        z-index: 1000;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .custom-alert p {
        margin: 0;
        font-size: 16px;
        color: #343a40;
    }

    .custom-alert button {
        margin-top: 15px;
        padding: 10px 20px;
        background-color: black;
        border: none;
        border-radius: 15px;
        color: white;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .custom-alert button:hover {
        background-color: white;
        color: black;
    }

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
                    <a class="nav-item" href="<?php echo base_url('ReservationCon'); ?>"><img src="" alt="">Contact Us</a>
                    <a class="nav-item-profile" href="<?php echo base_url("main/viewContact")?>"><img src="" alt="">Profile</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="m1 container mb-4">
        <section class="">
            <div class="section1">
                <button onclick="openModal('<?php echo base_url($detail['gambar_1']); ?>')">
                    <img src="<?php echo base_url($detail['gambar_1']); ?>" alt="" class="tImg1">
                </button>
                <button onclick="openModal('<?php echo base_url($detail['gambar_2']); ?>')">
                    <img src="<?php echo base_url($detail['gambar_2']); ?>" alt="" class="tImg2">
                </button>
                <button onclick="openModal('<?php echo base_url($detail['gambar_3']); ?>')">
                    <img src="<?php echo base_url($detail['gambar_3']); ?>" alt="" class="tImg3">
                </button>
            </div>

        </section>
        <section class="layOverview">
            <div class="overview">
                <?php if ($detail): ?>
                    <h2><?= $detail['Nama_Paket']?></h2>
                    <h6><?= $detail['Lokasi'] ?></h6>
                    <p class="p"><?= $detail['Deskripsi'] ?></p>
                <?php else: ?>
                    <h2>Paket tidak ditemukan</h2>
                <?php endif; ?>
            </div>
            <div class="panel">
                <div class="price">
                    <h2>Price</h2>
                    <h3 id="pricePerAdult">Rp.<?= $detail ? $detail['Harga'] : '0' ?></h3>
                </div>
                <div class="formwrap">
                    <div class="max">
                        <p>Maximum: <?= $detail ? $detail['max'] : '0' ?></p>
                    </div>
                    <div class="People">
                        <img src="<?php echo base_url('assets/Icon/person-fill.png'); ?>" alt="" class="person">
                        <input type="number" id="adult" name="adult" min="0" max="<?= $detail ? $detail['max'] : '0' ?>" value="0" oninput="checkMax()">
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
                        <div class="Name"><?= $detail['Nama_Paket'] ?></div>
                        <div id="orderDate"></div>
                        <div id="orderAdults"></div>
                        <div id="orderTotalPrice"></div>
                    </div>
                    <img src="" alt="" class="QRcode">
                    <form action="<?php echo site_url('ContentCon/reserve'); ?>" method="post">
                        <input type="hidden" name="ID_Paket" value="<?= $detail['ID_Paket']; ?>">
                        <input type="hidden" name="Full_Name" value="<?= $this->session->userdata('Full_Name'); ?>">
                        <input type="hidden" name="Deskripsi" value="<?= $detail['Deskripsi']; ?>">
                        <input type="hidden" id="hiddenTotalAdult" name="total_adult" value="1">
                        <input type="hidden" id="hiddenTotalPrice" name="total_harga" value="<?= $detail['Harga']; ?>">
                        <button type="submit" class="pay">Confirm</button>
                    </form>
                </div>
            </section>
        </main>
    <script>
        function openModal(imageSrc) {
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

            document.getElementById('modalImage').src = imageSrc;
            modal.style.display = 'flex';
        }

        const pricePerAdult = <?= $detail['Harga'] ?>;
        const maxPeople = <?= $detail['max'] ?>;

        function calculateTotal() {
            const adultInput = document.getElementById('adult');
            let numberOfAdults = adultInput.value;
            if (numberOfAdults > maxPeople) {
                numberOfAdults = maxPeople;
                adultInput.value = maxPeople;
                showCustomAlert('The number of people cannot exceed the maximum limit.');
            }
            const totalPrice = numberOfAdults * pricePerAdult;
            document.getElementById('orderTotalPrice').textContent = 'Rp. ' + totalPrice.toLocaleString('id-ID');
            document.getElementById('hiddenTotalAdult').value = numberOfAdults;
            document.getElementById('hiddenTotalPrice').value = totalPrice;
        }

        function displayTotal() {
            const adultInput = document.getElementById('adult');
            const numberOfAdults = adultInput.value;
            if (numberOfAdults == 0) {
                showCustomAlert('The number of adults cannot be zero.');
                return;
            }
            calculateTotal(); // Ensure the total is calculated correctly
            const dateInput = document.getElementById('date');
            const selectedDate = dateInput.value;
            const totalPrice = numberOfAdults * pricePerAdult;

            const orderPanel = document.getElementById('orderPanel');
            const orderAdults = document.getElementById('orderAdults');
            const orderTotalPrice = document.getElementById('orderTotalPrice');
            const orderDate = document.getElementById('orderDate');

            orderAdults.textContent = 'Number of Adults: ' + numberOfAdults;
            orderTotalPrice.textContent = 'Total Price: Rp. ' + totalPrice.toLocaleString('id-ID');
            orderDate.textContent = 'Reservation Date: ' + selectedDate;
            orderPanel.style.display = 'block';
        }

        function closeOrderPanel() {
            document.getElementById('orderPanel').style.display = 'none';
        }

        function checkMax() {
            const max = <?= $detail ? $detail['max'] : 0 ?>;
            const input = document.getElementById('adult');
            if (input.value > max) {
                input.value = max;
                showCustomAlert('The number of people cannot exceed the maximum limit.');
            }
        }

        function showCustomAlert(message) {
            const customAlert = document.getElementById('customAlert');
            const alertMessage = document.getElementById('alertMessage');
            alertMessage.textContent = message;
            customAlert.style.display = 'block';
        }

        function closeCustomAlert() {
            const customAlert = document.getElementById('customAlert');
            customAlert.style.display = 'none';
}    </script>
    <div id="customAlert" class="custom-alert">
        <p id="alertMessage"></p>
        <button onclick="closeCustomAlert()">OK</button>
    </div>
</body>
</html>
