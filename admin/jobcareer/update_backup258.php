<?php include '../sidebar.php';
include("../../dbcon.php");
$new_id = $_GET['id'];

$sql = "SELECT * FROM `jobcareer` WHERE id=$new_id";
$query = $con->query($sql);
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        //  echo "<pre>";print_r($row);exit;
?>
        <div class="page-wrapper" style="min-height: 250px;">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Job Career</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="http://local.raichandgroup.com/admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                                <li><a href="#" class="fw-normal">Job Career</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="box-title">Job Career</h3>
                                </div>
                                <div class="d-flex">
                                    <!-- ======================= form ============================ -->
                                    <form method="GET" action="updateprocess.php" enctype="multipart/form-data" class="form-horizontal">

                                        <!-- edit job flag -->
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0" for="title"> Job flag:</label>
                                            <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" value="<?php echo $row['job_flag']; ?>" class="form-control p-0 border-0" name="job_flag" id="title">
                                            </div>
                                        </div>

                                        <!-- edit role  dropdron-->
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0" for="title">Role</label>
                                            <?php include("config.php");
                                            $sql = "SELECT * FROM career";
                                            $result = mysqli_query($con, $sql) or die("Query failed:");
                                            ?>
                                            <select class="form-control form-control p-0 border-1" id="role" name="role">
                                                <option value="">select role</option>
                                                <?php if (mysqli_num_rows($result) > 0) {
                                                    while ($row_r = mysqli_fetch_assoc($result)) {
                                                        if ($row_r['role'] == $row['role'] ) {
                                                        
                                                            echo "<option selected value='{$row_r['role']}'>{$row_r['role']}</option>";
                                                        } else {
                                                         
                                                            echo "<option value='{$row_r['role']}'>{$row_r['role']}</option>";
                                                        }
                                                    }
                                                } ?>
                                                </option>
                                            </select>
                                        </div>

                                        <!-- edit country dropdron-->
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0" for="title">Location</label>
                                            <select class="form-control p-0 border-1" id="location" name="location">
                                                <option value="">Country</option>
                                                <?php
                                                if ($row['location'] == $row['location']) {
                                                    echo "<option selected value={$row['location']}>{$row['location']}</option>                                              
                                                 <option value='all'>All</option>
                                                        <option>Australia</option>
                                                        <option>Bahrain</option>
                                                        <option>Bangladesh</option>
                                                        <option>Belgium</option>
                                                        <option>Bulgaria</option>
                                                        <option>Canada</option>
                                                        <option>China - Taiwan, HongKong, Macao</option>
                                                        <option>Croatia</option>
                                                        <option>Cyprus</option>
                                                        <option>Czech Republic (Czechia)</option>
                                                        <option>Denmark</option>
                                                        <option>Finland</option>
                                                        <option>France </option>
                                                        <option>Germany</option>
                                                        <option>Greece</option>
                                                        <option>Hungary</option>
                                                        <option>India</option>
                                                        <option>Indonesia</option>
                                                        <option>Ireland</option>
                                                        <option>Italy</option>
                                                        <option>Japan</option>
                                                        <option>Kuwait</option>
                                                        <option>Malaysia</option>
                                                        <option>Maldives</option>
                                                        <option>Nepal</option>
                                                        <option>Netherlands</option>
                                                        <option>New Zealand</option>
                                                        <option>Norway</option>
                                                        <option>Pakistan</option>
                                                        <option>Philippines</option>
                                                        <option>Poland</option>
                                                        <option>Portugal</option>
                                                        <option>Qatar</option>
                                                        <option>Romania</option>
                                                        <option>Russia</option>
                                                        <option>Saudi Arabia</option>
                                                        <option>Serbia</option>
                                                        <option>Singapore</option>
                                                        <option>South Korea</option>
                                                        <option>Spain</option>
                                                        <option>Srilanka</option>
                                                        <option>Sweden</option>
                                                        <option>Switzerland</option>
                                                        <option>Thailand</option>
                                                        <option>Turkey</option>
                                                        <option>United Arab Emirates</option>
                                                        <option>United Kingdom </option>
                                                        <option>United States</option>";
                                                } ?>
                                                </option>
                                            </select>
                                        </div>
                                        <!-- edit applicant -->
                                        <div class="form-group mb-4">
                                            <label for="year" class="col-md-12 p-0"> Applicant </label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" class="form-control p-0 border-0" name="applicant" value="<?php echo $row['applicant']; ?>" id="applicant">
                                            </div>
                                        </div>
                                        <!-- job type-->
                                        <div class="form-group mb-4">
                                            <label for="job_type" class="form-label" class="col-md-12 p-0">Job type</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <!-- <input type="text" value="<?php // echo $row['job_type'] ?>" class="form-control p-0 border-0" name="job_type" id="job_type"> -->
                                                <select class="form-control p-0 border-1" id="job_type" name="job_type">
                                                <?php
                                                if ($row['job_type'] == 'Remote') {
                                                    echo "<option selected value='Remote'>Remote</option>
                                                    <option  value='On-Site'>On-Site</option>
                                                    <option value='Hybrid'>Hybrid</option>";

                                                } else if ($row['job_type'] == 'On-Site') {
                                                    echo "<option value='Remote'>Remote</option>
                                                    <option selected value='On-Site'>On-Site</option>
                                                    <option value='Hybrid'>Hybrid</option>";

                                                } else if ($row['job_type'] == 'Hybrid') {
                                                    echo "<option value='Remote'>Remote</option>
                                                    <option value='On-Site'>On-Site</option>
                                                    <option selected value='Hybrid'>Hybrid</option>";
                                                } ?>
                                                </option>
                                            </select>
                                            </div>
                                        </div>
                                        <!-- for Hierarchy Band  -->
                                        <div class="form-group mb-4">
                                            <label for="formFileSm" class="form-label" class="col-md-12 p-0">Hierarchy Band</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" class="form-control p-0 border-0" value="<?php echo $row['hierarchy_band'] ?>" name="hierarchy_band" id="hierarchy_band">
                                            </div>
                                        </div>
                                        <!-- for reporting manager  -->
                                        <div class="form-group mb-4">
                                            <label for="reporting_manager" class="form-label" class="col-md-12 p-0">Reporting Manager</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" value="<?php echo $row['reporting_manager'] ?>" class="form-control p-0 border-0" value="admin" name="reporting_manager" id="reporting_manager">
                                            </div>
                                        </div>

                                        <!-- for responsibilities textarea CK Editor -->

                                        <div class="form-group mb-4">
                                            <label for="responsibilities" class="col-md-12 p-0">Responsibilities</label>
                                            <div class="col-md-12 border-bottom p-0">

                                                <textarea name="responsibilities" value="<?php echo $row['responsibilities']; ?>"><?php echo $row['responsibilities']; ?></textarea>

                                            </div>
                                        </div>

                                        <!-- for work type dropdown  -->
                                        <div class="form-group mb-4">
                                            <label for="work_type" class="form-label" class="col-md-12 p-0">Work Type</label>

                                            <select class="form-control p-0 border-1" id="work_type" name="work_type">

                                                <?php
                                                // echo 'Hello=='.$row['work_type'];exit;
                                                if ($row['work_type'] == 'full-time') {
                                                    echo "<option selected value='full-time'>full-time</option>
                                                            <option value='part-time'>Part-time</option>";
                                                } else if ($row['work_type'] == 'part-time') {
                                                    echo "<option value='full-time'>full-time</option>
                                                    <option selected value='part-time'>Part-time</option>";
                                                }

                                                ?> </option>
                                            </select>
                                        </div>

                                        <!-- for work shift -->
                                        <div class="form-group mb-4">
                                        <label for="work_shift" class="form-label" class="col-md-12 p-0">Work Shift</label>
                                        <select class="form-control p-0 border-1" id="work_shift" name="work_shift">
                                            <?php
                                            if ($row['work_shift'] == 'day') {
                                                echo "<option selected value='day'>day</option>
                                                            <option value='night'>night</option>";
                                            } else if ($row['work_shift'] == 'night') {
                                                echo "<option value='day'>day</option>
                                                    <option selected value='night'>night</option>";
                                            }
                                            ?>
                                        </select>
                                        </div>

                                        <!-- pay range 1-->
                                        <div class="form-group mb-4">
                                            <label for="pay_range" class="form-label" class="col-md-12 p-0">Pay Range to</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" class="form-control p-0 border-0" value="<?php echo $row['pay_range1'] ?>" name="pay_range1" id="pay_range1">
                                            </div>
                                        </div>
                                        <!-- pay range 2-->
                                        <div class="form-group mb-4">
                                            <label for="pay_range2" class="form-label" class="col-md-12 p-0">Pay Range from</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" value="<?php echo $row['pay_range2'] ?>" class="form-control p-0 border-0" name="pay_range2" id="pay_range2">
                                            </div>
                                        </div>


                                        <!-- for eligibility_criteria textarea CK Editor -->
                                        <div class="form-group mb-4">
                                            <label for="eligibility_criteria" class="col-md-12 p-0"> Eligibility Criteria</label>

                                            <textarea name="eligibility_criteria" value="<?php echo $row['eligibility_criteria']; ?>"><?php echo $row['eligibility_criteria']; ?></textarea>

                                        </div>
                                        <!-- submit data for edit in updateprocess.php -->
                                        <div class="form-group mb-4">
                                            <div class="col-sm-12">
                                                <input type="submit" class="btn btn-success" name="submit" id="submit" value="Update">
                                            </div>
                                        </div>

                                    </form>
                                    <!-- =================== End Form =================================== -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>
<script>
    CKEDITOR.replace('responsibilities');
    CKEDITOR.replace('eligibility_criteria');

    // var editor = CKEDITOR.instances['content'];
    // CKEDITOR.replace( '#content');//use id not name//
    //var data = CKEDITOR.instances.content.getData();
</script>

<?php
if (isset($_GET['job_flag'])) {
    $job_flag = $_GET['job_flag'];
    echo $role = $_GET['role'];
exit;
    $location = $_GET['location'];
    $applicant = $_GET['applicant'];
    $job_type = $_GET['job_type'];
    $job_id = $_GET['job_id'];
    $created_by = $_GET['created_by'];
    $hierarchy_band = $_GET['hierarchy_band'];
    $reporting_manager = $_GET['reporting_manager'];
    $responsibilities = $_GET['responsibilities'];
    $work_type = $_GET['work_type'];
    $work_shift = $_GET['work_shift'];
    $pay_range1 = $_GET['pay_range1'];
    $pay_range2 = $_GET['pay_range2'];
    // $pay_range = $_GET['pay_range'];
    $eligibility_criteria = $_GET['eligibility_criteria'];

    $created_on = date('Y-m-d');

    echo mysqli_query($con, "UPDATE jobcareer set id='$new_id'");
    exit;
}
?>