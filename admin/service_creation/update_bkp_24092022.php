<?php
include '../sidebar.php';
include "../../dbcon.php";

?>
<?php
$id = $_GET['edit_id'];
$sql = "SELECT * FROM service WHERE `id` = $id ";
$result = mysqli_query($con, $sql);
// print_r($result);exit;
?>
<?php

// print_r($result);exit;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
        <div class="page-wrapper" style="min-height: 250px;">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Service</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="<?php echo SITE_URL; ?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                                <li><a href="#" class="fw-normal">Service</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="container-fluid">
                <form action="update_query.php" class="form-horizontal form-material" id="service_form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                    <div class="row">
                        <!-- column 1 START-->
                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0" for="file_name">Service Title</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" class="form-control p-0 border-0" name="service_title" placeholder="Service Title" id="service_title" value="<?= $row['service_title']; ?>">
                                            <input type="text" class="form-control p-0 border-0" name="id" id="id" value="<?= $row['id']; ?>" style="display:none;">

                                        </div>
                                        </br>
                                        <!-- code for showing dynamic URL to user -->
                                        <p class="text-secondary">Your Url will Be like this: <?php echo SITEURL; ?>portal/services/<span id='url'><?= $row['slug']; ?></span></p>
                                    </div>
                                    <!-- <div class="form-group mb-4">
                                        <label for="year" class="col-md-12 p-0"> Service Url:</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" class="form-control p-0 border-0" name="service_url" id="service_url" placeholder="http://localhost/" value="<?= $row['service_url']; ?>">
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group mb-4">
                                        <label for="year" class="col-md-12 p-0"> Business Category:</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" class="form-control p-0 border-0" name="category" id="category" placeholder="Category" value="<?= $row['category']; ?>">
                                        </div>
                                    </div> -->
                                    <div class="form-group mb-4">

                                        <label for="year" class="col-md-12 p-0">Feature Image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="image" id="image">
                                            <input type="hidden" name="existing_image" id="existing_image" value="<?php echo $row['images']; ?>">
                                            <img name="existing_image" src="<?= '/uploadimg' . '/' . $row['images']; ?>" alt="" hight="50px" width="50px">
                                        </div>
                                        <p class="text-secondary"><i>Image size should be (300 × 300 px).</i></p>

                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="year" class="col-md-12 p-0">Breadcum Image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="image_detail" id="image_detail">
                                            <input type="hidden" name="existing_image_detail" id="existing_image_detail" value="<?php echo $row['image_detail']; ?>">
                                            <img name="existing_image_detail" src="<?= '/uploadimg' . '/' . $row['image_detail']; ?>" alt="" hight="50px" width="50px">
                                        </div>
                                        <p class="text-secondary"><i>Image size should be (1920 × 370 px).</i></p>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="year" class="col-md-12 p-0"> Short Description</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <!-- <input type="text" class="form-control p-0 border-0" name="short_des" id="short_des" placeholder="Short Description"> -->
                                            <!-- <textarea id="short_des" name="short_des" rows="5" cols="50"></textarea> -->
                                            <textarea class="border" name="short_des" id="short_des" rows="8" cols="85" placeholder="Enter Short Description here..."><?= $row['short_description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="year" class="col-md-12 p-0"> Long Description</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <!-- <input type="text" class="form-control p-0 border-0" name="long_des" id="log_des" placeholder="Long Description"> -->
                                            <!-- <textarea name="editor" id="editor"></textarea> -->
                                            <!-- <textarea>Next, use our Get Started docs to setup Tiny!</textarea> -->
                                            <textarea id="tinymceeditor" name="tinymceeditor"><?= $row['long_description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success" name="submit" value="Update"></input>
                                            <!------- Modify 25/8/2022 start ------>
                                            <a href="/admin/service_creation/"><button type="button" class="btn btn-outline-success">Cancel</button></a>
                                            <!------ Modify 25/8/2022 end ----------->
                                            <!-- <a href="update_query.php?edit_id=<?= $row['id']; ?>" name="anajan"><button type="button" class="btn btn-success btn-sm">update</button></a> -->

                                            <!-- <button class="btn btn-success">Update Profile</button> -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Column 1 END -->

                        <!-- Column 2 START-->
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body category">
                                    <label class="col-md-12 p-0" for="file_name">Business Name – Categories</label>
                                    <?php
                                    // $a = $row['cat_f'];
                                    // global $a;
                                    function cat($parent_id = 0, $sub_mark = '')
                                    {
                                        global $con;
                                        // echo 'parentid=='. $parent_id;       
                                        $query =  $con->query("SELECT * FROM  cat WHERE parent_id = $parent_id ORDER BY id ASC");
                                        $queryServices =  $con->query("SELECT * FROM `service` WHERE `service`.id = '" . $_GET['edit_id'] . "'");
                                        if ($query->num_rows > 0) {
                                            while ($rowServices = $queryServices->fetch_assoc()) {
                                                $childCat = array_filter(explode(',', $rowServices['cat_f']));
                                                // print_r($childCat);exit;
                                            }
                                        }
                                        // echo '<prE>';print_r($query);
                                        // echo '<prE>';print_r($queryServices); exit;
                                        if ($query->num_rows > 0) {
                                            while ($rows = $query->fetch_assoc()) {

                                                // $id = $_GET['edit_id'];  

                                                // $q =  $con->query("SELECT service.id, service.id, cat.id cat.parent_id, cat.categories
                                                // FROM cat
                                                // INNER JOIN service ON cat.id = service.id WHERE `id` = $id ");
                                                // while ($row = $q->fetch_assoc()) {
                                                if ($sub_mark == "") {
                                                    // print_r($row['cat']);exit;
                                                    // echo $row['cat_f']; exit;
                                                    // if(in_array('css', $categories)){echo "fsdfsdfdxcf";}
                                                    // echo 'Id=='.$rows['id'];

                                                    if (in_array((int)$rows['id'], $childCat)) {
                                                        $selected = "checked='checked'";
                                                    } else {
                                                        $selected = "";
                                                    }
                                                    echo '<input type="checkbox" ' . $selected . ' id="' . $rows['id'] . '" name="categories[]" value="' . $rows['id'] . '">';
                                                    echo $sub_mark . $rows['categories'] . '<br>';
                                                } else {
                                                    if (in_array((int)$rows['id'], $childCat)) {
                                                        $selectedChild = "checked='checked'";
                                                    } else {
                                                        $selectedChild = "";
                                                    }
                                                    echo '<span style="padding-left:20px;"><input ' . $selectedChild . ' type="checkbox" id="' . $rows['id'] . '" name="categories[]" value="' . $rows['id'] . '"></span>';
                                                    echo $sub_mark . $rows['categories'] . '<br>';
                                                }
                                                // }
                                                cat($rows['id'], $sub_mark . '&nbsp;');
                                            }
                                        }
                                    }
                                    ?>
                                    <?php cat(); ?>
                                </div>
                            </div>

                            <div class="card">

                                <div class="card-body">
                                    <div class="form-group mb-4">
                                        <label for="year" class="col-md-12 p-0"> Tags</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea class="border" name="tag" id="tag" rows="5" cols="36" placeholder="Tag"><?= $row['tag']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column 2 END-->


                    </div>
                </form>

            </div>
    <?php
        // exit;
    }
} else {
    echo "0 results";
}
// mysqli_close($conn);
    ?>
    <!-- <style>
.texteditor-container { 
 width:700px;
 height:365px;
}
textarea#editor {
 width:500px !important;
 border:1px solid red;
 
}
</style> -->
    <!-- <script>
 tinymce.init({
   selector: 'textarea#editor',  //Change this value according to your HTML
   auto_focus: 'element',
   width: "700",
   height: "200"
 }); 
 
 </script> -->
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

        // code for page url show to user dynamic value
        // $("#service_title").keyup(function() {
        //         $("#url").html($("#service_title").val());
        //     });

        // code for page url show to user dynamic value
        $("#service_title").keyup(function() {
            var titleSlug = $("#service_title").val();
            var titleWithDash = titleSlug.trim().split(' ').join('-').toLowerCase();
            // console.log(titleWithDash);
            $("#url").html(titleWithDash);
        });
    </script>
    <!-- Modify 25/8/2022 -->
    <?php include '../footer.php'; ?>