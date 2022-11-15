<?php 
include ("../header.php");
include("../dbcon.php");
?>
<style>
.page-title:before {


    background-image: none !important;
}

.nav {
    display: -webkit-box;
    display: flex !important;
    padding-left: 0 !important;
    margin-bottom: 0 !important;
    list-style: none !important;
    flex-wrap: wrap;
    flex-direction: row-reverse;
    font-size: 10px;
}
</style>
<?php
if (isset($_GET['id'])) {
    $query  = "SELECT * FROM `service` where id = " . $_GET['id'];
    $item = $con->query($query);
    $rm = mysqli_fetch_assoc($item);
} else {
    //header("location: https://raichandgroup.com/admin/policies/");
}
?>

<section class="page-title" style="background-image:url('/uploadimg/<?php echo $rm['image_detail']; ?>')">
    <div class="auto-container">
        <!-- <p><?php //echo $rm['image_detail']; exit;?></p> -->
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1><?php echo $rm['service_title'];?></h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="<?php echo SITE_URL;?>services.php">Our Services</a></li>
                    <li><a href="#"><?php echo $rm['service_title'];?></a></li>

                </ul>
            </div>
        </div>
    </div>
</section>

<section class="services-details">
    <div class="auto-container">
        <div class="row pt-50">
            <div class="col-lg-12">
                 <p><?php echo $rm['long_description'];?></p>
                        <!-- <p>Below are some benefits of our Incubator Services:</p> -->
            </div><br><br>
            <!-- <div class="col-lg-9 content-side pt-50">
                <h3><strong>Long Description </strong></h3>
                <br>
                <div class="text">
                    <p><?php //echo $rm['long_description'];?></p>
                    </div>
            </div>
            <aside class="col-lg-3">
                <div class="service-sidebar">
                    <img src="<?php //echo SITE_URL.'uploadimg/'.$rm['images'];?>">
                    <!-- <img src="../assets/images/services/Mentorship1.jpg"> --
                </div>
            </aside>
        </div> -->

        <!-- <div class="row pt-50 flex-direction">
            <aside class="col-lg-2">
                <div class="service-sidebar">
                    <img src="../assets/images/services/Save Your Time 11.jpg">
                </div>
            </aside>
            <div class="col-lg-10 content-side">
                <h3><strong>Save Your Time & Money</strong></h3>
                <br>
                <div class="text">
                    <p>Through a variety of services such as accounting, marketing, and human resources, 
                    incubators help companies save money and time while growing their businesses.</p>
                </div>
            </div>
        </div> -->
        
        
        <!-- <div class="row pt-50">
            <div class="col-lg-9 content-side">
                <h3><strong>Access to Big Mind </strong></h3>
                <br>
                <div class="text">
                    <p>When it comes to incubators, having access to industry experts and mentors is critical for 
                        successful operations.<br><br>
                        Incubators often concentrate on a specific sector. Among other things, one incubator 
                        specializes on the food industry, while another focuses on the financial sector. Some 
                        incubators, on the other hand, enable businesses to apply regardless of their industry.<br><br>
                       
                        </p>
                </div>
            </div>
             <aside class="col-lg-3">
                <div class="service-sidebar">
                    <img src="../assets/images/services/Access to Big Mind.jpg">
                </div>
            </aside>
        </div> -->
    </div>
</section>
<!--<section class="pb-50" id="benifit&amp;value">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12 col-md-12 col-lg-12">-->
<!--                <ul class="nav nav-tabs nav-justified" role="tablist">-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link active" data-toggle="tab" href="#one" role="tab" aria-controls="one"-->
<!--                            aria-selected="true">With Our Suppliers </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" data-toggle="tab" href="#two" role="tab" aria-controls="two"-->
<!--                            aria-selected="false">For Customers</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" data-toggle="tab" href="#employee" role="tab" aria-controls="three"-->
<!--                            aria-selected="false">For Employees</a>-->
<!--                    </li>-->

<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" data-toggle="tab" href="#employee" role="tab" aria-controls="four"-->
<!--                            aria-selected="false">For Employees</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <div class="tab-content mt-3">-->
<!--                    <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab">-->
<!--                        <div class="col-lg-12 col-md-12">-->
<!--                            <div class="text">We view our trade partners as allies in serving our stakeholders. We treat-->
<!--                                them-->
<!--                                with respect, fairness, and integrity – expecting the same in return.</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab">-->
<!--                        <div class="col-lg-12 col-md-12">-->
<!--                            <div class="text"><b>Customer Commitment:</b> We develop relationships that make a-->
<!--                                positive difference in our customers' lives.-->
<!--                                <br>-->
<!--                                <b>Quality:</b> We provide outstanding products and unsurpassed-->
<!--                                service that, together, deliver premium value to our customers.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab">-->
<!--                        <div class="col-lg-12 col-md-12">-->
<!--                            <div class="text"><strong>Good Citizenship:</strong> We are good citizens in the-->
<!--                                communities in-->
<!--                                which we live and work.<br>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="tab-pane" id="four" role="tabpanel" aria-labelledby="four-tab">-->
<!--                        <div class="col-lg-12 col-md-12">-->
<!--                            <div class="text"><b>Customer Commitment:</b> We develop relationships that make a-->
<!--                                positive difference in our customers' lives.-->
<!--                                <br>-->
<!--                                <b>Quality:</b> We provide outstanding products and unsurpassed-->
<!--                                service that, together, deliver premium value to our customers.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<div class="blog-single-post">
    <ul class="tag">
        <?php
        $tags = $rm['tag'];
        $str_arr = explode (",", $tags);
        // print_r($str_arr);exit;
        foreach($str_arr as $tag)
        {
            ?><li><a>#<?php echo $tag;?></a></li><?php
        }

        ?>
        <!-- <li><a>#entrepreneurshipincubatorindonesia</a></li>
        <li><a>#entrepreneurshipincubator</a></li>
        <li><a>#entrepreneurshipincubatorprogram</a></li>
        <li><a>#entrepreneurship101</a></li>
        <li><a>#entrepreneurshiplifestyle</a></li>
        <li><a>#entrepreneurshipquotes</a></li>
        <li><a>#socialentrepreneurship</a></li>
         <li><a>#entrepreneurshipacademy</a></li>
         <li><a>#entrepreneurshipa</a></li>
         <li><a>#entrepreneurshipavenue</a></li>
         <li><a>#entrepreneurshipandinnovation</a></li>
         <li><a>#aentrepreneurshipvillage</a></li>
         <li><a>#entrepreneurshipbyamarjyot</a></li>
         <li><a>#entrepreneurshipbook</a></li>
         <li><a>#entrepreneurshipbusiness</a></li>
         <li><a>#bentrepreneurship</a></li>
         <li><a>#entrepreneurshipchallenge</a></li>
         <li><a>#centrepreneurship</a></li>
         <li><a>#entrepreneurshipdevelopmentprogram</a></li> -->
    </ul>
</div>
<?php include '../footer.php';?>