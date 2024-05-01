<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
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
            height: 650px;
            min-width: 550px;
            margin-left: 100px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.5);
            
        }
        img{

        }
        .col2 {
            background-color: white;
            height: 650px;
            min-width: 550px;
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
            margin-bottom: 20px;
            font-weight: 650;
            font-size: 50px;
            margin-bottom: 0px;
        }
        h6{
            font-weight: 400;
            display: flex;
            justify-content: center;
            margin-bottom: 100px;
        }
        input[type=text], select {
            width: 300px;
            padding: 10px;
            margin: 5px 0px;
            display: inline-block;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
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
            font-size: 20px;
            font-weight: 700;
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
            color: gray;
            font-weight: 700;
            font-size: 20px;
            margin-top: -45px;
        }
        .SignUp:hover {
            color: black;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="layout">
            <div class="col1">
                <img src="asset/Download Airplane traveling around globe and hand with passport and ticket for free.jpeg" alt="">
            </div>
            <div class="col2">
                <div class="layheding">
                    <h1 class="h1">Welcome
                        <h6>Login valo capat wir</h6>
                    </h1>
                </div>
                <form class="form" action="">
                    <label for="Username">Username</label><br>
                    <input type="text" name="" id=""><br>
                    <label for="Password">Password</label><br>
                    <input type="text" name="" id=""><br>
                    <div class="laysumbit">
                        <input type="submit" value="Login" class="submit-button"><br>
                    </div>
                    <div class="laysignup">
                        <a href="" class="SignUp">SignUp</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
