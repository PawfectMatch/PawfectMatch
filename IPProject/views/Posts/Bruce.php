<!-- HEADER -->
<?php
    include("../../includes/partials/header.php");
    include("../../includes/classes/User.php");

    $SinglePosts = $con->query("SELECT * from posts where post_id = '12'");
    $data = mysqli_fetch_array($SinglePosts);
    $owner_id = $data['owner_id'];
    $userdata =    $con->query("SELECT * from users where user_id = '$owner_id'");
    $data2 = mysqli_fetch_array($userdata);




    // 
        include_once "../../PHPMailer.php";

        require_once "../../PHPMailer.php";
        require_once "../../SMTP.php";
        require_once "../../Exception.php";
        include_once "../../smtp.php";

        use PHPMailer\PHPMailer\PHPMailer;
        $Cemail=$data2['email'];
        $mail = new PHPMailer();
        //SMTP Settings



        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "sgogate.boss@gmail.com";
        $mail->Password = '99677232310';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        if(isset($_POST['contact'])) {
          $mail->isHTML(true);
          $mail->setFrom($data2['email']);
          $mail->addAddress($data2['email']);
            // echo "USERNAME " . $loggedin_user;
            // echo "OWNER " . $data2['username'];
          $mail->Subject =  "PAWFECT MATCH " . "    ||   " .  $loggedin_user . " wants to conatact you" . "    ||   ";
          
          $mail->Body = "
              HELLO ". $data2['username'] . " 
              
              
              " . $loggedin_user . "is intrested in " . $data['nameofpet'] ;
        
          if ($mail->send())
          {
              echo '<script id="tyru" language="javascript">';
              echo 'alert("User is notified !")';
              echo '</script>';
          }
          else
          {
              echo '<script id="tyru" language="javascript">';
              echo 'alert("Sending email failed!")';
              echo '</script>';
          }
      } 

    // 

  // 
  // $mail->isHTML(true);
  // $mail->setFrom("sgogate600@gmail.com");
  // $mail->addAddress("sgogate600@gmail.com");
  // $mail->Subject =  "USER WANTS TO CONTACT U";
  
  // $mail->Body = "
  //     HELLO THIS IS PAWFECT MATCH";

  // if ($mail->send())
  // {
  //     echo '<script id="tyru" language="javascript">';
  //     echo 'alert("Doctor is notified about Unverification of his/her account by Email!")';
  //     echo '</script>';
  // }
  // else
  // {
  //     echo '<script id="tyru" language="javascript">';
  //     echo 'alert("Sending email failed!")';
  //     echo '</script>';
  // }


  // 

?>

<link rel="stylesheet" href="../../Public/Stylesheets/PostBruce.css">

<div class="somespace"></div>
<div class="card">
  <img src="<?php echo $data['picofpet'] ?>" alt="John" style="width:100%">
  <h1><?php echo $data['nameofpet'] ?></h1>
  <h1>Age : <?php echo $data['ageofpet'] ?></h1>
  <h3>Description : <?php echo $data['descr'] ?></h3>  
  <div>
    <form name="contact" action="Bruce.php" method="post">

      <!-- <button value="contact">Contact Owner</button> -->
      <!-- <input type="submit" name="contact" value="Contact Owner" onclick="contact()" /> -->
      <button type="submit" name="contact" value="contact">Contact User</button>
    </form>
  </div>
  <h2>User : <?php echo $data2['username'] ?></h2>
  <h2>Email id : <?php echo $data2['email'] ?></h2>
</div>



<!-- FOOTER -->
<?php





    include("../../includes/partials/footer.php");
?>
