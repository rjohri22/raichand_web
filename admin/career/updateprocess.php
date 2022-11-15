<?php include '../sidebar.php'; ?>

<?php
include "../../dbcon.php";
$newid = $_GET['id'];

$new_role = $_GET['new_role'];

// $new_is_active;exit;


$sql = "UPDATE career SET `role`='" . $new_role . "' WHERE id='" . $newid . "'";

$res = mysqli_query($con, $sql);

if ($res) { ?>

	<script type="text/javascript">
		window.location.href = "careerindex.php";
	</script>

<?php
	// header("location :http://local.raichandgroup.com/etamplate/");
} else {
	echo "Data not posted" . $sql;
}


?>