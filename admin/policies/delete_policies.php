<?php
// include("config.php");
include("../../dbcon.php");

$new_id= $_GET['id'];

$sql = "DELETE FROM cat WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");

// header("location: /admin/policies/cindex.php");

mysqli_close($con);
echo "<script type='text/javascript'>
window.location.href = 'cindex.php?delete=done';
</script>";
?>
