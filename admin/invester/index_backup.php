<?php include '../sidebar.php';
include("../../dbcon.php");?>
<?php
// include("config.php");

$sql = "SELECT * FROM `invester_relation` ORDER BY id desc";
$result = mysqli_query($con, $sql);

?>
<?php
if(isset($_GET['delete'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/invester/','Good job!','Data Deleted successfully'); 
    });</script>";
}
?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"> Investors Relation</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Investors Relation</a></li>
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
                            <h3 class="box-title">Investors Relation</h3>
                        </div>
                        <div class="d-flex">
                          <!-------- Modify 26/8/2022 START -------->  
                        <div class="col-md-12" align="right">
                            <a href="cindex.php"><button type="button" class="btn btn-primary btn-sm">ALL CATEGORIES</button></a>
                            <a href="invester.php"><button type="button" class="btn btn-primary btn-sm">ADD INVESTOR</button></a>
                            <a href="/admin"><button type="button" class="btn btn-primary btn-sm">BACK</button></a>
                        </div>
                        <!-------- Modify 26/8/2022 END-------->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
								<tr>
									<th class="border-top-0">Document Title</th>
									<th class="border-top-0">Document Type</th>
									<th class="border-top-0">Period</th>
									<th class="border-top-0">Bussiness Name</th>
									<th class="border-top-0">Investor Category</th>
									<th class="border-top-0">Action</th>
								</tr>
                            </thead>
                            <tbody>
                            <?php if (mysqli_num_rows($result)>0)
                                {
                                    while ($row=mysqli_fetch_assoc($result))
                                    {
                                        $folder = "image/".$row['file_type'];
                                ?>
                                <tr>
                            <td><?php echo $row['title'];?></td>
                            <td><?php echo $row['file_type'];?></td>
                            <td><?php 
                                    $sql1 = "SELECT * FROM periods ORDER BY id DESC ";
                                    $result1 = mysqli_query($con, $sql1);
                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                        if($row1['id'] ==   $row['year'])
                                        {

                                            echo $row1['periods'];
                                        }
                                    }   
                                    ?>
                            </td>
                            <!-- <td><?php //echo $row['year'];?></td> -->
                            <td>
                            <?php 
                                    $sql1 = "SELECT * FROM cat ORDER BY id DESC ";
                                    $result1 = mysqli_query($con, $sql1);
                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                        if($row1['id'] == $row['bname'])
                                        {

                                            echo $row1['categories'];
                                        }
                                    }
                                    ?>
                            </td><td><?php 
                                    $sql1 = "SELECT * FROM invest_category ORDER BY id DESC ";
                                    $result1 = mysqli_query($con, $sql1);
                                    // echo $row1['invester_category']; exit;
                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                        if($row1['id'] == $row['invester_category'])
                                        {
                                            echo $row1['invester_category'];
                                        }
                                    }
                                    ?></td>
                            <td>
                                <a class="btn btn-info" href="invester_edit.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit" style="color: #fff;"></a>   
                                <a class="btn btn-danger" onclick="setdltAlert('delete.php?id=<?php echo $row['id']; ?>')"><i class="fa fa-trash" style="color: #fff;"></a>
                                <!-- <a class="btn btn-danger" onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash" style="color: #fff;"></a> -->

                </td>
	            </tr>
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
</div>
<?php include '../footer.php';?>