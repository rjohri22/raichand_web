<?php include '../sidebar.php';
include("../../dbcon.php");?>
<?php
// error_reporting(0);
$file_name= $file_size= $file_type= $year= $month= $category= $tags= $msg = "";

// If upload button is clicked ...
if(isset($_POST['submit']))
{
   
    $file_name = $_POST["file_name"];
    $file_type = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"]; 
     $size = $_FILES['uploadfile']['size'];
    // $byte=$_FILES['uploadfile']['size'] / 1024;
    // $size = round($byte ,1);
// echo $size;
// exit;

    $ext = pathinfo($file_type, PATHINFO_EXTENSION);
    $year = $_POST["year"];
    // echo $year; exit;
    //$month = $_POST["month"];
    $category = $_POST["category"];
    $tags = $_POST["tags"];

    $folder = "uploads/".$file_name.".".$ext;
        

        // Get all the submitted data from the form
          $sql = "INSERT INTO press_release (file_name,file_size,file_type,year,category_id,tags) VALUES ('$file_name',$size,'$ext','$year'
        ,'$category','$tags')";  

        // Execute query
        $row = $con->query($sql);
        if ($row) {

            echo "<script>$(document).ready(function(){
                setSuccessAlert('" . SITE_URL . "admin/press-release/','Good job!','Data submitted successfully'); 
            });</script>";
            
        } else {
            echo "<script>$(document).ready(function(){
                setSuccessAlert('" . SITE_URL . "admin/press-release/','Good job!','Sorry Data Not submitted'); 
            });</script>";
        }

        
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
    }
   /* $query = $con->query("SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_type"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}
 ?>*/
//  echo SITEURL;exit;
 
}
// header("Location: ".SITEURL."admin/press-release/");exit();
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
                        <form class="form-horizontal form-material" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="file_name"> Document Title</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="file_name" id="press_release_title">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Period</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="year" class="form-control p-0 border-0" id="year">
                                    <option value="">Select</option>
                                        <?php                                        

                                        $sql = "SELECT * FROM periods";

                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            while ($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<option value='{$row['id']}' id='{$row['periods']}'> {$row['periods']}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div><br>
                                <!-- code for showing dynamic URL to user -->
                                <p class="text-secondary">Your Url will Be like this: <?php echo SITEURL;?>press-release/<span id='period'>Period</span>/<span id='url'>Document_Title</span></p>                                
                            </div>
                            <!-- <div class="form-group mb-4">
                                <label for="month" class="col-md-12 p-0"> month:</label>
                                <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control p-0 border-0" id="month" name="month">
                                </div>
                            </div> -->
                            <div class="form-group mb-4">
                                <label for="category" class="col-md-12 p-0"> Select Category</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="category" class="form-control p-0 border-0">
                                        <option value="">Select</option>
                                        <?php                                        

                                        $sql = "SELECT * FROM press_category";

                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            while ($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<option value='{$row['id']}'> {$row['category']}</option>";
                                            }
                                        }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 ui-widget">
                                <label for="tags" class="col-md-12 p-0"> Add Tags</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" id="" name="tags" class="form-control p-0 border-0">
                                    <!-- <input id="serachText" size="50"> -->
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="formFileSm" class="form-label" class="col-md-12 p-0">Upload Documents</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input class="form-control form-control-sm p-0 border-0" name="uploadfile" id="formFileSm" type="file" class="form-control p-0 border-0"  accept=".xlsx,.doc,.ppt,.pdf" required>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-success" name="submit" value="Submit"></input>
                                     <!-- Modify 24/8/2022 start -->
                                    <a href="/admin/press-release/"><button type="button" class="btn btn-outline-success">Cancel</button></a>
                                    <!-- Modify 24/8/2022 end -->
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


<!-- ============================================================================ -->


<!-- =============================================================================== -->

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    
    // var info = Number(new Date().getFullYear());
    // var sp = "";
    // for(k = info ;k>=2019;k--)
    // {
    //     sp += `<option>${k}</option>`;
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
    $("#year").change(function () {                            
        $("#period").html($(this).find('option:selected').attr('id'));
    });
    // $("#year").change(function () {                            
    //     $("#period").html($('select[name=year]').val()); // Here we can get the value of selected item
    //     alert(category); 
    // });
</script>






    <?php include '../footer.php';?>