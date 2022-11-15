<?php include '../sidebar.php';
include("../../dbcon.php"); ?>

<?php
// include("config.php");
$newid = $_GET['id'];

$new_title = $_GET['new_title'];
$new_content = $_GET['content'];
$new_is_active = $_GET['is_avtive'];

// $new_is_active;exit;
$new_email_type = $_GET['new_email_type'];

$sql = "UPDATE emailtemplate SET `title`='" . $new_title . "', `content`= '" . $new_content . "',
 `email-type`='" . $new_email_type . "',`is_active`='" . $new_is_active . "' WHERE id='" . $newid . "'";

$res = mysqli_query($con, $sql);

if ($res) { ?>

	<script type="text/javascript">
		window.location.href = "index.php?update=done";
	</script>

<?php
} else {
	echo "Data not posted" . $sql;
}
?>