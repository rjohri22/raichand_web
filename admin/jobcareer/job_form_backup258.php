<?php include '../sidebar.php'; ?>

<!-- CDN for CKeditor -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script> -->

<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Job career</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="http://local.raichandgroup.com/admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Job career</a></li>
                    </ol>
                </div>
            </div>
        </div>
     </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-title">Job career</h3>
                        </div>
                        <div class="d-flex">

                            <!-- ================ ADD Form START =================================== -->

                            <form method="post" action="jobdata_add_db.php" enctype="multipart/form-data" class="form-horizontal">
                                <!-- job_ flag field -->
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="job_flag">Job Flag</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="job_flag" id="job_flag" >
                                </div>
                            </div> 

                            <!-- role dropdron  -->
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="title">Role</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select name="role" class="form-control p-0 border-1">
                                        <option value="">Select role</option>
                                        <?php
                                        include("config.php");

                                        $sql = "SELECT * FROM career";

                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            while ($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<option value='{$row['role']}'> {$row['role']}</option>";
                                            }
                                        }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div> 
                            <!-- for location -->
                            <div class="form-group mb-4">
                                <label for="formFileSm" class="form-label" class="col-md-12 p-0">Location</label>
                                <div class="col-md-12 border-bottom p-0">
                                <select class="form-control p-0 border-1" id="exampleFormControlSelect3" name="location">
                                <option value="">Select Country</option>
                                <option>All</option>
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
                                    <option>United States</option>
                                    <option>Vietnam</option>
                                       
                                </select>
                                </div>
                            </div>

                            <!-- applicant -->
                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Applicant </label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="applicant" value="0" id="applicant" >
                                </div>
                            </div>                   
                          
                            <!-- job type-->
                        
                            <div class="form-group mb-4">
                            <label for="job_type" class="form-label" class="col-md-12 p-0">Job Type</label>
                            <select class="form-control p-0 border-1" id="job_type" name="job_type">
                                <option value="">Select Job type</option>
                                <option value="Remote">Remote</option>
                                <option value="On-Site">On-Site</option>
                                <option value="Hybrid">Hybrid</option>

                            </select>
                            </div>

                            <!-- id rendom generated but not field for this -->
                          
                              <!-- for Hierarchy Band  -->
                              <div class="form-group mb-4">
                                <label for="formFileSm" class="form-label" class="col-md-12 p-0">Hierarchy Band</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="hierarchy_band" id="hierarchy_band" >
                                </div>
                            </div>

                            <!-- for reporting manager  -->
                            <div class="form-group mb-4">
                                <label for="reporting_manager" class="form-label" class="col-md-12 p-0">Reporting Manager</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" value="admin" name="reporting_manager" id="reporting_manager" >
                                </div>
                            </div>

                            <!-- for responsibilities textarea CK Editor -->
                            <div class="form-group mb-4">
                                <label for="responsibilities" class="col-md-12 p-0"> Responsibilities</label>
                                <div class="col-md-12 border-bottom p-0">                                  
                                    <textarea name="responsibilities"></textarea>
                                </div>
                            </div>

                            <!-- for work type dropdown  -->
                            <div class="form-group mb-4">
                            <label for="work_type" class="form-label" class="col-md-12 p-0">Work Type</label>
                            <select class="form-control p-0 border-1" id="work_type" name="work_type">
                                <option value="">Select Work type</option>
                                <option value="full-time">full-time</option>
                                <option value="part-time">part-time</option>
                            </select>
                            </div>

                            <!-- for work shift -->
                            <div class="form-group mb-4">
                            <label for="work_shift" class="form-label" class="col-md-12 p-0">Work Shift</label>
                            <select class="form-control p-0 border-1" id="work_shift" name="work_shift">
                                <option value="">select work shift</option>
                                <option value="day">day</option>
                                <option value="night">night</option>
                            </select>
                            </div>

                            <!-- pay range 1-->
                            <div class="form-group mb-4">
                                <label for="pay_range" class="form-label" class="col-md-12 p-0">Pay Range to</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="pay_range1" id="pay_range1" >
                                </div>
                            </div>
                               <!-- pay range 2-->
                            <div class="form-group mb-4">
                                <label for="pay_range2" class="form-label" class="col-md-12 p-0">Pay Range From</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="pay_range2" id="pay_range2" >
                                </div>
                            </div>

                            <!-- for eligibility_criteria textarea CK Editor -->
                            <div class="form-group mb-4">
                                <label for="eligibility_criteria" class="col-md-12 p-0"> Eligibility Criteria</label>
                                <div class="col-md-12 border-bottom p-0">                                  
                                    <textarea name="eligibility_criteria"></textarea>
                                </div>
                            </div>                            
                            
                            <!-- submit data from jobdata_add_db.php -->
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                <input type="submit" class="btn btn-success "name="submit" id="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                            <!-- ============= ADD Form END ========================================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('responsibilities');
    CKEDITOR.replace('eligibility_criteria');

   // var desc = CKEDITOR.instances['content'].getData();
</script>








