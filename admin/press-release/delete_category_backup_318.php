<?php
include("../../dbcon.php");

$new_id= $_GET['id'];

$sql = "DELETE FROM press_category WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");

header("location: /admin/press-release/cindex.php");

mysqli_close($con);
?>
