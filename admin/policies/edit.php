<?php 
include '../sidebar.php';

?>
<?php 
// require_once "config.php";

$bname= $title= $policies_categories= $description= "";
if(isset($_GET['id']))
{
    $q  = "SELECT * FROM policies where id = ".$_GET['id'];
    $item = $con->query($q);
    $rm = mysqli_fetch_assoc($item);
    //print_r($rm); exit;
}
else {
    header("location: <?php echo SITE_URL;?>admin/policies/");
}

if (isset($_POST['submit']))
 {

    $bname = $_POST["bname"];
    // echo $bname; exit;
    $title = $_POST["title"];
    // $order_num = $_POST["order_num"];
    $policies_categories = $_POST["policies_categories"];
// echo $policies_categories; exit;
    $description = stripslashes($_POST['tinymceeditor']);//get data from textarea tiny MCE editorcvhu0tu
    
    $slug = trim(strtolower(str_replace(" ","-",$title)),'-');
    // $description = strip_tags(stripslashes($_POST['tinymceeditor']));//get data from textarea tiny MCE editorcvhu0tu

    // $description = $_POST["description"];
        

        // Get all the submitted data from the form
        $sql = "UPDATE policies set bname = '$bname',title='$title',categories='$policies_categories',description='$description',slug='$slug' where id = ".$_GET['id'];

        // Execute query
        $row = $con->query($sql);
        if ($row) {

            echo "<script>$(document).ready(function(){
                setSuccessAlert('" . SITE_URL . "admin/policies/','Good job!','Data Updated successfully'); 
            });</script>";
            
        } else {
            echo "<script>$(document).ready(function(){
                setSuccessAlert('" . SITE_URL . "admin/policies/','Good job!','Sorry Data Not Updated'); 
            });</script>";
        }
        // if ($row) {
        //     echo "<script>window.location.href='".SITE_URL."admin/policies/';</script>";
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
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" method="POST">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="file_name">Select Business Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="bname" class="form-control p-0 border-0   " >
                                        <option value="">Select</option>
                                    <?php
                                        // include("config.php");

                                        $sql = "SELECT * FROM `cat` ORDER BY `bname_order`";

                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            while ($row = mysqli_fetch_assoc($result))
                                            {
                                                if($rm['bname']==$row['id'])
                                                echo "<option value={$row['id']} selected> {$row['categories']}</option>";
                                                else
                                                echo "<option value={$row['id']}> {$row['categories']}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="title" class="col-md-12 p-0"> Policy Title</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="title" value="<?php echo $rm['title']; ?>" id="policy_title">
                                </div></br>
                                <!-- code for showing dynamic URL to user -->
                                <p class="text-secondary">Your Url will Be like this: <?php echo SITEURL;?>portal/policies/<span id='url'><?php echo $rm['slug']; ?></span></p>                                
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="file_name">Category</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="policies_categories" class="form-control p-0 border-0   " >
                                        <option value="">Select</option>
                                    <?php
                                        // include("config.php");

                                        $sql = "SELECT * FROM policies_cat";

                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            while ($row = mysqli_fetch_assoc($result))
                                            {
                                                if($rm['categories']==$row['id'])
                                                echo "<option value={$row['id']} selected> {$row['policies_categories']}</option>";
                                                else
                                                echo "<option value={$row['id']}> {$row['policies_categories']}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group mb-4">
                                <label for="title" class="col-md-12 p-0"> Order:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" class="form-control p-0 border-0" name="order_num" value="<?php echo $rm['order_num']; ?>">
                                </div>
                            </div> -->
                            <div class="form-group mb-4">
                                <label for="description" class="col-md-12 p-0">Description</label>
                                <div class="col-md-12 border-bottom p-0">
                                <textarea id="tinymceeditor"type="text" class="form-control p-0 border-0" 
                                name="tinymceeditor" rows="8" cols="93" class="form-control p-0 border-0"><?php echo $rm['description']; ?></textarea>
                                    <!-- <textarea type="text" class="form-control p-0 border-0" name="description"
                                        class="form-control p-0 border-0"><?php echo $rm['description']; ?>
                                    </textarea> -->
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button type="submit" name="submit" value="submit" class="btn btn-warning text-white">Update</button>
                                     <!-- Modify 24/8/2022 start -->
                                        <a href="/admin/policies/"><button type="button" class="btn btn-warning text-white">Cancel</button></a>
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
    <?php include '../footer.php';?>
    <script>
        $(document).ready(function() {
            // Enable local "abbr" plugin from /myplugins/abbr/ folder.
            CKEDITOR.plugins.addExternal('image2', '/admin/plugins/image2/', 'plugin.js');

            // extraPlugins needs to be set too.
            CKEDITOR.replace('tinymceeditor', {
                extraPlugins: 'image2'
            });

            CKEDITOR.replace('tinymceeditor');
        });
    // CKEDITOR.replace('tinymceeditor');
    // var desc = CKEDITOR.instances['content'].getData();

    // code for page url show to user dynamic value
    // $("#policy_title").keyup(function() {
    //     $("#url").html($("#policy_title").val());
    // });

    $("#policy_title").keyup(function() {
                var titleSlug = $("#policy_title").val();
                var titleWithDash = titleSlug.trim().split(' ').join('-').toLowerCase();
                // console.log(titleWithDash);
                $("#url").html(titleWithDash);
            });
</script>