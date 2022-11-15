<?php include '../sidebar.php';

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
                            <a href="cindex.php"><button type="button" class="btn btn-warning text-white">ALL CATEGORIES</button></a>
                            <a href="invester.php"><button type="button" class="btn btn-warning text-white">ADD INVESTOR</button></a>
                            <a href="../"><button type="button" class="btn btn-warning text-white">BACK</button></a>
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
                            <td><?php echo $row['bname'];?></td>
                            <td><?php echo $row['invester_category'];?></td>
                            <td>
                                <a class="btn" href="invester_edit.php?id=<?php echo $row['id'];?>"><img src="https://cdn.pixabay.com/photo/2017/06/06/00/33/edit-icon-2375785_1280.png" style="height:40px;width:40px"/></a>   
                                <a class="btn" onclick="setdltAlert('delete.php?id=<?php echo $row['id']; ?>')"><img src="https://cdn.icon-icons.com/icons2/1808/PNG/512/trash-can_115312.png" style="height:40px;width:40px"/></a>
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