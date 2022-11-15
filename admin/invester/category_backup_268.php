<?php include '../sidebar.php';
include("../../dbcon.php");?>
<?php

$invester_category= "";


if (isset($_POST["submit"]))

 {
	$invester_category = $_POST['invester_category'];

	$sql = "INSERT INTO invest_category(`invester_category`) VALUES('".$invester_category."')";

	$row = $con->query($sql);
    // Modify 25/8/2022 
	if ($row)
	 {
        echo "<script>window.location.href='".SITE_URL."admin/invester/cindex.php';</script>";
        exit;	
	}else
	{
        echo "Data not posted". $sql;		
	}
}
// Modify 25/8/2022 
?>

<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Press Release</h4>
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
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
		<div class="container" style="margin-top: 40px;" >
			<div id="content">
			<div class="row">
				<div class="col-md-8">
					<label for="invester_category">Invester category:</label>
					<input type="text" class="form-control" name="invester_category" required><br>
					<input type="submit" class="btn btn-success" name="submit" value="Submit">                  
                    <!--------- Modify 25/8/2022 start -------->
                                <a href="/admin/invester/cindex.php"><button type="button" class="btn btn-outline-success">Cancel</button></a>
                    <!-------- Modify 25/8/2022 end -------->
                </div>
            </div>
            </div>
	</form>
    </div>
</div>
<!-- Modify 25/8/2022  -->
<?php include '../footer.php';?>