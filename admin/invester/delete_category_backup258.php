<?php
include("../../dbcon.php");

$new_id= $_GET['id'];

$sql = "DELETE FROM invest_category WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");

header("location: /trg-portal/invester/cindex.php");

mysqli_close($con);
?>
