<?php 
include '../sidebar.php'; ;?>
<?php
// include("config.php");

$sql = "SELECT * FROM `cat`  ORDER by id desc";
$result = mysqli_query($con,$sql);

?>
<?php 
if(isset($_GET['delete'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/policies/cindex.php','Good job!','Data Deleted successfully'); 
    });</script>";
}

?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Our Businesses</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Our Businesses</a></li>
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
                            <h3 class="box-title">Our Businesses</h3>
                        </div>
                        <div class="d-flex">
                            
                        <!-- <div class="col-md-6" align="left">
                            <a href="category.php"><button type="button" class="btn btn-primary btn-sm">ADD</button></a>
                        </div> -->
                        <!-- Modify 25/8/2022 start -->
                        <div class="col-md-12" align="right">
                            <a href="category.php"><button type="button" class="btn btn-primary btn-sm">ADD BUSINESS</button></a>
                            <a href="<?php echo SITE_URL;?>admin/"><button type="button" class="btn btn-primary btn-sm">BACK</button></a>
                        </div>
                        <!-- Modify 25/8/2022 end -->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>	
                            <tr>
                                <th class="border-top-0">Business Name</th>
                                <th class="border-top-0">Child/Perenrt</th>
                                <th class="border-top-0">Order</th>
                                <th class="border-top-0">Filename</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (mysqli_num_rows($result)>0)
                                {
                                    while ($row =mysqli_fetch_assoc($result))
                                    {
                                        $folder = "image/".$row['filename'];
                                        // print_r($folder); exit;
                                    ?>
                                <tr>
                                    <td><?php echo $row['categories']; ?></td>
                                    <td><?php echo $row['parent_id']; ?></td>
                                    <td><?php echo $row['bname_order']; ?></td>
                                    <!-- <td><?php //echo $row['filename']; ?></td> -->
                                    <td><img src="<?= $folder; ?>" alt="" hight="50px" width="50px"></td>   
                                    <td>
                                        <a class="btn btn-info" href="edit_policies.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit" style="color: #fff;"></a>
                                        <a class="btn btn-danger" onclick="setdltAlert('delete_policies.php?id=<?php echo $row['id']; ?>')"><i class="fa fa-trash" style="color: #fff;"></a>
                                        <!-- href="delete_policies.php?id=<?php echo $row['id']; ?>" -->
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
    <?php include './../footer.php';?>