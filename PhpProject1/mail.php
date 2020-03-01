<?php
		require_once 'vendor/autoload.php';
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
	require 'vendor/phpmailer/phpmailer/src/Exception.php';
	require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require 'vendor/phpmailer/phpmailer/src/SMTP.php';

        $smail=$_POST['email'];
        $msg=$_POST['mesg'];
        
        
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 2525;
//587 
$mail->Host       = "smtp.elasticemail.com";
$mail->Username   = "bhaskar94bhu@gmail.com";
$mail->Password   = "293584EECD86E4ECE2043F0846D4D67101DE";


$mail->IsHTML(true);
$mail->addaddress($smail);
$mail->setfrom("bhaskar94bhu@gmail.com");
$mail->addreplyto("bijaybhaskar94@gmail.com");
$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
$content = $msg;

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
  header("Location: http://localhost/PhpProject1/Suc.html");
}
?>

