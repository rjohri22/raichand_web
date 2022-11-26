<?php
 include '../sidebar.php'; 

?>
<style>
    body {
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style>
<?php
//  include("config.php");

$categories = $filename = $msg = "";

if (isset($_POST["submit"])) {

    $categories = $_POST['categories'];
    $order = $_POST['order'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "image/" . $categories . '.png';
    $filenamedb = $categories . '.png';

    $sql = "INSERT INTO cat(categories, filename,bname_order) VALUES	('$categories','$filenamedb','$order')";

    $row = $con->query($sql);

    echo $con->error;

    exit();
    if ($row) {

        // echo "<script>$(document).ready(function(){
        //     setSuccessAlert('" . SITE_URL . "admin/policies/cindex.php','Good job!','Data submitted successfully'); 
        // });</script>";
        // Swal.fire('Success.', response, 'success');
        // echo '<script type="text/javascript">',
        // 'jsfunction();',
        // '</script>'
        // ;
        // echo "<script type='text/javascript'>
        // document.getElementsByClassName('swal2-confirm').onclick = function () {
        //     window.location.href= '" . SITE_URL . "admin/policies/cindex.php';
        // };
        // // </script>";
        // echo "<script>window.location.href='" . SITE_URL . "admin/policies/cindex.php';</script>";
        // echo "<script>window.location.href='/admin/policies/cindex.php';</script>";

        // header("location: /admin/policies/cindex.php");
    } else {
        echo "<script>$(document).ready(function(){
            setSuccessAlert('" . SITE_URL . "admin/policies/cindex.php','Good job!','Sorry Data Not submitted'); 
        });</script>";
    }

    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}

?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Our Business</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL; ?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Our Business</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <form method="POST" action="#" enctype="multipart/form-data">
            <div class="container" style="margin-top: 20px">
                <div class="row">
                    <div class="col-md-8">
                        <label for="categories">Business Name:</label><br>
                        <input type="text" class="form-control" name="categories" required><br>

                        <label for="order">Order:</label><br>
                        <input type="number" class="form-control" name="order" required><br>

                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Upload File:</label>
                            <input class="form-control form-control-sm" name="uploadfile" id="formFileSm" type="file" required><br>
                            <div class="text-secondary"><i>Image size should be (77 × 80 px).</i></div>
                        </div>
                        <input type="submit" class="btn btn-warning text-white" name="submit" value="Submit">
                        <!-- Modify 24/8/2022 start -->
                        <a href="cindex.php"><button type="button" class="btn btn-warning text-white">Cancel</button></a>
                        <!-- Modify 24/8/2022 end -->
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>
<script>
    //  $(document).ready(function() {

    //         Swal.fire(
    //             'Good job!',
    //             'You clicked the button!',
    //             'success'
    //             )

    //  });
</script>
<?php include '../footer.php'; ?>