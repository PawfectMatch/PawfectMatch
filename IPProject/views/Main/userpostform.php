
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

?>

<link rel="stylesheet" href="../../Public/Stylesheets/userpostform.css">


<!-- <form class="user_page_post" action="userpostform.php" method="POST">
        
    <input name="userpost_nameofpet" type="text" placeholder="Name of Pet" required>   <p></p>
    <input name="userpost_breedofpet" type="text" placeholder="Breed of Pet" required> <p></p>
    <input name="userpost_age"      type="text" placeholder="age">                          <p></p>
    <input name="userpost_gender"   type="text" placeholder="gender" required>           <p></p>
    <input name="userpost_cost"     type="text" placeholder="cost" >                       <p></p>
    <input name="userpost_url"      type="text" placeholder="Add url of the photo">         <p></p>
    <input name="userpost_location" type="text" placeholder="Enter location">          <p></p>
    <input name="userpost_descr"    type="text" placeholder="About Your Pet">          <p></p>
    <button name="post"             type="submit" value="Post" >POST</button>

</form> -->
<div class="givespace"></div>
<div class="wrapper">
    <!-- <div class="title">
      UPLOAD A NEW POST 
    </div> -->
    <form class="user_page_post" action="userpostform.php" method="POST">
        <div class="form">


        <div class="inputfield">
            <label>Name:</label>
            <input name="userpost_nameofpet" type="text" class="input" placeholder="Enter name of your pet">
        </div>  


        
        <div class="inputfield">
            <label>Breed:</label>
            <input name="userpost_breedofpet" type="text" class="input" placeholder="Enter breed">
        </div>  


        <div class="inputfield">
            <label>Age:</label>
            <input name="userpost_age"  type="number" class="input" min="1" placeholder="Enter age">
        </div> 


            <div class="inputfield">
            <label>Gender:</label>
            <div class="custom_select">
                <select  name="userpost_gender">
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                </select>
            </div>
        </div> 



            <div class="inputfield">
            <label>Cost:</label>
            <input name="userpost_cost" type="number" class="input" min="500" placeholder="Enter cost for breeding">
        </div> 




        <div class="inputfield">
            <label>Location:</label>
            <input name="userpost_location" class="input"  placeholder="Enter your current address"></input>
        </div> 

        <div class="inputfield">
            <label>About your Pet:</label>
            <textarea name="userpost_descr" class="textarea" placeholder="Enter your current address"></textarea>
        </div> 
        
        <div class="inputfield">
            <label>Picture</label>
            <input name="userpost_url" type="url" class="input" placeholder="Browse picture">
        </div> 


        
        <button name="post" type="submit" value="Post" class="post">POST</button>
        
        
        </div>
    </div>
</form>


<!-- FOOTER -->
<?php

    if(isset($_POST['post']))
    header('Location: ./userpage.php');
    }
    include("../../includes/partials/footer.php");
?>