<?php 
include 'header.php'; 
include("dbcon.php");
?>

<section class="page-title" style="background-image: url(assets/images/breadcrum/about.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>Careers</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="faq-section-five" style="background:#fff;">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-area" style="background:#fff;">
                    <form method="post" action="careers.php" class="contact-form">
                        <div class="row">
                            <!-- <div class="col-md-3 form-group">
                                <label>Keywords</label>
                                <input type="text" name="" placeholder="Search Here" required="">
                            </div> -->

                            <div class="col-md-3 form-group">
                                <label>Role</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option value="">Role select</option>
                                    <?php
                                    
                                    $sql = "SELECT * FROM career";
                                    $result = $con->query($sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value={$row['role']}>{$row['role']}</option>";
                                        }
                                    }
                                    ?>
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-3 form-group">
                                <label>Business</label>
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option value="">Business</option>
                                    <?php
                                    include("config.php");
                                    $sql = "SELECT * FROM bname_category";
                                    $result = $con->query($sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value={$row['bname']}>{$row['bname']}</option>";
                                        }
                                    }
                                    ?>
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-3 form-group">
                                <label>Country</label>
                                <select class="form-control" id="exampleFormControlSelect3">
                                    <option value="">Country</option>
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
                            <div class="col-md-3 form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Search</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Career Section -->
<section class="career-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h3<span class="career-font">Be a part of The Raichand Group.</span><br><i>A new way of working. A new way of
                    understanding.</i></h3>
                <div class="text-decoration">
                    <span class="left"></span>
                    <span class="right"></span>
                </div>
        </div>
        <div class="col-lg-12 col-md-12 text-center">
            <p>
                <span class="career-font1"><i>Let’s do
                        it
                        together. Grow Together.</i> </span><br><br>
                We're building a culture at The Raichand Group where amazing people like you can do their best work.
                It’s rewarding, balanced and with cross functional exposure. We like to work with
                people having right character rather than skills and academic qualifications. The
                opportunity to challenge yourself, polish your skills, take up ownership and groom
                leader inside you. <br><br>
                The prospect of being surrounded by smart, ambitious, motivated people. If you see
                your values align with our organization's values, come join us.
            </p>
        </div>
        <div class="col-lg-12 col-md-12 text-center pt-35"></div>
    </div>
</section>

