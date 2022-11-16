<?php include 'header.php'; include("dbcon.php");
 
?>

<div id="home">
    <nav id="navbar-float" class="floating-menu">
        <div class="main-menu">
            <div class="vertical-bar">
                <div class="animated-bar"></div>
            </div>
            <div class="ripple">
                <a href="#raichand" class="active">
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
                <a href="#forte" class="">
                    <span>
                        Forte
                    </span>
                </a>
            </div>
            <div class="ripple">
                <a href="#livestream" class="">
                    <span>
                        Timeline
                    </span>
                </a>
            </div>
        </div>
    </nav>
</div>

<div id="intro" data-animation-type="intro" data-scroll-magic-animated class="home__intro container-fluid vh-100 p-0" style="background-color: transparent;">
    <div class="home__intro-carousel owl-carousel owl-theme">
        <div class="home__slide vh-100 d-flex flex-column align-items-center justify-content-center" style="background:url(assets/images/slider/management.png) no-repeat; background-size:cover; zoom: 1; background-position: center center;">
            <div class="container">
                <div class="home__slide-content">
                    <h1 class="slide-title text-white">Raichand Management</h1>
                    <h4 class="slide-subtitle text-white">
                        Business Consultants
                    </h4>
                    <div class="col-lg-12 col-md-12" style="padding:0px!important">
                        <h5 class="slider-texts "> Differentiate your organization.</h5>
                    </div>
                </div>
                <img src="assets/images/logo/1.jpg" class="slide-logo">
            </div>
        </div>
        <div class="home__slide vh-100 d-flex flex-column align-items-center justify-content-center" style="background:url(assets/images/slider/trading.png) no-repeat; background-size:cover; zoom: 1; background-position: center center;">
            <div class="container">
                <div class="home__slide-content">
                    <h1 class="slide-title text-white">Raichand Trading</h1>
                    <h4 class="slide-subtitle text-white">
                        Global Trade Network
                    </h4>
                    <h5 class="slider-texts">Connecting Businesses to Different Geographies & Industries.</h5>
                </div>
                <img src="assets/images/logo/2.jpg" class="slide-logo">
                <div class="space-3"></div>
            </div>
        </div>
        <div class="home__slide vh-100 d-flex flex-column align-items-center justify-content-center" style="background:url(assets/images/slider/investment.png) no-repeat; background-size:cover; zoom: 1; background-position: center center;">
            <div class="container">
                <div class="home__slide-content">
                    <h1 class="slide-title text-white">Raichand Investments</h1>
                    <h4 class="slide-subtitle text-white">
                        Seed Investor
                    </h4>
                    <h5 class="slider-texts">Investment for better innovation.</h5>
                    <img src="assets/images/logo/3.jpg" class="slide-logo">
                </div>

            </div>
        </div>
        <div class="home__slide vh-100 d-flex flex-column align-items-center justify-content-center" style="background:url(assets/images/slider/merchandise.png) no-repeat; background-size:cover; zoom: 1; background-position: center center;">
            <div class="container">
                <div class="home__slide-content">
                    <h1 class="slide-title text-white">Raichand Merchandise</h1>
                    <h4 class="slide-subtitle text-white">
                        Products of our brand
                    </h4>

                    <h5 class="slider-texts">Made to perfectly match your class.</h5>
                </div>
                <img src="assets/images/logo/4.jpg" class="slide-logo">

            </div>
        </div>
        <div class="home__slide vh-100 d-flex flex-column align-items-center justify-content-center" style="background:url(assets/images/slider/hospitality.png) no-repeat; background-size:cover; zoom: 1; background-position: center center;">
            <div class="container text-white">
                <div class="home__slide-content">
                    <h1 class="slide-title text-white">Raichand Hospitality</h1>
                    <h4 class="slide-subtitle text-white">
                        Experience Innovation
                    </h4>

                    <h5 class="slider-texts">Helping hoteliers enhance the Guest and team Experience through
                        better technology.</h5>
                </div>
                <img src="assets/images/logo/5.jpg" class="slide-logo">

                <div class="space-3"></div>
            </div>
        </div>
        <div class="home__slide vh-100 d-flex flex-column align-items-center justify-content-center" style="background:url(assets/images/slider/entertainment.png) no-repeat; background-size:cover; zoom: 1; background-position: center center;">
            <div class="container text-white">
                <div class="home__slide-content">
                    <h1 class="slide-title text-white">Raichand Entertainment</h1>
                    <h4 class="slide-subtitle text-white">
                        Building Brands
                    </h4>

                    <h5 class="slider-texts">Crafting Stories for Life.</h5>
                </div>
                <img src="assets/images/logo/6.jpg" class="slide-logo">

            </div>
        </div>
        <div class="home__slide vh-100 d-flex flex-column align-items-center justify-content-center" style="background:url(assets/images/slider/foundation.png) no-repeat; background-size:cover; zoom: 1; background-position: center center;">
            <div class="container text-white">
                <div class="home__slide-content">
                    <h1 class="slide-title text-white">Raichand Foundation</h1>
                    <h4 class="slide-subtitle text-white">
                        Changing lives
                    </h4>

                    <h5 class="slider-texts">Help others and make the difference!</h5>
                </div>
                <img src="assets/images/logo/7.jpg" class="slide-logo">
                <div class="space-3"></div>
            </div>
        </div>
        <div class="home__slide vh-100 d-flex flex-column align-items-center justify-content-center" style="background:url(assets/images/slider/healthcare.png) no-repeat; background-size:cover; zoom: 1; background-position: center center;">
            <div class="container text-white">
                <div class="home__slide-content">
                    <h1 class="slide-title text-white">Raichand Healthcare</h1>
                    <h4 class="slide-subtitle text-white">
                        Smart Choice
                    </h4>

                    <h5 class="slider-texts">All the care one need.</h5>
                </div>
                <img src="assets/images/logo/8.jpg" class="slide-logo">

                <div class="space-3"></div>
            </div>
        </div>
        <div class="home__slide vh-100 d-flex flex-column align-items-center justify-content-center" style="background:url(assets/images/slider/school-of-arts.png) no-repeat; background-size:cover; zoom: 1; background-position: center center;">
            <div class="container text-white">
                <div class="home__slide-content">
                    <h1 class="slide-title text-white">Raichand School of Arts</h1>
                    <h4 class="slide-subtitle text-white">
                        Power of Art
                    </h4>

                    <h5 class="slider-texts">The arts is what connect us all.</h5>
                </div>
                <img src="assets/images/logo/9.jpg" class="slide-logo">

                <div class="space-3"></div>
            </div>
        </div>
        <div class="home__slide vh-100 d-flex flex-column align-items-center justify-content-center" style="background:url(assets/images/slider/publisher.png) no-repeat; background-size:cover; zoom: 1; background-position: center center;">
            <div class="container text-white">
                <div class="home__slide-content">
                    <h1 class="slide-title text-white">Raichand Publishers</h1>
                    <h4 class="slide-subtitle text-white">
                        Read. Lead. Achieve.
                    </h4>

                    <h5 class="slider-texts">Presenting thoughts to world.</h5>
                </div>
                <img src="assets/images/logo/10.jpg" class="slide-logo">

                <div class="space-3"></div>
            </div>
        </div>
    </div>

    <div class="owl-dots-custom">
        <div class="line-progress"></div>
        <div class="owl-dots-custom-container">
            <div class="owl-dots-item">
                <div class="owl-dots-item-title">
                    Management
                </div>
                <div class="dot"></div>
                <div class="intro-timeline-container">
                    <div class="timeline-path">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline.svg" alt="" class="intro_timeline">
                    </div>
                    <div class="timeline-path path-mask">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline_orange.svg" alt="" class="intro_timeline">
                    </div>
                </div>
            </div>
            <div class="owl-dots-item">
                <div class="owl-dots-item-title">
                    Trading
                </div>
                <div class="dot"></div>
                <div class="intro-timeline-container">
                    <div class="timeline-path">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline.svg" alt="" class="intro_timeline">
                    </div>
                    <div class="timeline-path path-mask">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline_orange.svg" alt="" class="intro_timeline">
                    </div>
                </div>
            </div>
            <div class="owl-dots-item">
                <div class="owl-dots-item-title">
                    Investments
                </div>
                <div class="dot"></div>
                <div class="intro-timeline-container">
                    <div class="timeline-path">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline.svg" alt="" class="intro_timeline">
                    </div>
                    <div class="timeline-path path-mask">O
                        <img src="https://www.bahri.sa/Content/img/intro_timeline_orange.svg" alt="" class="intro_timeline">
                    </div>
                </div>
            </div>
            <div class="owl-dots-item">
                <div class="owl-dots-item-title">
                    Merchandise
                </div>
                <div class="dot"></div>
                <div class="intro-timeline-container">
                    <div class="timeline-path">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline.svg" alt="" class="intro_timeline">
                    </div>
                    <div class="timeline-path path-mask">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline_orange.svg" alt="" class="intro_timeline">
                    </div>
                </div>
            </div>
            <div class="owl-dots-item">
                <div class="owl-dots-item-title">
                    Hospitality
                </div>
                <div class="dot"></div>
                <div class="intro-timeline-container">
                    <div class="timeline-path">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline.svg" alt="" class="intro_timeline">
                    </div>
                    <div class="timeline-path path-mask">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline_orange.svg" alt="" class="intro_timeline">
                    </div>
                </div>
            </div>
            <div class="owl-dots-item">
                <div class="owl-dots-item-title">
                    Entertainment
                </div>
                <div class="dot"></div>
                <div class="intro-timeline-container">
                    <div class="timeline-path">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline.svg" alt="" class="intro_timeline">
                    </div>
                    <div class="timeline-path path-mask">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline_orange.svg" alt="" class="intro_timeline">
                    </div>
                </div>
            </div>

            <div class="owl-dots-item">
                <div class="owl-dots-item-title">
                    Foundation
                </div>
                <div class="dot"></div>
                <div class="intro-timeline-container">
                    <div class="timeline-path">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline.svg" alt="" class="intro_timeline">
                    </div>
                    <div class="timeline-path path-mask">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline_orange.svg" alt="" class="intro_timeline">
                    </div>
                </div>
            </div>
            <div class="owl-dots-item">
                <div class="owl-dots-item-title">
                    Healthcare </div>
                <div class="dot"></div>
                <div class="intro-timeline-container">
                    <div class="timeline-path">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline.svg" alt="" class="intro_timeline">
                    </div>
                    <div class="timeline-path path-mask">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline_orange.svg" alt="" class="intro_timeline">
                    </div>
                </div>
            </div>
            <div class="owl-dots-item">
                <div class="owl-dots-item-title">
                    School of Arts
                </div>
                <div class="dot"></div>
                <div class="intro-timeline-container">
                    <div class="timeline-path">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline.svg" alt="" class="intro_timeline">
                    </div>
                    <div class="timeline-path path-mask">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline_orange.svg" alt="" class="intro_timeline">
                    </div>
                </div>
            </div>
            <div class="owl-dots-item">
                <div class="owl-dots-item-title">
                    Publishers
                </div>
                <div class="dot"></div>
                <div class="intro-timeline-container">
                    <div class="timeline-path">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline.svg" alt="" class="intro_timeline">
                    </div>
                    <div class="timeline-path path-mask">
                        <img src="https://www.bahri.sa/Content/img/intro_timeline_orange.svg" alt="" class="intro_timeline">
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- Testimonials Section Four -->
<section class="cta-section-two" id="raichand">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <!--<div class="waviy">-->
                <!--    <span style="--i:1">T</span>-->
                <!--    <span style="--i:2">R</span>-->
                <!--    <span style="--i:3">G</span>-->

                <!--</div>-->
                <h2>The Raichand Group</h2>
                <div class="text">The Raichand Group is an Indian conglomerate industry company, headquartered
                    in Mumbai. Raichand’s diverse businesses includes business consultancy, import and
                    exports, seed and prototype investments, hospitality, mass media, charitable trust,
                    healthcare, education, and merchandising.<br>
                    Raichand serves 49 countries of Asia, Europe, Australia & New Zealand and Northern America.<br><br>

                </div>
                <a href="about.php" class="theme-btn btn-style-four"><span class="btn-title">Know More</span></a>

            </div>
            <div class="col-lg-5">
                <div class="wrapper-box">
                    <img src="assets/images/about/about3.png">
                </div>
            </div>
        </div>
    </div>
