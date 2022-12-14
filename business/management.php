<?php include 'header.php';
include 'dbcon.php';
?>
<style>
.services-section-three {
    position: relative;
    padding: 29px 0 0px;
}
</style>
<div id="home">
    <nav id="navbar-float" class="floating-menu">
        <div class="main-menu">
            <div class="vertical-bar">
                <div class="animated-bar"></div>
            </div>
            <div class="ripple">
                <a href="#about-raichand" class="active">
                    <span>
                        About Us
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
                <a href="#coreteam" class="">
                    <span>
                        Core Team
                    </span>
                </a>
            </div>
            <div class="ripple">
                <a href="#whyus" class="">
                    <span>
                        Why Us?
                    </span>
                </a>
            </div>
            <div class="ripple">
                <a href="#contact" class="">
                    <span>
                        Contact Us
                    </span>
                </a>
            </div>
        </div>
    </nav>
</div>
<div>
    <section class="page-title" style="background-image: url(../assets/images/breadcrum/management.png);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Raichand Management</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?php echo SITE_URL;?>l">Home</a></li>
                        <li><a href="<?php echo SITE_URL;?>business.php">Our Businesses</a></li>
                        <li>Raichand Management</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section bg-gray" id="about-raichand">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <h2>About Us</h2>
                        <div class="text-decoration">
                            <span class="left"></span>
                            <span class="right"></span>
                        </div>
                        <div class="text">
                            We specialise in creating brand value and implementing practical
                            strategies that achieve real and sustainable results. Our domain area
                            expertise is in Customer Experience, Strategy, Business Transformation,
                            and Operational Excellence. Our specialised service offering is
                            customised for each client based on their circumstances. Whether its
                            strategy design, roadmap creation, or full digital transformation, we are
                            well resourced to implement the most effective solution to differentiate
                            your organization in the marketplace.<br>
                            We help companies to boost revenue by making strategic, cost effective,
                            highly productive road map. We unlock the new unexplored channel of
                            businesses which help companies to reach more customers, expansion,
                            and control expenses.<br>
                            Our members are expert in their own field, proven history of work
                            experience, explored different profiles and industries, familiar with multi
                            geographies. Our team work on behalf of clients on their vision as a team
                            to help them accomplish their goals without wasting time, cost and risk
                            involve in finding right and expert workforce for that specific task.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-block">
                        <div class="image-one wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="image-box">
                                <img class="lazy-image owl-lazy loaded" src="../assets/images/resource/image-5.jpg"
                                    data-src="../assets/images/resource/image-5.jpg" alt="" data-was-processed="true">
                            </div>
                        </div>
                        <div class="image-two wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                            <div class="image-box">
                                <img class="lazy-image owl-lazy loaded" src="../assets/images/resource/image-4.jpg"
                                    data-src="../assets/images/resource/image-4.jpg" alt="" data-was-processed="true">
                            </div>
                        </div>
                        <div class="logo"><img src="../assets/images/logo/11-logo.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
