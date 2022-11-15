<?php include '../header.php';?>
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
ul,li{
    list-style: lower-roman!important;
}
</style>
<section class="page-title" style="background-image: url(../assets/images/breadcrum/our-services.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>Customer Service Management (CSM)</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo SITE_URL;?>">Home</a></li>
                    <li><a href="<?php echo SITE_URL;?>services.php">Our Services</a></li>
                    <li><a href="#">Customer Service Management (CSM)</a></li>

                </ul>
            </div>
        </div>
    </div>
</section>

<section class="services-details">
    <div class="auto-container">
        <div class="row pt-50">
            <div class="col-lg-12">
                 <p>Your consumers may get service and support from you via many channels such as the 
                    web, email, chat, telephone, and social media platforms. You may create as many cases 
                    as you need and then assign them to customer service professionals who have the 
                    relevant skill sets to handle them.
                    </p>
            </div><br><br>
             <div class="col-lg-3 col-md-3"></div>
                        <div class="col-lg-6 col-md-6 pt-50 pb-50">
                             <img src="../assets/images/services/customersm.png">
                        </div>

            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</section>

<div class="blog-single-post">
    <ul class="tag" style="list-style: disc!important;">
        <li><a>#customerservice</a></li>
        <li><a>#customerserviceproblems</a></li>
        <li><a>#customerserviceappreciation</a></li>
    </ul>
</div>
<?php include 'footer.php';?>