<section class="career-section">
    <div class="auto-container">
        <div class="row">
            <?php
            $sql = "SELECT * FROM jobcareer";
            $result = $con->query($sql);

            foreach ($result as $row) { ?>
                <div class="career-block col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="time"><?php echo $row['job_flag'] ?></div>
                        <div class="icon"> <img src="assets/images/business-logo/Raichand_TRADING.jpg" alt="" class="imagess" style="height:120px;"></div>
                        <h4><?php echo $row['role'] ?></h4>
                        <button class="btn btn-dark"><a class="btn btn-dark">
                            <span class="btn-title" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>">View Details</span>
                        </a>
                        </button>
                        <ul class="list">
                            <li><a href="#"><i style="top: 4px;font-weight: 600;" class="fas fa-map-marker-alt"></i>Location: <?php echo $row['location'] ?></a></li>
                            <li><a href="#"><i style="top: 4px;font-weight: 600;" class="fas fa-user-circle"></i>Applicant:<?php echo $row['applicant'] ?></a></li>
                            <li><a href="#"><i style="top: 4px;font-weight: 600;" class="far fa-clock"></i>
                                    <?php 
                                    
                                    $date = $row['created_on'];
                                   
                                   
                                    $OldDate = strtotime($date);
                                    $OldDate = new DateTime(date('Y-m-d', $OldDate));
                                    $NewDate = new DateTime(date('Y-m-d'));

                                    $diff = date_diff($OldDate, $NewDate);

                                    $days = $diff->format("%a");
                                    //echo $diff = date_diff(date_create($NewDate),date_create(date("M j, Y")));

                                    if('0 Days Ago'== $days . " " . 'Days Ago'){
                                        echo 'Today';                                        
                                    }else{
                                        echo $days . " " . 'Days Ago';
                                    }


                                    ?></a>
                            </li>
                            <li><a href="#"><i style="top: 4px;font-weight: 600;" class="fas fa-industry"></i><?php echo $row['job_type'] ?></a></li>
                        </ul>
                        <br>
                        <!-- <a href="#" class="theme-btn btn-style-one">-->
                        <!--    <span class="btn-title">View</span>-->
                        <!--</a>-->
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>



<section class="sidebar-page-container">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 content-side">
                <div class="card">
                    <img class="card-img-top" src="assets/images/resource/hire.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Life at Raichand </h5>
                        <br>
                        <a href="life-at-raichand.php" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 content-side">
                <div class="card">
                    <img class="card-img-top" src="assets/images/resource/recuit.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Recruitment Journey</h5>
                        <!--<p class="card-text">We want you to experience new and innovative journey of your job-->
                        <!--    application with-->
                        <!--    The Raichand Group. Fully Digital and get notified at each steps.</p><br>-->
                        <br>
                        <a href="recruitment-journey.php" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section-two bg-oliver" style="padding: 15px 0px 15px;">
    <div class="auto-container">
        <div class="row align-items-center">

            <div class="col-lg-8 text-center">
                <!--<h5>Write Us at </h5>-->
                <h5>Join our Talent Network to stay up-to-date with our latest job vacancies</h5>
            </div>
            <div class="col-lg-4">
                <div class="wrapper-box">
                    <div class="contact-info">
                        <!--<div class="icon"><span class="flaticon-call-1"></span></div>-->
                        <!--<h4>(555) 890 1234 </h4>--><br>
                        <a href="career-portal.php" class="theme-btn blink"><span class="btn-title">Apply Now</span></a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$sql = "SELECT * FROM jobcareer";
$result = $con->query($sql);

foreach ($result as $row) {
    // echo "<pre>";print_r($row);exit;
?>
    <div class="modal right fade" id="myModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['id']; ?>" style="background: rgba(0, 0, 0, 0.31);">
        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-body">

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel<?php echo $row['id']; ?>">Job Description</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">ID</th>
                                <td><?php echo $row['job_id'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Created by</th>
                                <td><?php echo $row['created_by'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Hirarchy Band</th>
                                <td><?php echo $row['hierarchy_band'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Reporting Manager</th>
                                <td><?php echo $row['reporting_manager'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <h6><b>Responsibilities</b></h6>
                    <br>
                    <div class="f-17">
                        <ul class="checklist-ul">
                            <?php echo $row['responsibilities'] ?>
                        </ul>
                    </div>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Work Type</th>
                                <td><?php echo $row['work_type'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Work Shift </th>
                                <td><?php echo $row['work_shift'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Pay Range</th>
                                <!-- <td>₹240,000.00 - ₹480,000.00 per anum</td> -->
                                <td>₹<?php echo $row['pay_range1'].'-'.'₹'.$row['pay_range2'] .' ' . 'per anum'; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Eligibility Criteria</th>
                                <td><?php echo $row['eligibility_criteria'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Round Name</th>
                                <th scope="col">Round Type</th>
                                <th scope="col"> Interviewer Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">Communication</td>
                            </tr>
                            <tr>
                                <td>Communication</td>
                                <td>F2F</td>
                                <td>HR Manager</td>
                            </tr>
                            <tr>
                                <td>Technical</td>
                                <td>In Person </td>
                                <td>Sales Manager</td>
                            </tr>
                        </tbody>
                    </table>


                    <center> <a href="career-portal.php" class="theme-btn btn-style-one">
                            <span class="btn-title" data-toggle="modal" data-target="#myModal">Apply</span>
                        </a>
                    </center>
                </div>
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->
<?php } ?>



<?php include 'footer.php'; ?>