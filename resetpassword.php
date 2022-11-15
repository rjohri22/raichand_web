<?php include 'header.php'; ?>

<div class="container" style="margin: 15%;">

  <form id="resetpassword" role="form" class="form" method="post" action="">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div class="form-group">
          <div class="input-group">
            <input id="email" name="new_password" placeholder="New Password" class="form-control" type="password">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <input id="email" name="retype_password" placeholder="Retype Password" class="form-control" type="password">
          </div>
        </div>

        <div class="form-group">
          <input name="recover-submit" class="btn btn-lg btn-dark btn-block" value="Reset Password" type="submit">
        </div>

        <input type="hidden" class="hide" name="token" id="token" value="">
      </div>
      <div class="col-sm-3"></div>
    </div>

  </form>
</div>

<?php

if (isset($_POST['new_password'])) {
  $new_password = $_POST['new_password'];
  $retype_password = $_POST['retype_password'];


  if ($new_password && $retype_password  !== "") {
    if ($new_password !== $retype_password) {
?>
      <script>
        alert('Both strings are not equal');
      </script>

    <?php

    } else {
      require_once('dbcon.php');
      $password = $_POST['new_password'];
      $password = $_POST['retype_password'];

      $reset_password = password_hash($password, PASSWORD_DEFAULT); //Function for encrypt password
      $query = mysqli_query($con, "UPDATE `user` SET `password` = '".$reset_password."' WHERE `role` = 'admin'");

    ?>
      <script type="text/javascript">
        window.location.href = "thank_you.php";
      </script>
    <?php

    }
  } else {
    ?>
    <script>
      alert("fields are blank");
    </script>
<?php
  }
}
?>
<?php include 'footer.php'; ?>