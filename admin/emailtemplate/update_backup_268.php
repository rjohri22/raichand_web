<?php include '../sidebar.php';
include("../../dbcon.php"); ?>

<?php
// include("config.php");
$new_id = $_GET['id'];

$sql = "SELECT * FROM `emailtemplate` WHERE id=$new_id";
$query = $con->query($sql);
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        // echo "<pre>";print_r($row);exit;
?>

        <div class="page-wrapper" style="min-height: 250px;">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Email Template</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <!--------- Modify 25/8/2022 start -------->
                                <li><a href="<?php echo SITE_URL; ?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                                <li><a href="#" class="fw-normal">E-mail Template</a></li>
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
                                    <h3 class="box-title">Email Template</h3>
                                </div>
                                <div class="d-flex">
                                    <!-- ======================= form ============================ -->
                                    <form method="GET" action="updateprocess.php" enctype="multipart/form-data" class="form-horizontal">

                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0" for="title"> Title:</label>
                                            <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" value="<?php echo $row['title']; ?>" class="form-control p-0 border-0" name="new_title" id="title">
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="year" class="col-md-12 p-0"> Content</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <textarea name="content"><?php echo $row['content'] ?></textarea>

                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="formFileSm" class="form-label" class="col-md-12 p-0">Emial Type</label>

                                            <select name="new_email_type" class="form-control" id="new_email_type" value="<?php echo $row['email-type']; ?>">
                                                <option value="contact-us" <?php if ($row['email-type'] == 'contact us') echo 'selected'; ?>>contact us</option>

                                                <option value="newslater" <?php if ($row['email-type'] == 'newslater') echo 'selected'; ?>>newslater</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-4">

                                            <label for="formFileSm" class="form-label" class="col-md-12 p-0">Active / InActive</label>

                                            <select name="is_avtive" class="form-control" id="is_active" value="<?php echo $row['is_active']; ?>">

                                                <option value="1" <?php if ($row['is_active'] == '1') echo 'selected'; ?>>active</option>

                                                <option value="0" <?php if ($row['is_active'] == '0') echo 'selected'; ?>>inactive</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                        <input type="submit" class="btn btn-success" name="submit" id="submit" value="Update">
                                         <!-- Modify 24/8/2022 start -->
                                            <a href="/admin/emailtemplate/index.php"><button type="button" class="btn btn-outline-success">Cancel</button></a>
                                        <!-- Modify 24/8/2022 end -->

                                        </div>
                                    </div>
                                        <!-- <div class="form-group mb-4">
                                            <div class="col-sm-12">
                                                <input type="submit" class="form-control btn-success" name="submit" id="submit" value="submit">
                                            </div>
                                        </div> -->

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
    $(document).ready(function() {
        CKEDITOR.replace('content');
    });

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
<!--------- Modify 25/8/2022 start -------->
<?php include '../footer.php';?>