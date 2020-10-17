<!-- HEADER -->
<?php
    include("../../includes/partials/header.php");
    include("../../includes/classes/User.php");

    if( $loggedin_user == "_nouser_"){
        header("location : index.php");
        // exit();
    } else{
            
?>


    <img src=" 
        <?php
            $user_obj = new User($con , $loggedin_user);
            echo $user_obj->getProfilePic();
        ?>
     " alt="">    
    <p></p>
    <h2> Name : <?php echo $loggedin_user; ?> </h2> 
    <h2>Likes : <?php
            $user_obj = new User($con , $loggedin_user);
            echo $user_obj->getNumLikes();
        ?>
    </h2>

    <h5>ETC.</h5>

    <button>
        <a href="./userpostform.php">Make a new post</a>
    </button>


<!-- FOOTER -->
<?php
    }
    include("../../includes/partials/footer.php");
?>
