<?php include '../sidebar.php';
include("../../dbcon.php");?>
<?php

// include("config.php");
if(isset($_GET['id']))
{
    $q  = "select * FROM `invester_relation` where id = ".$_GET['id'];
    $item = $con->query($q);
    $rm = mysqli_fetch_assoc($item);
    // echo "<pre>"; print_r($rm);
    
}
$file_name= $file_size= $file_type= $year= $month= $invester_category= $tags= $msg="";


if (isset($_POST['submit']))
 {
    $id = $_GET['id'];
	$file_name = $_POST["file_name"];
	$file_size =$_FILES['uploadfile']['size'] / 1024 / 1024;
	$file_type = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
	$year = $_POST["year"];
	$bname = $_POST["businesses_name"];
    $ext = pathinfo($file_type, PATHINFO_EXTENSION);
	$invester_category = $_POST["invester_category"];
	// $tags = $_POST["tags"];
    
	$folder = "upload/". $file_name.".".$ext;
    
	$existing_filesize = $_POST["existing_filesize"];
	$existing_filetype = $_POST["existing_filetype"];
    $slug = trim(strtolower(str_replace(" ","-",$file_name)),'-');
    
    // echo $existing_filesize;exit;

	// $sql = "INSERT INTO invester_relation(title, file_size, file_type, year, bname , invester_category ) 
    //                             VALUES ('$file_name', '$file_size', '$ext', '$year', '$bname', '$invester_category')";

if($ext != "" && $file_size != 0){
    
    $sql = "UPDATE invester_relation set `title` = '$file_name',`file_size` = '$file_size',`file_type` = '$ext', `year` = '$year', `bname` = '$bname', `invester_category` = '$invester_category',`slug` = '$slug' where id = " . $_GET['id'];  
}

else{

    $sql = "UPDATE invester_relation set `title` = '$file_name',`file_size` = '$existing_filesize',`file_type` = '$existing_filetype', `year` = '$year', `bname` = '$bname', `invester_category` = '$invester_category',`slug` = '$slug' where id = " . $_GET['id'];  
}

	// $sql = "INSERT INTO invester_relation(title, file_size, file_type, year, bname , invester_category ) VALUES ('$file_name', '$file_size', '$ext', '$year', '$bname', '$invester_category')";

	if (move_uploaded_file($tempname, $folder))
	 {
		$msg = "File Uploaded Successfully:";
	}else
    {
        $msg = "File Not Uploadded:";
    }
        
	$row = $con->query($sql);
	if ($row) {

        echo "<script>$(document).ready(function(){
            setSuccessAlert('" . SITE_URL . "admin/invester/','Good job!','Data Updated successfully'); 
        });</script>";
        
    } else {
        echo "<script>$(document).ready(function(){
            setSuccessAlert('" . SITE_URL . "admin/invester/','Good job!','Sorry Data Not Updated'); 
        });</script>";
    }

 // Now let's move the uploaded image into the folder: image


}


?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Investor</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                         <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Investor</a></li>
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
                        <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="file_name">Document Title</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="file_name" value="<?php echo $rm['title']; ?>" id="invester_title">
                                </div><br>
                                <!-- code for showing dynamic URL to user -->
                                <p class="text-secondary">Your Url will Be like this: <?php echo SITEURL;?>portal/investors-relation/<span id='url'><?php echo $rm['slug']; ?></span></p>                                                       
                            </div>
                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Period</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <!-- <input type="text" class="form-control p-0 border-0" name="year" placeholder="Year" value="<?php echo $rm['year']; ?>"> -->
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
                                        }?>
                                        <?php
                                         ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="invester_category" class="col-md-12 p-0"> Select Investor Category </label>
                                <div class="col-md-12 border-bottom p-0">
                                <select name="invester_category" class="form-control p-0 border-0">
                                    <?php
                                    $sql = "SELECT * FROM invest_category";
                                    $result = mysqli_query($con, $sql) or die("Query failed:");
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <?php if ($row['id'] == $rm['invester_category']) { ?>
                                                <option selected value="<?php echo $row['id']; ?>"><?php echo $row['invester_category']; ?></option>
                                            <?php } else { ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['invester_category']; ?></option>
                                    <?php }
                                        }
                                    } ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">   
                                <label for="tags" class="col-md-12 p-0">Select Business Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                <select name="businesses_name" class="form-control p-0 border-0">
                                    <?php
                                    $sql = "SELECT * FROM `cat` ORDER BY `bname_order`";
                                    $result = mysqli_query($con, $sql) or die("Query failed:");
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <?php if ($row['id'] == $rm['bname']) { ?>
                                                <option selected value="<?php echo $row['id']; ?>"><?php echo $row['categories']; ?></option>
                                            <?php } else { ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['categories']; ?></option>
                                    <?php }
                                        }
                                    } ?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="formFileSm" class="form-label" class="col-md-12 p-0">Upload file:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input class="form-control form-control-sm p-0 border-0" name="uploadfile" id="formFileSm" type="file"  accept=".xlsx,.doc,.ppt,.pdf,.zip,.xls,.docx">
                                    <input class="form-control form-control-sm p-0 border-0" name="existing_filesize" id="existing_formFileSm" type="hidden" value="<?php echo $rm['file_size']; ?>">
                                    <input class="form-control form-control-sm p-0 border-0" name="existing_filetype" id="existing_formFileSm" type="hidden" value="<?php echo $rm['file_type']; ?>">                                
                                </div>
                                <br>
                                <div class="text-secondary"><i>Allowed docu(.xlsx,.doc,.ppt,.pdf,.zip,.xls,.docx).</i></div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-success" name="submit" value="Submit"></input>                                
                                    <!--------- Modify 25/8/2022 start -------->
                                                <a href="/admin/invester/"><button type="button" class="btn btn-outline-success">Cancel</button></a>
                                    <!-------- Modify 25/8/2022 end -------->   
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
    <script>
      // code for page url show to user dynamic value
      $("#invester_title").keyup(function() {
                var titleSlug = $("#invester_title").val();
                var titleWithDash = titleSlug.trim().split(' ').join('-').toLowerCase();
                // console.log(titleWithDash);
                $("#url").html(titleWithDash);
            });
    //   $("#invester_title").keyup(function() {
    //     $("#url").html($("#invester_title").val());
    // });

    // code for page url show to user dynamic value
    $("#year").change(function () {                            
        $("#period").html($(this).find('option:selected').attr('id'));
    });
  

</script>
    <!-- Modify 25/8/2022  -->
    <?php include '../footer.php';?>