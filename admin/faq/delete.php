
<?php
include("../../dbcon.php");
// Modify 25/8/2022 
// Process delete operation after confirmation
if(!empty($_GET["id"])){
    
    $param_id = trim($_GET["id"]);

    // Include config file
    // require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM faq WHERE id = ".$param_id;
    $result = mysqli_query($con, $sql) or die(" Query unsuccessful.");
    

    echo "<script type='text/javascript'>
    window.location.href = 'index.php?delete=done';
    </script>";
    // if ($result) {
    //     // echo "<script>alert('Category Updated successfully')</script>";
    //     // -----Modify 25/8/2022 start------//
    //     echo "<script>window.location.href='".SITEURL."admin/faq/';</script>";
    //     exit;
    //     // -----Modify 25/8/2022 end------//

    // } else {
    //     echo "data not posted".$sql;
    // }






















    
}
?>
