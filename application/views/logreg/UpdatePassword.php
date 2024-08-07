<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>Forgot Password</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .background {
            height: 100%;
        }
        .layout {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .col1 {
            background-color: white;
            max-height: 700px;
            max-width: 550px;
            margin-left: 100px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
        }
        .img {
            height: 620px;
            width: 100%;
            margin: 10px;
            object-fit: cover;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
        }
        .col2 {
            background-color: white;
            height: 640px;
            max-width: 570px;
            margin-right: 100px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.5);
        }
        .h1 {
            display: flex;
            justify-content: center;
            font-weight: 650;
            font-size: 250%;
            margin-bottom: 20px;
        }
        h6 {
            font-weight: 400;
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        input[type=email], input[type=password], select {
            width: 320px;
            padding: 10px;
            margin: 5px 0px;
            display: inline-block;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }
        .forgotpw {
            font-size: 80%;
            display: flex;
            justify-content: end;
            font-weight: 500;
            text-decoration: none;
            color: black;
        }
        .forgotpw:hover {
            color: rgb(180, 180, 180);
        }
        .laysubmit, .laysignup {
            display: flex;
            justify-content: center;
        }
        label {
            font-weight: 500;
        }
        input[type=submit] {
            display: flex;
            justify-content: center;
            width: 170px;
            background-color: black;
            color: white;
            padding: 5px;
            margin: 50px 0;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 130%;
            font-weight: 700;
            box-shadow: 2px 2px 4px 0px rgba(0, 0, 0, 0.5);
        }
        input[type=submit]:hover {
            background-color: white;
            color: black;
        }
        .SignUp {
            text-decoration: none;
            color: rgb(180, 180, 180);
            font-weight: 700;
            font-size: 20px;
            margin-top: -45px;
        }
        .SignUp:hover {
            color: black;
        }
        @media only screen and (max-width: 850px) {
            .col1 {
                display: none;
            }
            .col2 {
                width: 100%;
                height: 100%;
                margin-right: 0;
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
                box-shadow: 1px 15px 15px 0px rgba(0, 0, 0, 0.5);
            }
            .layout {
                align-items: normal;
            }
            .h1 {
                margin-top: 50px;
            }
            h6 {
                margin-top: -5px;
            }
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="layout">
            <div class="col1 col">
            <img class="img" src="<?php echo base_url('assets/Image/Download Airplane traveling around globe and hand with passport and ticket for free.jpeg'); ?>" alt="Airplane traveling around globe"></div>
            <div class="col2 col">
                <div class="row">
                    <div class="layheading">
                        <h1 class="h1">New Password</h1>
                        <h6>please input your New Password</h6>
                    </div>
                </div>
                <div class="row">
                        <?php if ($this->session->flashdata('error')): ?>
                            <p style="color: red;"><?= $this->session->flashdata('error'); ?></p>
                        <?php endif; ?>
                        <form method="post" action="<?php echo base_url('auth/process_update_password'); ?>">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <input type="hidden" name="token" value="<?php echo $token; ?>">
                        <label for="password">New Password:</label>
                        <input type="password" name="password" required>
                        <div class="laysubmit">
                            <input type="submit" class="submit-button" value="Update"></button><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>