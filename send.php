<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require 'PhpMailer/PHPMailer.php';
require 'PhpMailer/Exception.php';
require 'PhpMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
if (isset($_POST['email'])) {

    $username = 'admin@bwcdigital.com';
    try {
        //$mail->SMTPDebug = 2; // Enable verbose debug output
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'connectmypc3@gmail.com';
        $mail->Password   = 'zzhu unml jbpc wfdu'; // Use App Password or correct credentials
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom($_POST['email'], $_POST['Username']);
        $mail->addAddress($username);
        $mail->addReplyTo($_POST['email'], 'Information');

        $mail->isHTML(false);
        $mail->Subject = 'Message';
        $mail->Body    = $_POST['message'];

        $mail->send();
        
        echo "<script>window.open('index.html?#contact-section&msg=suc','_self');</script>"; 
        
    } catch (Exception $e) {
        echo "<script>window.open('index.html?#contact-section&msg={$mail->ErrorInfo}','_self');</script>";
    }
}