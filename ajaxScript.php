<?php
/**
 * Created by JetBrains PhpStorm.
 * User: chathuranga
 * Date: 9/4/13
 * Time: 9:25 AM
 * To change this template use File | Settings | File Templates.
 */

include('phpmailer/class.phpmailer.php');

$mail             = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "fosshubsl@gmail.com";  // GMAIL username
$mail->Password   = "chathuranga123";            // GMAIL password

$mail->SetFrom($_POST["user_email"]);


$mail->Subject    = "Message form chathuranga.fosshub.org";



$mail_body=$mail_body.$_POST["message"]."<br/><br/>";


$mail->MsgHTML($mail_body);

//email will be sent to this address
$mail->AddAddress("chathuranga.t@gmail.com","chathuranga.fosshub.org");


if(!$mail->Send()) {

    echo "mail sending error".$mail->ErrorInfo;

} else {

    echo "email sent ";
}
?>
