<?php 
include '../sidebar.php'; ?>
<?php


$sql = "SELECT * FROM `service` WHERE `is_del` = 0 ORDER BY id desc";
// $queryServices =  $con->query("SELECT * FROM `cat`");
//                                         if ($queryServices->num_rows > 0) {
//                                             while ($rowServices = $queryServices->fetch_assoc()) {                                                
//                                                 $childCat = array_filter(explode(',', $rowServices['categories']));                                                                                      
//                                                 // print_r($childCat); exit;
//                                             }
//                                         }
$result = mysqli_query($con, $sql);

// $result = $con->query($sql);

?>

<?php
if(isset($_GET['insert'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/service_creation/','Good job!','Data Submitted successfully'); 
    });</script>";
}
if(isset($_GET['update'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/service_creation/','Good job!','Data Updated successfully'); 
    });</script>";
}
if(isset($_GET['delete'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/service_creation/','Good job!','Data Deleted successfully'); 
    });</script>";
}
?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Service Creation</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Service Creation</a></li>
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
                            <h3 class="box-title">Service Creation</h3>
                        </div>
                        <!-- <div class="d-flex"> -->

                            <!-- <div class="col-md-6" align="left">
                                <a href="cindex.php"><button type="button" class="btn btn-primary btn-sm">CREATE</button></a>
                            </div> -->
                            <div class="col-md-6" align="right">
                                <a href="service_add.php"><button type="button" class="btn btn-warning text-white">ADD SERVICE</button></a>
                                <a href="../"><button type="button" class="btn btn-warning text-white">BACK</button></a>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Sr.No</th>
                                    <th class="border-top-0">Service Title</th>
                                    <!-- <th class="border-top-0">Service Url</th> -->
                                    <!-- <th class="border-top-0">Category</th> -->
                                    <th class="border-top-0">Modify</th>
                                    <!-- <th class="border-top-0">Short Des</th> -->
                                    <!-- <th class="border-top-0">Long Des</th> -->
                                    <th class="border-top-0">Feature Image</th>

                                    <th class="border-top-0">Breadcum Image</th>

                                    <!-- <th class="border-top-0">Tag</th> -->
                                    <th class="border-top-0">Categories</th>
                                    <th class="border-top-0" colspan="2" width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                // print_r($result);exit;
                                if ($result->num_rows > 0) {
                                    $count = 0;
                                    while ($row = $result->fetch_assoc()) {
                                        $count ++;
                                ?>

                                        <tr>

                                            <td><?= $count; ?></td>
                                            <td><?= $row['service_title']; ?></td>
                                            <!-- <td><?= $row['service_url']; ?></td> -->
                                            <!-- <td><?= $row['category']; ?></td> -->
                                            <td><?= $row['modify']; ?></td>
                                            <!-- <td><?= $row['short_description']; ?></td> -->
                                            <!-- <td><?= $row['long_description']; ?></td> -->
                                            <td><img src="<?= SITEURL.'uploadimg'.'/'.$row['images']; ?>" alt="" hight="50px" width="50px"></td>

                                            <td><img src="<?= SITEURL.'uploadimg'.'/'.$row['image_detail']; ?>" alt="" hight="50px" width="50px"></td>

                                            <!-- <td><?//= $row['tag']; ?></td> -->
                                            
                                            <td>
                                                <!-- <?//= $row['cat_f']; ?> -->
                                                <?php 
                                                $sql1 = "SELECT * FROM `cat`";
                                                $result1 = mysqli_query($con, $sql1);
                                                // $row_cat = mysqli_fetch_assoc($result1);
                                                // print_r($result1);exit;
                                                // $array[] = $row['cat_f'];
                                                $childCat = array_filter(explode(',', $row['cat_f']));
                                                // print_r($childCat); exit;
                                                if ($result1->num_rows > 0) {                                                 
                                                    while ($row1 = $result1->fetch_assoc()) {
                                                        // foreach($childCat as $cat){
                                                            if (in_array($row1['id'], $childCat))
                                                            {
                                                            echo  $row1['categories'].',';
                                                            } 
                                                            // if($childCat=$row_cat['id']){
                                                            //    echo $row_cat['categories'];
                                                            // //    print_r($array);
                                                            // }
                                                        // }
                                                        // print_r($array);exit;

                                                    }
                                                }
                                            
                                            ?>
                                            </td>
                                            <td>
                                            <!-- <input type="submit" class="btn btn-success" name="submit" value="submit"></input> -->
                                            <!-- <?php //echo $row['id']; exit;?> -->
                                                <a href="update.php?edit_id=<?= $row['id']; ?>"><button type="button" class="btn"><img src="https://cdn.pixabay.com/photo/2017/06/06/00/33/edit-icon-2375785_1280.png" style="height:40px;width:40px"/></button></a>
                                                <a onclick="setdltAlert('delete.php?delete_id=<?= $row['id']; ?>')"><button type="button" class="btn"><img src="http://cdn.icon-icons.com/icons2/1808/PNG/512/trash-can_115312.png" style="height:40px;width:40px"/></button></a>
                                                <!-- <a onclick="return confirm('are you sure?')" href="delete.php?delete_id=<?= $row['id']; ?>"><button type="button" class="btn btn-danger"><i class='fas fa-trash-alt' style="color: #fff;"></i></button></a> -->

                                            </td>



                                        </tr>
                                <?php
                                }
                                   
                                } else {
                                    echo "0 results";
                                }
                                // mysqli_close($conn);
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../footer.php'; ?>