<?php
include '../sidebar.php';
include("../../dbcon.php");
$sql = "SELECT * FROM contact_us ORDER BY id DESC ";
$result = mysqli_query($con, $sql);
?>
<?php
if(isset($_GET['delete'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/contactus/index.php','Good job!','Data Deleted successfully'); 
    });</script>";
}
?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Contact Us</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Contact Us</a></li>
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
                        <div class="col-md-12">

                            <div class="float-left" align="right">
                                <!-- <a href="export.php" class="btn btn-success" id="export_btn"> Export</a> -->
                                <a href="export.php"><button type="button" class="btn btn-primary btn-sm" id="export_btn">EXPORT</button></a>
                                <a href="/admin"><button type="button" class="btn btn-primary btn-sm">BACK</button></a>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <h3 class="box-title">Contact</h3>
                        </div>
                        <div class="d-flex">

                            <div class="col-md-6" align="left">
                                <a href="cindex.php"><button type="button" class="btn btn-primary btn-sm">CREATE</button></a>
                            </div>
                            <div class="col-md-6" align="right">
                                <a href="policies.php"><button type="button" class="btn btn-primary btn-sm">ADD</button></a>
                            </div>
                        </div> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Sr.No</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Country Code</th>
                                    <th class="border-top-0">Contact No</th>
                                    <th class="border-top-0">Company Name</th>
                                    <th class="border-top-0">Designation</th>
                                    <th class="border-top-0">Business Name</th>
                                    <th class="border-top-0">Services</th>
                                    <th class="border-top-0">Country</th>
                                    <th class="border-top-0">Comment</th>
                                    <th class="border-top-0" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                        

                                <?php if (mysqli_num_rows($result) > 0) {
                                    $counter=0;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $counter++;
                                ?>
                                        <tr>
                                            <td><?php echo $counter; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo '+'.$row['country_code']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td><?php echo $row['company']; ?></td>
                                            <td><?php echo $row['deg']; ?></td>
                                            <td><?php 
                                            $sql1 = "SELECT * FROM cat ORDER BY id DESC ";
                                            $result1 = mysqli_query($con, $sql1);
                                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                                if($row1['id'] ==   $row['bname'])
                                                {

                                                    echo $row1['categories'];
                                                }
                                            }   

                                             //print_r($bname); 
                                             //echo $row['bname'];?></td>
                                            <td><?php 
                                            $sql1 = "SELECT * FROM `service` ORDER BY id DESC ";
                                            $result1 = mysqli_query($con, $sql1);
                                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                                if($row1['id'] ==   $row['services'])
                                                {
                                                    
                                                    echo $row1['service_title'];                                                    
                                                }
                                                
                                                }  
                                              if($row['services'] == 0){
                                                        echo 'N/A';
                                                    }
                                             ?></td>
                                            <td><?php echo $row['country']; ?></td>
                                            <td><?php echo $row['type']; ?> - <?php echo $row['message']; ?></td>
                                            <!-- <td><?php //echo ($row['status'] == 1)?'Active':'Inactive'; ?></td> -->
                                            <td> 
                                                <a class="btn btn-danger" onclick="setdltAlert('delete.php?id=<?php echo $row['id']; ?>')"><i class="fa fa-trash" style="color: #fff;"></a>
                                                <!-- <a class="btn btn-danger" onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash" style="color: #fff;"></a> -->

                                            </td> 
                                            <!-- <a class="btn btn-info" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>  -->
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
<?php include '../footer.php'; ?>