<?php
// include("config.php");
include("../../dbcon.php");
if(isset($_GET['id']))
{
$new_id= $_GET['id'];
// echo $new_id;exit;

$sql = "DELETE FROM jobcareer WHERE id = {$new_id}";

$result = mysqli_query($con, $sql);

}

$newURL = SITEURL."admin/jobcareer/jobindex.php";
header('Location: '.$newURL);
die();	
?>
