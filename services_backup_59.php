<?php include 'header.php';
include "dbcon.php";
?>
<?php
//   if ($_SERVER["REQUEST_METHOD"] == "POST") {    
//     $serv = mysqli_real_escape_string($con, $_POST['serv']);
//     $bname = mysqli_real_escape_string($con, $_POST['bname']);
//     // echo $serv;exit;
//     //echo "sdfsdfsdf";exit;
// }

?>
<?php

// include("dbcon.php");
// header('Content-Type: application/json; charset=utf-8');
// session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', '-1');
// print_r($_POST);exit;

// print_r($_GET);exit;    
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// if (isset($_POST['submit-form'])) {

//    echo "gfsdhgfgfhdgf"; exit;
// $name = mysqli_real_escape_string($con, $_POST['name']);
// $email = mysqli_real_escape_string($con, $_POST['email']);
// $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
// $country_code = mysqli_real_escape_string($con, $_POST['hidden_mobile']);


// $company = mysqli_real_escape_string($con, $_POST['company']);
// $bname = mysqli_real_escape_string($con, $_POST['bname']);
// echo $bname; exit;
// $deg = mysqli_real_escape_string($con, $_POST['deg']);
// $serv = mysqli_real_escape_string($con, $_POST['serv']);
// echo $serv; exit;

// $cont = mysqli_real_escape_string($con, $_POST['cont']);
// $type = mysqli_real_escape_string($con, $_POST['type']);
// $message = mysqli_real_escape_string($con, $_POST['message']);


// $query = "SELECT * FROM `service` WHERE `cat_f`LIKE '%$bname%'"; 
// $item = $con->query($query);
// echo "<pre>"; print_r($item); 
// $rm = mysqli_fetch_assoc($item);

// $result = mysqli_fetch_assoc($result_policies);

//     echo $sql_policies = "SELECT s.*, c.id AS catID, c.categories
//     FROM `service` AS s
//     LEFT JOIN `cat` AS c
//     ON c.id = s.cat_f
//     WHERE s.cat_f LIKE '%$bname' AND c.id = ".$serv.""; exit;

// $result_policies = mysqli_query($con, $sql_policies);
// $result = mysqli_fetch_assoc($result_policies);
// echo "<pre>"; print_r($result); exit;

// $querys = $con->query($strings);
// }
// echo '<pre>';print_r($_POST);exit;
$selected = "";

