<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Venture Travel</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Tambahkan ini -->
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

    /* NavBar */
    .navbar {
        background-color: white;
        top: 0;
        width: 100%;
    }

    .wrapper {
        display: flex;
    }

    .brand {
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
        padding-left: 10px;
    }

    .nav-item:hover {
        color: white;
        background-color: var(--main-bg-color);
        border-radius: var(--border-radius);
        padding: 10px;
    }

    .main {
        display: grid;
        grid-template-columns: 1fr 1fr;
        flex-grow: 1;
    }
    .link {
        text-decoration: none;
    }
    .body {
        background-color: #f0f8ff;
        font-family: Arial, sans-serif;
    }
    .section {
        margin: 20px;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }
    .section h1, .section h2 {
        font-family: 'Arial', sans-serif;
        font-weight: bold;
        color: #333;
    }
    .section p {
        font-family: 'Arial', sans-serif;
        color: #555;
        line-height: 1.6;
    }
    .section img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 20px;
    }
    .contact-info {
        display: flex;
        align-items: center;
        font-family: 'Arial', sans-serif;
        color: #555;
        margin-bottom: -10px;
    }
    .contact-info i {
        margin-right: 10px;
        margin-bottom: 20px;
    }
    .img{
        width: 10px;
    }
    .m1{
        margin-top:20px
    }
</style>
</head>
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
        </nav>`
    </header>
    <div class="m1 container">
        <main>
            <div class="section">
                <img class="img" src="<?php echo base_url('assets/Image/contact_us.jpg'); ?>" alt="Contact Us">
                <h1>Contact Us</h1>
                <div class="contact-info">
                    <i class="fas fa-envelope"></i>
                    <p>VentureTravelAgent1@gmail.com</p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-phone-alt"></i>
                    <p>+62 (123) 456-7890</p>
                </div>
                <p>Feel free to contact us and we will get back to you as soon as we can.</p>
            </div>
            <div class="section">
                <img src="<?php echo base_url('assets/Image/about_us.jpg'); ?>" alt="About Us">
                <h1>About Us</h1>
                <p>Welcome to Venture Travel, where your journey is our passion! At Venture Travel, we believe that travel is more than just visiting new places. It's about experiencing the world in a way that transforms you. Founded by avid explorers with a deep love for adventure, we specialize in crafting unique, personalized travel experiences that go beyond the ordinary.</p>
            </div>
            <div class="section">
                <img src="<?php echo base_url('assets/Image/our_mission.jpg'); ?>" alt="Our Mission">
                <h1>Our Mission</h1>
                <p>Our mission is to inspire and empower you to explore the world, embrace new cultures, and create unforgettable memories. We are dedicated to providing exceptional service, expert guidance, and tailored itineraries that cater to your specific interests and needs.</p>
            </div>
            <div class="section">
                <img src="<?php echo base_url('assets/Image/why_us.jpg'); ?>" alt="Why Us?">
                <h1>Why Us?</h1>
                <p>Adventure and Authenticity: We specialize in adventure travel, offering a wide range of activities such as hiking, scuba diving, wildlife safaris, cultural immersions, and more. Whether you seek adrenaline-pumping thrills or serene retreats, we provide authentic experiences that connect you with the heart of each destination.</p>
                <p>Sustainable Travel: We are committed to responsible and sustainable travel practices. By partnering with local communities and eco-friendly accommodations, we ensure that your travels have a positive impact on the environment and the people you meet along the way.</p>
            </div>
            <div class="section">
                <img src="<?php echo base_url('assets/Image/join_us.jpg'); ?>" alt="Join Us">
                <h1>Join Us</h1>
                <p>Let Venture Travel be your guide to the world. Whether you're dreaming of exploring ancient ruins, diving into crystal-clear waters, or embarking on a culinary journey, we are here to make it happen. Join us, and let's turn your travel dreams into reality.</p>
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
