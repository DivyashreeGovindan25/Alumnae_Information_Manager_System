<?php
   session_start();
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
    require_once 'phpmailer/Exception.php';
    require_once 'phpmailer/PHPMailer.php';
    require_once 'phpmailer/SMTP.php';

    $mail = new PHPMailer(true);
if (isset($_POST["send-mail"])) 
{
         
         $message = $_POST["message"];
         $from=$_POST["from"];
         $subject=$_POST["sub"];
         $contain_email=$_SESSION['emails'];
         $array_emails=explode(',',$contain_email);
         foreach ($array_emails as $value) 
         {
            $value;
            try
            {
               $mail->isSMTP();
               $mail->Host = 'smtp.gmail.com';
               $mail->SMTPAuth = true;
               $mail->Username = 'xyz@gmail.com'; // Gmail address which you want to use as SMTP server
               $mail->Password = 'xxyyzz'; // Gmail address Password
               $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
               $mail->Port = '587';

               $mail->setFrom('xyz@gmail.com'); // Gmail address which you used as SMTP server
               $mail->addAddress($value); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

               $mail->isHTML(true);
               $mail->Subject = $subject;
               $mail->Body = "<h3>From : $from <br>Sub : $subject <br>Message : $message</h3>";
               $mail->send();

            } 
            catch (Exception $e)
            {
               $alert = '<div class="alert-error">
                  <span>'.$e->getMessage().'</span>
                  </div>';
               echo $alert;
            }
         }
         header("Location:./Staffmodule.php?mail=sent");
}
else
{
   echo "error";
}
         
      
?>