</section>


<!--<section class="" id="benifit&value">-->
<!--    <div class="auto-container">-->
<!--        <div class="row">-->
<!--            <div class="col-12 col-md-12 col-lg-12">-->
<!--                <div class="tab-content mt-3">-->
<!--                    <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab">-->
<!--                        <div class="col-lg-12 col-md-12">-->
<!--                            <section class="" id="services">-->
<!--                                <div class="row m-0 justify-content-center align-items-center">-->
<!--                                    <div class="sec-title">-->
<!--                                        <h2 class="mt-3">Our Services</h2>-->
<!--                                    </div>-->
<!--                                  </div>-->

                        <!--           <div class="swiper-nav-button">-->
                            <!-- Add Arrows -->
                        <!--    <div class="swiper-button-prev"><i class="flaticon-right-arrow"></i></div>-->
                        <!--    <div class="swiper-button-next"><i class="flaticon-right-arrow"></i></div>-->
                        <!--</div>-->
<!--                                </div>-->

<!--                                <div class="auto-container">-->
<!--                                    <div class="row">-->

<!--                                        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 10000, "smartSpeed": 600, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>-->
                                       
<!--                                             <div class="service-block-three">-->
<!--                                                <div class="inner-box">-->
<!--                                                    <div class="image">-->
<!--                                                        <div class="image"><img src="../assets/images/services/Digital-Transformation1.jpg" alt=""></div>-->
<!--                                                    </div>-->
<!--                                                    <div class="content">-->
<!--                                                        <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                        <h5>Digital Transformation</h5>-->
<!--                                                        <a href="/services/digital-transformation.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="overlay-content">-->
<!--                                                        <div class="content-wrapper">-->
<!--                                                            <div class="icon-box">-->
<!--                                                                <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                                <h4>Digital <br> Transformation</h4>-->
<!--                                                            </div>-->
<!--                                                            <div class="outer-box">-->
<!--                                                                <div class="text">Businesses may take use of these services in order to help them transition to a more ...-->
<!--                                                                </div>-->
<!--                                                                <a href="/services/digital-transformation.php" class="read-more-link">Read-->
<!--                                                                    More <i class="fa fa-caret-right"></i></a>-->
<!--                                                            </div>-->

