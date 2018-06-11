<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that

date_default_timezone_set('Etc/UTC');

if (isset($_POST['myName']) and ($_POST['honeypot'] == ''))
  {
    $name = $_POST['myName'];
    $email = $_POST['myEmail'];
    $participanttype = $_POST['myParticipanttype'];
    $question = $_POST['myQuestion'];
      
require '../PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "elloramaitra.webhostingforstudents.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "phpmailer@elloramaitra.webhostingforstudents.com";
//Password to use for SMTP authentication
$mail->Password = "#m00se Hydra";
//Set who the message is to be sent from
$mail->setFrom('phpmailer@elloramaitra.webhostingforstudents.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo($_POST['myEmail'], $_POST['myName']);
//Set who the message is to be sent to
$mail->addAddress('phpmailer@elloramaitra.webhostingforstudents.com', 'Ellora Maitra');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
      
$mail->Body = 'Email:'.$_POST['myEmail'].'<br>';
$mail->Body .='Name:'.$_POST['myName'].'<br>';
$mail->Body .='Participant Type:'.$_POST['myParticipanttype'].'<br>';
$mail->Body .='Question:'.$_POST['myQuestion'].'<br>';
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    
} 

      else {
    include 'success.html.php';
}
  }
   
else {
    include 'contact.html.php';
}
