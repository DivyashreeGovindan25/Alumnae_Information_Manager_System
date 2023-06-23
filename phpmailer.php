<?php 
require 'phpmailer/PHPMailerAutoload.php';
$mail= new PHPMailer;
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='divyashreeharitha@gmail.com';//Your Email Address
$mail->Password='haritha@3210';//Your Email Password
$mail->setFrom('divyashreeharitha@gmail.com','Love Message');
$mail->addAddress('gswathi067@gmail.com');//Receiver Email
$mail->addReplyTo('divyashreeharitha@gmail.com');
$mail->isHTML(true);
$mail->Subject='Thanking you';
$mail->Body='<h1>I Love you much and im grateful to you</h1>.<br><h3 style="color:red;">Your lovable grand daughter</h3>';
if(!$mail->send())
{
echo "Something went wrong";
echo $mail->ErrorInfo;
}
else
{
	echo "Email sent successfully";
}
?>