<?php
include("../../dbcon.php");

$new_id= $_GET['id'];

$sql = "DELETE FROM invester_relation WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");

header("location: /admin/invester/");

mysqli_close($con);
?>
