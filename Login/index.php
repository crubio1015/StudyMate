<?php
session_start();

    require_once 'autoloader.php';

    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $login = new login();

        $result = $login->check_login($id);

        if($result)
        {

        }
        else
        {
            header("Location: login.php");
            die;
        }
    }
    else
    {       
        header("Location: login.php");
        die;
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNECTIVITY</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="logout.php">Logout</a>
    <br>

    <nav class="navbar">
    <div class="navbar__container">
    <a href="/" id="navbar__logo">CONNECTIVITY</a>
    <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul class="navbar__menu">
        <li class="navbar__item">
            <a href="/" class="navbar__links">
                Home
            </a>
        </li>
        <li class="avbar__menu">
            <a href="login.php" class="navbar__links">
                Login
            </a>
        </li>
        <li class="navbar__item">
            <a href="/" class="navbar__links">
                Contact
            </a>
        </li>
        <li class="avbar__btn">
            <a href="signup.php" class="button">
                Sign Up
            </a>
        </li>
    </ul>
    </div>
</nav>

<!--Hero-->
<div  class="hero" id="home">
<div class = "hero_container">
    <h1 class = "hero__heading"><span>Connect</span> with new people</h1>
    <p class=" hero__description">A Student Connectivity Platform</p>
    <button class="main__btn"><a href="#">Explore</a></button>

</div>
</div>

<div class="main" id="about">\
    <div class="main__container">
        <div class = "main__img--container">
            <div class = "main__img--CARD">ICON</div>
            <div class="main__content">
                <h1>WYD</h1>
                <h2>Start connecting with students with your same interests</h2>
                <p>Create an account and start conecting</p>
                <button class="main__btn"><a href="#">Create account</a></button>

            </div>


        </div>
    </div>
</div>
<script src="app.js"></script>
</body>
</html>