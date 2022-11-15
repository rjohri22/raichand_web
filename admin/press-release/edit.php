<?php
include '../sidebar.php';
include("../../dbcon.php");
$file_name = $file_size = $file_type = $year = $month = $category = $tags = $msg = "";
if (isset($_GET['id'])) {
    $q  = "SELECT * FROM press_release where id = " . $_GET['id'];
    $item = $con->query($q);
    $rm = mysqli_fetch_assoc($item);
} else {
}

if (isset($_POST['submit']))
// echo "<pre>";print_r($_POST);exit;
{
    $newid = $_GET['id'];

    // $newid = $_POST['id'];
    $file_name = $_POST["file_name"];
    $file_type = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $size = $_FILES['uploadfile']['size'];
    $ext = pathinfo($file_type, PATHINFO_EXTENSION);
    // echo $ext; exit;
    $year = $_POST["year"];
    $category = $_POST["category"];
    $tags = $_POST["tags"];

    $slug = trim(strtolower(str_replace(" ", "-", $file_name)), '-');
    $folder = "uploads/" . $slug . "." . $ext;



    $existing_filesize = $_POST["existing_filesize"];
    $existing_filetype = $_POST["existing_filetype"];

    // Get all the submitted data from the form
    if ($ext != "" and $size != 0) {

        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
        $sql = "UPDATE `press_release` SET `file_name` ='$file_name', `file_size` = '$size', `file_type` = '$ext', `year` = '$year',  `category_id`='$category', `tags` = '$tags', `slug` = '$slug' WHERE  id='" . $newid . "'";
    } else {
        $sql = "UPDATE `press_release` SET `file_name` ='$file_name', `file_size` = '$existing_filesize', `file_type` = '$existing_filetype', `year` = '$year',  `category_id`='$category', `tags` = '$tags',`slug` = '$slug' WHERE  id='" . $newid . "'";
    }
    // Execute query
    $res = mysqli_query($con, $sql);
    if ($res) {

        echo "<script>$(document).ready(function(){
                setSuccessAlert('" . SITEURL . "admin/press-release/','Good job!','Data Updated successfully'); $('.footer').hide();
            });</script>";
    } else {
        echo "<script>$(document).ready(function(){
                setSuccessAlert('" . SITEURL . "admin/press-release/','Good job!','Sorry Data Not Updated');  $('.footer').hide();
            });</script>";
    }
    // if ($res) {
    //     echo "<script>window.location.href='".SITE_URL."admin/press-release/';</script>";
    //     exit;
    // }else
    // {
    //     echo "data not posted".$sql;
    // }
}

?>

