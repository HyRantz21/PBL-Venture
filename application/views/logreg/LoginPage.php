<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>Login</title>
</head>
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
        .img{
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
            margin-bottom: 20px;
            font-weight: 650;
            font-size: 400%;
            margin-bottom: 0px;
        }
        h6{
            font-weight: 400;
            display: flex;
            justify-content: center;
            margin-bottom: 100px;
        }
        input[type=email], select {
            width: 320px;
            padding: 10px;
            margin: 5px 0px;
            display: inline-block;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }
        input[type=password], select {
            width: 320px;
            padding: 10px;
            margin: 5px 0px;
            display: inline-block;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }
        .forgotpw{
            font-size: 80%;
            display: flex;
            justify-content: end;
            font-weight: 500;
            text-decoration: none;
            color: black;
        }
        .forgotpw:hover{
            color: rgb(180, 180, 180);
        }
        .laysumbit,.laysignup{
            display: flex;
            justify-content: center;
        }

        label{
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
        }
        .submit-button:hover {
            background-color: white;
            color: black;
        }
        .SignUp{
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
            .col1{
                display: none;
            }
            .col2{
                width: 100%;
                height: 100%; 
                margin-right: 0;
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
                box-shadow: 1px 15px 15px 0px rgba(0, 0, 0, 0.5);

            }
            .layout{
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
                <img class="img" src="asset/Download Airplane traveling around globe and hand with passport and ticket for free.jpeg" alt="">
            </div>
            <div class="col2 col">
                <div class="row">
                    <div class="layheding">
                        <h1 class="h1">Welcome
                            <h6>Login valo capat wir</h6>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <form action=""<?php echo base_url('auth/proses_login')?>method="post">
                        <label for="Email">Email</label><br>
                        <input type="email" name="email" id=""><br>
                        <label for="Password">Password</label><br>
                        <input type="password" name="password" id=""><br>
                        <a href="" class="forgotpw">Forgot Password?</a>
                        <div class="laysumbit">
                            <input type="submit" value="Login" class="submit-button"><br>
                        </div>
                        <div class="laysignup">
                            <a href="<?php echo base_url("auth/view_register")?>">SignUp</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>