<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            <div class="service-block-three">-->
<!--                                                <div class="inner-box">-->
<!--                                                    <div class="image"><img src="../assets/images/services/sustainble.jpg" alt=""></div>-->
<!--                                                    <div class="content">-->
<!--                                                        <h5>Sustainable<br> Business Model</h5>-->
<!--                                                        <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                        <a href="/services/sustainable-business-model.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="overlay-content">-->
<!--                                                        <div class="content-wrapper">-->
<!--                                                            <div class="icon-box">-->
<!--                                                                <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                                <h4>Sustainable <br>Business Model</h4>-->
<!--                                                            </div>-->
<!--                                                            <div class="outer-box">-->
<!--                                                                <div class="text">We help organizations in building sustainable business model. This is the best way to ...-->
<!--                                                                </div>-->
<!--                                                                <a href="/services/sustainable-business-model.php" class="read-more-link">Read-->
<!--                                                                    More <i class="fa fa-caret-right"></i></a>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            <div class="service-block-three">-->
<!--                                                <div class="inner-box">-->
<!--                                                    <div class="image"><img src="../assets/images/services/enging.jpg" alt=""></div>-->
<!--                                                    <div class="content">-->
<!--                                                        <h5>Engaging Content & Campaigns </h5>-->
<!--                                                        <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                        <a href="/services/engaging-Content-Campaigns-to-drive-Continuous-Growth.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="overlay-content">-->
<!--                                                        <div class="content-wrapper">-->
<!--                                                            <div class="icon-box">-->
<!--                                                                <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                                <h4>Engaging Content<br> & Campaign</h4>-->
<!--                                                            </div>-->
<!--                                                            <div class="outer-box">-->
<!--                                                                <div class="text">Creative, technology, and data science are all combined in this our cloud marketing...-->
<!--                                                                </div>-->
<!--                                                                <a href="/services/engaging-Content-Campaigns-to-drive-Continuous-Growth.php" class="read-more-link">Read-->
<!--                                                                    More <i class="fa fa-caret-right"></i></a>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            <div class="service-block-three">-->
<!--                                                <div class="inner-box">-->
<!--                                                    <div class="image"><img src="../assets/images/services/Financial_Resource_on.png" alt=""></div>-->
<!--                                                    <div class="content">-->
<!--                                                        <h5>Operations Consultancy</h5>-->
<!--                                                        <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                        <a href="/services/operations-consultancy.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="overlay-content">-->
<!--                                                        <div class="content-wrapper">-->
<!--                                                            <div class="icon-box">-->
<!--                                                                <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                                <h4>Operations<br> Consultancy</h4>-->
<!--                                                            </div>-->
<!--                                                            <div class="outer-box">-->
<!--                                                                <div class="text">The operations department serves as a vital connection between your company'...-->
<!--                                                                </div>-->
<!--                                                                <a href="/services/operations-consultancy.php" class="read-more-link">Read-->
<!--                                                                    More <i class="fa fa-caret-right"></i></a>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            <div class="service-block-three">-->
<!--                                                <div class="inner-box">-->
<!--                                                    <div class="image"><img src="../assets/images/services/Financial_Resource_on.png" alt=""></div>-->
<!--                                                    <div class="content">-->
<!--                                                        <h5>Financial<br> Resources<br> Consultancy</h5>-->
<!--                                                        <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                        <a href="/services/financial-resources-consultancy.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="overlay-content">-->
<!--                                                        <div class="content-wrapper">-->
<!--                                                            <div class="icon-box">-->
<!--                                                                <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                                <h4>Financial Resources<br> Consultancy</h4>-->
<!--                                                            </div>-->
<!--                                                            <div class="outer-box">-->
<!--                                                                <div class="text">In order to better manage and grow your money and assets, single clients and small ...-->
<!--                                                                </div>-->
<!--                                                                <a href="/services/financial-resources-consultancy.php" class="read-more-link">Read-->
<!--                                                                    More <i class="fa fa-caret-right"></i></a>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            <div class="service-block-three">-->
<!--                                                <div class="inner-box">-->
<!--                                                    <div class="image"><img src="../assets/images/services/Support-Services1.jpg" alt=""></div>-->
<!--                                                    <div class="content">-->
<!--                                                        <h5>Support Services</h5>-->
<!--                                                        <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                        <a href="/services/support-services.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="overlay-content">-->
<!--                                                        <div class="content-wrapper">-->
<!--                                                            <div class="icon-box">-->
<!--                                                                <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                                <h4>Support<br> Services</h4>-->
<!--                                                            </div>-->
<!--                                                            <div class="outer-box">-->
<!--                                                                <div class="text">Our business support services will enable you to achieve significant cost, quality...-->
<!--                                                                </div>-->
<!--                                                                <a href="/services/support-services.php" class="read-more-link">Read-->
<!--                                                                    More <i class="fa fa-caret-right"></i></a>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            <div class="service-block-three">-->
<!--                                                <div class="inner-box">-->
<!--                                                    <div class="image"><img src="../assets/images/services/web-Development1.jpg" alt=""></div>-->
<!--                                                    <div class="content">-->
<!--                                                        <h5>Website Development </h5>-->
<!--                                                        <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                        <a href="/services/website-development.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="overlay-content">-->
<!--                                                        <div class="content-wrapper">-->
<!--                                                            <div class="icon-box">-->
<!--                                                                <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                                <h4>Website<br> Development</h4>-->
<!--                                                            </div>-->
<!--                                                            <div class="outer-box">-->
<!--                                                                <div class="text">With the assistance of Web development services, any kind of web-based software ...-->
<!--                                                                </div>-->
<!--                                                                <a href="/services/website-development.php" class="read-more-link">Read-->
<!--                                                                    More <i class="fa fa-caret-right"></i></a>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            <div class="service-block-three">-->
<!--                                                <div class="inner-box">-->
<!--                                                    <div class="image"><img src="../assets/images/services/Application-Developmnet.jpg" alt=""></div>-->
<!--                                                    <div class="content">-->
<!--                                                        <h5>Application Development </h5>-->
<!--                                                        <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                        <a href="/services/application-devlopment.phpp" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="overlay-content">-->
<!--                                                        <div class="content-wrapper">-->
<!--                                                            <div class="icon-box">-->
<!--                                                                <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                                <h4>Application<br> Development </h4>-->
<!--                                                            </div>-->
<!--                                                            <div class="outer-box">-->
<!--                                                                <div class="text">Our application software developers have developed into industry-specific ...-->
<!--                                                                </div>-->
<!--                                                                <a href="/services/application-devlopment.php" class="read-more-link">Read-->
<!--                                                                    More <i class="fa fa-caret-right"></i></a>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            <div class="service-block-three">-->
<!--                                                <div class="inner-box">-->
<!--                                                    <div class="image"><img src="../assets/images/services/Future-potential1.jpg" alt=""></div>-->
<!--                                                    <div class="content">-->
<!--                                                        <h5>Future<br> Potential Discovery </h5>-->
<!--                                                        <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                        <a href="/services/future-potential-discovery.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="overlay-content">-->
<!--                                                        <div class="content-wrapper">-->
<!--                                                            <div class="icon-box">-->
<!--                                                                <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                                <h4>Future Potential<br> Discovery</h4>-->
<!--                                                            </div>-->
<!--                                                            <div class="outer-box">-->
<!--                                                                <div class="text">Our multi-year strategy to assisting our clients reached its conclusion in the second phase...-->
<!--                                                                </div>-->
<!--                                                                <a href="/services/future-potential-discovery.php" class="read-more-link">Read-->
<!--                                                                    More <i class="fa fa-caret-right"></i></a>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            <div class="service-block-three">-->
<!--                                                <div class="inner-box">-->
<!--                                                    <div class="image"><img src="../assets/images/services/Board add.jpg" alt=""></div>-->
<!--                                                    <div class="content">-->
<!--                                                        <h5>Board Advisory </h5>-->
<!--                                                        <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                        <a href="/services/board-advisory.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="overlay-content">-->
<!--                                                        <div class="content-wrapper">-->
<!--                                                            <div class="icon-box">-->
<!--                                                                <div class="icon"><span class="flaticon-question"></span></div>-->
<!--                                                                <h4>Board<br> Advisory </h4>-->
<!--                                                            </div>-->
<!--                                                            <div class="outer-box">-->
<!--                                                                <div class="text">To help executives acquire insight and assess business operations, and to ...-->
<!--                                                                </div>-->
<!--                                                                <a href="/services/board-advisory.php" class="read-more-link">Read-->
<!--                                                                    More <i class="fa fa-caret-right"></i></a>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </section>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--<div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab">-->
                    <!--    <div class="col-lg-12 col-md-12">-->
                    <!--        <section class="services-section-three" id="services">-->
                    <!--            <div class="auto-container">-->
                    <!--                <div class="row">-->
                    <!--                    <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>-->
                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Strategydesign11.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <div class="icon"><span class="flaticon-career"></span></div>-->
                    <!--                                    <h5>Strategy Design & Implementation </h5>-->
                    <!--                                    <a href="/services/strategy-design-implementation.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-career"></span>-->
                    <!--                                            </div>-->
                    <!--                                            <h4>Strategy Design<br> & Implementation </h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">When you collaborate with us, an experienced team of ecommerce specialists will work-->
                    <!--                                                directly with you to achieve your company goals by integrating strategy...-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/strategy-design-implementation.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image">-->
                    <!--                                    <div class="image"><img src="../assets/images/services/Strategydesign.jpg" alt=""></div>-->
                    <!--                                </div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <div class="icon"><span class="flaticon-customer-service"></span></div>-->
                    <!--                                    <h5>Gather & Analyze Reliable Market Data</h5>-->
                    <!--                                    <a href="/services/gather-analyze-reliable-market-data.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-customer-service"></span></div>-->
                    <!--                                            <h4>Gather & Analyze<br> Reliable Market<br> Data</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">When providing decision-makers with support for making choices and planning the future, a combination of proprietary technology and human intelligence is employed.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/gather-analyze-reliable-market-data.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->


                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Market to Specific segment1.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Market to Specific Segments</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/market-to-specific-segments.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Market to<br> Specific <br>Segments</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">How can you tell whether your product or service is a big hit with your customers? While some of your customers may like a new product feature, others may find it completely-->

                    <!--                                            </div>-->
                    <!--                                            <a href="/services/market-to-specific-segments.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Leverage Data .jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Leverage Data-Targeted</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/leverage-data-targeted.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Leverage <br>Data-Targeted</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">During the next 10 years, the success of your firm will be significantly influenced by the-->
                    <!--                                                use of "big data." Business organizations now generate vast volumes of data at dizzying-->
                    <!--                                                speeds.-->

                    <!--                                            </div>-->
                    <!--                                            <a href="/services/leverage-data-targeted.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Trend .jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Trend Analysis</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/trend-analysis.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Trend <br>Analysis</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">In order to achieve long-term success, you must thoroughly research your competitors-->
                    <!--                                                and the market in order to get vital information.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/trend-analysis.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Financial Forecasting1.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Financial Forecasting</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/financial-forecasting.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Financial <br>Forecasting</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">Our financial forecasting services may aid you in converting your financial data into actionable business outcomes by identifying trends and making predictions.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/financial-forecasting.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Annual Strategy Scan1.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Annual Strategy Scan</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/annual-strategy-scan.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Annual <br>Strategy Scan</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">We provide a powerful data visualization tool that enables your senior team to participate-->
                    <!--                                                in a fact-based conversation about strategy,-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/annual-strategy-scan.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Facility1.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Facility Expansion</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/facility-expansion.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Facility <br> Expansion</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">When you're expanding or establishing a new facility, you may find that you need to-->
                    <!--                                                upgrade or add additional electrical services to your existing infrastructure.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/facility-expansion.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Economic-impact1.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Economic Impact Analysis</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/economic-impact-analysis.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Economic Impact<br> Analysis</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">When you're expanding or establishing a new facility, you may find that you need to-->
                    <!--                                                upgrade or add additional electrical services to your existing infrastructure.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/economic-impact-analysis.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Aglie transmision1.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Agile Transformation</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/agile-transformation.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Agile <br>Transformation</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">When you're expanding or establishing a new facility, you may find that you need to-->
                    <!--                                                upgrade or add additional electrical services to your existing infrastructure.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/agile-transformation.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/case study.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Case Studies</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/case-studies.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Case <br>Studies</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">When you're expanding or establishing a new facility, you may find that you need to-->
                    <!--                                                upgrade or add additional electrical services to your existing infrastructure.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/case-studies.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Time Traking1.png" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Time Tracking & Estimation</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/time-tracking-estimation.phpp" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Time Tracking <br>& Estimation</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">When you're expanding or establishing a new facility, you may find that you need to-->
                    <!--                                                upgrade or add additional electrical services to your existing infrastructure.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/time-tracking-estimation.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </section>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab">-->
                    <!--    <div class="col-lg-12 col-md-12">-->
                    <!--        <section class="services-section-three" id="services">-->
                    <!--            <div class="auto-container">-->
                    <!--                <div class="row">-->
                    <!--                    <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>-->
                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Benchmark standards1.png" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Benchmark standards</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/Benchmark-standards.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Benchmark standards</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">Using the assessments and surveys we give, you may obtain an idea of where you are-->
                    <!--                                                right now and set goals for your future growth efforts based on that information.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/Benchmark-standards.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Seamless services1.png" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Seamless services</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/Benchmark-standards.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Seamless services</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">We give organizations with the know-how, expertise, services, and equipment they need to simplify their company processes. Our Seamless solution combines two widely-used services into a single, seamless bundle that can be utilized anywhere.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/Benchmark-standards.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Information Architecture1.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Information Architecture</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/Information-Architecture.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Information Architecture</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">The information architecture of a website is crucial to the experience of a typical user. Cohesive IA is a tool for integrating design and architectural concepts into one cohesive whole.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/Information-Architecture.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Real-time insights1.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Real-time Insights and Algorithms</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/Information-Architecture.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Real-time Insights and Algorithms</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">A thorough understanding of the difficulties impacting your products and customers is essential for growth.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/Information-Architecture.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div clajournetss="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/CRM1.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Customer Service Management (CSM)</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/Customer Service Management.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Customer Service Management (CSM)</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">Your consumers may get service and support from you via many channels such as the-->
                    <!--                                                web, email, chat, telephone, and social media platforms.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/Customer Service Management.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Field-Service1-jpg.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Field Service Management</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/Field-Service-Management.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->
                    <!--                                            <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                            <h4>Field Service Management</h4>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="outer-box">-->
                    <!--                                            <div class="text">Using these solutions, you may keep track of an organization's field resources and-->
                    <!--                                                specialized, or unique services.-->
                    <!--                                            </div>-->
                    <!--                                            <a href="/services/Field-Service-Management.php" class="read-more-link">Read-->
                    <!--                                                More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="service-block-three">-->
                    <!--                            <div class="inner-box">-->
                    <!--                                <div class="image"><img src="../assets/images/services/Operational Tec.jpg" alt=""></div>-->
                    <!--                                <div class="content">-->
                    <!--                                    <h5>Operational Technology Management</h5>-->
                    <!--                                    <div class="icon"><span class="flaticon-question"></span></div>-->
                    <!--                                    <a href="/services/Operational-Technology-Management.php" class="read-more-link">Read More <i class="fa fa-caret-right"></i></a>-->
                    <!--                                </div>-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <div class="content-wrapper">-->
                    <!--                                        <div class="icon-box">-->

   
