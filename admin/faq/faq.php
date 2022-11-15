<?php include '../sidebar.php';?>
<?php 
// require_once "config.php";

$question= $answer= $tag= "";

if (isset($_POST['submit']))
 {

	$question = $_POST["question"];
	$answer = $_POST["answer"];
	$tag = $_POST["tag"];
	$order_num = $_POST["order_num"];

    $sql = "INSERT INTO faq(question, answer, tag, order_num) VALUES ('$question','$answer','$tag',$order_num)";

//  Modify 25/8/2022 
  $row = $con->query($sql);
  if ($row) {

    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/faq/','Good job!','Data submitted successfully'); 
    });</script>";
    
    } else {
        echo "<script>$(document).ready(function(){
            setSuccessAlert('" . SITE_URL . "admin/faq/','Good job!','Sorry Data Not submitted'); 
        });</script>";
    }
        // if ($row)
        //  {
        //     echo "<script>window.location.href='".SITE_URL."admin/faq/';</script>";
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
                <h4 class="page-title">FAQ</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">FAQ</a></li>
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
                                <label for="Question" class="col-md-12 p-0"> Question</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="question">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="answer"> Answer </label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="answer">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="category" class="col-md-12 p-0 border-0"> Category:</label>
                                <div class="col-md-12 border-bottom p-0 border-0">
                                    <select name="tag" class="form-control p-0 border-0">
                                        <option value="">select </option>
                                        <option value="Suppliers">Vendors</option>
                                        <option value="Customers">Customers</option>
                                        <option value="Personnels">Personnels</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="title"> Order No:</label><br><!-------- Modify 26/8/2022 -------->
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" class="form-control p-0 border-0" name="order_num">
                                </div>
                            </div>
                        
                              
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-warning text-white" name="submit" value="Submit"></input>
                                    <!--------- Modify 25/8/2022 start -------->
                                    <a href="./"><button type="button" class="btn btn-warning text-white">Cancel</button></a>
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
    <?php include '../footer.php';?>