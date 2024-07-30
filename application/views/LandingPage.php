<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap-5.3.3-dist/css/bootstrap.css'); ?>">
    <title>Venture</title>
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
        --font-size-small: 15px;
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
        background-image: url(<?php echo base_url('assets/Icon/search.png')?>);
        background-size: 20px;
        background-position: left 20px center;
        background-repeat: no-repeat;
        font-weight: var(--main-font-weight);
        transition: 0.5s ease-in-out;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
    }

    /*Carousel*/
    .cImg{
        object-fit: cover;
        height: 450px;
        
    }

    /*Category styles*/
    .Category {
        margin-top: 25px;
    }

    .layCategory{
        display: flex;
        justify-content: space-evenly;
    }

    .wrapCategory {
        border: none;
        border-radius: var(--border-radius);
        display: inline-block;
        width: 300px;
        height: 200px;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        position: relative;
        overflow: hidden; 
        padding: 0;
        margin: 5px;
    }

    .imgC {
        object-fit: cover;
        height: 100%;
        width: 100%;
        border-radius: var(--border-radius);
        transition: transform 0.3s ease-in-out;
    }

    .imgC:hover{
        transform: scale(1.1); 
        transition: transform 0.3s ease-in-out; 
    }

    .wrapCategory .text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-weight:700;
        font-size: 30px; 
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
        z-index: 1;
    }
    
    .wrapCategory .imgR {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
    }

    /*Explore*/
    .Explore{
        margin-top: 25;
    }

    .LayExplore{
        display: grid;
        grid-template-columns: 25% 25% 25% 25% ;
        gap: 10px 10px;
    }
    .wrapExplore{
        width: 100%; 
        max-width: 320px;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        border-radius: var(--border-radius);
        min-height: 440px;
        padding-bottom: 15px;
    }
    .wrapImg{
        padding-right: 10px;
        padding-left: 10px;
        width: 100%;
        max-width: 360px;
        height: 200px;
        display: flex;
        justify-content: center;
    }
    .img{
        width: 330px;
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
        max-width: 360px;
        width: 100%;
        padding-right: 20px;
        padding-left: 20px;
        margin-top: 25px;
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
        word-break:keep-all;
        margin: 0;
        font-size: var(--font-size-small);
        color: var(--main-text-color);
        font-weight: var(--main-font-weight);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 200px; 
    }

    .bookmarkButton {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .bookmarkButton .BMicon {
        width: 45px;
        height: 45px;
        margin-top: 5px;
    }

    .bookmarkButton:hover .BMicon{
        content: url(<?php echo base_url('assets/Icon/bookmark-fill.png')?>);
    }

    .layPrice{
        margin-top: 10px;
        padding-left: 20px;

    }
    .layPrice h5{
        margin: 0;
    }
    .layPrice p{
        padding-right: 80px;
        word-break:break-all;
        margin: 0;
        font-size: var(--font-size-small);
        color: var(--main-text-color);
        font-weight: var(--main-font-weight);
    }

    .dtxt{
        margin-left: 10px;
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
    }

    .layFooter p{
        padding-right: 80px;
        word-break:break-all;
        margin: 0;
        font-size: var(--font-size-small);
        color: var(--main-text-color);
        font-weight: var(--main-font-weight);
    }

    .arrowrightButton {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .arrowrightButton .ARicon{
        width: 55px;
        height: 55px;
        transition: var(--transition-speed) ease-in-out;
    }

    .arrowrightButton:hover .ARicon{
        content: url(<?php echo base_url('assets/Icon/arrow-right-square-fill.png')?>);
        transition: var(--transition-speed) ease-in-out;
    }

    /*Recomended*/
    .Recomended{
        margin-top: 25px;
    }

    .LayRecomended{
        display: grid;
        grid-template-columns: 25% 25% 25% 25% ;
        gap: 10px 10px;
    }
    .wrapRecomended{
        width: 100%; 
        max-width: 320px;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        border-radius: var(--border-radius);
        min-height: 440px;
        padding-bottom: 15px;
    }

    /*rPlace styles*/
    .Place {
        margin-top: 25px;
    }

    .layPlace {
        overflow: auto;
        white-space: nowrap;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .layPlace::-webkit-scrollbar {
        display: none;
    }

    .wrapPlace {
        border-radius: var(--border-radius);
        display: inline-block;
        width: 191px;
        height: 250px;
        margin: 10px;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        position: relative;
        overflow: hidden; 
        padding: 0;
        margin: 5px;
    }

    .wrapPlace .text {
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-weight:700;
        font-size: 30px; 
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
        z-index: 1;
    }
    
    .result{
        display: grid;
        grid-template-columns: 25% 25% 25% 25% ;
        gap: 10px 10px;
    }
    
    /*Universal*/
    .section p{
        padding-right: 200px;
        color: var(--main-text-color);
        font-weight: var(--main-font-weight);
    }

    section h1{
        font-weight: 700;
        margin: 0;
        margin-bottom: 0;
        
    }

    .link{
        text-decoration: none;
    }

    .time{
        display: flex;
    }

    @media screen and (max-width: 900px) {
        .LayExplore{
            display: grid;
            justify-content: center;
            grid-template-columns: 50% 50%;
            gap: 10px 10px;
        }
        .LayRecomended{
            display: grid;
            justify-content: center;
            grid-template-columns: 50% 50%;
            gap: 10px 10px;
        }
        .Result{
            display: grid;
            justify-content: center;
            grid-template-columns: 50% 50%;
            gap: 10px 10px;
        }
    }
    @media screen and (max-width: 1150px) {
        .LayExplore{
            display: grid;
            justify-content: center;
            grid-template-columns: 33% 33% 33%;
            gap: 10px 10px;
        }
        .LayRecomended{
            display: grid;
            justify-content: center;
            grid-template-columns: 33% 33% 33%;
            gap: 10px 10px;
        }
        .Result{
            display: grid;
            justify-content: center;
            grid-template-columns: 33% 33% 33%;
            gap: 10px 10px;
        }
    }
    @media screen and (max-width: 850px) {
        .LayExplore{
            display: grid;
            justify-content: center;
            grid-template-columns: 50% 50%;
            gap: 10px 10px;
        }
        .LayRecomended{
            display: grid;
            justify-content: center;
            grid-template-columns: 50% 50%;
            gap: 10px 10px;
        }
        .Result{
            display: grid;
            justify-content: center;
            grid-template-columns: 50% 50%;
            gap: 10px 10px;
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
                <a class="nav-item" href="<?php echo base_url('WishlistCon') ?>"><img src="" alt="">Wishlist</a>      
                    <a class="nav-item" href="<?php echo base_url('HistoryCon') ?>"><img src="" alt="">History</a>
                    <a class="nav-item" href="<?php echo base_url('ReservationCon'); ?>"><img src="" alt="">Reservation</a>
                    <a class="nav-item" href="<?php echo base_url('main/viewContact') ?>"><img src="" alt="">Contact Us</a>
                    <a class="nav-item" href="<?php echo base_url('Profile') ?>"><img src="" alt="">Profile</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="carouselExampleInterval" class="container carousel slide" data-bs-ride="carousel">
            <div class="wrapC carousel-inner" style="border-radius: var(--border-radius);">
                <form class="searchbar" id="searchForm">
                    <input class="bar" type="search" id="searchBar" placeholder="Search" aria-label="Search">
                </form>

            <div id="sResult"></div> <!-- View untuk menampilkan hasil pencarian -->

                <div class="carousel-item active" data-bs-interval="1000">
                    <a href="#"><img src="<?php echo base_url('assets/Image/31d037cebdaf4a318b586751e3dc1d397482fd3f.jpg'); ?>" class="cImg d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="<?php echo base_url('assets/Image/6435b6b4474dcbc990237c91c45f8d90868948c4.jpg'); ?>" class="cImg d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <img src="<?php echo base_url('assets/Image/8c0b5f0914c97c30c94a9cbe3d257f2e3583fc6c.jpg'); ?>" class="cImg d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>

        <section class="container panel">
            <article class="Category">
                <header>
                    <h1 class="textCategory">Category</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </header>
                <div class="layCategory">
                    <a href="#" class="wrapCategory" data-category="Culture">
                        <div class="text">Culture</div>                               
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                    <a href="#" class="wrapCategory" data-category="Entertainment">
                        <div class="text">Entertainment</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                    <a href="#" class="wrapCategory" data-category="Food">
                        <div class="text">Food</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                    <a href="#" class="wrapCategory" data-category="Nature">
                        <div class="text">Nature</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                </div>
            </article>
                
            <article class="Explore">
                <header>
                    <h1 class="textExplore">Explore</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </header>
                <div class="LayExplore">
                    <?php foreach ($paket_wisata as $key): ?>
                        <div class="wrapExplore" data-package-name="<?php echo strtolower($key['Nama_Paket']); ?>">
                        <div class="wrapImg">
                            <figure class="img">
                                <img src="<?php echo $key['gambar_1']; ?>" alt="" class="imgR">
                            </figure>
                        </div>
                        <div class="layHeader">
                            <header class="titleR">
                                <h3><?php echo $key['Nama_Paket']; ?></h3>
                                <p><?php echo $key['Lokasi']; ?></p>
                                <p><?php echo $key['Deskripsi'];?></p>
                            </header>
                            <button class="bookmarkButton" id="addWishlistButton<?php echo $key['ID_Paket']; ?>" onclick="addToWishlist('<?php echo $key['Nama_Paket']; ?>', 'addWishlistButton<?php echo $key['ID_Paket']; ?>')">
                                <img src="<?php echo base_url('assets/Icon/bookmark.png'); ?>" alt="Bookmark" class="BMicon">
                            </button>
                        </div>
                        <div class="layPrice">
                            <h5 class="textPrice">Rp.<?php echo number_format($key['Harga'], 2, ',', '.'); ?></h5>
                            <p>Starting Price</p>
                        </div>
                        <div class="layFooter">
                            <footer class="textFooter">
                                <h5><?php echo $key['Waktu_Tour'];?> Days</h5>
                                <p><?php echo $key['Kategori'];?></p>
                            </footer>
                            <a href="<?php echo base_url('ContentCon/detail/' .$key['ID_Paket']); ?>" class="arrowrightButton">
                                <img src="<?php echo base_url('assets/Icon/arrow-right-square.png'); ?>" alt="" class="ARicon">
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </article>
            
            <article class="Recomended">
                <header>
                    <h1 class="textRecomended">Recomended</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </header>
                <div class="LayRecomended">
                    <?php foreach ($paket_wisata as $key): ?>
                        <div class="wrapRecomended" data-package-name="<?php echo strtolower($key['Nama_Paket']); ?>">                        <div class="wrapImg">
                            <figure class="img">
                                <img src="<?php echo $key['gambar_1']; ?>" alt="" class="imgR">
                            </figure>
                        </div>
                        <div class="layHeader">
                            <header class="titleR">
                                <h3><?php echo $key['Nama_Paket']; ?></h3>
                                <p><?php echo $key['Lokasi']; ?></p>
                                <p><?php echo $key['Deskripsi']; ?></p>
                            </header>
                            <button class="bookmarkButton" id="addWishlistButton<?php echo $key['ID_Paket']; ?>" onclick="addToWishlist('<?php echo $key['Nama_Paket']; ?>', 'addWishlistButton<?php echo $key['ID_Paket']; ?>')">
                                <img src="<?php echo base_url('assets/Icon/bookmark.png'); ?>" alt="Bookmark" class="BMicon">
                            </button>
                        </div>
                        <div class="layPrice">
                            <h5 class="textPrice">Rp.<?php echo number_format($key['Harga'], 2, ',', '.'); ?></h5>
                            <p>Starting Price</p>
                        </div>
                        <div class="layFooter">
                            <footer class="textFooter">
                                <div class="time">
                                    <h5><?php echo $key['Waktu_Tour']; ?> Days</h5>
                                </div>
                                <p><?php echo $key['Kategori']; ?></p>
                            </footer>
                            <a href="<?php echo base_url('ContentCon/detail/' .$key['ID_Paket']); ?>" class="arrowrightButton">
                                <img src="<?php echo base_url('assets/Icon/arrow-right-square.png'); ?>" alt="" class="ARicon">
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </article>

            <article class="Place">
                <header>
                    <h1 class="txtrPlace">Discover Place</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </header>
                <div class="layPlace">
                    <a href="#" class="wrapPlace" data-Place="Badung">
                        <div class="text">Badung</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                    <a href="#" class="wrapPlace" data-Place="Bangli">
                        <div class="text">Bangli</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                    <a href="#" class="wrapPlace" data-Place="Buleleng">
                        <div class="text">Buleleng</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                    <a href="#" class="wrapPlace" data-Place="Gianyar">
                        <div class="text">Gianyar</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                    <a href="#" class="wrapPlace" data-Place="Jembrana">
                        <div class="text">Jembrana</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                    <a href="#" class="wrapPlace" data-Place="Karangasem">
                        <div class="text">Karangasem</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                    <a href="#" class="wrapPlace" data-Place="Klungkung">
                        <div class="text">Klungkung</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                    <a href="#" class="wrapPlace" data-Place="Tabanan">
                        <div class="text">Tabanan</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                    <a href="#" class="wrapPlace" data-Place="Denpasar">
                        <div class="text">Denpasar</div>
                        <img src="<?php echo base_url('assets/Image/village.jpg'); ?>" alt="" class="imgC">
                    </a>
                </div>
                <div class="Result">
                    
                </div>
            </article>
        </section>
        <div id="searchOverlay" class="search-overlay">
        <div id="searchResults" class="results"></div>
    </div>
    </main>
    <footer>
        <div class="container text-center">
            <p>&copy; 2024 Venture. All rights reserved.</p>
        </div>
    </footer>
    <script src="<?php echo base_url('assets\bootstrap-5.3.3-dist\js\bootstrap.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        document.addEventListener('DOMContentLoaded', () => {
            const layCategory = document.querySelector('.layPlace');

            layCategory.addEventListener('wheel', (event) => {
                event.preventDefault();
                layCategory.scrollLeft += event.deltaY; 
            });
        });

        function addToWishlist(productName, buttonId) {
            $.ajax({
                url: '<?php echo base_url('WishlistCon/add'); ?>',
                type: 'POST',
                data: { productName: productName },
                success: function(response) {
                    alert('Produk berhasil ditambahkan ke wishlist');
                    document.getElementById(buttonId).style.filter = 'black';
                    document.getElementById(buttonId).getElementsByTagName('img')[0].src = '<?php echo base_url('assets/Icon/bookmark-fill.png'); ?>';
                },
                error: function() {
                    alert('Error menambahkan produk ke wishlist');
                }
            });
        }
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const query = document.getElementById('searchBar').value.toLowerCase();
        const url = '<?php echo base_url('main/viewResult'); ?>' + '?query=' + encodeURIComponent(query);
        window.location.href = url;
        });

        document.getElementById('searchOverlay').addEventListener('click', function(event) {
            if (event.target.id === 'searchOverlay') {
                this.style.display = 'none';
            }
        });
    </script>
    <script>
        function loadPaketByCategory(category) {
    $.ajax({
        url: '<?php echo base_url('main/getPaketByCategory'); ?>',
        type: 'POST',
        data: { category: category },
        success: function(response) {
            try {
                const paketWisata = JSON.parse(response);
                const recomendedContainer = document.querySelector('.LayExplore');
                recomendedContainer.innerHTML = '';
                paketWisata.forEach(function(paket) {
                    const paketHtml = `
                        <div class="wrapRecomended" data-package-name="${paket.Nama_Paket.toLowerCase()}">
                            <div class="wrapImg">
                                <figure class="img">
                                    <img src="<?php echo base_url(); ?>${paket.gambar_1}" alt="${paket.Nama_Paket}" class="imgR">
                                </figure>
                            </div>
                            <div class="layHeader">
                                <header class="titleR">
                                    <h3>${paket.Nama_Paket}</h3>
                                    <p>${paket.Lokasi}</p>
                                    <p>${paket.Deskripsi}</p>
                                </header>
                                <button class="bookmarkButton" id="addWishlistButton${paket.ID_Paket}" onclick="addToWishlist('${paket.Nama_Paket}', 'addWishlistButton${paket.ID_Paket}')">
                                    <img src="<?php echo base_url('assets/Icon/bookmark.png'); ?>" alt="Bookmark" class="BMicon">
                                </button>
                            </div>
                            <div class="layPrice">
                                <h5 class="textPrice">Rp.${parseInt(paket.Harga).toLocaleString('id-ID', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</h5>
                                <p>Starting Price</p>
                            </div>
                            <div class="layFooter">
                                <footer class="textFooter">
                                    <div class="time">
                                        <h5>${paket.Waktu_Tour}</h5>
                                        <h5 class="dtxt">Days</h5>
                                    </div>
                                    <p>${paket.Kategori}</p>
                                </footer>
                                <a href="<?php echo base_url('main/viewContent'); ?>" class="arrowrightButton">
                                    <img src="<?php echo base_url('assets/Icon/arrow-right-square.png'); ?>" alt="" class="ARicon">
                                </a>
                            </div>
                        </div>`;
                    recomendedContainer.innerHTML += paketHtml;
                });
            } catch (error) {
                console.error('Error parsing JSON:', error);
                alert('Error loading packages');
            }
        },
        error: function() {
            alert('Error loading packages');
        }
    });
}
        document.querySelectorAll('.wrapCategory').forEach(function(categoryLink) {
            categoryLink.addEventListener('click', function(event) {
                event.preventDefault();
                const category = this.getAttribute('data-category');
                loadPaketByCategory(category);
            });
        });
    </script>
    <script>
        function loadPaketByPlace(Place) {
            $.ajax({
                url: '<?php echo base_url('main/getPaketByPlace'); ?>',
                type: 'POST',
                data: { Place: Place },
                success: function(response) {
                    try {
                        const paketWisata = JSON.parse(response);
                        const recomendedContainer = document.querySelector('.Result');
                        recomendedContainer.innerHTML = '';

                        paketWisata.forEach(function(paket) {
                            const paketHtml = `
                                <div class="wrapRecomended" data-package-name="${paket.Nama_Paket.toLowerCase()}">
                                    <div class="wrapImg">
                                        <figure class="img">
                                            <img src="${paket.gambar_1}" alt="" class="imgR">
                                        </figure>
                                    </div>
                                    <div class="layHeader">
                                        <header class="titleR">
                                            <h3>${paket.Nama_Paket}</h3>
                                            <p>${paket.Lokasi}</p>
                                            <p>${paket.Deskripsi}</p>
                                        </header>
                                        <button class="bookmarkButton" id="addWishlistButton${paket.ID_Paket}" onclick="addToWishlist('${paket.Nama_Paket}', 'addWishlistButton${paket.ID_Paket}')">
                                            <img src="<?php echo base_url('assets/Icon/bookmark.png'); ?>" alt="Bookmark" class="BMicon">
                                        </button>
                                    </div>
                                    <div class="layPrice">
                                        <h5 class="textPrice">Rp.${parseInt(paket.Harga).toLocaleString('id-ID', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</h5>
                                        <p>Starting Price</p>
                                    </div>
                                    <div class="layFooter">
                                        <footer class="textFooter">
                                            <div class="time">
                                                <h5>${paket.Waktu_Tour}</h5>
                                                <h5 class="dtxt">Days</h5>
                                            </div>
                                            <p>${paket.Kategori}</p>
                                        </footer>
                                        <a href="<?php echo base_url('main/viewContent'); ?>" class="arrowrightButton">
                                            <img src="<?php echo base_url('assets/Icon/arrow-right-square.png'); ?>" alt="" class="ARicon">
                                        </a>
                                    </div>
                                </div>`;
                            recomendedContainer.innerHTML += paketHtml;
                        });
                    } catch (error) {
                        console.error('Error parsing JSON:', error);
                        alert('Error loading packages');
                    }
                },
                error: function() {
                    alert('Error loading packages');
                }
            });
        }

        document.querySelectorAll('.wrapPlace').forEach(function(placeLink) {
            placeLink.addEventListener('click', function(event) {
                event.preventDefault();
                const place = this.getAttribute('data-place');
                loadPaketByPlace(place);
            });
        });
    </script>
</body>
</html>