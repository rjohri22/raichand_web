<?php
// include("config.php");

include("../../dbcon.php");


$new_id= $_GET['id'];

$sql = "DELETE FROM contact_us WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");

// header("location:/raichandgroup/admin/contactus");

mysqli_close($con);

$newURL = SITEURL."admin/contactus";
header('Location: '.$newURL);
die();
?>
