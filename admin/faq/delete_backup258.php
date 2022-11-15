
<?php
// Process delete operation after confirmation
if(!empty($_GET["id"])){
    
    $param_id = trim($_GET["id"]);

    // Include config file
    require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM faq WHERE id = ".$param_id;
    
    if($stmt = mysqli_query($con, $sql)){
        // Records deleted successfully. Redirect to landing page
        header("location: <?php echo SITE_URL;?>admin/faq/");
        exit();    
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
