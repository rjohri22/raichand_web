<?php include '../sidebar.php';
include("../../dbcon.php");?>
<?php
// include("config.php");

$sql = "SELECT * FROM faq order by id desc";

$result = $con->query($sql);

?>
<?php
if(isset($_GET['delete'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/faq/','Good job!','Data Deleted successfully'); 
    });</script>";
}
?>

<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">FAQ</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                    <!-- Modify 25/8/2022  -->
                         <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">FAQ</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-title">FAQ</h3>
                        </div>
                        <div class="col-md-6" align="right">
                            <a href="faq.php"><button type="button" class="btn btn-primary btn-sm">ADD</button></a>
                            <a href="/admin"><button type="button" class="btn btn-primary btn-sm">BACK</button></a> <!-------- Modify 26/8/2022 -------->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Question</th>
                                    <th class="border-top-0">Answer</th>
                                    <th class="border-top-0">Category</th><!-------- Modify 26/8/2022 -------->
                                    <th class="border-top-0">Order No</th><!-------- Modify 26/8/2022 -------->
                                    <th class="border-top-0" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (mysqli_num_rows($result)>0)
							
						 {
						 	while ($row=mysqli_fetch_assoc($result)) 

						 	{						 		
						 		?>
						 		<tr>
						 			<td><?php echo $row['question']; ?></td>
						 			<td><?php echo $row['answer']; ?></td>
						 			<td><?php echo $row['tag']; ?></td>
						 			<td><?php echo $row['order_num']; ?></td>
						 			<td><a class="btn btn-info" href="edit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit" style="color: #fff;"></i></a>
						 			    <a class="btn btn-danger" onclick="setdltAlert('delete.php?id=<?php echo $row['id']; ?>     ')"><i class="fa fa-trash" style="color: #fff;"></i></a>
						 			    <!-- <a class="btn btn-danger" onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash" style="color: #fff;"></i></a> -->

                                    </td>

						 		</tr>
						 		<?php 
						 	}
						 }
						 ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../footer.php';?>