<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap-5.3.3-dist/css/bootstrap.css'); ?>">
    <title><?php echo $paket->Nama_Paket; ?></title>
    <style>
        body {
            height: 100%;
            width: 100%;
        }

        /*NavBar*/
        .Brand {
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

        .nav-item:hover, .nav-item-profile:hover {
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
            background-image: url('<?php echo base_url('assets/Icon/search.png'); ?>');
            background-size: 20px;
            background-position: left 20px center;
            background-repeat: no-repeat;
            z-index: 1;
            font-weight: 500;
            transition: 0.5s ease-in-out;
            box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        }

        .bar:focus-within {
            transition: 0.5 ease-in-out;
            max-width: 250px;
        }

        .section1 {
            display: flex;
            gap: 0px 5px;
        }

        .section1 button {
            border: 0;
            padding: 0;
            overflow: hidden;
        }

        .tImg1, .tImg2, .tImg3 {
            box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
            object-fit: cover;
            width: 100%;
            height: 430px;
            transition: transform 0.3s ease-in-out;
        }

        .tImg1:hover, .tImg2:hover, .tImg3:hover {
            transform: scale(1.1); 
            transition: transform 0.3s ease-in-out; 
        }

        /*Overview*/
        .layOverview {
            width: 100%;
            display: grid;
            grid-template-columns: 4fr 2fr;
            gap: 0px 5px;
        }

        .overview h2 {
            margin: 0;
            font-weight: 700; 
            font-size: 30px;
            color: black;
            word-break: break-all;
            padding-right: 30px;
        }

        .overview h6 {
            font-weight: 500; 
            font-size: 15px;
            color: gray;
            word-break: break-all;
            padding-right: 30px;
        }

        .panel {
            max-width: 470px;
            margin-top: 10px;
            border-radius: 20px;
            min-height: 300px;
            background-color: rgb(190, 190, 190);
            display: grid;
            grid-template-rows: 5fr 1.2fr;
            box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        }

        .laybtn {
            display: flex;
            justify-content: end;
            padding-left: 10px;
            padding-right: 10px;
        }

        .order {
            border-radius: 15px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            width: 100%;
            max-width: 100px;
            height: 50px;
            background-color: white;
            font-weight: 600;
            font-size: 20px;
            transition: 0.3s ease-in-out;
            box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        }

        .order:hover {
            background-color: black;
            color: white;
            transition: 0.3s ease-in-out;
        }

        /*Universal*/
        .link {
            text-decoration: none;
        }

        .p {
            color: gray;
            font-weight: 500;
        }

        /*Responsive*/
        @media (max-width: 700px) {
            .section1 {
                width: 100%;
            }
            .layOverview {
                grid-template-columns: 1fr;
            }
            .panel {
                margin-top: -5px;
                width: 100%;
                max-width: none;
                margin-bottom: 10px;
            }
            .laybtn {
                justify-content: center;
            }
            .order {
                position: fixed;
                bottom: 0;
                left: 0; 
                width: 100%; 
                max-width: none; 
                background-color: #FFF; 
                box-shadow: 0 -2px 10px rgba(0,0,0,0.1); 
                z-index: 1000;
                border-radius: 10px 10px 0px 0px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg mb-2">
            <div class="container">
                <a class="link" href="<?php echo base_url(); ?>"><h1 class="Brand">Venture</h1></a> 
                <div class="LayoutItem">  
                    <a class="nav-item" href="<?php echo base_url('wishlist'); ?>"><img src="" alt="">Wishlist</a>      
                    <a class="nav-item" href="<?php echo base_url('history'); ?>"><img src="" alt="">History</a>
                    <a class="nav-item" href="<?php echo base_url('contact'); ?>"><img src="" alt="">Contact Us</a>
                    <a class="nav-item-profile" href="<?php echo base_url('profile'); ?>"><img src="" alt="">Profile</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container mb-2">
            <form action="" class="searchbar">
                <input type="text" class="bar" placeholder="Find Your Happiness">
            </form>
            <div class="section1">
                <button onclick="openModal('<?php echo base_url('assets/Image/31d037cebdaf4a318b586751e3dc1d397482fd3f.jpg'); ?>')">
                    <img src="<?php echo base_url('assets/Image/31d037cebdaf4a318b586751e3dc1d397482fd3f.jpg'); ?>" alt="" class="tImg1">
                </button>
                <button onclick="openModal('<?php echo base_url('assets/Image/8c0b5f0914c97c30c94a9cbe3d257f2e3583fc6c.jpg'); ?>')">
                    <img src="<?php echo base_url('assets/Image/8c0b5f0914c97c30c94a9cbe3d257f2e3583fc6c.jpg'); ?>" alt="" class="tImg2">
                </button>
                <button onclick="openModal('<?php echo base_url('assets/Image/e742e0ad10409b7065e565dfb95a9046e55205c0.jpg'); ?>')">
                    <img src="<?php echo base_url('assets/Image/e742e0ad10409b7065e565dfb95a9046e55205c0.jpg'); ?>" alt="" class="tImg3">
                </button>
            </div>
        </section>
        <section class="layOverview container">
            <div class="overview">
                <h2><?php echo $paket->Nama_Paket; ?></h2>
                <h6><?php echo $paket->Lokasi; ?></h6>
                <p class="p"><?php echo $paket->Deskripsi; ?></p>
            </div>
            <div class="panel">
                <div class="highlight">
                    <!-- Konten highlight lainnya -->
                </div>
                <div class="laybtn">
                    <button class="order">Order</button>
                </div>
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
    </script>
</body>
</html>
