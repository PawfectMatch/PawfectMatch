<?php
    require "../../config/config.php";

    if(isset($_SESSION['username'])){
        $loggedin_user = $_SESSION['username'] ;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAW4PAW</title>
    <link rel="stylesheet" href="../../Public/Stylesheets/main.css">

    <!--External css-->
    <!-- LANDING PAGE -->
    <link rel="stylesheet" href="../../Public/Stylesheets/LandingPage.css">

 

    <!--fonts.google-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montaga&family=Montserrat:wght@500&display=swap" rel="stylesheet">


    <!--icon-->
    <script src="https://kit.fontawesome.com/d473b002d5.js" crossorigin="anonymous"></script>

    
</head>
<body>

    <div class="main">
        <div class="brand">
            <h2><i class="fas fa-paw"></i> Paw4Paw</h2>     
        </div>

        <!-- SEARCH BAR FOR FUTURE -->
        <!-- <input id="search" type="text" placeholder="Search"> -->

        <ul class="navbar">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Dogs</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </div>