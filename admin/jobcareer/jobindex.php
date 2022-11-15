<?php include '../sidebar.php';?>
<?php
include("../../dbcon.php");

$sql = "SELECT * FROM jobcareer";
$result = mysqli_query($con,$sql);

?>

<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Job Career</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                    <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Job Career</a></li>
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
                            <h3 class="box-title">Job Career</h3>
                        </div>
                        <div class="d-flex">
                            
                        <div class="col-md-6" align="left">
                            <a href="job_form.php"><button type="button" class="btn btn-primary btn-sm">ADD</button></a>
                        </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>	
                            <tr>
                                <th class="border-top-0">Job Flag</th>
                                <th class="border-top-0">Role</th>
                                <th class="border-top-0">Location</th>
                                <th class="border-top-0">Applicant</th>
                                <th class="border-top-0">Job Type</th>
                                <th class="border-top-0">Job Id</th>
                                <th class="border-top-0">Created By</th>
                                <th class="border-top-0">Hierarchy Band</th>
                                <th class="border-top-0">Reporting Manager</th>
                                <!-- <th class="border-top-0">Responsibilities</th> -->
                                <th class="border-top-0">Work Type</th>
                                <th class="border-top-0">Work Shift</th>
                                <th class="border-top-0">Pay Range</th>
                                <!-- <th class="border-top-0">Eligibility Criteria</th> -->
                                <th class="border-top-0">Created On</th>  
                                <th class="border-top-0">Action</th>    

                            </tr>
                            </thead>
                            <tbody>
                            <?php if (mysqli_num_rows($result)>0)
                                {
                                    while ($row=mysqli_fetch_assoc($result))
                                    {?>
                                <tr>
                                    <td><?php echo $row['job_flag'];?></td>
                                    <td><?php echo $row['role'];?></td>
                                    <td><?php echo $row['location'];?></td>
                                    <td><?php echo $row['applicant'];?></td>
                                    <td><?php echo $row['job_type'];?></td>
                                    <td><?php echo $row['job_id'];?></td>
                                    <td><?php echo $row['created_by'];?></td>
                                    <td><?php echo $row['hierarchy_band'];?></td>
                                    <td><?php echo $row['reporting_manager'];?></td>
                                    <!-- <td><?php //echo $row['responsibilities'];?></td> -->
                                    <td><?php echo $row['work_type'];?></td>
                                    <td><?php echo $row['work_shift'];?></td>
                                    <td><?php echo '₹'.$row['pay_range1'] .'-'.'₹'.$row['pay_range2'].' '.'per anum';?></td>
                                    <!-- <td><?php // echo $row['eligibility_criteria'];?></td> -->
                                    <td><?php echo $row['created_on'];?></td>
                                 
                                    <td>
                                        <a class="btn btn-info" onclick="" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                                        <a class="btn btn-danger" onclick="return confirm('are you sure?')" href="delete_jobcareer.php?id=<?php echo $row['id']; ?>">Delete</a>
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