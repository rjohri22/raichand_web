<?php include '../sidebar.php'; ?>
<?php

include "../../dbcon.php";


$role = $business = $country = "";


if (isset($_POST['submit'])) {
    $role = $_POST['role'];
   
    $sql = "INSERT INTO career(`role`) VALUES ('$role')";

    $row = $con->query($sql);
    if ($row) {
?>

        <script type="text/javascript">
            window.location.href = "careerindex.php";
        </script>
<?php
        //header("location :http://local.raichandgroup.com/admin/career/careerindex.php");
    } else {
        echo "Data not posted" . $sql;
    }
}
?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Invester</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="http://local.raichandgroup.com/admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Invester</a></li>
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
                                <label class="col-md-12 p-0" for="file_name"> Title:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="file_name">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Year:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="year" placeholder="Year">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="invester_category" class="col-md-12 p-0"> Invester Cotegory:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="invester_category" class="form-control p-0 border-0">
                                        <option value="">Select</option>
                                        <?php
                                        include("config.php");

                                        $sql = "SELECT * FROM invest_category";

                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option> {$row['invester_category']}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="tags" class="col-md-12 p-0">Businesses Name:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="businesses_name" class="form-control p-0 border-0">
                                        <option value="">Select</option>
                                        <?php
                                        include("config.php");

                                        $sql = "SELECT * FROM bname_category";

                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option> {$row['bname']}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="formFileSm" class="form-label" class="col-md-12 p-0">Upload file:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input class="form-control form-control-sm p-0 border-0" name="uploadfile" id="formFileSm" type="file">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-success" name="submit" value="submit"></input>
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
    <?php include '../footer.php'; ?>