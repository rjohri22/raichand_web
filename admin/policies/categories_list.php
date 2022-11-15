<?php include '../sidebar.php';?>
<?php
include("../../dbcon.php");

$sql = "SELECT * FROM policies_cat ORDER BY id desc";
$result = mysqli_query($con, $sql);

?>
<?php
if(isset($_GET['delete'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/policies/categories_list.php','Good job!','Data Deleted successfully'); 
    });</script>";
}
?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Policies</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                         <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Policies</a></li>
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
                            <h3 class="box-title">Policies</h3>
                        </div>
                        <div class="d-flex">
                            
                        <!-- <div class="col-md-6" align="left">
                            <a href="cindex.php"><button type="button" class="btn btn-primary btn-sm">CREATE</button></a>
                        </div> -->
                        
                        <div class="col-md-12" align="right">
                            <a href="policies_add_cat.php"><button type="button" class="btn btn-primary btn-sm">ADD CATEGORY</button></a>
                            <!-- <a href="policies.php"><button type="button" class="btn btn-primary btn-sm">ADD</button></a> -->
                             <!-- Modify 24/8/2022 start -->
                             <a href="/admin/policies/"><button type="button" class="btn btn-primary btn-sm">BACK</button></a>
                            <!-- Modify 24/8/2022 end -->
                        </div>
                        
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Id</th>
                                    <th class="border-top-0">Category</th>
                                    <th class="border-top-0" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (mysqli_num_rows($result)>0)
                            { $counter = 0;
                                while ($row=mysqli_fetch_assoc($result))
                                {
                                    $counter++;
                            ?>
                            <tr>
                                <td><?php echo $counter;?></td>
                                <!-- <td><?php //echo $row['categories'];?></td> -->
                                <td><?php echo $row['policies_categories'];?></td>
                                <td>
                                    <a class="btn btn-info" href="policies_edit_cat.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit" style="color: #fff;"></a>
                                    <a class="btn btn-danger" onclick="setdltAlert('policies_delete_cat.php?id=<?php echo $row['id']; ?>')"><i class="fa fa-trash" style="color: #fff;"></a>
                                    <!-- <a class="btn btn-danger" onclick="return confirm('are you sure?')"  href="policies_delete_cat.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash" style="color: #fff;"></a> -->
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
</div>
<?php include '../footer.php';?>