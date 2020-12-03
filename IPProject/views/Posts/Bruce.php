<!-- HEADER -->
<?php
    include("../../includes/partials/header.php");
    include("../../includes/classes/User.php");
    $SinglePosts = $con->query("SELECT * from posts where post_id = '12'");
    $data = mysqli_fetch_array($SinglePosts);
    $owner_id = $data['owner_id'];
    $userdata =    $con->query("SELECT * from users where user_id = '$owner_id'");
    $data2 = mysqli_fetch_array($userdata);
    
?>

<link rel="stylesheet" href="../../Public/Stylesheets/PostBruce.css">

<div class="somespace"></div>
<div class="card">
  <img src="<?php echo $data['picofpet'] ?>" alt="John" style="width:100%">
  <h1><?php echo $data['nameofpet'] ?></h1>
  <h1>Age : <?php echo $data['ageofpet'] ?></h1>
  <h3>Description : <?php echo $data['descr'] ?></h3>  

  <p><button>Contact User</button></p>
  <h2>User : <?php echo $data2['username'] ?></h2>
  <h2>Email id : <?php echo $data2['email'] ?></h2>
</div>



<!-- FOOTER -->
<?php
    include("../../includes/partials/footer.php");
?>
