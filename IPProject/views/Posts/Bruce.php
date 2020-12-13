<!-- HEADER -->
<?php
    include("../../includes/partials/header.php");
    include("../../includes/classes/User.php");

    // QUERIES TO GET USER AND OWNER DETAILS
    $SinglePosts = $con->query("SELECT * from posts where post_id = '12'");
    $data = mysqli_fetch_array($SinglePosts);
    $owner_id = $data['owner_id'];
    $userdata =    $con->query("SELECT * from users where user_id = '$owner_id'");
    $data2 = mysqli_fetch_array($userdata);
    $user_obj = new User($con , $loggedin_user);

    //  INCLUDING PHP MAILER
    include_once "../../PHPMailer.php";

    require_once "../../PHPMailer.php";
    require_once "../../SMTP.php";
    require_once "../../Exception.php";
    include_once "../../smtp.php";

//  USE PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
//  Customer Email
    $Cemail=$data2['email'];
    $mail = new PHPMailer();
    //SMTP Settings

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "sgogate.boss@gmail.com";
    $mail->Password = '98330484772';
    $mail->Port = 465; //587
    $mail->SMTPSecure = "ssl"; //tls

    // IF BUTTON IS CLICKED
      if(isset($_POST['contact'])) {
        $mail->isHTML(true);
        $mail->setFrom($Cemail);
        $mail->addAddress($Cemail);
          // echo "USERNAME " . $loggedin_user;
          // echo "OWNER " . $data2['username'];
        $mail->Subject =  "PAWFECT MATCH " . "    ||   " .  $user_obj->getUsername() . " wants to contact you" . "    ||   ";
        
        $mail_body =  "Hello " .$data2['username']." , 
        " . $user_obj->getUsername() ." has viewed your profile on Paw4Paw and has shown interest in " . 
        $data['nameofpet'] . ". <p> Revert back if you're interested and would want to contact 
        " . $user_obj->getUsername() . "<p> Email : " . $Cemail;
        $mail_body = "<p style='text-align:justify'>$mail_body</p>";
        $mail->Body =  $mail_body;

        if ($mail->send())
        {
            echo '<script id="tyru" language="javascript">';
            echo 'alert("User is notified ! Pls Keep Exploring more pets")';
            echo '</script>';
        }
        else
        {
            echo '<script id="tyru" language="javascript">';
            echo 'alert("Sending email failed!")';
            echo '</script>';
        }
    } 

?>

<!-- STYLE SHEET -->
<link rel="stylesheet" href="../../Public/Stylesheets/PostBruce.css">

<div class="somespace"></div>
<div class="card">
  <img src="<?php echo $data['picofpet'] ?>" alt="John" style="width:100%">
  <h1><?php echo $data['nameofpet'] ?></h1>
  <h1>Age : <?php echo $data['ageofpet'] ?></h1>
  <h3>Description : <?php echo $data['descr'] ?></h3>  
  <div>
    <form name="contact" action="Bruce.php" method="post">

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
