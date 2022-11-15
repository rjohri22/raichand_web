<?php

include("../dbcon.php");
header('Content-Type: application/json; charset=utf-8');
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '-1');
// print_r($_POST);exit;

// print_r($_GET);exit;    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $recaptcha = $_POST['g-recaptcha-response'];

    // // Put secret key here, which we get
    // // from google console
    // $secret_key = '6LcD6e0gAAAAAJNq0-1X1wNMTNEFYu1AEKgUj7Fe';

    // // Hitting request to the URL, Google will
    // // respond with success or error scenario
    // $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
    //         . $secret_key . '&response=' . $recaptcha;

    // // Making request to verify captcha
    // $response = file_get_contents($url);

    // // Response return by google is in
    // // JSON format, so we have to parse
    // // that json
    // $response = json_decode($response);
    // echo '<prE>';print_r($_POST);exit;

    // Checking, if response is true or not
    // if ($response->success == true) {
    // echo "jrgidfg";exit;
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $country_code = mysqli_real_escape_string($con, $_POST['hidden_mobile']);

    // $mobileerror = "";
    // $mobile = '000-0000-0000';
    // if (preg_match('/^\+[0-9]{1,2}-[0-9]{10}$/', $mobile)) {
    //     // echo "sfasdfsdfsdfdfsdfsdf";exit;
    //     $mobile = $mobile;
    // } else {
    //     // echo "else"; exit;
    //     # do nothing because string doesn't contain +62 or 62
    //     $mobileerror = "valid mobile number with country code(like +91-88888888 )";
    // }
    // print_r($mobileerror);
    // exit;
    $company = mysqli_real_escape_string($con, $_POST['company']);
    $bname = mysqli_real_escape_string($con, $_POST['bname']);
    // echo $bname;exit;
    $deg = mysqli_real_escape_string($con, $_POST['deg']);
    $serv = mysqli_real_escape_string($con, $_POST['serv']);
    // echo $serv;exit;
    $cont = mysqli_real_escape_string($con, $_POST['cont']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    // echo $mobile;exit;
    // if (isset($mobileerror) && $mobileerror == "") {
        $strings = "INSERT INTO contact_us (`name`,`email`,`mobile`,`company`,`deg`,`bname`,`services`,`country`,`type`,`message`,`country_code`) VALUES ('$name','$email','$mobile','$company','$deg','$bname','$serv','$cont','$type','$message','$country_code')";

        $querys = $con->query($strings);
        if ($querys) {
            // echo "rklfhjdhfjd";exit;
            $email = $_POST['email'];          // ================ recever mail 
            // print_r($email);exit;
            $subject = "Simple Email Test via PHP"; // ========================= subject 
            $body = "We received your application for the bussiness name we get back to you shortly";  //================ main content
            $headers = "";

            $email1 = "anjanarajput201299@gmail.com";          // ================ recever mail 
            // print_r($email);exit;
            $subject1 = "Simple Email Test via PHP"; // ========================= subject 
            $body1 = "Name : $name
                      Email: $email
                      Mobile: $mobile
                      Company: $company
                      Designation: $deg
                      Business Name: $bname 
                      Services: $serv
                      Countries: $cont
                      Type: $type
                      Message: $message";  //================ main content
            $headers1 = "";
            //================================= websolution@gamil.com
            // try {

            //     if (mail($email, $subject, $body, $headers)) {
            //         echo "Email successfully sent to...";
            //         exit;
            //     } else {
            //         echo "Email sending failed...";
            //         exit;
            //     }

            //     // $anju = mail($email, $subject, $body, $headers);
            //     // print_r($anju); exit;

            // } catch (Exception $e) {
            //     print_r($e);
            //     exit;
            // }


            if (mail($email, $subject, $body, $headers)) {
                if(mail($email1, $subject1, $body1, $headers1)){
                    // echo "Email successfully sent to...";
                    header("location: /contact.php?status=success");

                exit;
                }
            } else {
                echo "Email sending failed...";
                exit;
            }
            // echo "done";exit; 
            header("location: /contact.php?status=success");
        } else {
            // echo "not done";exit;
            header("location: /contact.php?status=fail");
        }
    // } 
    // else {
    //     $_SESSION['mobileerror'] = $mobileerror;

    //     // header("location: /contact.php?status=fail");
    // }
    // } else {
    //     // header("location: /contact.php?status=fail");
    // }
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $str = "select * from contact_us";
    $result = $con->query($str);
    $dataarr = array();
    $i = 0;
    while ($row = mysqli_fetch_row($result)) {
        $dataarr[$i] = array("name" => $row[0], "email" => $row[1], "mobile" => $row[2], "company" => $row[3], "deg" => $row[4], "bname" => $row[5], "services" => $row[6], "country" => $row[7], "type" => $row[8], "message" => $row[9]);
        $i++;
    }
    // print_r(json_encode($dataarr));
} else {
    // print_r("kkjfh");exit;

    echo "Not a valid request";
}
