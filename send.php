<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
if (isset($_POST['email'])) {
    $username = 'sanjaykdas1996@gmail.com';
    try {                                                           //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'connectmypc3@gmail.com';               //SMTP username
        $mail->Password   = 'zzhu unml jbpc wfdu';                  //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->SMTPSecure = 'tls';                                  // Adjust based on your SMTP server requirements
        $mail->Port = 587;                                          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($_POST['email'],$_POST['Username']);
        $mail->addAddress($username); //Name is optional
        $mail->addReplyTo($_POST['email'], 'Information');
    
        //Content
        $mail->isHTML(false);                                  //Set email format to HTML
        $mail->Subject = 'Messege';
        $mail->Body    = $_POST['message'];

        $mail->send();
        // $url = "C:/xampp/htdocs/portfolio/index.html";
        // header('Location: ' .$url);
        // exit();
        echo "Comming";
       echo "<script>window.open('index.html?#contact-section&msg=suc','_self');</script>"; 
    } catch (Exception $e) {
        echo "<script>window.open('index.html?#contact-section&msg={$mail->ErrorInfo}','_self');</script>";
    }
}