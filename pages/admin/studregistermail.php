<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';
// session_start();
if (isset($_POST['registerStudent']))
{
$parentmail = $_POST['email'];
$childname = $_POST['firstname']. $_POST['lastname'];
$childid = $_SESSION['studid'];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'adjoacash@gmail.com';                 // SMTP username
    $mail->Password = 'nanaadjoa';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('adjoacash@gmail.com', 'Sender');
    $mail->addAddress($parentmail, 'Receiver');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Student Registration in Westlands Lyceum';
    $mail->Body    = 'Dear Parent, <br> Your child '.$childname.' has been successfully enrolled in Westlands Lyceum.'.'<br>
                      Please take note of '.$childname.'\'s student ID number: <b>'.$childid.'</b><br>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Email has been sent'."<br>";
}
catch (Exception $e) {
    echo 'Message could not be sent. Please check your connection or your settings'. "<br>";
}
}