?>
<section class="page-title" style="background-image: url(assets/images/breadcrum/our-services.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>Our Services</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="faq-section-five">
    <div class="pattern" style="background: #efe8e3;"></div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-area">
                    <form method="post" class="contact-form">
                        <div class="row">
                            <div class="col-md-5 form-group">
                                <label>Our Businesses</label>
                                <select class="form-control" name="bname" id="examplebussinessSelect1">
                                    <?php

                                    //  if(isset($_SESSION['dropdown1'])) {
                                    //     }else{
                                    echo "<option value='select'>All</option>";
                                    //     } 
                                    ?>
                                    <?php
                                    function cat($parent_id = 0, $sub_mark = '')
                                    {
                                        $bname_id = isset($_POST['bname']) ? $_POST['bname'] : "";
                                        // echo $parent_id;
                                        global $con;
                                        // $parent_id=0;                               
                                        $query =  $con->query("SELECT * FROM  cat WHERE parent_id = $parent_id ORDER BY categories ASC");
                                        if ($query->num_rows > 0) {
                                            while ($row = $query->fetch_assoc()) {
                                                if ($row['id'] == $bname_id) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                                // echo '<option value="'.$value.'" '.(($value=='United States')?'selected="selected"':"").'>'.$value.'</option>';
                                                // if($_SESSION['dropdown1'] == $row['id']){
                                                //     echo"adadasd";exit;
                                                // }
                                                echo '<option ' . $selected . ' id="' . $row['id'] . '" value="' . $row['id'] . '">' . $sub_mark . $row['categories'] . '</option>';

                                                //  echo "<option id='" . $row['id'] . "' value='" . $row['id'] . "'>".$sub_mark.$row['categories']."</option>";

                                            }
                                        }
                                    }
                                    ?>
                                    <?php echo cat(); ?>
                                    <!-- <option>Raichand Management</option>
                                    <option>Raichand Trading</option>
                                    <option>Raichand Investments</option>
                                    <option>Raichand Merchandise</option>
                                    <option>Raichand Hospitality</option>
                                    <option>Raichand Entertainment</option>
                                    <option>Raichand Foundation</option>
                                    <option>Raichand Healthcare</option>
                                    <option>Raichand School of Arts</option>
                                    <option>Raichand Publishers</option> -->
                                </select>
                            </div>

                            <div class="col-md-5 form-group">
                                <label>Service</label>
                                <select class="form-control" name="serv" id="exampleserviceSelect2">
                                    <option value="select">All</option>

                                    <!-- <option>Entrepreneurship Incubation</option>
                                    <option>Digital Transformation</option>
                                    <option>Sustainable Business Model</option>
                                    <option>Engaging Content & Campaigns to drive Continuous Growth</option>
                                    <option>Operations Consultancy</option>
                                    <option>Financial Resources Consultancy</option>
                                    <option>Support Services</option>
                                    <option>Website Development</option>
                                    <option>Application Development</option>
                                    <option>Future Potential Discover</option>
                                    <option>Board Advisory</option>
                                    <option>Strategy Design & Implementation</option>
                                    <option>Gather & Analyze Reliable Market Data</option>
                                    <option>Market to Specific Segments</option>
                                    <option>Leverage Data-Targeted</option>
                                    <option>Trend Analysis</option>
                                    <option>Financial Forecasting</option>
                                    <option>Annual Strategy Scan</option>
                                    <option>Facility Expansion</option>
                                    <option>Economic Impact Analysis</option>
                                    <option>Agile Transformation</option>
                                    <option>Case Studies</option>
                                    <option>Time Tracking & Estimation</option>
                                    <option>Benchmark standards</option>
                                    <option>Seamless services</option>
                                    <option>Information Architecture</option>
                                    <option>Real-time Insights and Algorithms</option>
                                    <option>Customer Workflows</option>
                                    <option>Customer Service Management (CSM)</option>
                                    <option>Field Service Management</option>
                                    <option>Operational Technology Management</option>
                                    <option>User experience (UX) Design</option>
                                    <option>Customer Journey Analytics</option>
                                    <option>Digital Customer Experience</option>
                                    <option>Customer Experience Analysis</option>
                                    <option>Mapping & Re-Engineering</option>
                                    <option>Productive Organization Design</option>
                                    <option>Outsourcing Services</option> -->
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form" id="submit-form"><span class="btn-title">Search</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="services-section-six">
    <div class="auto-container">
        <div class="row">
            <?php


            // include("dbcon.php");
            // header('Content-Type: application/json; charset=utf-8');
            // session_start();
            // error_reporting(E_ALL);
            // ini_set('display_errors', '-1');
            // print_r($_POST);exit;

            // print_r($_GET);exit;    
            // if ($_SERVER["REQUEST_METHOD"] == "POST") {


            if (isset($_POST['submit-form'])) {

                //    echo "gfsdhgfgfhdgf"; exit;
                // $name = mysqli_real_escape_string($con, $_POST['name']);
                // $email = mysqli_real_escape_string($con, $_POST['email']);
                // $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
                // $country_code = mysqli_real_escape_string($con, $_POST['hidden_mobile']);

                // if
                // $company = mysqli_real_escape_string($con, $_POST['company']);
                $bname = mysqli_real_escape_string($con, $_POST['bname']);
                // $deg = mysqli_real_escape_string($con, $_POST['deg']);
                $serv = mysqli_real_escape_string($con, $_POST['serv']);
                // echo $serv; exit;
                // unset($_SESSION['dropdown1']);
                // unset($_SESSION['dropdown2']);
                $_SESSION["dropdown1"] = $bname;
                // echo $_SESSION["dropdown1"]; exit;
                $_SESSION["dropdown2"] = $serv;


                if ($bname == "select") {
                    $sql = "SELECT * FROM `service` WHERE is_del = 0 ORDER BY id Asc";
                    $result = mysqli_query($con, $sql);
                    // echo "if conddition "; exit ;
                } else {
                    if ($serv == "All" && $bname != "select") {
                        $query = "SELECT * FROM `service` WHERE is_del = 0  AND `cat_f`LIKE '%$bname%'";
                        //         // $item = $con->query($query);
                        $result = mysqli_query($con, $query);
                    } else {

                        $query = "SELECT * FROM `service` WHERE is_del = 0 AND `cat_f`LIKE '%$bname%' AND `id` = '$serv'";
                        //         // $item = $con->query($query);
                        $result = mysqli_query($con, $query);
                    }
                }
            } else {
                $sql = "SELECT * FROM `service` WHERE is_del = 0 ORDER BY id Asc";
                $result = mysqli_query($con, $sql);
            }
                // echo $serv; exit;
                // if($serv == "select"){
                //     // echo"second";exit;
                //     $query = "SELECT * FROM `service` WHERE `cat_f`LIKE '%$bname%'"; 
                //     //         // $item = $con->query($query);
                //             $result = mysqli_query($con, $query);


                // }
                // else{
                //     // echo "first"; exit;
                //     $query = "SELECT * FROM `service` WHERE `id`LIKE '%$serv%'"; 
                //     //         // $item = $con->query($query);
                //             $result = mysqli_query($con, $query);
                // }

                // }
                // $cont = mysqli_real_escape_string($con, $_POST['cont']);
                // $type = mysqli_real_escape_string($con, $_POST['type']);
                // $message = mysqli_real_escape_string($con, $_POST['message']);
                //   if($bname == ""){
                //     // echo "if"; exit; 
                //     $sql = "SELECT * FROM `service` ORDER BY id Asc";
                //     $result = mysqli_query($con, $sql);
                //   }
                //   else{
                //     // echo "else"; exit;
                //     if($serv == ""){
                //         $query = "SELECT * FROM `service` WHERE `cat_f`LIKE '%$bname%'"; 
                //         // $item = $con->query($query);
                //         $result = mysqli_query($con, $query);
                //     }
                //     else{
                //         $query = "SELECT * FROM `service` WHERE `id`LIKE '%$serv%'"; 
                //         // $item = $con->query($query);
                //         $result = mysqli_query($con, $query);
                //     }
                //     // echo "else"; exit;
                //   }

            
            // else{

            // }
            // echo "<pre>"; print_r($item); 
            // $rm = mysqli_fetch_assoc($item);

            // $result = mysqli_fetch_assoc($result_policies);

            //     echo $sql_policies = "SELECT s.*, c.id AS catID, c.categories
            //     FROM `service` AS s
            //     LEFT JOIN `cat` AS c
            //     ON c.id = s.cat_f
            //     WHERE s.cat_f LIKE '%$bname' AND c.id = ".$serv.""; exit;

            // $result_policies = mysqli_query($con, $sql_policies);
            // $result = mysqli_fetch_assoc($result_policies);
            // echo "<pre>"; print_r($result); exit;

            // $querys = $con->query($strings);

            // else{    

            //     $sql = "SELECT * FROM `service` ORDER BY id Asc";
            //     $result = mysqli_query($con, $sql);
            // }
            if (mysqli_num_rows($result) > 0) {
                function limit_text($text, $limit)
                {
                    if (str_word_count($text, 0) > $limit) {
                        $words = str_word_count($text, 2);
                        $pos   = array_keys($words);
                        $text  = substr($text, 0, $pos[$limit]) . '...';
                        // echo $text;exit;
                    }
                    return $text;
                }

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-lg-4 service-block-six">
                        <div class="inner-box">
                            <div class="image-box">
                                <img class="lazy-image owl-lazy loaded" src="../../uploadimg/<?php echo $row['images']; ?>" data-src="../../assets/images/services/Enter.jpg" alt="" data-was-processed="true">
                                <div class="overlay">
                                    <a href="services_detail/services_detail_page.php?id=<?php echo $row['id']; ?>">
                                        <span class="flaticon-right"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h5 class="service-title">
                                    <?php
                                    $title = $row['service_title'];
                                    echo $newtext = wordwrap($title, 18, "<br />\n");
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>

            <!-- <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Digital-Transformation1.jpg"
                            data-src="../assets/images/services/Digital-Transformation1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/digital-transformation.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Digital Transformation</h5>

                    </div>
                </div>
            </div>
            
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/sustainble.jpg"
                            data-src="../assets/images/services/sustainble.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/sustainable-business-model.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Sustainable Business Model</h5>

                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/enging.jpg"
                            data-src="../assets/images/services/enging.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/engaging-Content-Campaigns-to-drive-Continuous-Growth.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Engaging Content & Campaigns to drive Continuous Growth</h5>

                    </div>
                    </div>
                </div>
                
                 <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/operations_consulting_masthead1.jpg"
                            data-src="../assets/images/services/operations_consulting_masthead1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/operations-consultancy.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Operations Consultancy</h5>

                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Financial_Resource_on.png"
                            data-src="../assets/images/services/Financial_Resource_on.png" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/financial-resources-consultancy.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Financial Resources<br> Consultancy</h5>

                    </div>
                   
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Support-Services1.jpg"
                            data-src="../assets/images/services/Support-Services1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/support-services.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Support Services</h5>

                    </div>
                   
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/web-Development1.jpg"
                            data-src="../assets/images/services/web-Development1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/website-development.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Website Development</h5>

                    </div>
                   
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Application-Developmnet.jpg"
                            data-src="../assets/images/services/Application-Developmnet.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/application-devlopment.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Application Development</h5>

                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Future-potential1.jpg"
                            data-src="../assets/images/services/Future-potential1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/future-potential-discovery.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Future Potential Discovery</h5>

                    </div>
                   
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Board add.jpg"
                            data-src="../assets/images/services/Board add.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/board-advisory.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Board Advisory</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Strategydesign11.jpg"
                            data-src="../assets/images/services/Strategydesign11.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/strategy-design-implementation.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Strategy Design &<br> Implementation</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Strategydesign.jpg"
                            data-src="../assets/images/services/Strategydesign.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/gather-analyze-reliable-market-data.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Gather & Analyze Reliable Market Data</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Market to Specific segment1.jpg"
                            data-src="../assets/images/services/Market to Specific segment1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/market-to-specific-segments.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Market to Specific Segments</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Leverage Data .jpg"
                            data-src="../assets/images/services/Leverage Data .jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/leverage-data-targeted.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Leverage Data-Targeted</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Trend .jpg"
                            data-src="../assets/images/services/Trend .jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/trend-analysis.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Trend Analysis</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Financial Forecasting1.jpg"
                            data-src="../assets/images/services/Financial Forecasting1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/financial-forecasting.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Financial Forecasting</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Annual Strategy Scan1.jpg"
                            data-src="../assets/images/services/Annual Strategy Scan1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/annual-strategy-scan.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Annual Strategy Scan</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Facility1.jpg"
                            data-src="../assets/images/services/Facility1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/facility-expansion.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Facility Expansion</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Economic-impact1.jpg"
                            data-src="../assets/images/services/Economic-impact1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/economic-impact-analysis.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Economic Impact Analysis</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Aglie transmision1.jpg"
                            data-src="../assets/images/services/Aglie transmision1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/agile-transformation.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Agile Transformation</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/case.jpg"
                            data-src="../assets/images/services/case study.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/case-studies.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Case Studies</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Time Traking1.png"
                            data-src="../assets/images/services/Time Traking1.png" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/time-tracking-estimation.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Time Tracking & Estimation</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Benchmark standards1.png"
                            data-src="../assets/images/services/Benchmark standards1.png" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Benchmark-standards.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Benchmark standards</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Seamless services1.png"
                            data-src="../assets/images/services/Seamless services1.png" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Seamless-services.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Seamless services</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Information Architecture1.jpg"
                            data-src="../assets/images/services/Information Architecture1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Information-Architecture.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Information Architecture</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Real-time insights1.jpg"
                            data-src="../assets/images/services/Real-time insights1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Information-Architecture.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Real-time Insights and<br> Algorithms</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/CRM1.jpg"
                            data-src="../assets/images/services/CRM1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Customer Service Management.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Customer Service Management (CSM)</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Field-Service1-jpg.jpg"
                            data-src="../assets/images/services/Field-Service1-jpg.jpg"/services/Field-Service-Management.php"" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Field-Service-Management.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Field Service Management</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Operational Tec.jpg"
                            data-src="../assets/images/services/Operational Tec.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Operational-Technology-Management.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Operational Technology<br> Management</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/UXdesign1.jpg"
                            data-src="../assets/images/services/UXdesign1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/User-experience-Design.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">User experience (UX) Design</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Customer journey-analysis1.jpg"
                            data-src="../assets/images/services/Customer journey-analysis1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Customer-Journey-Analytics.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Customer Journey Analytics</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Digital-Customer-Experience1.jpg"
                            data-src="../assets/images/services/Digital-Customer-Experience1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Digital-Customer-Experience.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Digital Customer Experience</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Customer Experience Analysis1.jpg"
                            data-src="../assets/images/services/Customer Experience Analysis1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Customer-Experience-Analysis.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Customer Experience Analysis</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Mapping Re- Engineering1.jpg"
                            data-src="../assets/images/services/Mapping Re- Engineering1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Business-Process-Mapping-Re-Engineering.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Mapping & Re-Engineering</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/Productive Organization 1.jpg"
                            data-src="../assets/images/services/Productive Organization 1.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Productive-Organization-Design.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Productive Organization Design</h5>

                    </div>
                  
                </div>
            </div>
            
            <div class="col-lg-4 service-block-six">
                <div class="inner-box">
                    <div class="image-box">
                        <img class="lazy-image owl-lazy loaded" src="../assets/images/services/outsourcing-services1jpg.jpg"
                            data-src="../assets/images/services/outsourcing-services1jpg.jpg" alt="" data-was-processed="true">
                        <div class="overlay">
    
                        <a href="/services/Outsourcing-Services.php"><span class="flaticon-right"></span></a>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="service-title">Outsourcing Services</h5>

                    </div>
                  
                </div>
            </div> -->


        </div>


    </div>
</section>

<?php include 'footer.php'; ?>
<script>
    // function bGroup(){
    // val1 = $("#exampleFormControlSelect1").val();
    // window.alert(val1);
    $(document).ready(function() {
        var services = '<?php echo isset($_POST['serv']) ? $_POST['serv'] : ""; ?>';
        var selected = false;
        setTimeout(() => {
            // alert(bname);
            $("#examplebussinessSelect1").trigger('change');
        }, 1000);

        $("#examplebussinessSelect1").change(function() {
            // alert(bname);

            $("#exampleserviceSelect2 option").remove(); // add this 

            // var cid = $(this).attr('id');
            var cid = $(this).val();
            // $cid = $('#exampleFormControlSelect1 option:selected').attr('id');
            //   alert(cid);
            if (!cid) {
                $('#exampleserviceSelect2').append('<option value="">All</option>');
            }
            $.ajax({
                url: 'load_categories.php',
                type: 'POST',
                data: {
                    id: cid
                },
                success: function(res) {
                    // alert(res);
                    //   $("#serv").html(res);
                    data = JSON.parse(res);
                    // console.log(data);
                    $('#exampleserviceSelect2').append('<option>All</option>');
                    var len = data.length;
                    for (var i = 0; i < len; i++) {
                        var id = data[i].id;
                        var service_title = data[i].service_title;
                        if (id == services) {
                            selected = true;
                        } else {
                            selected = false;
                        }
                        $('#exampleserviceSelect2')

                            .append($("<option></option>")
                                .attr("id", id)
                                .attr("value", id)
                                .attr("selected", selected)
                                .text(service_title));
                    }
                    // $.each(data, function (index, value) {
                    //     // console.log(index);
                    //     // alert(value);
                    //     $('#exampleFormControlSelect2')
                    //     // .append($("<option>Select Services</option>"))
                    //     .append($("<option></option>")
                    //     .attr("id",index)
                    //     .attr("value",index)
                    //     .text(value));                
                    // });
                    // $.each(data.response, function(key, value) {
                    //      $('#serv')
                    //         .append($("<option></option>")
                    //         .attr("value",key)
                    //         .text(value));
                    // });
                }
            });
        });
    });
    // return val1;
    // }
</script>