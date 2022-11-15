<?php include '../sidebar.php';
include("../../dbcon.php");?>
<?php


// $sql = "SELECT * FROM press_release";
// $result = mysqli_query($con,$sql);


$insert = "SELECT * FROM press_category LEFT JOIN press_release ON press_category.category = press_release.category_id;";
$result = mysqli_query($con,$insert);

if(mysqli_num_rows($result) > 0){
    $pooja  = mysqli_fetch_assoc($result);
}
?>
<?php
if(isset($_GET['delete'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/press-release/index.php','Good job!','Data Deleted successfully'); 
    });</script>";
}
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
                            
                        <!-- <div class="col-md-6" align="left">
                            <a href="cindex.php"><button type="button" class="btn btn-primary btn-sm">CREATE</button></a>
                        </div>
                        <div class="col-md-6" align="right">
                            <a href="press-release.php"><button type="button" class="btn btn-primary btn-sm">ADD</button></a>
                        </div> -->

                        <div class="col-md-12" align="right">
                            <a href="cindex.php"><button type="button" class="btn btn-primary btn-sm">ALL CATEGORIES</button></a>
                            <a href="press-release.php"><button type="button" class="btn btn-primary btn-sm">ADD</button></a>
                            <a href="/admin"><button type="button" class="btn btn-primary btn-sm">BACK</button></a>
                        </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">File Name</th>
                                    <th class="border-top-0">File Size</th>
                                    <th class="border-top-0">File Type</th>
                                    <th class="border-top-0">Year</th>
                                   
                                    <th class="border-top-0">Category</th>
                                    <th class="border-top-0">Tags</th>
                                    <th class="border-top-0" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>


                            
                            <?php 
                            
                            $pressCategory = "SELECT * FROM `press_category`";

                            $pressCatResult = $con->query($pressCategory);
            
                            foreach ($pressCatResult as $catKey => $catValue) {
                                // echo "<pre>"; print_r($catValue['id']);
                                $stm = "SELECT * FROM `press_release` WHERE category_id = '" . $catValue['id'] . "' ORDER BY id DESC";
                                $result = $con->query($stm);
                                // print_r($result);exit;

                            if (mysqli_num_rows($result)>0)
                                {
                                    while ($row =mysqli_fetch_assoc($result))
                                    {
                                        $folder = "image/".$row['file_type'];
                                    ?>
                                <tr>
                                    <td><?php echo $row['file_name']; ?></td>
                                     <!-- Modify 24/8/2022 start -->
                                    <td><?php //echo $row['file_size']; ?>
                                        <?php
                                            $bytes = round($row['file_size'],2);

                                        //    echo  $bytes;exit;
                                            if ($bytes >= 1073741824) {
                                                $bytes_size = ($bytes/1073741824);
                                                $file_size = number_format($bytes_size, 2)."GB";

                                            } else if ($bytes >= 1048576) {
                                                $bytes_size = ($bytes / 1048576);
                                                $file_size = number_format($bytes_size, 2)." MB";

                                            } else if ($bytes >= 1024) {
                                                $bytes_size = ($bytes / 1024);
                                                $file_size = number_format($bytes_size, 2)  . " KB";
                                            } else if ($bytes > 1) {
                                                $bytes_size = $bytes;
                                                $file_size = number_format($bytes_size, 2) . " bytes";
                                            } else if ($bytes == 1) {
                                                $bytes_size = $bytes;
                                                $file_size = number_format($bytes_size, 2) . " byte";
                                            } else {
                                                $file_size = "0 bytes";
                                            }
                                            echo $file_size;
                                        ?>                  
                                    </td>
                                     <!-- Modify 24/8/2022 end -->
                                        <td><?php echo $row['file_type']; ?></td>
                                        <td><?php echo $row['year']; ?></td>
                                    
                                        <td><?php echo $catValue['category']; ?></td>
                                        <td><?php echo $row['tags']; ?></td>
                                        <td><a class="btn btn-info" href="edit.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit" style="color: #fff;"></i></a>
                                        <a class="btn btn-danger" onclick="setdltAlert('delete.php?deleteid=<?php echo $row['id'];?>')"><i class="fa fa-trash" style="color: #fff;"></i></a></td>
                                        <!-- <a class="btn btn-danger" onclick="return confirm('are you sure !')" href="delete.php?deleteid=<?php echo $row['id'];?>"><i class="fa fa-trash" style="color: #fff;"></i></a></td> -->

                                </tr>
                                <?php 
                                }
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