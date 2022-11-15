<?php include '../sidebar.php';
include("../../dbcon.php");?>
<?php

// include("config.php");

$file_name= $file_size= $file_type= $year= $month= $invester_category= $tags= $msg="";


if (isset($_POST['submit']))
 {
	$file_name = $_POST["file_name"];
	$file_size =$_FILES['uploadfile']['size'] / 1024 / 1024;
	 $file_type = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
	$year = $_POST["year"];
	$bname = $_POST["businesses_name"];
    $ext = pathinfo($file_type, PATHINFO_EXTENSION);
	$invester_category = $_POST["invester_category"];
    // echo $invester_category; exit;
	// $tags = $_POST["tags"];

	$folder = "upload/". $file_name.".".$ext;

    $slug = trim(strtolower(str_replace(" ","-",$file_name)),'-');
//  $str1 = strtolower($str);

	$sql = "INSERT INTO invester_relation(title, file_size, file_type, year, bname , invester_category,slug)
     VALUES ('$file_name', '$file_size', '$ext', '$year', '$bname', '$invester_category','$slug')";

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
            setSuccessAlert('" . SITE_URL . "admin/invester/','Good job!','Data submitted successfully'); 
        });</script>";
        
    } else {
        echo "<script>$(document).ready(function(){
            setSuccessAlert('" . SITE_URL . "admin/invester/','Good job!','Sorry Data Not submitted'); 
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
                        <form class="form-horizontal form-material" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="file_name">Document Title</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="file_name" id="invester_title">
                                </div>       
                                <br>
                                  <!-- code for showing dynamic URL to user -->
                                  <p class="text-secondary">Your Url will Be like this: <?php echo SITEURL;?>portal/investors-relation/<span id='url'>invester_Title</span></p>                                                       
                            </div>
                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Period</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <!-- <input type="text" class="form-control p-0 border-0" name="year" placeholder="Year"> -->
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
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="invester_category" class="col-md-12 p-0"> Select Investor Category </label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="invester_category" class="form-control p-0 border-0" >
                                            <option value="">Select</option>
                                            <?php
                                                

                                                $sql = "SELECT * FROM invest_category";

                                                $result = mysqli_query($con, $sql) or die("Query failed:");
                                                if (mysqli_num_rows($result)>0)
                                                {
                                                    while ($row = mysqli_fetch_assoc($result))
                                                    {
                                                        echo "<option value={$row['id']}> {$row['invester_category']}</option>";
                                                    }
                                                }
                                               
                                               ?>
                                                                </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="tags" class="col-md-12 p-0">Select Business Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="businesses_name" class="form-control p-0 border-0" >
                                            <option value="">Select</option>
                                            <?php
                                                

                                                $sql = "SELECT * FROM `cat` ORDER BY `bname_order` ";

                                                $result = mysqli_query($con, $sql) or die("Query failed:");
                                                if (mysqli_num_rows($result)>0)
                                                {
                                                    while ($row = mysqli_fetch_assoc($result))
                                                    {
                                                        echo "<option value={$row['id']}> {$row['categories']}</option>";
                                                    }
                                                }
                                                ?>
                                                                </select>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="formFileSm" class="form-label" class="col-md-12 p-0">Upload file:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input class="form-control form-control-sm p-0 border-0" name="uploadfile" id="formFileSm" type="file" accept=".xlsx,.doc,.ppt,.pdf,.zip,.xls,.docx" required>
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
    // $("#invester_title").keyup(function() {
    //     $("#url").html($("#invester_title").val());
    // });

</script>
    <!-- Modify 25/8/2022  -->
    <?php include '../footer.php';?>