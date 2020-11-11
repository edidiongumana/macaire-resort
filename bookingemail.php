<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $arrivaldate = $_POST['arrivaldate'];
    $departuredate = $_POST['departuredate'];
    $chooseadults = $_POST['chooseadults'];
    $choosechildren = $_POST['choosechildren'];
    $chooseroom = $_POST['chooseroom'];
    $comment = $_POST['comment'];

  try{
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Username = 'havenspointech@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = '95158238GJ'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('havenspointech@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('edidiongumana12@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Macaire Resort Reservation Form';
    $mail->Body = "<h3>Firstname : $firstname <br> Lastname : $lastname <br>Email: $email <br>Phonenumber : $phonenumber 
    <br> Arrival Date : $arrivaldate <br>Departure Date : $departuredate <br>Number of Adults : $chooseadults 
    <br> Number of Children : $choosechildren <br> Choose Room : $chooseroom <br>Message : $comment</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
