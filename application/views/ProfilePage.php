<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Personal Information</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #cfcfcf;
        }

        .Brand{
            font-weight: 700; 
            font-size: 50px;
            color: black;
            word-break: break-all;
            padding-right: 30px;
        }

        nav{
            background-color: #ffffff;
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


        .container {
            display: grid;
            grid-template-columns: 0.25fr 1fr;
            height: 100%;
        }

        .sidebar {
            height: 100%;
            background-color: rgba(75, 75, 75, 25);
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            padding: 50px;
        }

        .profile {
            text-align: center;
            color: #fff;
        }

        .main-content {
            padding: 40px;
            background-color: #fff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="date"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .phone-input {
            display: flex;
            gap: 10px;
        }

        .phone-input input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .gender-options {
            display: flex;
            gap: 20px;
        }

        .gender-options label {
            display: flex;
            align-items: center;
        }

        .gender-options input[type="radio"] {
            margin-right: 5px;
        }

        .form-actions {
            display: flex;
            gap: 10px;
        }

        .save-btn,
        .cancel-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .save-btn {
            background-color: #007bff;
            color: #fff;
        }

        .cancel-btn {
            background-color: #6c757d;
            color: #fff;
        }
        .link{
            text-decoration: none;
        }

        .p{
            color: gray;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-2">
        <div class="container">
            <a class="link" href="<?php echo base_url('main'); ?>"><h1 class="Brand">Venture</h1></a> 
            <div class="LayoutItem">  
                <a class="nav-item" href="<?php echo base_url("WishlistCon")?>"><img src="" alt="">Wishlist</a>      
                <a class="nav-item" href="<?php echo base_url("HistoryCon")?>"><img src="" alt="">History</a>
                <a class="nav-item" href="<?php echo base_url('ReservationCon'); ?>"><img src="" alt="">Reservation</a>
                <a class="nav-item" href="<?php echo base_url('main/viewContact'); ?>"><img src="" alt="">Contact Us</a>
                <a class="nav-item-profile" href="<?php echo base_url("profile/")?>"><img src="" alt="">Profile</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <h2><?php echo $this->session->userdata('Full_Name'); ?></h2>
            </div>
        </div>
        <div class="main-content">
            <h1>Personal Information</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <form action="<?php echo base_url('profile/editprofile/'); ?>" method="post">
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" value="<?php echo $this->session->userdata('Full_Name'); ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $this->session->userdata('Email'); ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <div class="phone-input">
                        <input type="text" id="phone" name="phone" value="<?php echo (isset($profile->phone)) ? $profile->phone : ''; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="<?php echo (isset($profile->dob)) ? $profile->dob : ''; ?>">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <div class="gender-options">
                        <label>
                            <input type="radio" name="gender" value="male" <?php echo (isset($profile->gender) && $profile->gender == 'male') ? 'checked' : ''; ?>>
                            <span>Male</span>
                        </label>
                        <label>
                            <input type="radio" name="gender" value="female" <?php echo (isset($profile->gender) && $profile->gender == 'female') ? 'checked' : ''; ?>>
                            <span>Female</span>
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="save-btn">Save</button>
                    <a class="cancel-btn" href="<?php echo base_url("auth/logout"); ?>">Log out</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
