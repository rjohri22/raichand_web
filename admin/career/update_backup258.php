<?php include '../sidebar.php'; ?>

<?php
include "../../dbcon.php";
$new_id = $_GET['id'];

$sql = "SELECT * FROM `career` WHERE id=$new_id";
$query = $con->query($sql);
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        // echo "<pre>";print_r($row);exit;
?>
    <div class="page-wrapper" style="min-height: 250px;">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Career</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <li><a href="http://local.raichandgroup.com/admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                            <li><a href="#" class="fw-normal">Career</a></li>
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
                                <h3 class="box-title">Career</h3>
                            </div>
                            <div class="d-flex">
                                <!-- ======================= form ============================ -->
                                <form method="GET" action="updateprocess.php" enctype="multipart/form-data" class="form-horizontal">

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0" for="title"> Role:</label>
                                        <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" value="<?php echo $row['role']; ?>" class="form-control p-0 border-0" name="new_role" id="new_role">
                                        </div>
                                    </div>                         

                                

                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success" name="submit" id="submit" value="Update">
                                        </div>
                                    </div>
                                     
                                </form>
                                <!-- =================== End Form =================================== -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
<?php
}
} 
?>
<script>
    CKEDITOR.replace('content');
    // var editor = CKEDITOR.instances['content'];
    // CKEDITOR.replace( '#content');//use id not name//
    //var data = CKEDITOR.instances.content.getData();
</script>

<?php 
if (isset($_GET['new_title'])) { 

    // echo "fgfjghgjkhg";exit;
    $new_title = $_GET['new_title'];
    $new_content = $_GET['new_content'];
    $new_is_active = $_GET['is_active'];

    $new_email_type = $_GET['new_email_type'];

    echo mysqli_query($con, "UPDATE emailtemplate set id='$new_id'");
    exit;
}
?>

                                                       