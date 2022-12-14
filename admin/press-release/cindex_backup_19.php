<?php include '../sidebar.php';
include("../../dbcon.php");?>
<?php
if(isset($_GET['update'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/press-release/cindex.php','Good job!','Data Updated successfully'); 
    });</script>";
}

if(isset($_GET['delete'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/press-release/cindex.php','Good job!','Data Deleted successfully'); 
    });</script>";
}

$sql = "SELECT * FROM `press_category` ORDER by id desc";
$result = mysqli_query($con,$sql);

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
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-title">Press Release</h3>
                        </div>
                        <div class="d-flex">
                            
                        
                        
                        <!-- Modify 24/8/2022 start -->
                        <div class="col-md-12" align="right">
                            <a href="create.php"><button type="button" class="btn btn-primary btn-sm">ADD CATEGORY</button></a>
                            <a href="/admin/press-release/"><button type="button" class="btn btn-primary btn-sm">BACK</button></a>
                        </div>
                        <!-- Modify 24/8/2022 end -->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Category</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (mysqli_num_rows($result)>0)
                                {
                                    while ($row =mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $row['category']; ?></td>
                                    <td>
                                        <a class="btn btn-info" onclick="return" href="Edit_category.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit" style="color: #fff;"></a>    
                                        <a class="btn btn-danger" onclick="setdltAlert('delete_category.php?id=<?php echo $row['id']; ?>')"><i class="fa fa-trash" style="color: #fff;"></a></td>
                                        <!-- <a class="btn btn-danger" onclick="return confirm('are you sure?')" href="delete_category.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash" style="color: #fff;"></a></td> -->

                                    </td>
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