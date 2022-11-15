<?php
    include('dbcon.php');
    $email = $_POST['email'];
 
    $statement = "INSERT INTO newsletter(email) VALUES('$email')";

// ====================================================== Email Sending Start

                        $subject = "Simple Email Test via PHP";
                        $body = "you are Subscriber";                      
                        $header = "Content-type:text/html;charset=UTF-8" . "\r\n" .
                                  'X-Mailer: PHP/' . phpversion();

                        $mail_sending = mail($email, $subject, $body, $header);
                        $mail_sending = mail('chandresh.maheshwari@gmail.com', $subject, $body, $header);
                        
                        if ($mail_sending == true) {              
                            echo "Email sending sucessfully..."; 
                        } else {                      
                       echo "Email sending failed..."; 
                         }

// ======================================================= Email SEnding End
    $res = $con->query($statement ,  $mail_sending);
    if($res){
       // echo "pooja";
        echo $res;
    }
   
    //echo insert into newsletter(`email`) values('$email');
    // print_r($con);