<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Press Release</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL; ?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Press Release</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" enctype="multipart/form-data" method="POST">
                            <div class="form-group mb-4">
                                <input type="hidden" class="form-control p-0 border-0" name="id" value="<?php echo $rm['id']; ?>">
                                <label class="col-md-12 p-0" for="file_name">Document Title</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="file_name" value="<?php echo $rm['file_name']; ?>" id="press_release_title">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Period</label>
                                <div class="col-md-12 border-bottom p-0">

                                    <select name="year" class="form-control p-0 border-0" id="year">
                                        <?php


                                        $sql = "SELECT * FROM `periods`";
                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        // $item = $con->query($result);
                                        // $row = mysqli_fetch_assoc($result);
                                        // echo "<pre>";print_r($row); exit;
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                <?php if ($row['id'] == $rm['year']) { ?>
                                                    <option selected value="<?php echo $row['id']; ?>" id='<?php echo $row['periods']; ?>'><?php echo $row['periods']; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $row['id']; ?>" id='<?php echo $row['periods']; ?>'><?php echo $row['periods']; ?></option>
                                        <?php
                                                }
                                            }
                                        } ?>
                                        <?php
                                        ?>
                                    </select>
                                </div>
                                <br>
                                <!-- code for showing dynamic URL to user -->
                                <?php


                                $sql = "SELECT * FROM `periods`";
                                $result = mysqli_query($con, $sql) or die("Query failed:");
                                // $item = $con->query($result);
                                // $row = mysqli_fetch_assoc($result);
                                // echo "<pre>";print_r($row); exit;
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <?php if ($row['id'] == $rm['year']) { ?>
                                            <p class="text-secondary">Your Url will Be like this: <?php echo SITEURL; ?>portal/press-release/<span id='period'><?php echo $row['periods']; ?></span>/<span id='url'><?php echo $rm['slug']; ?></span></p>
                                <?php }
                                    }
                                } ?>
                            </div>
                            <div class="form-group mb-4">
                                <label for="category" class="col-md-12 p-0"> Select Category</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="category" class="form-control p-0 border-0">

                                        <?php


                                        $sql = "SELECT * FROM press_category";
                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                <?php if ($row['id'] == $rm['category_id']) { ?>
                                                    <option selected value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
                                        <?php }
                                            }
                                        } ?>


                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="tags" class="col-md-12 p-0"> Add Tags</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="tags" class="form-control p-0 border-0" value="<?php echo $rm['tags']; ?>">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="formFileSm" class="form-label" class="col-md-12 p-0">Upload Documents</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input class="form-control form-control-sm p-0 border-0" name="uploadfile" id="formFileSm" type="file" class="form-control p-0 border-0" accept=".xlsx,.doc,.ppt,.pdf,.zip,.xls,.docx">
                                    <input class="form-control form-control-sm p-0 border-0" name="existing_filesize" id="existing_filesize" type="hidden" class="form-control p-0 border-0" value="<?php echo $rm['file_size']; ?>">
                                    <input class="form-control form-control-sm p-0 border-0" name="existing_filetype" id="existing_filetype" type="hidden" class="form-control p-0 border-0" value="<?php echo $rm['file_type']; ?>">
                                </div>
                                <br>
                                <div class="text-secondary"><i>Allowed docu(.xlsx,.doc,.ppt,.pdf,.zip,.xls,.docx).</i></div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-success" name="submit" value="Update"></input>
                                    <!-- Modify 24/8/2022 start -->
                                    <a href="/admin/press-release/"><button type="button" class="btn btn-outline-success">Cancel</button></a>
                                    <!-- Modify 24/8/2022 end -->`
                                    <!-- <button class="btn btn-success">Update Profile</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
</div>

<?php

if (isset($_GET['file_name'])) {

    // echo "fgfjghgjkhg";exit;
    $new_title = $_GET['file_name'];
    $new_content = $_GET['category_id'];
    $new_is_active = $_GET['year'];
    $new_email_type = $_GET['tags'];

    echo mysqli_query($con, "UPDATE emailtemplate set id='" . $_GET['id'] . "'");
    exit;
}
?>







<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    // var info = Number(new Date().getFullYear());
    // var sp = "";
    // for (k = info; k >= 2019; k--) {
    //     if (k == <?php echo $rm['year']; ?>)
    //         sp += `<option selected>${k}</option>`;
    //     else
    //         sp += `<option>${k}</option>`;
    // }
    // $("#year").html(sp);
</script>
<script>
    // code for page url show to user dynamic value
    $("#press_release_title").keyup(function() {
        var titleSlug = $("#press_release_title").val();
        var titleWithDash = titleSlug.trim().split(' ').join('-').toLowerCase();
        // console.log(titleWithDash);
        $("#url").html(titleWithDash);
    });
    // $("#press_release_title").keyup(function() {
    //     $("#url").html($("#press_release_title").val());
    // });



    // To get period drop-down dynamic value
    $("#year").change(function() {
        $("#period").html($(this).find('option:selected').attr('id'));
    });
    // $("#year").change(function () {                            
    //     $("#period").html($('select[name=year]').val()); // Here we can get the value of selected item
    //     alert(category); 
    // });
</script>
<?php include '../footer.php'; ?>