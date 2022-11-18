<?php
   include_once("sendmail.php");
    $email = $_POST['email'];
 
    $statement = "INSERT INTO newsletter(email) VALUES('$email')";
    $res = $con->query($statement );
    if($res){
       // echo "pooja";
        echo $res;
    }

// ====================================================== Email Sending Start

                        $subject = "Raichand Group: Newsletter Subscription";
                        $body = "You are subscribed to our Newsletter successfully";                      
                    //     $header = "Content-type:text/html;charset=UTF-8" . "\r\n" .
                    //               'X-Mailer: PHP/' . phpversion();

                    //     $mail_sending = mail($email, $subject, $body, $header);
                    //     $mail_sending = mail('chandresh.maheshwari@gmail.com', $subject, $body, $header);
                        
                    //     if ($mail_sending == true) {              
                    //         echo "Email sending sucessfully..."; 
                    //     } else {                      
                    //    echo "Email sending failed..."; 
                    //      }

sendHtmlMail($email,  $subject,  $body);
// ======================================================= Email SEnding End
 
   
    //echo insert into newsletter(`email`) values('$email');
    // print_r($con);
