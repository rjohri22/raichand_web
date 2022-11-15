<?php
include "../../dbcon.php";

$new_id= $_GET['id'];
// echo $new_id;exit;

$sql = "DELETE FROM career WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");
?>
<script>
    window.location.href='careerindex.php';
</script>

<?php


mysqli_close($con);
?>
