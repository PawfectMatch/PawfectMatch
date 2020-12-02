<!-- HEADER -->
<?php
    include("../../includes/partials/header.php");
    include("../../includes/classes/User.php");
    include("../../includes/classes/Post.php");
    include("../../includes/classes/AllPost.php");

    if( $loggedin_user == "_nouser_"){
        header("location : index.php");
        // exit();
    } else{
        // $ownerId   = $con->query("SELECT * from posts")
        $UserPosts = $con->query("SELECT * from posts WHERE owner = '$loggedin_user' ");
?>
    <link rel="stylesheet" href="../../Public/Stylesheets/userpage.css">
    <div class="wrapper">
        <div class="box">
            <div class="box-img">
                <img src="
                <?php
                    $user_obj = new User($con , $loggedin_user);
                    echo $user_obj->getProfilePic();
                ?>
                " height="625" width="500">
            </div>
            <div class="box-text">
                <h1>
                <?php 
                    $user_obj = new User($con , $loggedin_user);
                    echo $user_obj->getUsername();                                    
                ?> 
                <a href="Edit"><i class="fas fa-edit"></i></a></h1>
                <p>Email: <?php 
                        echo $user_obj->getEmail();
                    ?></p>
                <p>Posts: <?php 
                        echo $user_obj->getNumPosts();
                    ?></p>
                <p>Likes :<?php 
                        echo $user_obj->getNumLikes();
                    ?></p>
                <p></p>
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
        <a href="./userpostform.php"><h1>Make a new post</h1></a>
    </button> 

    <div class="givemesomespace box">

    <?php
        while($data = mysqli_fetch_array($UserPosts)){ 
    ?>

    <div class="card">
        <img src="<?php echo $data['picofpet']?>" alt="Asterix">
        <h1>Name :<?php echo $data['nameofpet'] ?></h1>
        <p class="CardName">Young, playful and happy Cocker Spaniel</p>
        <p>Age : <?php echo $data['ageofpet'] ?></p>

        <p><button class="cardButton">Read more</button></p>
    </div>




    <?php

 
       }      
    ?>
    </div>
    


<!-- FOOTER -->
<?php
    }
    include("../../includes/partials/footer.php");
?>
