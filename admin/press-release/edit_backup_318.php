<?php
include '../sidebar.php';
include("../../dbcon.php");
$file_name= $file_size= $file_type= $year= $month= $category= $tags= $msg = "";
if(isset($_GET['id']))
{
    $q  = "SELECT * FROM press_release where id = ".$_GET['id'];
    $item = $con->query($q);
    $rm = mysqli_fetch_assoc($item);
    
}
else {
    header("location: <?php echo SITE_URL;?>admin/press-release/");
}

if (isset($_POST['submit']))
 {
        $year = $_POST["year"];
        $file_name = $_POST["file_name"];
        $category = $_POST["category"];
        $tags = $_POST["tags"];
        

        // Get all the submitted data from the form
        $sql = "UPDATE press_release set year = '$year', file_name='$file_name', category_id='$category', tags = '$tags' where id = ".$_GET['id'];

        // Execute query
        $row = $con->query($sql);
        if ($row) {
            echo "<script>window.location.href=".SITE_URL."admin/press-release/';</script>";
            exit;
        }else
        {
            echo "data not posted".$sql;
        }
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
                        <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
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
                        <form action="edit_file_data.php" class="form-horizontal form-material" enctype="multipart/form-data" method="POST">
                            <div class="form-group mb-4">
                                <input type="hidden" class="form-control p-0 border-0" name="id" value="<?php echo $rm['id']; ?>">
                                <label class="col-md-12 p-0" for="file_name"> File name:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="file_name" value="<?php echo $rm['file_name']; ?>">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Year:</label>
                                <div class="col-md-12 border-bottom p-0">

                                    <select name="year" class="form-control p-0 border-0" id="year">

                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="category" class="col-md-12 p-0"> Category:</label>
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
                                <label for="tags" class="col-md-12 p-0"> Tags</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="tags" class="form-control p-0 border-0" value="<?php echo $rm['tags']; ?>">
                                </div>
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
    var info = Number(new Date().getFullYear());
    var sp = "";
    for (k = info; k >= 2019; k--) {
        if (k == <?php echo $rm['year']; ?>)
            sp += `<option selected>${k}</option>`;
        else
            sp += `<option>${k}</option>`;
    }
    $("#year").html(sp);
</script>
<?php include '../footer.php'; ?>