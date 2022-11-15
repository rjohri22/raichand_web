<?php include '../sidebar.php'; ?>

<?php
  
    $sql = "SELECT * FROM newsletter";
    $sql .= " ORDER BY id ASC"; 
    $result = $con->query($sql); 
?>
<?php
if(isset($_GET['delete'])){
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/newsletter/','Good job!','Data Deleted successfully'); 
    });</script>";
}
?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Newsletter</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Newsletter</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-title">Newsletter</h3>
                        </div>
                <div class="d-md-flex">
                    <div class="col-md-12" align="right" style="width: 100%;">
                        <a href="export.php"><button type="button" class="btn btn-warning text-white" id="export_btn">EXPORT</button></a>
                        <a href="../"><button type="button" class="btn btn-warning text-white">BACK</button></a>
                </div>
            </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">S.No</th>
                                    <th class="border-top-0">Email Id</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                <?php
                                    if ($result->num_rows > 0) {
                                        $counter=0;
                                        while ($row = $result->fetch_assoc()) { 
                                            $counter++;
                                ?>  
                                    <tr>
                                        <td><?= $counter; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td>
                                            <a class="btn btn-danger" onclick="setdltAlert('delete.php?id=<?php echo $row['id']; ?>')"><i class="fa fa-trash" style="color: #fff;"></a>
                                            <!-- <a class="btn btn-danger" onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash" style="color: #fff;"></a> -->

                                        </td>
                                    </tr>
                                <?php }
                                    } else {
                                                echo "0 results";
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