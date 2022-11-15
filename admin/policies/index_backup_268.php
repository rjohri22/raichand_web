<?php include '../sidebar.php';
include("../../dbcon.php");?>
<?php

$sql = "SELECT * FROM policies ORDER BY id desc";
$result = mysqli_query($con, $sql);
// echo "<pre>"; print_r($result);exit;
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
                            
                        <div class="col-md-6" align="left">
                            <a href="cindex.php"><button type="button" class="btn btn-primary btn-sm">CREATE</button></a>
                        </div>
                        
                        <div class="col-md-6" align="right">
                            <a href="categories_list.php"><button type="button" class="btn btn-primary btn-sm">All CATEGORIES</button></a>
                            <a href="policies_add_cat.php"><button type="button" class="btn btn-primary btn-sm">ADD CATEGORY</button></a>
                            <a href="policies.php"><button type="button" class="btn btn-primary btn-sm">ADD</button></a>
                        </div>
                        
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Bname</th>
                                    <th class="border-top-0">Title</th>
                                    <th class="border-top-0">categories</th>
                                    <!-- <th class="border-top-0">Description</th> -->
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
                                


                                <td><?php 
                                    $sql1 = "SELECT * FROM `bname_category` ORDER BY id DESC ";
                                    $result1 = mysqli_query($con, $sql1);
                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                        if($row1['id'] ==   $row['bname'])
                                        {
                                            echo $row1['bname'];                                                    
                                        }
                                    }  
                                        ?>
                                </td>
                                <td><?php echo $row['title'];?></td>
                                <!-- <td><?php //echo $row['categories'];?></td> -->
                                <td><?php 
                                    $sql1 = "SELECT * FROM `policies_cat` ORDER BY id DESC ";
                                    $result1 = mysqli_query($con, $sql1);
                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                        if($row1['id'] == $row['categories'])
                                        {

                                            echo $row1['policies_categories'];                                                    
                                        }
                                    }  
                                        ?>
                                </td>
                                <!-- <td><?php //echo $row['description'];?></td> -->
                                <td><a class="btn btn-info" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                <a class="btn btn-danger" onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td></tr>
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