<?php include '../sidebar.php'; ?>

<?php
include("../../dbcon.php");

// echo "<pre>";print_r($_POST);exit;
$id = $_POST["id"];
$newcategory = $_POST['newcategory'];

// print_r($_GET["id"]);exit;


$sql = "UPDATE press_category SET `category`='" . $newcategory . "'  WHERE id='" . $id . "'";

$res = mysqli_query($con, $sql);

if ($res) { ?>

	<script type="text/javascript">
		window.location.href = "cindex.php";
	</script>

<?php
	
} else {
	echo "Data not posted" . $sql;
}


?>