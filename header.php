<?php session_start();?>
<!doctype html>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Antony Injila">
    <meta name="description" content="Antony Injila,Software Engineering, Python,JavaScript,Geospatial Engineer,Java,Php,Junior Developer">
    <link rel="apple-touch-icon" sizes="180x180" href="uploads/favicon.jpg">
    <link rel="icon" type="image/png" sizes="32x32" href="uploads/favicon.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="uploads/favicon.jpg">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <a href="https://icons8.com/icon/12584/python"></a>
    <a href="https://icons8.com/icon/16165/facebook-old"></a>

    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style3.css">
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <title>Antony Injila</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" id ="navbar-custom" style="border-bottom: 1px solid orange">
    <a class="navbar-brand" href="index.php">Antony Injila</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="text-align: center">
        <ul class="navbar-nav ml-auto" >
            <li class="nav-item">
                <a class="nav-link btn-outline-warning" href="about.php" style="border-radius: 26px;padding: 10px 40px 10px 40px; color: #000000;">About me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-outline-warning" href="#projects" style="border-radius: 26px;padding: 10px 40px 10px 40px; color: #000000;">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-outline-warning" href="#footer" style="border-radius: 26px;padding: 10px 40px 10px 40px; color: #000000;">Contact me</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <?php
            if (isset( $_SESSION['loggedin'])){
                echo '
                    <li class="nav-item">
                        <a class="nav-link btn-warning" href="post_project.php" style="border-radius: 26px;padding: 10px 40px 10px 40px; color: white;margin: 0px 5px 0px 5px" >Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-info"href="logout.php" style="border-radius: 26px;padding: 10px 40px 10px 40px; color: orange;margin: 0px 5px 0px 5px" >Logout</a>
                    </li>
                ';
            }else{
                echo '
                 <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" href="login.php"  style="border-radius: 26px;padding: 10px 40px 10px 40px; color: orange;margin: 0px 5px 0px 5px">Login</a>
                    </li>
                </ul>
                ';
            }
            ?>

        </ul>

    </div>

</nav>
<hr>