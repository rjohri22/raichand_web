<?php include '../sidebar.php';
include("../../dbcon.php"); ?>

<?php
// echo "<pre>"; print_r($_POST);exit;
//  include("config.php");
$newid = $_POST['id'];

$new_title = $_POST['new_title'];
$new_content = $_POST['content'];
$new_email_type = $_POST['new_email_type'];
$new_is_active = $_POST['is_avtive'];
// echo $new_is_active;exit;

if ($new_is_active == 1) {
	
	$sql = "SELECT * FROM `emailtemplate` WHERE `is_active`= 1 AND `email-type`= '" . $new_email_type . "' ";
	$result = mysqli_query($con, $sql) or die("Query failed:");
	if (mysqli_num_rows($result) > 0) {
// echo "fsdsdfds";exit;
		echo "<script type='text/javascript'>
		window.location.href = 'index.php?id=" . $newid . "';
	</script>";
	}
	else{
		$sql = "UPDATE emailtemplate SET `title`='" . $new_title . "', `content`= '" . $new_content . "',
	`email-type`='" . $new_email_type . "',`is_active`='" . $new_is_active . "' WHERE id='" . $newid . "'";

	$res = mysqli_query($con, $sql);
	echo "<script type='text/javascript'>
	window.location.href = 'index.php?update=done';
</script>";
	}
} else {
	// echo "bbb"; exit;
	$sql = "UPDATE emailtemplate SET `title`='" . $new_title . "', `content`= '" . $new_content . "',
	`email-type`='" . $new_email_type . "',`is_active`='" . $new_is_active . "' WHERE id='" . $newid . "'";

	$res = mysqli_query($con, $sql);
	echo "<script type='text/javascript'>
	window.location.href = 'index.php?update=done';
</script>";
}
?>
<?php /*
if ($res) { ?>

	<script type="text/javascript">
		window.location.href = "index.php?update=done";
	</script>

<?php
} else {
	echo "Data not posted" . $sql;
}
*/
?>