<?php include '../sidebar.php';

 ?>

<?php
// include("config.php");
$new_id = $_GET['id'];

$sql = "SELECT * FROM `press_category` WHERE id=$new_id";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // echo "<pre>";print_r($row);exit;
?>
        <div class="page-wrapper" style="min-height: 250px;">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">press release</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                                <li><a href="#" class="fw-normal">press realese</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- ======================= form ============================ -->
            <div class="container-fluid">
                <div>
                    <form method="POST" action="edit_process.php" enctype="multipart/form-data">
                        <div class="container" style="margin-bottom: 20px;">
                            <div id="content">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="category">Category:</label>
                                        <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                        <input type="text" class="form-control" value="<?php  echo $row['category']; ?>" name="newcategory"><br>
                                        <input type="submit" class="btn btn-warning text-white" name="submit" value="Update">
                                         <!-- Modify 24/8/2022 start -->
                                            <a href="cindex.php"><button type="button" class="btn btn-warning text-white">Cancel</button></a>
                                        <!-- Modify 24/8/2022 end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>        
            </div>
        </div>
<?php
    }
}
?>
<!-- <script>
    CKEDITOR.replace('content');
    // var editor = CKEDITOR.instances['content'];
    // CKEDITOR.replace( '#content');//use id not name//
    //var data = CKEDITOR.instances.content.getData();
</script> -->

<?php
if (isset($_GET['newcategory'])) {

    // echo "fgfjghgjkhg";exit;
    $newcategory = $_GET['newcategory'];   


 mysqli_query($con, "UPDATE press_category set id='$new_id'");
    
}
?>
<!-- Modify 25/8/2022 -->
    <?php include '../footer.php';?>