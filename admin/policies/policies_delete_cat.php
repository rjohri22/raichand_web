<?php
include("../../dbcon.php");

 $new_id= $_GET['id'];

 $sql = "DELETE FROM policies_cat WHERE id = {$new_id}"; 

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");

header("location: /admin/policies/categories_list.php");

mysqli_close($con);
?>