<section class="services-details" id="benifit&value " style="margin-bottom:-100px!important" >
    <div class="auto-container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
            
                <div class="tab-content mt-3">
                      <div class="sec-title">
                                     <h2 class="mt-3" style="text-align:center;margin-top:-30px!important;margin-bottom:-110px">Our Services</h2>                               </div>
                    <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <div class="col-lg-12 col-md-12">
                            <section class="services-section-three" id="services">
                                <div class="auto-container">
                                    <div class="row">
                                        
                                        <div class="theme_carousel owl-theme owl-carousel"
                                            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 10000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                                        
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <div class="image"><img
                                                                src="assets/images/services/Digital-Transformation1.jpg" alt=""></div>
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
                                                    <div class="image"><img src="assets/images/services/sustainble.jpg"
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
                                                                <div class="text">We help organizations in building sustainable business model. This is the best way to express the strategy ...
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
                                                    <div class="image"><img src="assets/images/services/enging.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Engaging Content<br>Campaigns</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/engaging-Content-Campaigns-to-drive-Continuous-Growth.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Engaging Content <br>Campaigns</h4>
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
                                                    <div class="image"><img src="assets/images/services/operations_consulting_masthead1.jpg"
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
                                                                <div class="text">he operations department serves as a vital connection between your company's long...
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
                                                    <div class="image"><img src="assets/images/services/Financial_Resource_on.png"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Financial<b style="color:transparent">.</b>Resource Consultancy</h5>
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
                                                                <div class="text">In order to better manage and grow your money and assets, single clients and small  businesses can get help ...
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
                                                    <div class="image"><img src="assets/images/services/Support-Services1.jpg"
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
                                                    <div class="image"><img src="assets/images/services/web-Development1.jpg"
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
                                                                <div class="text">With the assistance of Web development services, any kind of web-based software may be developed...
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
                                                    <div class="image"><img src="assets/images/services/Application-Developmnet.jpg"
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
                                                                <div class="text">Our application software developers have developed into industry-specific technology specialists...
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
                                                    <div class="image"><img src="assets/images/services/Future-potential1.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Future<b style="color:transparent">.</b>Discovery </h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/future-potential-discovery.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Future<br> Discovery</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Our multi-year strategy to assisting our clients reached its conclusion in the second phase, when we ...
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
                                                    <div class="image"><img src="assets/images/services/Board add.jpg"
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
                                            
                                          
                                               <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="assets/images/services/Strategydesign11.jpg" alt=""></div>
                                                    <div class="content">
                                                        <div class="icon"><span class="flaticon-career"></span></div>
                                                        <h5>Strategy<b style="color:transparent">.</b>Design<b style="color:transparent">.</b>&<b style="color:transparent">.</b><br>Implementation </h5>
                                                        <a href="/services/strategy-design-implementation.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span class="flaticon-career"></span>
                                                                </div>
                                                                <h4>Strategy Design<br> Implementation </h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">When you collaborate with us, an experienced team of ecommerce specialists will work 
                                                                    directly ...
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
                                                        <div class="image"><img src="assets/images/services/Strategydesign.jpg" alt=""></div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="icon"><span
                                                                class="flaticon-customer-service"></span></div>
                                                        <h5>Gather<b style="color:transparent">.</b>&<b style="color:transparent">.</b>Analyze<b style="color:transparent">.</b>Reliable</h5>
                                                        <a href="/services/gather-analyze-reliable-market-data.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-customer-service"></span></div>
                                                                <h4>Gather & Analyze<br> Reliable</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">When providing decision-makers with support for making choices and planning the future.... 
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
                                                    <div class="image"><img src="assets/images/services/Market to Specific segment1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Market to Specific </h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/market-to-specific-segments.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Market to<br> Specific </h4>
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
                                                    <div class="image"><img src="assets/images/services/Leverage Data .jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Leverage<br> Data-Targeted</h5>
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
                                                                       
                                                                        speeds...

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
                                                    <div class="image"><img src="assets/images/services/Trend .jpg" alt=""></div>
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
                                                                    and the market in order ... 
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
                                                    <div class="image"><img src="assets/images/services/Financial Forecasting1.jpg" alt=""></div>
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
                                                    <div class="image"><img src="assets/images/services/Annual Strategy Scan1.jpg" alt=""></div>
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
                                                                    in a fact-based ...
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
                                                    <div class="image"><img src="assets/images/services/Facility1.jpg" alt=""></div>
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
                                                                upgrade or add ... 
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
                                                    <div class="image"><img src="assets/images/services/Economic-impact1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Economic<b style="color:transparent">.</b>Impact<b style="color:transparent">.</b>Analysis</h5>
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
                                                                upgrade or add ... 
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
                                                    <div class="image"><img src="assets/images/services/Aglie transmision1.jpg" alt=""></div>
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
                                                                upgrade or add ...
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
                                                    <div class="image"><img src="assets/images/services/case study.jpg" alt=""></div>
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
                                                                upgrade or add ...
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
                                                    <div class="image"><img src="assets/images/services/Time Traking1.png" alt=""></div>
                                                    <div class="content">
                                                        <h5>Time<b style="color:transparent">.</b>Tracking<b style="color:transparent">.</b>&<b style="color:transparent">.</b><br>Estimation</h5>
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
                                                                upgrade or add ... 
                                                                </div>
                                                                <a href="/services/time-tracking-estimation.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                     <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="assets/images/services/Benchmark standards1.png" alt=""></div>
                                                    <div class="content">
                                                        <h5>Benchmark standards</h5>
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
                                                <!--previous service end-->
                                                
                                                
                                                
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                 
                    <!-- <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab">
                        <div class="col-lg-12 col-md-12">
                            <section class="services-section-three" id="services">
                                <div class="auto-container">
                                    <div class="row">
                                        <div class="theme_carousel owl-theme owl-carousel"
                                            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                                           
                                            
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Seamless services1.png" alt=""></div>
                                                    <div class="content">
                                                        <h5>Seamless services</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Benchmark-standards.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Seamless services</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We give organizations with the know-how, expertise, services, and equipment they need to simplify their company processes. Our Seamless solution combines two widely-used  services into a single, seamless bundle that can be utilized anywhere.
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
                                                                <div class="text">The information architecture of a website is crucial to the experience of a typical user. Cohesive IA is a tool for integrating design and architectural concepts into one cohesive whole. 
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
                                                        <h5>Real-time Insights and Algorithms</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Information-Architecture.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Real-time Insights and Algorithms</h4>
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
                                                        <h5>Customer Service Management (CSM)</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Customer Service Management.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Customer Service Management (CSM)</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Your consumers may get service and support from you via many channels such as the 
                                                                web, email, chat, telephone, and social media platforms. 
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
                                                        <h5>Field Service Management</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Field-Service-Management.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Field Service Management</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Using these solutions, you may keep track of an organization's field resources and 
                                                                     specialized, or unique services. 
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
                                                        <h5>Operational Technology Management</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Operational-Technology-Management.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Operational Technology Management</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Having a consistent system of action will help your operational technology environment, enhancing uptime and delivering outcomes throughout your production plants.

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
                                                        <h5>User experience (UX) Design</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/User-experience-Design.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>User experience (UX) Design</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Designing the user's experience while using a product, on the other hand, is the subject  of interaction design. A variety of factors, including the way something is conveyed, visualized and organized as well as the time it takes to reply, are taken into consideration when determining customer satisfaction.

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
                                                        <h5>Customer Journey Analytics</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Customer-Journey-Analytics.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Customer Journey Analytics</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Customers, patients, and employees now want seamless, secure, Omni-channel, ondemand, and tailored services from the organizations with whom they do business,  among other things.

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
                                                        <h5>Digital Customer Experience</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Digital-Customer-Experience.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Digital Customer Experience</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We will help you in digital customer experience with the below services

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
                                                        <h5>Customer Experience Analysis</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Customer-Experience-Analysis.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Customer Experience Analysis</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">To accommodate people with an interest in text analysis, we provide a variety of different solutions. Watson Explorer, a tool designed for skilled users and data scientists, is required for enterprise-level operations to be successful. 

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
                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Mapping Re- Engineering1.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Mapping & Re-Engineering</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Business-Process-Mapping-Re-Engineering.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Mapping & Re-Engineering</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">With the assistance of our Organization Process Reengineering team, we can utilize 
                                                                    quality and efficiency methodologies such as Lean and Six Sigma to document your 
                                                                    processes, analyses where you are currently at, and provide recommendations to your 
                                                                    company to help you improve your processes 

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
                                                        <h5>Productive Organization Design</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Productive-Organization-Design.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Productive Organization Design</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We work with our clients to design and implement new organizational structures and 
                                                                    operational processes that increase the efficiency of their available resources while also 
                                                                    increasing the productivity of their personnel. 

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
                                                        <h5>Outsourcing Services</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/Outsourcing-Services.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Outsourcing Services</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We work with our clients to design and implement new organizational structures and 
                                                                    operational processes that increase the efficiency of their available resources while also 
                                                                    increasing the productivity of their personnel. 

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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Funfacts Section Two -->
<section class="funfacts-section-two" id="forte" style="background-image:url('assets/images/breadcrum/forte.png')" id="forte">

    <div class="auto-container">
        <!-- Fact Counter -->
        <div class="fact-counter-two">
            <div class="col-md-12 col-lg-12" align="center">
                <div class="sec-title" style="margin-top:-15px">
                    <h2 class="text-white" >Our Forte</h2>
                    </h2>
                    <div class="text-decoration">
                        <span class="left"></span>
                        <span class="right"></span>
                    </div>
                </div>
            </div>

            <div class="counter">
                <div class="row">
                    <div class="col-lg-2 forte-count">
                        <div class="count-up">
                            <img src="assets/images/icons/year-started.png" class="forte-icon">
                            <div class="count-outer count-box">
                                <span class="counter-count">2022</span>
                            </div>
                            <div class="text">Year Started</div>
                        </div>
                    </div>

                    <div class="col-lg-2 forte-count">
                        <div class="count-up">
                            <img src="assets/images/icons/Active Business.png" class="forte-icon">
                            <div class="count-outer count-box">
                                <span class="counter-count">2</span>
                            </div>
                            <div class="text">Active Businesses</div>
                        </div>
                    </div>


                    <div class="col-lg-2 forte-count">
                        <div class="count-up">
                            <img src="assets/images/icons/Service Categories.png" class="forte-icon">
                            <div class="count-outer count-box">
                                <span class="counter-count">40</span><span></span>
                            </div>
                            <div class="text">Product & Services</div>
                        </div>
                    </div>

                    <div class="col-lg-2 forte-count">
                        <div class="count-up">
                            <img src="assets/images/icons/Team.png" class="forte-icon">
                            <div class="count-outer count-box">
                                <span class="counter-count">15</span><span>+</span>
                            </div>
                            <div class="text">Team</div>
                        </div>
                    </div>

                    <div class="col-lg-2 forte-count">
                        <div class="count-up">
                            <img src="assets/images/icons/country.png" class="forte-icon">
                            <div class="count-outer count-box">
                                <span class="counter-count">49</span><span></span>
                            </div>
                            <div class="text">Countries</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section" id="livestream">
    <div class="row">
        <div class="col-lg-3 mt-5">
            <img src="assets/images/background/Live+Stream.gif" />
        </div>
        <div class="col-lg-9">
            <div class="outer-box">
                <div class="outer-container">
                    <div class="row m-0 justify-content-between align-items-end">
                        <div class="sec-title">
                            <h2 class="mt-5 mb-3">Social Timeline</h2>
                            </h2>
                            <div class="text-decoration">
                                <span class="left"></span>
                                <span class="right"></span>
                            </div>
                        </div>
                        <div class="swiper-nav-button">
                            <!-- Add Arrows -->
                            <div class="swiper-button-prev"><i class="flaticon-right-arrow"></i></div>
                            <div class="swiper-button-next"><i class="flaticon-right-arrow"></i></div>
                        </div>
                    </div>
                </div>
                <div class="news-carousel-wrapper">
                    <div class="swiper-container news-carousel">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- News Block -->
                                <div class="news-block-one">
                                    <div class="inner-box">
                                        <div class="row m-0 justify-content-between">
                                            <div class="date"><strong>14</strong>February <br>2020</div>
                                            <div class="author">
                                                <div class="title">Brendan Duke </div><img src="assets/images/resource/author-thumb-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <h4><a href="blog-details.html">How to Manage Business’s <br>Online
                                                Reputation</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- News Block -->
                                <div class="news-block-one">
                                    <div class="inner-box">
                                        <div class="row m-0 justify-content-between">
                                            <div class="date"><strong>21</strong>January <br>2020</div>
                                            <div class="author">
                                                <div class="title">Raana irave </div><img src="assets/images/resource/author-thumb-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <h4><a href="blog-details.html">Is Your Business Ready For
                                                <br>Integration?</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- News Block -->
                                <div class="news-block-one">
                                    <div class="inner-box">
                                        <div class="row m-0 justify-content-between">
                                            <div class="date"><strong>08</strong>&nbsp&nbspJanuary <br>&nbsp&nbsp2020</div>
                                            <div class="author">
                                                <div class="title">Raana irave </div><img src="assets/images/resource/author-thumb-3.jpg" alt="">
                                            </div>
                                        </div>
                                        <h4><a href="blog-details.html">That Should You Include In <br>Your
                                                Marketing Plan</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- News Block -->
                                <div class="news-block-one">
                                    <div class="inner-box">
                                        <div class="row m-0 justify-content-between">
                                            <div class="date"><strong>14</strong>February <br>2020</div>
                                            <div class="author">
                                                <div class="title">Brendan Duke </div><img src="assets/images/resource/author-thumb-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <h4><a href="blog-details.html">How to Manage Business’s <br>Online
                                                Reputation</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- News Block -->
                                <div class="news-block-one">
                                    <div class="inner-box">
                                        <div class="row m-0 justify-content-between">
                                            <div class="date"><strong>21</strong>January <br>2020</div>
                                            <div class="author">
                                                <div class="title">Raana irave </div><img src="assets/images/resource/author-thumb-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <h4><a href="blog-details.html">Is Your Business Ready For
                                                <br>Integration?</a></h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <!-- News Block -->
                                <div class="news-block-one">
                                    <div class="inner-box">
                                        <div class="row m-0 justify-content-between">
                                            <div class="date"><strong>08</strong>&nbsp&nbspJanuary <br>&nbsp&nbsp2020</div>
                                            <div class="author">
                                                <div class="title">Raana irave </div><img src="assets/images/resource/author-thumb-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <h4><a href="blog-details.html">Is Your Business Ready For
                                                <br>Integration?</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
<script>
    $('.counter-count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {

            //chnage count up speed here
            duration: 4000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>