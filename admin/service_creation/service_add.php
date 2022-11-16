<?php
include '../sidebar.php';
 
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
        <form action="insert_query.php" class="form-horizontal form-material" id="service_form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
            <div class="row">
                <!-- column 1 START-->
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="file_name">Service Title</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="service_title" placeholder="Service Title" id="service_title">
                                </div></br>
                                <!-- code for showing dynamic URL to user -->
                                <p class="text-secondary">Your Url will Be like this: <?php echo SITEURL; ?>portal/services/<span id='url'>Service_title</span></p>
                            </div>
                            <!-- <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Service Url:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="service_url" id="service_url" placeholder="http://localhost/">
                                </div>
                            </div> -->
                            <!-- <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Business Category:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="category" id="category" placeholder="Category">
                                </div>
                            </div> -->
                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0">Feature Image</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="file" name="image" id="image" required>
                                </div>
                                <div class="text-secondary"><i>Image size should be (300 × 300 px).</i></div>
                            </div>
                            <div class="form-group mb-4">

                                <label for="year" class="col-md-12 p-0">Breadcum Image</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="file" name="image_detail" id="image_detail" required>
                                </div>
                                <div class="text-secondary"><i>Image size should be (1920 × 370 px).</i></div>

                            </div>
                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Short Description</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <!-- <input type="text" class="form-control p-0 border-0" name="short_des" id="short_des" placeholder="Short Description"> -->
                                    <!-- <textarea id="short_des" name="short_des" rows="5" cols="50"></textarea> -->
                                    <textarea class="border" name="short_des" id="short_des" rows="8" cols="85" placeholder="Enter Short Description here..."></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Long Description</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <!-- <input type="text" class="form-control p-0 border-0" name="long_des" id="log_des" placeholder="Long Description"> -->
                                    <!-- <textarea name="editor" id="editor"></textarea> -->
                                    <!-- <textarea>Next, use our Get Started docs to setup Tiny!</textarea> -->
                                    <textarea id="tinymceeditor" name="tinymceeditor" rows="8" cols="93"></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-success" name="submit" value="Submit"></input>
                                    <!-- Modify 24/8/2022 start -->
                                    <a href="/admin/service_creation/"><button type="button" class="btn btn-outline-success">Cancel</button></a>
                                    <!-- Modify 24/8/2022 end -->
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
                            function cat($parent_id = 0, $sub_mark = '')
                            {
                                // echo $parent_id;
                                global $con;
                                // $parent_id=0;      

                                $query =  $con->query("SELECT * FROM  cat WHERE parent_id = $parent_id ORDER BY bname_order ASC");
                                if ($query->num_rows > 0) {
                                    while ($row = $query->fetch_assoc()) {
                                        if ($sub_mark == "") {
                                            echo '<input type="checkbox" id="' . $row['id'] . '" name="categories[]" value="' . $row['id'] . '">';
                                            echo $sub_mark . $row['categories'] . '<br>';
                                        } else {
                                            echo '<span style="padding-left:20px;"><input type="checkbox" id="' . $row['id'] . '" name="categories[]" value="' . $row['id'] . '"></span>';
                                            echo $sub_mark . $row['categories'] . '<br>';
                                        }
                                        cat($row['id'], $sub_mark . '&nbsp;');
                                    }
                                }
                            }
                            ?>
                            <?php echo cat(); ?>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Tags</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea class="border" name="tag" id="tag" rows="5" cols="36" placeholder="Tag"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column 2 END-->


            </div>
        </form>

    </div>
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


    <?php include '../footer.php'; ?>

    <script>
        $(document).ready(function() {

            // Enable local "abbr" plugin from /myplugins/abbr/ folder.
            CKEDITOR.plugins.addExternal('image2', '/admin/plugins/image2/', 'plugin.js');

            // extraPlugins needs to be set too.
            CKEDITOR.replace('tinymceeditor', {
                extraPlugins: 'image2'
            });

            // ckeditor for description
            CKEDITOR.replace('tinymceeditor');

            // code for page url show to user dynamic value
            $("#service_title").keyup(function() {
                var titleSlug = $("#service_title").val();
                var titleWithDash = titleSlug.trim().split(' ').join('-').toLowerCase();
                // console.log(titleWithDash);
                $("#url").html(titleWithDash);
            });
        });
    </script>