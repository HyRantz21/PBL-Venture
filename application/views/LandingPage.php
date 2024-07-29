<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap-5.3.3-dist/css/bootstrap.css'); ?>">
    <title>Document</title>
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

    .layCategory {
        overflow: auto;
        white-space: nowrap;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .layCategory::-webkit-scrollbar {
        display: none;
    }

    .wrapCategory {
        border-radius: var(--border-radius);
        display: inline-block;
        width: 300px;
        height: 200px;
        margin: 10px;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
    }

    /*Explore*/
    .Explore{
        margin-top: 25;
    }

    .LayExplore{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
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
        grid-template-columns: 1fr 1fr 1fr;
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
    .rPlace {
        margin-top: 25px;
    }

    .layrPlace {
        overflow: auto;
        white-space: nowrap;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .layrPlace::-webkit-scrollbar {
        display: none;
    }

    .wraprPlace {
        border-radius: var(--border-radius);
        display: inline-block;
        width: 191px;
        height: 250px;
        margin: 10px;
        box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
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
                <div class="carousel-item active" data-bs-interval="10000">
                    <a href="#"><img src="<?php echo base_url('assets/Image/31d037cebdaf4a318b586751e3dc1d397482fd3f.jpg'); ?>" class="cImg d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo base_url('assets/Image/6435b6b4474dcbc990237c91c45f8d90868948c4.jpg'); ?>" class="cImg d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
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
                    <a href="" class="wrapCategory"></a>
                    <a href="" class="wrapCategory"></a>
                    <a href="" class="wrapCategory"></a>
                    <a href="" class="wrapCategory"></a>
                    <a href="" class="wrapCategory"></a>
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
                                <img src="<?php echo base_url('assets/Image/ea545f3990f88524a9472220454ab63bedc0b6aa.jpg'); ?>" alt="" class="imgR">
                            </figure>
                        </div>
                        <div class="layHeader">
                            <header class="titleR">
                                <h3><?php echo $key['Nama_Paket']; ?></h3>
                                <p><?php echo $key['Lokasi']; ?></p>
                                <p><?php echo $key['Deskripsi']?></p>
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
                                <h5><?php echo $key['Waktu_Tour'];?>Days</h5>
                                <p><?php echo $key['Kategori'];?></p>
                            </footer>
                            <a href="<?php echo base_url('main/viewContent'); ?>" class="arrowrightButton">
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
                        <div class="wrapRecomended" data-package-name="<?php echo strtolower($key['Nama_Paket']); ?>">
                        <div class="wrapImg">
                            <figure class="img">
                                <img src="<?php echo base_url('assets/Image/ea545f3990f88524a9472220454ab63bedc0b6aa.jpg'); ?>" alt="" class="imgR">
                            </figure>
                        </div>
                        <div class="layHeader">
                            <header class="titleR">
                                <h3><?php echo $key['Nama_Paket']; ?></h3>
                                <p><?php echo $key['Lokasi']; ?></p>
                                <p><?php echo $key['Deskripsi']?></p>
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
                                    <h5><?php echo $key['Waktu_Tour'];?></h5>
                                    <h5 class="dtxt">Days</h5>
                                </div>
                                <p><?php echo $key['Kategori']; ?></p>
                            </footer>
                            <a href="<?php echo base_url('main/viewContent'); ?>" class="arrowrightButton">
                                <img src="<?php echo base_url('assets/Icon/arrow-right-square.png'); ?>" alt="" class="ARicon">
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </article>

            <article class="rPlace">
                <header>
                    <h1 class="txtrPlace">Discover Place</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </header>
                <div class="layrPlace">
                    <a href="" class="wraprPlace"></a>
                    <a href="" class="wraprPlace"></a>
                    <a href="" class="wraprPlace"></a>
                    <a href="" class="wraprPlace"></a>
                    <a href="" class="wraprPlace"></a>
                    <a href="" class="wraprPlace"></a>
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
            const layCategory = document.querySelector('.layCategory');

            layCategory.addEventListener('wheel', (event) => {
                event.preventDefault();
                layCategory.scrollLeft += event.deltaY; 
            });
        });

        function addToWishlist(productName, buttonId) {
            $.ajax({
                url: '<?php echo base_url('wishlist/add'); ?>',
                type: 'POST',
                data: { productName: productName },
                success: function(response) {
                    alert('Produk berhasil ditambahkan ke wishlist');
                    document.getElementById(buttonId).style.backgroundColor = 'black';
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
            const results = [];
            document.querySelectorAll('.wrapRecomended').forEach(function(packageDiv) {
                if (packageDiv.dataset.packageName.includes(query)) {
                    results.push(packageDiv.outerHTML);
                }
            });

            document.getElementById('searchResults').innerHTML = results.join('');
            document.getElementById('searchOverlay').style.display = 'flex';
        });

        document.getElementById('searchOverlay').addEventListener('click', function(event) {
            if (event.target.id === 'searchOverlay') {
                this.style.display = 'none';
            }
        });
    </script>
</body>
</html>