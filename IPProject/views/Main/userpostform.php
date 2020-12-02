
<!-- HEADER -->
<?php
    include("../../includes/partials/header.php");
    include("../../includes/classes/User.php");
    include("../../includes/classes/Post.php");

    if( $loggedin_user == "_nouser_"){
        header("location : index.php");
        // exit();
    } else{
    
    if(isset($_POST['post'])) {
        $post = new Post($con , $loggedin_user );
        $post -> submitPost($_POST['userpost_nameofpet'],$_POST['userpost_breedofpet'],
            $_POST['userpost_age'],$_POST['userpost_gender'],$_POST['userpost_cost'],$_POST['userpost_url']
            ,$_POST['userpost_location'],$_POST['userpost_descr']);
    }  
    // TESTING  
    // echo $loggedin_user;
    // echo $_POST['userpost_nameofpet'] ; 
    // echo $_POST['userpost_breedofpet'] ; 
    // echo $_POST['userpost_age'] ; 
    // echo $_POST['userpost_gender'] ; 
    // echo $_POST['userpost_nameofpet'] ; 
    // echo $_POST['userpost_cost'] ; 
    // echo $_POST['userpost_url'] ; 
    // echo $_POST['userpost_location'] ; 
    // echo ("$owner_id");
?>

<link rel="stylesheet" href="../../Public/Stylesheets/userpostform.css">


<form class="user_page_post" action="userpostform.php" method="POST">
        
    <input name="userpost_nameofpet" type="text" placeholder="Name of Pet" required>   <p></p>
    <input name="userpost_breedofpet" type="text" placeholder="Breed of Pet" required> <p></p>
    <input name="userpost_age"      type="text" placeholder="age">                          <p></p>
    <input name="userpost_gender"   type="text" placeholder="gender" required>           <p></p>
    <input name="userpost_cost"     type="text" placeholder="cost" >                       <p></p>
    <input name="userpost_url"      type="text" placeholder="Add url of the photo">         <p></p>
    <input name="userpost_location" type="text" placeholder="Enter location">          <p></p>
    <input name="userpost_descr"    type="text" placeholder="About Your Pet">          <p></p>
    <button name="post"             type="submit" value="Post" >POST</button>

</form>


<!-- FOOTER -->
<?php

    if(isset($_POST['post']))
    header('Location: ./userpage.php');
    }
    include("../../includes/partials/footer.php");
?>