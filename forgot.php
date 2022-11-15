<?php include 'header.php';
require_once('dbcon.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Forgot Password in PHP & MySQL</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <div class="container" style="margin-top: 15%;margin-bottom: 10%;">

    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
              <input id="email" name="email" placeholder="email address" class="form-control" type="email">
            </div>
          </div>
          <div class="col-sm-3"></div>
          <div class="form-group">
            <input name="recover-submit" id="reset_password" class="btn btn-lg btn-dark btn-block" value="Reset Password" type="submit">
          </div>
        </div>

      </div>
    </form>
  </div>
</body>

</html>
<?php

if (isset($_POST['email'])) {
  $q  = "SELECT * FROM `user`";
  $item = $con->query($q);
  $rm = mysqli_fetch_assoc($item);

  if ($rm['email'] == $_POST['email']) {
   
    $to_email = $_POST['email'];
    $subject = "Simple Email Test via PHP";
    $body = "<p><a href='" . SITEURL . "resetpassword.php'>Reset Password</a></p>";

    $headers =
      'Reply-To: test@yourdomain.com' . "\r\n" .
      "Content-type:text/html;charset=UTF-8" . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

    if (mail($to_email, $subject, $body, $headers)) {

echo "<script>$(document).ready(function(){
  setSuccessAlert('" . SITEURL . "forgot.php','Good job!','Email Sending Sucessfully...'); 
});</script>";
    } else {
  
echo "<script>$(document).ready(function(){
  setSuccessAlert('" . SITEURL . "forgot.php','Oops...!','Email sending failed...','error'); 
});</script>";
    }
  } else { 
    // echo SITEURL.'forgot.php';exit;
 

echo "<script>$(document).ready(function(){
  setSuccessAlert('" . SITEURL . "forgot.php','Oops...!','Wrong Email ID...','error'); 
});</script>";
// echo "<script type='text/javascript'>
// window.location.href = 'forgot.php';
// </script>";
  }
}
?>

<?php include 'footer.php'; ?>

