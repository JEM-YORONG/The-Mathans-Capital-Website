<?php
// mga gagamitin
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                //kapag SMTP gagamiting mailer
        $mail->Host ='smtp.gmail.com';  // Host name ng mailer / server host name
        $mail->SMTPAuth = true;         // auth 
        $mail->Username = 'pme5429@gmail.com';     // SMTP username
        $mail->Password = 'elhb nryz exwr crij';  // SMTP password - googla account app password
        $mail->SMTPSecure = 'ssl';       // encryption / security
        $mail->Port = 465;               // TCP port kung san coconnect

        //Recipients
        $mail->setFrom('pme5429@gmail.com', 'VepoCompany'); //email and name ng sender
        $mail->addAddress($_POST["email"]);               // recipient
        $mail->addReplyTo('pme5429@gmail.com', 'VepoCompany'); //kung san mapupunta reply
        $mail->addCC('pme5429@gmail.com'); //email 1 na masesendan
        $mail->addBCC('yorongjemar0@gmail.com'); // email 2 na masesendan

        //Content
        $mail->isHTML(true); // if html format gagamitin                     
        $mail->Subject = $_POST["subject"]; //subject ng email para di mapunta sa spam
        $mail->Body    = $_POST["message"]; //content or message

        $mail->send(); // issend na yung info
        echo "Message has been sent"; //response if success
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; //response if not success + error message
    }
}