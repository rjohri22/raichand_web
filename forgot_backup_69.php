<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Forgot Password in PHP & MySQL</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
require_once('dbcon.php');
if (isset($_POST['email'])) {
  $to_email = $_POST['email'];
  $subject = "Simple Email Test via PHP";
  $body = "<p><a href='<?php echo SITE_URL;?>resetpassword.php'>Reset Password</a></p>";

  $headers =  
    'Reply-To: test@yourdomain.com' . "\r\n" .
    "Content-type:text/html;charset=UTF-8" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if (mail($to_email, $subject, $body, $headers)) {
?>
    <script>
      alert("Email Sending Sucessfully...");
    </script>
<?php
   
  } else {
?>
    <script>
      alert("Email sending failed...");
    </script>
<?php

  }
}
?>
<?php include 'footer.php'; ?>
