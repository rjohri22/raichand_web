<?php include '../sidebar.php';

// require_once "config.php";
// echo $_GET['id']; exit;
// $question= $answer= $tag= "";
if(isset($_GET['id']))
{
    $q  = "select * FROM invest_category where id = ".$_GET['id'];
    $item = $con->query($q);
    $rm = mysqli_fetch_assoc($item);
    
}
else {
    echo "<script>window.location.href='".SITE_URL."admin/invester/cindex.php';</script>";
}

if (isset($_POST['submit']))
 {

	$invester_category = $_POST["invester_category"];
	$id = $_POST["id"];

	// $answer = $_POST["answer"];
	// $tag = $_POST["tag"];
	// $order_num = $_POST["order_num"];
    
    $sql = "Update invest_category set invester_category ='$invester_category' where id = ".$id;

    // Modify 25/8/2022 
    $row = $con->query($sql);
    if ($row) {

        echo "<script>$(document).ready(function(){
            setSuccessAlert('" . SITE_URL . "admin/invester/cindex.php','Good job!','Data Updated successfully'); 
        });</script>";
        
    } else {
        echo "<script>$(document).ready(function(){
            setSuccessAlert('" . SITE_URL . "admin/invester/cindex.php','Good job!','Sorry Data Not Updated'); 
        });</script>";
    } 
}
// Modify 25/8/2022 
?>

<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Investor Category</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                         <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Investor Category</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
    <form method="POST" enctype="multipart/form-data" >
		<div class="container" style="margin-top: 40px;" >
			<div id="content">
			<div class="row">
				<div class="col-md-8">
					<label for="invester_category">Invester Category</label>
					<input type="hidden" class="form-control" name="id" value="<?php echo $rm['id']; ?>" required><br>
					<input type="text" class="form-control" name="invester_category" value="<?php echo $rm['invester_category']; ?>" required><br>
					<input type="submit" class="btn btn-warning text-white" name="submit" value="Submit">                  
                    <!--------- Modify 25/8/2022 start -------->
                                <a href="cindex.php"><button type="button" class="btn btn-warning text-white">Cancel</button></a>
                    <!-------- Modify 25/8/2022 end -------->
                </div>
            </div>
            </div>
	</form>
    </div>
</div>
<!-- Modify 25/8/2022  -->
<?php include '../footer.php';?>