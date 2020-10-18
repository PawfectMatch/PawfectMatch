<!-- HEADER -->
<?php
    include("../../includes/partials/header.php");
    include("../../includes/classes/User.php");

    if( $loggedin_user == "_nouser_"){
        header("location : index.php");
        // exit();
    } else{
            
?>
    <link rel="stylesheet" href="../../Public/Stylesheets/userpage.css">
    <div class="wrapper">
        <div class="box">
            <div class="box-img">
                <img src="pic5.jpg" height="625" width="500">
            </div>
            <div class="box-text">
                <h1>BRUCE KHERDEKAR <a href="Edit"><i class="fas fa-edit"></i></a></h1>
                <p>Breed: Labrador</p>
                <p>Age: 5</p>
                <p>Gender: Male</p>
                <p>Cost: 10000000</p>
                <p><i class="fas fa-map-marker-alt"></i> Mumbai</p>


            </div>
            <div class="social">
                <a href="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="E-mail"><i class="far fa-envelope"></i></a>
            </div>
        </div>
    </div>
    
    

    <button class="makeapost">
        <a href="./userpostform.php">Make a new post</a>
    </button> 


<!-- FOOTER -->
<?php
    }
    include("../../includes/partials/footer.php");
?>
