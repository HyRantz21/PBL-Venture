<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        gap: 10px 10px;
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
        margin-top: 15px;
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
    .layPrice h6{
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
        margin-top: 20px;
        padding-right: 20px;
        padding-left: 20px;
        display: grid;
        grid-template-columns: 1fr auto; 
        align-items: start; 
        column-gap: 20px;
    }

    .layFooter h4{
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
        cursor: button;
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
    
    /*Universal*/
    .link{
        text-decoration: none;
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
                    <a class="nav-item" href="#"><img src="" alt="">Contact Us</a>
                    <a class="nav-item" href="<?php echo base_url("profile/")?>"><img src="" alt="">Profile</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="LayRecomended">
            <?php foreach ($wishlist as $item): ?>
                <div class="wrapRecomended">
                    <div class="wrapImg">
                        <figure class="img">
                            <img src="<?php echo base_url($item['gambar_1']); ?>" alt="" class="imgR">
                        </figure>
                    </div>
                    <div class="layHeader">
                        <header class="titleR">
                            <h3><?= $item['Nama_Paket']; ?></h3>
                            <p><?= $item['Deskripsi']; ?></p>
                        </header>
                        <form action="http://localhost/PBL-Venture/WishlistCon/remove" method="post">
                            <input type="hidden" name="ID_Paket" value="<?= $item['ID_Paket']; ?>">
                            <button type="submit" class="bookmarkButton">
                                <img src="assets/Icon/bookmark-fill.png" alt="Bookmark" class="BMicon">
                            </button>
                        </form>
                    </div>
                    <div class="layPrice">
                        <h6 class="textPrice">Rp.<?= number_format($item['Harga'], 0, ',', '.'); ?></h6>
                        <p>Starting Price</p>
                    </div>
                    <div class="layFooter">
                        <footer class="textFooter">
                            <h4><?= $item['Waktu_Tour']; ?> Days</h4>
                            <p><?= $item['Lokasi']; ?></p>
                        </footer>
                        <a href="<?php echo base_url('ContentCon'); ?>" class="arrowrightButton">
                            <img src="<?php echo base_url('assets/Icon/arrow-right-square.png'); ?>" alt="" class="ARicon">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <script>
        function removeFromWishlist(packageID) {
            $.ajax({
                url: 'http://localhost/PBL-Venture/WishlistCon/remove',
                type: 'POST',
                data: { packageID: packageID },
                success: function(response) {
                    alert(response);
                    location.reload();
                },
                error: function() {
                    alert('Error menghapus produk dari wishlist');
                }
            });
        }
    </script>
</body>
</html>