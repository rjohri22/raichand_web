<?php include '../sidebar.php'; ?>

<?php
// echo "dfgdfgdfg"; exit;
// include("config.php");
include("../../dbcon.php");

$newid = $_GET['id'];
$job_flag = $_GET['job_flag'];
$role = $_GET['role'];
$location = $_GET['location'];
$applicant = $_GET['applicant'];
$job_type = $_GET['job_type'];
$job_id = 'ABCD'.rand(10000000,100);
$created_by = 'administrator';
$hierarchy_band = $_GET['hierarchy_band'];
$reporting_manager = $_GET['reporting_manager'];
$responsibilities = $_GET['responsibilities'];
$work_type = $_GET['work_type'];
$work_shift = $_GET['work_shift'];
$pay_range1 = $_GET['pay_range1'];
$pay_range2 = $_GET['pay_range2'];
//$pay_range = '₹'. $pay_range1 . '-'. '₹' .$pay_range2 . 'per anum';
$eligibility_criteria = $_GET['eligibility_criteria'];  
$created_on = date('Y-m-d'); 

 $sql = "UPDATE jobcareer SET `job_flag`='" . $job_flag . "',
							`role`='" . $role . "',
							`location`='" . $location . "',
							`applicant`='" . $applicant . "',
							`job_type`='" . $job_type . "',
							`job_id`='" . $job_id . "',
							`created_by`='" . $created_by . "',
							`hierarchy_band`='" . $hierarchy_band . "',
							`work_type`='" . $work_type . "',
							`work_shift`='" . $work_shift . "',
							`pay_range1`='" . $pay_range1 . "',
							`pay_range2`='" . $pay_range2 . "',
							`eligibility_criteria`='" . $eligibility_criteria . "',
							`created_on`='" . $created_on . "' WHERE id='" . $newid . "'"; 

$res = mysqli_query($con, $sql);

if ($res) { ?>
<script type="text/javascript">window.location.href="<?php echo SITE_URL;?>admin/jobcareer/jobindex.php"; </script>

  <!-- <script type="text/javascript">
            window.location.href = "jobindex.php";
	</script> -->

<?php
	// header("location :http://local.raichandgroup.com/etamplate/");
} else {
	echo "Data not posted" . $sql;
}


?>