<section class="services-details" id="benifit&value">
    <div class="auto-container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs nav-justified sub_cat" role="tablist">
                    <?php     
                    //   $query =  $con->query("SELECT * FROM  cat WHERE parent_id = 1 ORDER BY id ASC");
                    // if ($query->num_rows > 0) { 

                    //     while ($row = $query->fetch_assoc()) {
                    ?>
                    <!-- <li class="nav-item" id="li_<?php echo $row['id'];?>">
                        
                        <a class="nav-link" data-toggle="tab" id="<?php echo $row['id'];?>" role="tab" aria-controls="one" aria-selected="true"><?php echo $row['categories'];?></a>
                    </li>    -->
                    <?php
                    //  }  
                    //       }  
                    ?>
                    <style>
                        @media screen and (max-width:915px) {
                               .fontSize
                               {
                                font-size:12px!important;
                               }
                    </style>
                   <li class="nav-item" >
                        <a class="nav-link active fontSize" style="" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true">Transformation & Excellence</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link fontSize" style="" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false"> Strategy & Growth</a>
                    </li>
                    <li class="nav-item " >
                        <a class="nav-link fontSize" style="" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false"> Customer Experience</a>
                    </li>
                    <li class="nav-item fontSize" >
                        <a class="nav-link fontSize" style="" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false"> Business Restructuring </a>
                    </li>
                </ul>
                <div class="tab-content mt-3" style="" style="margin-top:-100px">
                    <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <div class="col-lg-12 col-md-12">
                            <section class="services-section-three" id="services">
                                <div class="auto-container">
                                    <div class="row" id="custom_html_row">
                                    
                                        <div class="theme_carousel owl-theme owl-carousel" id="services_response"
                                            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}'> 
                                            <?php //echo SITE_URL; ?> 
                                             <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <div class="image"><img
                                                                src="../assets/images/services/Digital-Transformation1.jpg" alt=""></div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="icon"><span
                                                                class="flaticon-question"></span></div>
                                                        <h5>Digital Transformation</h5>
                                                        <a href="/services/digital-transformation.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Digital <br> Transformation</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Businesses may take use of these services in order to help them transition to a more digitally oriented future...
                                                                </div>
                                                                <a href="/services/digital-transformation.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/sustainble.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Sustainable<b style="color:transparent">.</b>Business Model</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/sustainable-business-model.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Sustainable <br>Business Model</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We help organizations in building sustainable business model. This is the best way to express the strategy...
                                                                </div>
                                                                <a href="/services/sustainable-business-model.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/enging.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Engaging Content <br>& Campaigns</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/engaging-Content-Campaigns-to-drive-Continuous-Growth.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Engaging Content <br>& Campaigns</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Creative, technology, and data science are all combined in this our cloud-based marketing solution...
                                                                </div>
                                                                <a href="/services/engaging-Content-Campaigns-to-drive-Continuous-Growth.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/operations_consulting_masthead1.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Operations Consultancy</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/operations-consultancy.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Operations<br> Consultancy</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">he operations department serves as a vital connection between your company's longterm plan...
                                                                </div>
                                                                <a href="/services/operations-consultancy.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Financial_Resource_on.png"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Financial<b style="color:transparent">.</b>Resources Consultancy</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/financial-resources-consultancy.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Financial Resource<br> Consultancy</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">In order to better manage and grow your money and assets, single clients and small  businesses can get help from the counsel...
                                                                </div>
                                                                <a href="/services/financial-resources-consultancy.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Support-Services1.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Support Services</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/support-services.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Support<br> Services</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Our business support services will enable you to achieve significant cost, quality, and customer service savings...
                                                                </div>
                                                                <a href="/services/support-services.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/web-Development1.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Website Development </h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/website-development.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Website<br> Development</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">With the assistance of Web development services, any kind of web-based software may be developed, produced...
                                                                </div>
                                                                <a href="/services/website-development.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Application-Developmnet.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Application Development </h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/application-devlopment.phpp" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Application<br> Development </h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Our application software developers have developed into industry-specific technology...
                                                                </div>
                                                                <a href="/services/application-devlopment.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Future-potential1.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Future<b style="color:transparent">.</b>Potential Discovery </h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/future-potential-discovery.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Future<b style="color:transparent">.</b>Potential Discovery</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Our multi-year strategy to assisting our clients reached its conclusion in the second phase...
                                                                </div>
                                                                <a href="/services/future-potential-discovery.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Board add.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Board Advisory </h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/board-advisory.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Board<br> Advisory </h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">To help executives acquire insight and assess business operations, and to increase the knowledge...
                                                                </div>
                                                                <a href="/services/board-advisory.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <div class="col-lg-12 col-md-12">
                            <section class="services-section-three" id="services">
                            <div class="auto-container">
                                    <div class="row">
                                        <div class="theme_carousel owl-theme owl-carousel"
                                            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Strategydesign11.jpg" alt=""></div>
                                                    <div class="content">
                                                        <div class="icon"><span class="flaticon-career"></span></div>
                                                        <h5>Strategy<b style="color:transparent">.</b>Design<b style="color:transparent">.</b><br>&<b style="color:transparent">.</b>Implementation </h5>
                                                        <a href="/services/strategy-design-implementation.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span class="flaticon-career"></span>
                                                                </div>
                                                                <h4>Strategy<b style="color:transparent">.</b>Design<br><b style="color:transparent">.</b>&<b style="color:transparent">.</b>Implementation </h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">When you collaborate with us, an experienced team of ecommerce specialists will work 
                                                                    directly...
                                                                </div>
                                                                <a href="/services/strategy-design-implementation.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <div class="image"><img src="../assets/images/services/Strategydesign.jpg" alt=""></div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="icon"><span
                                                                class="flaticon-customer-service"></span></div>
                                                        <h5>Gather<b style="color:transparent">.</b>&<b style="color:transparent">.</b>Analyze Reliable<b style="color:transparent">.</b>Market</h5>
                                                        <a href="/services/gather-analyze-reliable-market-data.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-customer-service"></span></div>
                                                                <h4>Gather & Analyze<br> Reliable Market</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">When providing decision-makers with support for making choices and planning the future...
                                                                </div>
                                                                <a href="/services/gather-analyze-reliable-market-data.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Market to Specific segment1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Market<b style="color:transparent">.</b>to<b style="color:transparent">.</b>Specific<b style="color:transparent">.</b><br>Segments</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/market-to-specific-segments.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Market<b style="color:transparent">.</b>to<br><b style="color:transparent">.</b>Specific<b style="color:transparent">.</b>Segment</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">How can you tell whether your product or service is a big hit with your customers? While some of your customers...

                                                                </div>
                                                                <a href="/services/market-to-specific-segments.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Leverage Data .jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Leverage<b style="color:transparent">.</b>Data-Targeted</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/leverage-data-targeted.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Leverage <br>Data-Targeted</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">During the next 10 years, the success of your firm will be significantly influenced by the 
                                                                        use of "big data."...
                                                                      

                                                                </div>
                                                                <a href="/services/leverage-data-targeted.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Trend .jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Trend Analysis</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/trend-analysis.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Trend <br>Analysis</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">In order to achieve long-term success, you must thoroughly research your competitors 
                                                                    and the market...
                                                                </div>
                                                                <a href="/services/trend-analysis.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Financial Forecasting1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Financial Forecasting</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/financial-forecasting.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Financial <br>Forecasting</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Our financial forecasting services may aid you in converting your financial data into actionable...
                                                                </div>
                                                                <a href="/services/financial-forecasting.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Annual Strategy Scan1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Annual Strategy Scan</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/annual-strategy-scan.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Annual <br>Strategy Scan</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We provide a powerful data visualization tool that enables your senior team to participate 
                                                                    in a fact-based...
                                                                </div>
                                                                <a href="/services/annual-strategy-scan.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Facility1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Facility Expansion</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/facility-expansion.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Facility <br> Expansion</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">When you're expanding or establishing a new facility, you may find that you need to 
                                                                upgrade...
                                                                </div>
                                                                <a href="/services/facility-expansion.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Economic-impact1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Economic<b style="color:transparent">.</b>Impact Analysis</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/economic-impact-analysis.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Economic Impact<br> Analysis</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">When you're expanding or establishing a new facility, you may find that you need to 
                                                                upgrade... 
                                                                </div>
                                                                <a href="/services/economic-impact-analysis.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Aglie transmision1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Agile Transformation</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/agile-transformation.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Agile <br>Transformation</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">When you're expanding or establishing a new facility, you may find that you need to 
                                                                upgrade...
                                                                </div>
                                                                <a href="/services/agile-transformation.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/case study.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Case Studies</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/case-studies.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Case <br>Studies</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">When you're expanding or establishing a new facility, you may find that you need to 
                                                                upgrade... 
                                                                </div>
                                                                <a href="/services/case-studies.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Time Traking1.png" alt=""></div>
                                                    <div class="content">
                                                        <h5>Time<b style="color:transparent">.</b>Tracking<b style="color:transparent">.</b>&<b style="color:transparent">.</b> Estimation</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/time-tracking-estimation.phpp" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Time Tracking <br>& Estimation</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">When you're expanding or establishing a new facility, you may find that you need to 
                                                                upgrade... 
                                                                </div>
                                                                <a href="/services/time-tracking-estimation.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab">
                        <div class="col-lg-12 col-md-12">
                            <section class="services-section-three" id="services">
                                <div class="auto-container">
                                    <div class="row">
                                        <div class="theme_carousel owl-theme owl-carousel"
                                            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Benchmark standards1.png" alt=""></div>
                                                    <div class="content">
                                                        <h5>Benchmark<br> standards</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Benchmark-standards.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Benchmark<br> standards</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Using the assessments and surveys we give, you may obtain an idea of where you are 
                                                                    right now ...
                                                                </div>
                                                                <a href="/services/Benchmark-standards.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Seamless services1.png" alt=""></div>
                                                    <div class="content">
                                                        <h5>Seamless <br>services</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Benchmark-standards.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Seamless<br> services</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We give organizations with the know-how, expertise, services, and equipment they need to simplify...
                                                                </div>
                                                                <a href="/services/Benchmark-standards.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Information Architecture1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Information Architecture</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Information-Architecture.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Information Architecture</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">The information architecture of a website is crucial to the experience of a typical user. Cohesive IA... 
                                                                </div>
                                                                <a href="/services/Information-Architecture.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Real-time insights1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Real-time<br> Algorithms</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Information-Architecture.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Real-time <br> Algorithms</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">A thorough understanding of the difficulties impacting your products and customers is essential for growth.
                                                                </div>
                                                                <a href="/services/Information-Architecture.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/CRM1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>(CSM)<br>Customer</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Customer Service Management.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>(CSM)<br>Customer</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Your consumers may get service and support from you via many channels such as the 
                                                                web, email, chat... 
                                                                </div>
                                                                <a href="/services/Customer Service Management.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Field-Service1-jpg.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Field Management</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Field-Service-Management.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Field Management</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Using these solutions, you may keep track of an organization's field resources and 
                                                                     specialized, or unique ...
                                                                </div>
                                                                <a href="/services/Field-Service-Management.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Operational Tec.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Operational Management</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Operational-Technology-Management.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Operational Management</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Having a consistent system of action will help your operational technology environment...

                                                                </div>
                                                                <a href="/services/Operational-Technology-Management.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/UXdesign1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>User<br> experience  Design</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/User-experience-Design.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>User<br> experience  Design</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Designing the user's experience while using a product, on the other hand, is the subject ...

                                                                </div>
                                                                <a href="/services/User-experience-Design.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Customer journey-analysis1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Customer <br> Analytics</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Customer-Journey-Analytics.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Customer <br> Analytics</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Customers, patients, and employees now want seamless, secure, Omni-channel...

                                                                </div>
                                                                <a href="/services/Customer-Journey-Analytics.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Digital-Customer-Experience1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Digital <br> Experience</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Digital-Customer-Experience.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Digital <br> Experience</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We will help you in digital customer experience with the below services experience with the....

                                                                </div>
                                                                <a href="/services/Digital-Customer-Experience.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Customer Experience Analysis1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Customer <br> Analysis</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Customer-Experience-Analysis.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Customer <br> Analysis</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">To accommodate people with an interest in text analysis, we provide a variety of different solutions...

                                                                </div>
                                                                <a href="/services/Customer-Experience-Analysis.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                     <div class="tab-pane" id="four" role="tabpanel" aria-labelledby="four-tab">
                        <div class="col-lg-12 col-md-12">
                            <section class="services-section-three" id="services">
                                <div class="auto-container">
                                    <div class="row">
                                        <div class="theme_carousel owl-theme owl-carousel"
                                            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                    
                   <!--<div class="tab-pane" id="four" role="tabpanel" aria-labelledby="four-tab">-->
                   <!--     <div class="col-lg-12 col-md-12">-->
                   <!--         <section class="services-section-four" id="services">-->
                   <!--             <div class="auto-container">-->
                   <!--                 <div class="row">-->
                   <!--                     <div class="theme_carousel owl-theme owl-carousel"-->
                   <!--                         data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>-->
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Mapping Re- Engineering1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Mapping <br> Re-Engineering</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Business-Process-Mapping-Re-Engineering.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Mapping <br> Re-Engineering</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">With the assistance of our Organization Process Reengineering team, we can utilize 
                                                                    quality and efficiency...

                                                                </div>
                                                                <a href="/services/Business-Process-Mapping-Re-Engineering.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Productive Organization 1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Productive Organization</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Productive-Organization-Design.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Productive Organization</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We work with our clients to design and implement new organizational structures and 
                                                                    operational processes...

                                                                </div>
                                                                <a href="/services/Productive-Organization-Design.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Productive Organization 1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Productive Organization</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Productive-Organization-Design.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Productive Organization</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We work with our clients to design and implement new organizational structures and 
                                                                    operational processes...

                                                                </div>
                                                                <a href="/services/Productive-Organization-Design.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/outsourcing-services1jpg.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Outsourcing<br> Services</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Outsourcing-Services.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Outsourcing<br> Services</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We work with our clients to design and implement new organizational structures and 
                                                                    operational processes...

                                                                </div>
                                                                <a href="/services/Outsourcing-Services.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="process-section-three" id="whyus">
        <div class="pattern" style="background-image: url(../assets/images/shape/pattern-12.png);"></div>
        <div class="auto-container">
            <div class="">
                <div class="sec-title text-center">
                    <h2>Why Us?</h2>
                    <span class="text-decoration-two"></span>
                </div>
                <p>We help companies to reach more customers using our expertise, by saving time and without unnecessary
                    expenditure which directly help to earn more and spend less. We market products/services using our
                    channels to add brand value by acquiring more market share. We work closely with client to find
                    solutions what they are lacking with, through current business model analysis, intensive market
                    research and productive business plan with implementation roadmap. In whatever ways we are linked to
                    revenue addition to company.</p>
            </div>

            <div class="process-wrapper" style="margin-top: 30px;">
                <div class="row">
                    <div class="col-lg-4 col-md-6 process-block-three">
                    
                        <div class="inner-box">
                       
                            <div class="icon"><img src="../assets/images/icons/icon-23.png" alt="">
                            </div>
                            <h4>Vision</h4>
                            <div class="text">Provide turnkey solutions to businesses.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 process-block-three">
                        <div class="inner-box">
                            <div class="icon"><img src="../assets/images/icons/icon-24.png" alt=""></div>
                            <h4>Mission</h4>
                            <div class="text">Help clients to acquire more market share and increase profitability.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 process-block-three">
                        <div class="inner-box">
                            <div class="icon"><img src="../assets/images/icons/icon-25.png" alt=""></div>
                            <h4>Goal</h4>
                            <div class="text">Reach as many possible geographies.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-details-section" id="contact" style="background-image: url(../assets/images/background/contact.png);">
        <div class="auto-container">
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
            <div class="sec-title text-center">
                <h2 class="text-white">Get in touch with us</h2>
                <div class="text"><h3><strong>Need help of reaching more customers, boost-up revenue, start new
                    levers?</strong></h3><br>
                    <p>Our customer experience consultants can help you take your business to
                        the next level, achieving all your goals in an effective and sustainable
                        way. With a professional team of staff dedicated to the growth of your
                        organization,<br> Raichand Management is committed to your success.</p>
                    <br>
                    <!--<span>Write Us at <strong> management@raichandgroup.com </strong>or Leave your Message at-->
                    <!--    <a href="contact-us.php">here</a>.</span>-->
                </div>

                <div class="text-decoration">
                    <span class="left"></span>
                    <span class="right"></span>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section-two bg-oliver mail-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-1"></div>
                 <div class="col-lg-1 sm-text-center" > <i class="fa fa-envelope" aria-hidden="true" style="font-size: 57px;"></i>
                </div>
                <div class="col-lg-5 sm-text-center">
                    <h5>Write Us at </h5>
                     <div class="typewriter" style="text-align:left;">
                          <h4>management@raichandgroup.com</h4>
                        </div>
                    <!--<h4 class="email-texts">management@raichandgroup.com</h4>-->
                </div>
                <div class="col-lg-5">
                    <div class="wrapper-box">
                        <div class="contact-info">
                            <!--<div class="icon"><span class="flaticon-call-1"></span></div>-->
                            <!--<h4>(555) 890 1234 </h4>--><br>
                        <a href="<?php echo SITE_URL;?>contact.php" class="theme-btn blink"><span class="btn-title">Contact Us</span></a>

                    </div>                        
                </div>
            </div>
        </div>
    </section>
