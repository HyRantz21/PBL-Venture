<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>History</title>
</head>
<style>
    :root {
        --main-bg-color: black;
        --main-text-color: gray;
        --main-font-weight: 500;
        --transition-speed: 0.5s;
        --border-radius: 15px;
        --main-padding: 10px;
        --font-size-large: 50px;
        --font-size-medium: 20px;
        --font-size-small: 10px;
    }

    body {
        height: 100%;
        width: 100%;
    }

    /*NavBar*/
    .navbar {
        background-color: white;
        top: 0;
        width: 100%;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
    }

    .wrapper{
        display: flex;
    }

    .brand{
        font-weight: 700; 
        font-size: var(--font-size-large);
        color: black;
        margin-right: 20px;
    }

    /*Searchbar*/
    .searchbar {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .bar {
        top: 20px;
        width: 60%;
        max-height: 60px;
        position: absolute;
        border: 0;
        padding: var(--main-padding);
        padding-left: 50px;
        z-index: 1;
        border-radius: var(--border-radius);
        background-image: url('assets/Icon/search.png');
        background-size: 20px;
        background-position: left 20px center;
        background-repeat: no-repeat;
        font-weight: var(--main-font-weight);
        transition: 0.5s ease-in-out;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
    }
    
    .nav-item {
        font-weight: var(--main-font-weight);
        color: black;
        font-size: var(--font-size-medium);
        text-decoration: none;
        transition: var(--transition-speed) ease-in-out;
        padding-left: 5px;
    }

    .nav-item:hover {
        color: white;
        background-color: var(--main-bg-color);
        border-radius: var(--border-radius);
        padding: 9px;
    }

    /*History*/
    .LayRecomended{
        display: grid;
        grid-template-columns: 50% 50%;
        gap: 10px 10px;
    }

    /*Panel*/
    .panel{
        justify-items: stretch;
        gap: 10px;
        display: grid;
        grid-template-columns: 1fr 1fr 1px;
        width: 100%;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        border-radius: var(--border-radius)
    }

    .wrapRecomended{
        width: 100%; 
        max-width: 290px;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        border-radius: var(--border-radius);
        min-height: 400px;
        padding-bottom: 15px;
    }
    .wrapImg{
        display: flex;
        justify-content: center;
    }
    .img{
        padding-right: 10px;
        padding-left: 10px;
        height: 200px;
    }
    .imgR {
        object-fit: cover;
        margin-top: 11px;
        height: 100%;
        width: 100%;
        border-radius: var(--border-radius);
    }
    .layHeader {
        max-width: 460px;
        width: 100%;
        padding-right: 20px;
        padding-left: 20px;
        margin-top: 5px;
        display: grid;
        grid-template-columns: 1fr auto; 
        align-items: start; 
        column-gap: 20px;
    }

    .titleR h3 {
        word-wrap: break-word;
        margin: 0;
        font-weight: 650;
    }

    .titleR p {
        padding-right: 20px;
        word-break:keep-all;
        margin: 0;
        font-size: var(--font-size-small);
        color: var(--main-text-color);
        font-weight: var(--main-font-weight);
    }

    .bookmarkButton {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .bookmarkButton .BMicon {
        width: 40px;
        height: 40px;
        margin-top: 5px;
    }

    .bookmarkButton:hover .BMicon{
        content: url(assets/Icon/bookmark-fill.png);
    }

    .layPrice{
        margin-top: 10px;
        padding-left: 20px;

    }
    .layPrice h5{
        margin: 0;
        font-weight: 700;
    }
    .layPrice p{
        padding-right: 20px;
        word-break:break-all;
        margin: 0;
        font-size: var(--font-size-small);
        color: var(--main-text-color);
        font-weight: var(--main-font-weight);
    }

    .layFooter{
        max-width: 460px;
        width: 100%;
        padding-right: 20px;
        padding-left: 20px;
        padding-left: 20px;
        display: grid;
        grid-template-columns: 1fr auto; 
        align-items: start; 
        column-gap: 20px;
    }

    .layFooter h5{
        margin: 0;
        margin-top: 10px;
        font-weight: 700;
    }

    .layFooter p{
        padding-right: 20px;
        word-break:break-all;
        margin: 0;
        font-size: var(--font-size-small);
        color: var(--main-text-color);
        font-weight: var(--main-font-weight);
    }

    .arrowrightButton {
        margin-top: 10px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .arrowrightButton .ARicon{
        width: 40px;
        height: 40px;
        transition: var(--transition-speed) ease-in-out;
    }

    .arrowrightButton:hover .ARicon{
        content: url('assets/Icon/arrow-right-square-fill.png');
        transition: var(--transition-speed) ease-in-out;
    }

    /*Detail*/
    .detail{
        font-family:Arial, Helvetica, sans-serif;
        font-weight: 450;
        padding-right: 5px;
        display: grid;
        grid-template-rows: 60px 50px 30px 30px 30px 30px 30px;
    }

    .iChecklist{
        height: 40px;
    }

    .row1{
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }

    .row2{
        display: flex;
        justify-content: center;
    }

    .row3{
        display: flex;
        justify-content: space-between;
        border-top: solid 1px;
        border-bottom: solid 1px;
    }

    .row4, .row5, .row6{
        display: flex;
        justify-content: space-between;
    }

    .row7{
        display: flex;
        justify-content: space-between;
        border-bottom: solid 1px;
    }

    /*Universal*/
    .link{
        text-decoration: none;
    }

    /*Reponsive*/
    @media screen and (max-width: 500px) {
        .panel{
            display: grid;
            grid-template-columns: 1fr;
        }
        .detail{
            padding-left: 10px;
            padding-right: 10px;
        }
    }
    @media screen and (max-width: 1000px) {
        .LayRecomended{
            display: grid;
            justify-content: center;
            grid-template-columns: 100%;
        }
    }

</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg mb-2">
            <div class="container">
                <div class="wrapper">
                    <a class="link" href="<?php echo base_url('main'); ?>"><h1 class="brand">Venture</h1></a>
                </div>
                <div class="LayoutItem">  
                    <a class="nav-item" href="<?php echo base_url("WishlistCon") ?>"><img src="" alt="">Wishlist</a>      
                    <a class="nav-item" href="<?php echo base_url("HistoryCon") ?>"><img src="" alt="">History</a>
                    <a class="nav-item" href="<?php echo base_url('ReservationCon'); ?>"><img src="" alt="">Reservation</a>
                    <a class="nav-item" href="<?php echo base_url('main/viewContact'); ?>"><img src="" alt="">Contact Us</a>
                    <a class="nav-item" href="<?php echo base_url("profile/")?>"><img src="" alt="">Profile</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="main container">
        <div class="LayRecomended">
            <?php foreach ($transactions as $transaction): ?>
                <div class="panel">
                    <div class="wrapRecomended">
                        <div class="wrapImg">
                            <figure class="img">
                                <img src="<?php echo base_url($transaction->gambar_1); ?>" alt="" class="imgR">                        
                            </figure>
                        </div>
                        <div class="layHeader">
                            <header class="titleR">
                                <h3>Paket <?= $transaction->ID_Paket ?></h3>
                                <h6>Deskripsi:</h6>
                                <p><?= $transaction->Catatan ?></p>
                            </header>
                        </div>
                        <div class="layPrice">
                            <h5 class="textPrice">Rp.<?php echo number_format($transaction->Harga, 2, ',', '.'); ?></h5>
                            <p>Starting Price</p>
                        </div>
                        <div class="layFooter">
                            <footer class="textFooter">
                                <h5><?= $transaction->Catatan ?></h5>
                                <p>Tanggal Update</p>
                            </footer>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="row1">
                            <img src="assets/Icon/check-circle-fill.png" alt="" class="iChecklist">
                        </div>
                        <div class="row2">
                            <h3>Status</h3>
                        </div>

                        <div class="row3">
                            <div class="idT">ID Transaksi</div>
                            <div class="ID"><?= $transaction->ID_Transaksi ?></div>
                        </div>
                        <div class="row4">
                            <div class="tNama">Nama</div>
                            <div class="Nama"><?= $transaction->Full_Name ?></div>
                        </div>
                        <div class="row5">
                            <div class="tTanggal">Tanggal</div>
                            <div class="Tanggal"><?= date('d-m-Y', strtotime($transaction->Tanggal_Transaksi)) ?></div>
                        </div>
                        <div class="row6">
                            <div class="tTotal">Waktu</div>
                            <div class="Total"><?= date('H:i', strtotime($transaction->Tanggal_Transaksi)) ?></div>
                        </div>          
                        <div class="layTotalPrice">
                            <h5 class="textTotalPrice">Total Price: Rp.<?php echo number_format($transaction->total_harga, 2, ',', '.'); ?></h5>
                        </div>
                        <div class="layTotalAdult">
                            <h5 class="textTotalAdult">Total Adults: <?php echo $transaction->total_adult; ?></h5>
                        </div>
                        
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <script>
        
    </script>
</body>
</html>