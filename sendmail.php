<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php"; 
include_once 'dbcon.php'; 

 function sendHtmlMail($toemail,$subject,$body){
 
if(!empty(EMAIL_USERNAME)){
   
    $mail = new PHPMailer(true); 
    //Enable SMTP debugging.
    $mail->SMTPDebug = false;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();            
    //Set SMTP host name                          
    $mail->Host = EMAIL_HOST;
 
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    //Provide username and password     
    $mail->Username = EMAIL_USERNAME;   
          
    $mail->Password = EMAIL_PASSWORD;  
                          
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";                           
    //Set TCP port to connect to
    $mail->Port = 587;                                   

    $mail->From = EMAIL_FROMMAIL;
    $mail->FromName = EMAIL_FROMNAME;

    $mail->addAddress( $toemail);

    $mail->isHTML(true);

    $mail->Subject =$subject;
    $mail->Body =$body ;
    $mailresult=  $mail->send();
    
}
 

 }

   


?>