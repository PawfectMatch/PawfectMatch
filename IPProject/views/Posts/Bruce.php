<!-- HEADER -->
<?php
    include("../../includes/partials/header.php");
    include("../../includes/classes/User.php");
    
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require '../../vendor/autoload.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);


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
  <div>
    <form method="POST">
      <input type="submit" name="button1" class="button" value="Contact User" />
    </form>
  </div>
  <h2>User : <?php echo $data2['username'] ?></h2>
  <h2>Email id : <?php echo $data2['email'] ?></h2>
</div>



<!-- FOOTER -->
<?php
    include("../../includes/partials/footer.php");
?>

<?php
  if(array_key_exists('button1', $_POST)) { 
      button1(); 
  } 

  function button1() { 
        try {
          //Server settings
          $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'sgogate600@gmail.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'sgogate600@gmail.com';                     // SMTP username
          $mail->Password   = 'Athena@104';                               // SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
          $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
      
          //Recipients
          $mail->setFrom('sgogate600@gmail.com', 'Mailer');
          $mail->addAddress('sgogate.boss@gmail.com', 'Joe User');     // Add a recipient
          $mail->addAddress('sgogate@ieee.org');               // Name is optional
          // $mail->addReplyTo('info@example.com', 'Information');
          // $mail->addCC('cc@example.com');
          // $mail->addBCC('bcc@example.com');
      
          // Attachments
          // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
          // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      
          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'PAWFECT MATCH';
          $mail->Body    = 'SWAROOP WANTS TO CONTACT YOU reg BRUCE';
          // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      
          $mail->send();
          echo 'Message has been sent';
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      } 
  } 

?>