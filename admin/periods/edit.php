<?php include '../sidebar.php';

 ?>

<?php
if(isset($_GET['id']))
{
    $q  = "select * FROM periods where id = ".$_GET['id'];
    $result = mysqli_query($con,$q);
    $rm = mysqli_fetch_assoc($result);
}
else {
    
    // echo "<script>window.location.href='".SITE_URL."admin/periods/index.php';</script>";
}

if (isset($_POST['submit']))
 {

	$periods = $_POST["periods"];
	// $id = $_POST["id"];
	$id = $_GET["id"];

	// $answer = $_POST["answer"];
	// $tag = $_POST["tag"];
	// $order_num = $_POST["order_num"];
    
    $sql = "Update periods set periods ='$periods' where id = ".$id;

    // Modify 25/8/2022 
  $row = $con->query($sql);
//   echo $row; exit;
if ($row) {

    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/periods/index.php','Good job!','Data Updated successfully'); 
    });</script>";
    
} else {
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/periods/index.php','Good job!','Sorry Data Not Updated'); 
    });</script>";
}
        // if ($row)
        //  {
        //     echo "<script>window.location.href='".SITE_URL."admin/periods/index.php';</script>";
        //     exit;
        // }else
        // {

        //     echo "data not posted".$sql;
        // }
}
// Modify 25/8/2022 
?>
        <div class="page-wrapper" style="min-height: 250px;">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Periods</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                                <li><a href="#" class="fw-normal">Periods</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- ======================= form ============================ -->
            <div class="container-fluid">
                <div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="container" style="margin-bottom: 20px;">
                            <div id="content">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="periods">Periods</label>
                                        <input type="hidden" id="id" name="id" value="<?php echo $rm['id']; ?>">
                                        <input type="text" class="form-control" value="<?php  echo $rm['periods']; ?>" name="periods" placeholder="2020-2022"><br>
                                        <input type="submit" class="btn btn-warning text-white" name="submit" value="Update">
                                         <!-- Modify 24/8/2022 start -->
                                            <a href="index.php"><button type="button" class="btn btn-warning text-white">Cancel</button></a>
                                        <!-- Modify 24/8/2022 end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>        
            </div>
        </div>
<?php
    // }
// }
?>
<!-- <script>
    CKEDITOR.replace('content');
    // var editor = CKEDITOR.instances['content'];
    // CKEDITOR.replace( '#content');//use id not name//
    //var data = CKEDITOR.instances.content.getData();
</script> -->

<?php /*
if (isset($_POST['submit'])) {
    echo "fsdfsdfsd"; exit;
    $new_id = $_POST['id'];

    // echo "fgfjghgjkhg";exit;
    $periods = $_POST['periods'];   

    $sql = "UPDATE periods set `periods` = '$periods' where id = " . $new_id; 
    $row = $con->query($sql);

//  mysqli_query($con, "UPDATE periods set id='$new_id'");
    
}
*/ ?>
<!-- Modify 25/8/2022 -->
    <?php include '../footer.php';?>