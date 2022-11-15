<?php
include '../sidebar.php';
?>
<?php
include("../../dbcon.php");
// require_once "config.php";

$bname = $title = $policies_categories = $description = "";
if (isset($_GET['id'])) {
    $q  = "SELECT * FROM bname_category where id = " . $_GET['id'];
    $item = $con->query($q);
    $rm = mysqli_fetch_assoc($item);
} else {
    //header("location: https://raichandgroup.com/admin/policies/");
}
if (isset($_POST['submit'])) {
    $bname = $_POST["bname"];
    $upload_image=$_FILES["uploadfile"]["name"];
    $temp_name = $_FILES["uploadfile"]["tmp_name"];
    // print_r($upload_image); exit;
    
    //  $sql = "UPDATE bname_category set `bname` = '$bname',`filename`='$upload_image' where id = " . $_GET['id']; 

     if($upload_image == ""){
        $sql = "UPDATE bname_category set `bname` = '$bname' where id = " . $_GET['id']; 

        }
    else{
        // echo "else";exit;
        move_uploaded_file($temp_name,  $_SERVER['DOCUMENT_ROOT'].'/admin/policies/'.'image/'.$_FILES["uploadfile"]["name"]);
        $sql = "UPDATE bname_category set `bname` = '$bname',`filename`='$upload_image' where id = " . $_GET['id']; 

    }
    // Execute query
    $row = $con->query($sql);
    if ($row) {
        echo "<script>alert('Category Updated successfully')</script>";
        echo "<script>window.location.href='".SITE_URL."admin/policies/cindex.php';</script>";
        exit;
    } else {
        echo "data not posted".$sql;
    }
}

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
                        <li><a href="https://raichandgroup.com/admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Policies</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <form method="POST" enctype="multipart/form-data">
            <div class="container" style="margin-top: 20px">
                <div class="row">
                    <div class="col-md-8">
                        <label for="bname">Business name:</label><br>
                        <input type="text" class="form-control" name="bname" value="<?php echo $rm['bname']; ?>" required><br>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Upload file:</label>
                            <input class="form-control form-control-sm" name="uploadfile" id="formFileSm" type="file"><br>
                            <?php
                            $folder = SITE_URL.'admin/policies/image/'. $rm['filename']; 
                             ?>
                            <img src="<?= $folder; ?>" style="height:50px; margin-bottom:5px;">
                        </div>
                        <button type="submit" name="submit" value="submit" class="btn btn-success">Update</button>

                        <!-- <input type="submit" class="btn btn-success" name="submit" value="submit"> -->
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>

<?php include '../footer.php'; ?>