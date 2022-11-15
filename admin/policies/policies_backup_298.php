<?php include '../sidebar.php';
include("../../dbcon.php"); ?>
<?php

$bname = $title = $description = $polocies_categories = "";

if (isset($_POST['submit'])) {
    $bname = $_POST["bname"];
    $title = $_POST["title"];
    $polocies_categories = $_POST["policies_categories"];
    $description = stripslashes($_POST['tinymceeditor']); //get data from textarea tiny MCE editorcvhu0tu
    // $description = strip_tags(stripslashes($_POST['tinymceeditor'])); //get data from textarea tiny MCE editorcvhu0tu

    // $description = $_POST["description"];


    // Get all the submitted data from the form
    $sql = "INSERT INTO policies (bname,title,description,categories) VALUES ('$bname','$title','$description','$polocies_categories')";

    // Execute query
    $row = $con->query($sql);
    if ($row) {
        echo "<script>alert('Data added successfully')</script>";
        echo "<script>window.location.href='".SITE_URL."admin/policies/';</script>";
        // echo "<script>window.location.href=" . SITE_URL . "admin/policies/';</script>";
        // header("location: /admin/policies");
    } else {

        echo "data not posted";
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
                        <li><a href="<?php echo SITE_URL; ?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Policies</a></li>
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
                        <form class="form-horizontal form-material" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="file_name"> Business name:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="bname" class="form-control p-0 border-0   ">
                                        <option value="select">Select</option>
                                        <?php

                                        $sql = "SELECT * FROM bname_category";

                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value='{$row['id']}'>{$row['bname']}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="title" class="col-md-12 p-0"> Title:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="title">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="file_name"> Categories:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="policies_categories" class="form-control p-0 border-0   ">
                                        <option value="select">Select</option>
                                        <?php
                                        // include("config.php");

                                        $sql = "SELECT * FROM policies_cat";

                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value='{$row['id']}'> {$row['policies_categories']}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="description" class="col-md-12 p-0"> Description:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea id="tinymceeditor" type="text" class="form-control p-0 border-0" name="tinymceeditor" rows="8" cols="93" class="form-control p-0 border-0"></textarea>
                                    <!-- <textarea type="text" class="form-control p-0 border-0" name="description" 
                                        class="form-control p-0 border-0"></textarea> -->
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                                     <!-- Modify 24/8/2022 start -->
                                        <a href="/admin/policies/"><button type="button" class="btn btn-outline-success">Cancel</button></a>
                                    <!-- Modify 24/8/2022 end -->
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
<?php include '../footer.php'; ?>
<script>
    CKEDITOR.replace('tinymceeditor');
    // var desc = CKEDITOR.instances['content'].getData();
</script>