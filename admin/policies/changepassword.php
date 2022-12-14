<?php
 include '../sidebar.php'; 

?>
<style>
    body {
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style>
<?php
//  include("config.php");

$categories = $filename = $msg = "";

if (isset($_POST["submit"])) {

    $plaintext_password=$_POST["new_password"];
    $confirm_new_password=$_POST["confirm_new_password"];

    if($plaintext_password!=$confirm_new_password){
        echo "<script>$(document).ready(function(){
            setSuccessAlert('" . SITE_URL . "admin/policies/changepassword.php','Password Mismatch','Password and Confirm New Password does not match','error'); 
        });</script>";
 
    }
    else{
            $hash = password_hash($plaintext_password,   PASSWORD_DEFAULT);

            $sql_query="update user set password='".  $hash ."'";
        
        
            $row = $con->query($sql_query);

            if($row ){
                echo "<script>$(document).ready(function(){
                    setSuccessAlert('" . SITE_URL . "admin/policies/changepassword.php','Password Changed','Data Updated successfully'); 
                });</script>";
            }
        
            
    }



}

?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Change Password</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Change Password</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <form method="POST" action="#" enctype="multipart/form-data">
            <div class="container" style="margin-top: 20px">
                <div class="row">
                    <div class="col-md-8">
                        <label for="categories">New Password:</label><br>
                        <input type="password"  maxlength="15" class="form-control" name="new_password" required><br>

                        <label for="categories">Confirm New Password:</label><br>
                        <input type="password" maxlength="15" class="form-control" name="confirm_new_password" required><br>


                 
                        <input type="submit" class="btn btn-warning text-white" name="submit" value="Submit">
                        <!-- Modify 24/8/2022 start -->
                        <a href="<?php echo SITE_URL;?>admin/"><button type="button" class="btn btn-warning text-white">Cancel</button></a>
                        <!-- Modify 24/8/2022 end -->
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>
<script>
    //  $(document).ready(function() {

    //         Swal.fire(
    //             'Good job!',
    //             'You clicked the button!',
    //             'success'
    //             )

    //  });
</script>
<?php include '../footer.php'; ?>