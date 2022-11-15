<?php
include("../../dbcon.php");

$new_id= $_GET['id'];

$sql = "DELETE FROM periods WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");

header("location: /admin/periods/index.php");

mysqli_close($con);
?>
