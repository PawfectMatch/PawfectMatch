<!-- 
                                    HEADER FILE INCLUDING
                                    =====================
                                    1 . all PHP includes
                                    2. BASIC HTML 
                                    3. ALL STYLESHEETS OF NAVBAR AND OTHER PAGES IN FUTURE
                                    4. ALL GOOGLE FONTS / SCRIPT TAGS CONTAINING JS
                                    5. ALL ICON / API CDNs 
                                    ==================== 
-->

<?php
    require "../../config/config.php";

    if(isset($_SESSION['username'])){
        $loggedin_user = $_SESSION['username'];
    } 
    else{
        $loggedin_user = "_nouser_";
    }

?>
<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAW4PAW</title>
    <!--External css-->

    <!-- LANDING PAGE -->
        <link rel="stylesheet" href="../../Public/Stylesheets/LandingPage.css">
    <!-- INDEX PAGE -->
        <!-- <link rel="stylesheet" href="../../Public/Stylesheets/main.css"> -->



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