<?php 
include '../sidebar.php';
include("../../dbcon.php");?>
<?php
// include("config.php");

$sql = "SELECT * FROM bname_category  ORDER by id desc";
$result = mysqli_query($con,$sql);

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
                            <a href="category.php"><button type="button" class="btn btn-primary btn-sm">ADD</button></a>
                        </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>	
                            <tr>
                                <th class="border-top-0">Bname</th>
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
                                    <td><?php echo $row['bname']; ?></td>
                                    <!-- <td><?php //echo $row['filename']; ?></td> -->
                                    <td><img src="<?= $folder; ?>" alt="" hight="50px" width="50px"></td>   
                                    <td>
                                        <a class="btn btn-primary" href="edit_policies.php?id=<?php echo $row['id']; ?>">Edit</a>
                                        <a class="btn btn-danger" onclick="return confirm('are you sure?')" href="delete_policies.php?id=<?php echo $row['id']; ?>">Delete</a>
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