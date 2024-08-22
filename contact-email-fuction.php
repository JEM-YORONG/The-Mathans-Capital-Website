<?php
// // mga gagamitin
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

// if(isset($_POST["send"])){
//     $mail = new PHPMailer(true);

//     try {
//         //Server settings
//         $mail->isSMTP();                //kapag SMTP gagamiting mailer
//         $mail->Host ='smtp.gmail.com';  // Host name ng mailer / server host name
//         $mail->SMTPAuth = true;         // auth 
//         $mail->Username = 'mathanscapital@gmail.com';     // SMTP sender email
//         $mail->Password = 'wysh amsd fvue nzxi';  // SMTP password - sender googla account app password
//         $mail->SMTPSecure = 'ssl';       // encryption / security
//         $mail->Port = 465;               // TCP port kung san coconnect

//         //Recipients
//         $mail->setFrom($_POST["email"], 'Website Inquiries'); //sender email and name - default muna
//         $mail->addAddress('themathanscapital@gmail.com');               // company/reciever 1st email
//         $mail->addReplyTo($_POST["email"], $_POST["name"]); //kung san mapupunta reply - sender email
//         $mail->addCC('mathans@themathanscapital.com'); //company/reciever 2nd email kung san mafforward yung client message

//         //Content
//         $mail->isHTML(true); // if html format gagamitin                     
//         $mail->Subject = $_POST["subject"]; //subject ng email para di mapunta sa spam
//         $body = "Name: {$_POST['name']}<br>" .
//         "Email: {$_POST['email']}<br><br>" .
//         "Concern: {$_POST['subject']}<br>" .
//         "Message:<br>{$_POST['message']}";
//         $mail->Body = $body; //content or message

//         $mail->send(); // issend na yung info
//         include 'thank-you-page.php';
//         // echo "
//         // <script>
//         // alert('Thank you for contacting us. We will get back to you soon.');
//         // document.getElementById('myForm').reset();
//         // </script>
//         // ";
//     } catch (Exception $e) {
//         // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; //response if not success + error message
//         // // echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
//         // echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
//         include 'thank-you-page.php';
//     }
// }

// Include PHPMailer libraries
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP(); 
        $mail->Host = 'localhost'; 
        $mail->Port = 25;  
        $mail->SMTPAuth = false; 
        $mail->Username = 'mathans@themathanscapital.com'; 
        $mail->Password = 'Qatar@2024'; 

$mail->IsSendmail();
  
        $mail->From = 'mathans@themathanscapital.com'; 
        $mail->FromName = 'The Mathans Capital';

$mail->AddAddress('mathans@themathanscapital.com');
$mail->addBCC('themathanscapital@gmail.com');
$mail->AddReplyTo($_POST['email'], $_POST['name']);

        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"]; 
        $body = "Name: {$_POST['name']}<br>" .
            "Email: {$_POST['email']}<br><br>" .
            "Concern: {$_POST['subject']}<br>" .
            "Message:<br>{$_POST['message']}";
        $mail->msgHTML($body); 

        $mail->send(); 
        include 'thank-you-page.php'; // Redirect to thank-you page
    } catch (Exception $e) {
        include 'thank-you-page.php'; // Redirect to thank-you page
    }
}