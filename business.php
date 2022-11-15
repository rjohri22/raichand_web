<?php include 'header.php';
include 'dbcon.php';?>
<style>
    

.blogo {
  position: relative;
      margin-top: 10px;

}

.imagess {
  ddisplay: block;
    width: 100%;
    height: auto;
    border: 1px solid #eceff1;
    margin-top: 10px;
    border-radius: 1px;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
      margin-top: 10px;

}

.blogo:hover .overlay {
  opacity: 1;
}

</style>
<!-- <div id="home">
    <nav id="navbar-float" class="floating-menu">
        <div class="main-menu">
            <div class="vertical-bar">
                <div class="animated-bar"></div>
            </div>
            <div class="ripple">
                <a href="#intro" class="active">
                    <span>
                        Intro
                    </span>
                </a>
            </div>
            <div class="ripple">
                <a href="#services" class="">
                    <span>
                        Services
                    </span>
                </a>
            </div>
            <div class="ripple">
                <a href="#forte" class="">
                    <span>
                        Forte
                    </span>
                </a>
            </div>
            <div class="ripple">
                <a href="#news-insights" class="">
                    <span>
                        News &amp; Insights
                    </span>
                </a>
            </div>
        </div>
    </nav>
</div> -->
<section class="page-title" style="background-image: url(assets/images/breadcrum/one-business.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>Our Businesses</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Our Businesses</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="client-section-two">
    <div class="auto-container">
        <div class="wrapper-box">
            <div class="outer-box">
                <div class="row m-0">
                    <div class="column col-lg-1 col-md-6"></div>
                    <div class="col-lg-2 col-md-6">
                        <a href="<?php echo SITE_URL;?>business/management.php">
                        <div class="blogo">
                            <img src="assets/images/business-logo/Raichand_MANAGEMENT.jpg" alt="" class="imagess">
                            <div class="overlay">
                                <img src="assets/images/logo/11.jpg" alt="" class="image">
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="<?php echo SITE_URL;?>business/trading.php">
                            <div class="blogo">
                                <img src="assets/images/business-logo/Raichand_TRADING.jpg" alt="" class="imagess">
                                <div class="overlay">
                                    <img src="assets/images/logo/12.jpg" alt="" class="image">

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="<?php echo SITE_URL;?>business/investments.php">
                            <div class="blogo">
                                <img src="assets/images/business-logo/Raichand_INVESTMENTS.jpg" alt="" class="imagess">
                                <div class="overlay">
                                    <img src="assets/images/logo/13.jpg" alt="" class="image">

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="<?php echo SITE_URL;?>business/merchandise.php">
                        <div class="blogo">
                            <img src="assets/images/business-logo/Raichand_MERCHANDISE.jpg" alt="" class="imagess">
                            <div class="overlay">
                                <img src="assets/images/logo/14.jpg" alt="" class="image">
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="<?php echo SITE_URL;?>business/hospitality.php">
                        <div class="blogo">
                            <img src="assets/images/business-logo/Raichand_HOSPITALITY.jpg" alt="" class="imagess">
                            <div class="overlay">
                                <img src="assets/images/logo/15.jpg" alt="" class="image">
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="row m-0">
                    <div class="col-lg-1 col-md-6"></div>
                    <div class="col-lg-2 col-md-6">
                        <a href="<?php echo SITE_URL;?>business/entertainment.php">
                        <div class="blogo">
                            <img src="assets/images/business-logo/Raichand_ENTERTAINMAINT.jpg" alt="" class="imagess">
                            <div class="overlay">
                                <img src="assets/images/logo/16.jpg" alt="" class="image">
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="<?php echo SITE_URL;?>business/foundation.php">
                        <div class="blogo">
                            <img src="assets/images/business-logo/Raichand_FOUNDATION.jpg" alt="" class="imagess">
                            <div class="overlay">
                                <img src="assets/images/logo/17.jpg" alt="" class="image">
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="<?php echo SITE_URL;?>business/healthcare.php">
                        <div class="blogo">
                            <img src="assets/images/business-logo/Raichand_HEALTHCARE.jpg" alt="" class="imagess">
                            <div class="overlay">
                                <img src="assets/images/logo/18.jpg" alt="" class="image">
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="<?php echo SITE_URL;?>business/school-of-arts.php">
                        <div class="blogo">
                            <img src="assets/images/business-logo/Raichand_SCHOOLOFART.jpg" alt="" class="imagess">
                            <div class="overlay">
                                <img src="assets/images/logo/19.jpg" alt="" class="image">
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="<?php echo SITE_URL;?>business/publishers.php">
                        <div class="blogo">
                            <img src="assets/images/business-logo/Raichand_PUBLISHER.jpg" alt="" class="imagess">
                            <div class="overlay">
                                <img src="assets/images/logo/20.jpg" alt="" class="image">
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'footer.php';?>