</div>
<?php //print_r($_POST);?>
<?php include 'footer.php';?>

<script>
$(document).ready(function(){

    // $('li:first').addClass('active');
    $cat_id = $('.services-details ul.sub_cat li.nav-item:first-child a').attr('id');
    //alert($cat_id); 
    // $('.services-details ul.sub_cat li.nav-item:first-child').addClass('active');
    $(".services-details ul.sub_cat li.nav-item:first-child a").addClass("active");
    get_services($cat_id);



//   var id = 23; 
$('ul.sub_cat li.nav-item').on('click', function () {
    $cat_id = $(this).find('a').attr('id');
    $("p:first").addClass("intro");

    // alert($cat_id);
    // $.post("management.php", {"cat_id": catid});
    get_services($cat_id);
//   $.ajax({
//             type: 'POST',
//             url:'management_service.php',
//             data:{id:cat_id},
//         });
//   $.post("B.php",
//  {
//      id1: id,

//   } );
//   return false;
});

// $("#submit").click(function(){
//  $.post("B.php",
//  {
//      id1: id,

//   } );      
//    });
function get_services($cat_id){
$.ajax({
    type: "POST",
    url: 'management_service.php',
    dataType: 'html',
    data: {id:$cat_id},
    success: function(data){
        // $('#custom_html_row').html(data);
        //$('#custom_html_row .owl-nav').removeClass('disabled');
    }
 });
}
  });
 </script>