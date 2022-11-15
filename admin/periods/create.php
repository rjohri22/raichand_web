<?php include '../sidebar.php';
include("../../dbcon.php");?>
<?php

$category= "";


if (isset($_POST["submit"]))

 {
	$periods = $_POST['periods'];

	$sql = "INSERT INTO periods(`periods`) VALUES('".$periods."')";

	$row = $con->query($sql);
    if ($row) {

        echo "<script>$(document).ready(function(){
            setSuccessAlert('" . SITE_URL . "admin/periods/index.php','Good job!','Data submitted successfully'); 
        });</script>";
        
    } else {
        echo "<script>$(document).ready(function(){
            setSuccessAlert('" . SITE_URL . "admin/periods/index.php','Good job!','Sorry Data Not submitted'); 
        });</script>";
    }
?>
    <!-- <script>window.location.href="<?php //echo SITE_URL;?>admin/periods/index.php"; </script> -->
<?php	
    //header("location: /admin/press-release/cindex.php");
    
}


?>

<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Periods</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                         <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Press Release</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <div>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
		<div class="container" style="margin-bottom: 20px;" >
			<div id="content">
			<div class="row">
				<div class="col-md-8">
					<label for="periods">Periods</label>
					<input type="text" class="form-control" name="periods" placeholder="2020-2022"><br>
					<input type="submit" class="btn btn-success" name="submit" value="Submit"> 
                    <!-- Modify 24/8/2022 start -->
                    <a href="/admin/periods/index.php"><button type="button" class="btn btn-outline-success">Cancel</button></a>
                    <!-- Modify 24/8/2022 end -->
				</div>
			</div>
			</div>
		</div>
		</form>
		</div>
	
    </div>
</div>


<?php include '../footer.php';?>