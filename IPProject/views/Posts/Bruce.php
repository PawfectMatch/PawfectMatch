<!-- HEADER -->
<?php
    include("../../includes/partials/header.php");
    include("../../includes/classes/User.php");
    $AllPosts = $con->query("SELECT * from posts");

?>

<link rel="stylesheet" href="../../Public/Stylesheets/PostBruce.css">

<div class="somespace"></div>
<div class="card">
  <img src="" alt="John" style="width:100%">
  <h1>Bruce Kherdekar</h1>
  <h1>Age : 4</h1>
  <h3>Description : Fluffy</h3>  
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button>Contact</button></p>
</div>



<!-- FOOTER -->
<?php
    include("../../includes/partials/footer.php");
?>
