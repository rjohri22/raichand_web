<?php
include("../../dbcon.php");

$new_id= $_GET['id'];

$sql = "DELETE FROM invest_category WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");
// Modify 25/8/2022 
// header("Location: ".SITEURL."admin/invester/cindex.php");exit();

mysqli_close($con);
echo "<script type='text/javascript'>
window.location.href = 'cindex.php?delete=done';
</script>";
?>
