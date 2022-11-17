<?php include '../sidebar.php';?>
<?php
 
$policies_categories = "";

if(isset($_POST['submit']))
{
    // $bname = $_POST["bname"];
    $policies_categories = $_POST["policies_categories"];

        // Get all the submitted data from the form
        $sql = "INSERT INTO policies_cat (policies_categories) VALUES ('$policies_categories')";
        $row = $con->query($sql);

        if ($row) {

            echo "<script>$(document).ready(function(){
                setSuccessAlert('" . SITE_URL . "admin/policies/categories_list.php','Good job!','Data submitted successfully'); 
            });</script>";
            
        } else {
            echo "<script>$(document).ready(function(){
                setSuccessAlert('" . SITE_URL . "admin/policies/categories_list.php','Good job!','Sorry Data Not submitted'); 
            });</script>";
        }

        // if ($row) {
        //     echo "<script>alert('Category added successfully')</script>";
        //     echo "<script>window.location.href='".SITE_URL."admin/policies/categories_list.php';</script>";
        // }else
        // {

        //     echo "data not posted";
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
                        <form class="form-horizontal form-material" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        
                            <div class="form-group mb-4">
                                <label for="policies_categories" class="col-md-12 p-0"> Policies Categories:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="policies_categories">
                                </div>
                            </div>
                            
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                                     <!-- Modify 24/8/2022 start -->
                                        <a href="/admin/policies/"><button type="button" class="btn btn-outline-success">Cancel</button></a>
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
    <?php include '../footer.php';?>