<?php

include 'header.php'; 
 ?>
<style>
.accordion {
    background-color: #fff !important;
}

.accordion:after {
    display: none;
}
@media screen and (max-width:900px) {
    #view
    {
        width:160px;
        height:300px;
    }
    #viewtext
    {
        font-size:16px;
    }
    .team-block-one 
    {
        width:130px;
        height:150px;
    }

    designation 
    {
        font-size:6px!important;
    }
    /* .designation 
    {
     display:none;
    } */
    #t1 
    {
        font-size:7px!important;
    }
    #t22
    {
        font-size:10px!important;
        margin-top:-20px;
    }
    .lower-content1
    {
        width:125px!important;
        height:60px!important;

    }
    #fatherimage
    {
        height:200px;
        width:200px;
        margin-left:90px;
    }
    .feature-block-four
    {
        width:110px!important;
        
      
    }
    .te4
    {
        font-size:13px!important;
    }
    #company 
    {
        margin-top:10px!important;
    }
    .holderCircle 
    {
        margin-top:120px!important;
    }
    #raichandr 
    {
        margin-top:100px!important;
    }
    .vtext 
    {
        font-size:10px!important;
    }
    .inner-box1 
    {
        height:300px;
    }
}
@media screen and (min-width:1000px){
    #t22
    {
        display:none;
    }
}
</style>
<div id="home">
    <nav id="navbar-float" class="floating-menu">
        <div class="main-menu">
            <div class="vertical-bar">
                <div class="animated-bar"></div>
            </div>
            <div class="ripple">
                <a href="#about-us" class="active">
                    <span>
                        About & Pillars
                    </span>
                </a>
            </div>
           
            <div class="ripple">
                <a href="#corevalues" class="">
                    <span>
                        Core Values
                    </span>
                </a>
            </div>
             <div class="ripple">
                <a href="#tribute" class="">
                    <span>
                        Tribute
                    </span>
                </a>
            </div>
            <div class="ripple">
                <a href="#core-team" class="">
                    <span>
                        Core Team
                    </span>
                </a>
            </div>
            <div class="ripple">
                <a href="#group-ceo" class="">
                    <span>
                        Founder Message
                    </span>
                </a>
            </div>
        </div>
    </nav>
</div>

<section class="page-title" style="background-image: url(assets/images/breadcrum/about-us.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="about-section-four" id="about-us">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="">
                    <!--<div class="image-one wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"-->
                    <!--    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">-->
                    <!--    <div class="image-box"><img class="lazy-image owl-lazy loaded"-->
                    <!--            src="assets/images/about/about1.png" data-src="assets/images/about/about1.png" alt=""-->
                    <!--            data-was-processed="true"></div>-->
                    <!--</div>-->
                    <!--<div class="image-two wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms"-->
                    <!--    style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">-->
                    <!--    <div class="image-box"><img class="lazy-image owl-lazy loaded"-->
                    <!--            src="assets/images/about/about2.png" data-src="assets/images/about/about2.png" alt=""-->
                    <!--            data-was-processed="true"></div>-->
                        
                    <!--</div>-->
                    <!--<div class="logo"><img src="assets/images/business-logo/12-logo.png" alt=""></div>-->
                     <div class="sec-title text-center">
            <div class="col-lg-12 col-md-12 text-center"  style="text-align:center;">
                <h2 id="company">Company Pillars
                </h2>
            </div>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
        <style>
       
@keyframes rotation {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}
.dotCircle
{
    animation-name:rotation;
    animation-duration:12s;
    animation-iteration-count:infinite;
    transition:all;
    animation-delay:5s;
}
.dotCircle .itemDot {
    display: block;
    width: 80px;
    height: 80px;
    position: absolute;
    background: #ffffff;
    color: #000;
    border-radius: 20px;
    text-align: center;
    line-height: 80px;
    font-size: 30px;
    z-index: 3;
    cursor: pointer;
    border: 2px solid #e6e6e6;
}
.itemDot
{
    animation-name:rotation;
    animation-duration:20s;
    animation-iteration-count:infinite;
    transition:all;
    animation-delay:5s;
}
@media screen and (max-width:500px){
    .dotCircle .itemDot {
    /* display: block; */
    width: 80px;
    height: 80px;
    margin-left:-100px;
    margin-top:-100px;
    position: absolute;
    background: #ffffff;
    color: #000;
    border-radius: 20px;
    text-align: center;
    line-height: 80px;
    font-size: 30px;
    z-index: 3;
    cursor: pointer;
    border: 2px solid #e6e6e6;
}
}
        </style>
                <div class="holderCircle">
                    <div class="round"></div>
                    <div class="dotCircle" >
                        <span class="itemDot itemDot1" data-toggle="tab" role="tab" href="#tab1" style="left: 412px; top: 212px; transform: rotate(36deg); transition: all 2s ease 0s;">
                            <img src="assets/images/pillar/reputation.png" style="height:45px;">
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot2 active" data-toggle="tab" role="tab" href="#tab2" style="left: 337px; top: 368px; transform: rotate(36deg); transition: all 1s ease 0s;">
                            <img src="assets/images/pillar/relations.png" style="height:45px;">
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot3" data-toggle="tab" role="tab" href="#tab3" style="left: 167px; top: 407px; transform: rotate(36deg); transition: all 1s ease 0s;">
                            <img src="assets/images/pillar/originality.png" style="height:45px;">
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot4" data-tab="4" data-toggle="tab" role="tab" href="#tab4" style="left: 32px; top: 299px; transform: rotate(36deg); transition: all 1s ease 0s;">
                            <img src="assets/images/pillar/integrity.png" style="height:45px;">
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot5" data-toggle="tab" role="tab" href="#tab5" style="left: 32px; top: 125px; transform: rotate(36deg); transition: all 1s ease 0s;">
                            <img src="assets/images/pillar/profit.png" style="height:45px;">
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot6" data-toggle="tab" role="tab" href="#tab6" style="left: 167px; top: 17px; transform: rotate(36deg); transition: all 1s ease 0s;">
                            <img src="assets/images/pillar/mobility.png" style="height:45px;">
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot7" data-toggle="tab" role="tab" href="#tab7" style="left: 337px; top: 56px; transform: rotate(36deg); transition: all 1s ease 0s;">
                            <img src="assets/images/pillar/visibility.png" style="height:45px;">
                            <span class="forActive"></span>
                        </span>
                    </div>
                    <div class="contentCircle tab-content">
                        <div id="tab1" class="tab-pane CirItem title-box CirItem1">
                            <h2 class="title"><span>Reputation</span></h2>
                        </div>
                        <div id="tab2" class="tab-pane CirItem title-box CirItem2 active" >
                            <h2 class="title"><span>Relationship </span></h2>
                        </div>
                        <div id="tab3" class="tab-pane CirItem title-box CirItem3">
                            <h2 class="title"><span>Originality</span></h2>
                        </div>
                        <div id="tab4" class="tab-pane CirItem title-box CirItem4">
                            <h2 class="title"><span>Integrity</span></h2>
                        </div>
                        <div id="tab5" class="tab-pane CirItem title-box CirItem5">
                            <h2 class="title"><span>Profitability</span></h2>
                        </div>
                        <div id="tab6" class="tab-pane CirItem title-box CirItem6">
                            <h2 class="title"><span>Mobility</span></h2>
                        </div>
                        <div id="tab7" class="tab-pane CirItem title-box CirItem7">
                            <h2 class="title"><span>Visibility</span></h2>
                        </div>
                    </div>
                </div>

                </div>
            </div>
            <div class="col-lg-6" id="raichandr">
                <div class="sec-title style-four">
                    <h2>The Raichand Group</h2>
                    <span class="text-decoration-three"></span>
                </div>
                <div class="text">
                    The Raichand Group is an Indian conglomerate industry company, headquartered
                    in Mumbai. Raichand’s diverse businesses includes business consultancy, import and
                    exports, seed and prototype investments, hospitality, mass media, charitable trust,
                    healthcare, education, and merchandising.

                    <br><br>
                    Raichand serves 49 countries of Asia, Europe, Australia &amp; New Zealand and Northern
                    America.<br><br>
                    Raichand is founded by Samrat Raichand in 2018 with vision to offer diverse business
                    services under one roof. Later registered in 2021
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="about-section-four" id="about-us">-->
<!--    <div class="auto-container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-6">-->
<!--                <div class="">-->
                    <!--<div class="image-one wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"-->
                    <!--    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">-->
                    <!--    <div class="image-box"><img class="lazy-image owl-lazy loaded"-->
                    <!--            src="assets/images/about/about1.png" data-src="assets/images/about/about1.png" alt=""-->
                    <!--            data-was-processed="true"></div>-->
                    <!--</div>-->
                    <!--<div class="image-two wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms"-->
                    <!--    style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">-->
                    <!--    <div class="image-box"><img class="lazy-image owl-lazy loaded"-->
                    <!--            src="assets/images/about/about2.png" data-src="assets/images/about/about2.png" alt=""-->
                    <!--            data-was-processed="true"></div>-->
                        
                    <!--</div>-->
                    <!--<div class="logo"><img src="assets/images/business-logo/12-logo.png" alt=""></div>-->
<!--                     <div class="sec-title text-center">-->
<!--            <div class="col-lg-12 col-md-12 text-center" style="text-align:center;">-->
<!--                <h2>Company Pillars-->
<!--                </h2>-->
<!--            </div>-->
<!--            <div class="text-decoration">-->
<!--                <span class="left"></span>-->
<!--                <span class="right"></span>-->
<!--            </div>-->
<!--        </div>-->
<!--                <div class="holderCircle">-->
<!--                    <div class="round"></div>-->
<!--                    <div class="dotCircle">-->
<!--                        <span class="itemDot active itemDot1" data-tab="1">-->
<!--                            <img src="assets/images/pillar/reputation.png" style="height:45px;">-->
<!--                            <span class="forActive"></span>-->
<!--                        </span>-->
<!--                        <span class="itemDot itemDot2" data-tab="2">-->
<!--                            <img src="assets/images/pillar/relations.png" style="height:45px;">-->
<!--                            <span class="forActive"></span>-->
<!--                        </span>-->
<!--                        <span class="itemDot itemDot3" data-tab="3">-->
<!--                            <img src="assets/images/pillar/originality.png" style="height:45px;">-->
<!--                            <span class="forActive"></span>-->
<!--                        </span>-->
<!--                        <span class="itemDot itemDot4" data-tab="4">-->
<!--                            <img src="assets/images/pillar/integrity.png" style="height:45px;">-->
<!--                            <span class="forActive"></span>-->
<!--                        </span>-->
<!--                        <span class="itemDot itemDot5" data-tab="5">-->
<!--                            <img src="assets/images/pillar/profit.png" style="height:45px;">-->
<!--                            <span class="forActive"></span>-->
<!--                        </span>-->
<!--                        <span class="itemDot itemDot6" data-tab="6">-->
<!--                            <img src="assets/images/pillar/mobility.png" style="height:45px;">-->
<!--                            <span class="forActive"></span>-->
<!--                        </span>-->
<!--                        <span class="itemDot itemDot7" data-tab="7">-->
<!--                            <img src="assets/images/pillar/visibility.png" style="height:45px;">-->
<!--                            <span class="forActive"></span>-->
<!--                        </span>-->
<!--                    </div>-->
<!--                    <div class="contentCircle">-->
<!--                        <div class="CirItem title-box active CirItem1">-->
<!--                            <h2 class="title"><span>Reputation</span></h2>-->
<!--                        </div>-->
<!--                        <div class="CirItem title-box CirItem2">-->
<!--                            <h2 class="title"><span>Relationship </span></h2>-->
<!--                        </div>-->
<!--                        <div class="CirItem title-box CirItem3">-->
<!--                            <h2 class="title"><span>Originality</span></h2>-->
<!--                        </div>-->
<!--                        <div class="CirItem title-box CirItem4">-->
<!--                            <h2 class="title"><span>Integrity</span></h2>-->
<!--                        </div>-->
<!--                        <div class="CirItem title-box CirItem5">-->
<!--                            <h2 class="title"><span>Profitability</span></h2>-->
<!--                        </div>-->
<!--                        <div class="CirItem title-box CirItem6">-->
<!--                            <h2 class="title"><span>Mobility</span></h2>-->
<!--                        </div>-->
<!--                        <div class="CirItem title-box CirItem7">-->
<!--                            <h2 class="title"><span>Visibility</span></h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-6">-->
<!--                <div class="sec-title style-four">-->
<!--                    <h2>The Raichand Group</h2>-->
<!--                    <span class="text-decoration-three"></span>-->
<!--                </div>-->
<!--                <div class="text">-->
<!--                    The Raichand Group is an Indian conglomerate industry company, headquartered-->
<!--                    in Mumbai. Raichand’s diverse businesses includes business consultancy, import and-->
<!--                    exports, seed and prototype investments, hospitality, mass media, charitable trust,-->
<!--                    healthcare, education, and merchandising.-->

<!--                    <br><br>-->
<!--                    Raichand serves 49 countries of Asia, Europe, Australia & New Zealand and Northern-->
<!--                    America.<br><br>-->
<!--                    Raichand is founded by Samrat Raichand in 2018 with vision to offer diverse business-->
<!--                    services under one roof. Later registered in 2021-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="iq-features sponsers-img" style="background-image: url(assets/IMG_9719.JPG);">
    <!--<div class="container">-->
       
    <!--    <div class="row align-items-center">-->
    <!--        <div class="col-lg-3 col-md-12"></div>-->
    <!--        <div class="col-lg-6 col-md-12">-->
    <!--        </div>-->
    <!--        <div class="col-lg-3 col-md-12"></div>-->
    <!--    </div>-->
    <!--</div>-->
</section>


<section class="services-section-five">
    <div class="auto-container">
        <div class="sec-title text-center" id="corevalues">
            <h2>Core Values</h2>

            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
        <section class="features-section-four">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="outer-box">
                        <div class="row m-0">
                              <div class="col-lg-12 col-md-12 text-center">
                                    <h3><strong>What are beliefs and values that are important to us as a company?</strong></h3>
                                </div>
                            <div class="feature-block-four col-lg-4 col-md-6" id="view">
                                <div class="inner-box inner-box1">
                                    <div class="icon"><img src="assets/images/icons/icon-16.png" alt=""></div>
                                    <h4 id="viewtext " class="vtext"><center>Leadership</center></h4>
                                    <div class="text te4"><p class="te4">The courage to shape a better future.</p></div>
                                </div>
                            </div>
                            <div class="feature-block-four col-lg-4 col-md-6" id="view">
                                <div class="inner-box inner-box1">
                                    <div class="icon"><img src="assets/images/icons/icon-14.png" alt=""></div>
                                    <h4 id="viewtext " class="vtext"><center>Collaboration</center></h4>
                                    <div class="text te4"><p class="te4">Leverage collective genius.</p></div>
                                </div>
                            </div>
                            <div class="feature-block-four col-lg-4 col-md-6" id="view">
                                <div class="inner-box inner-box1">
                                    <div class="icon"><img src="assets/images/icons/icon-15.png" alt=""></div>
                                    <h4 id="viewtext " class="vtext"><center>Diversity</center></h4>
                                    <div class="text te4"><p class="te4">As inclusive as our brand.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="services-details" id="benifit&value">
    <div class="container">
         <div class="sec-title text-center">
            <h2>Win-Win Partnerships</h2>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#supplier" role="tab"
                            aria-controls="supplier" aria-selected="true">Vendors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#customer" role="tab" aria-controls="customer"
                            aria-selected="false">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#employee" role="tab" aria-controls="employee"
                            aria-selected="false">Personnels</a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <div class="tab-pane active" id="supplier" role="tabpanel" aria-labelledby="supplier-tab">
                        <div class="col-lg-12 col-md-12">
                            <div class="text">We view our trade partners as allies in serving our stakeholders. We treat
                                them
                                with respect, fairness, and integrity – expecting the same in return.</div>
                        </div>
                    </div>
                    <div class="tab-pane" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                        <div class="col-lg-12 col-md-12">
                            <div class="text"><b>Customer Commitment:</b> We develop relationships that make a
                                positive difference in our customers' lives.
                                <br>
                                <b>Quality:</b> We provide outstanding products and unsurpassed
                                service that, together, deliver premium value to our customers.
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="employee" role="tabpanel" aria-labelledby="employee-tab">
                        <div class="col-lg-12 col-md-12">
                            <div class="text"><strong>Good Citizenship:</strong> We are good citizens in the
                                communities in
                                which we live and work.<br>
                                <strong>Teamwork:</strong> We work together, across boundaries, to meet the
                                needs of our customers and to help our Company win.<br>
                                <strong>Respect for People:</strong> We value our people, encourage their
                                development, and reward their performance.<br>
                                <strong>A Will to Win:</strong> We exhibit a strong will to win in the marketplace
                                and in every aspect of our business.<br>
                                <strong>Personal Accountability:</strong> We are personally accountable for
                                delivering on our commitments.<br>
                                <strong>Integrity:</strong> We uphold the highest standards of integrity in all our
                                actions.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="auto-container pt-35 ">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content-side">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="nav nav-tabs tab-btn-style-one mr-md-4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-left" id="price-tab-one-area" data-toggle="tab"
                                    href="#price-tab-one" role="tab" aria-controls="price-tab-one" aria-selected="true">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;
                                    What do we do better than anyone else?
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="price-tab-two-area" data-toggle="tab" href="#price-tab-two"
                                    role="tab" aria-controls="price-tab-two" aria-selected="false">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;
                                    What makes us special?
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <!-- Tab panes -->
                        <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="tab-pane fadeInUp animated active" id="price-tab-one" role="tabpanel"
                                aria-labelledby="price-tab-one">
                                <div class="text">We’re Solution Maker, Problem taker and Way Finder.
                                    Once we put our mind to figuring something out, we don’t rest until we torn through
                                    every possible avenue of information to find the answer we seek.
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="price-tab-two" role="tabpanel"
                                aria-labelledby="price-tab-two">
                                <div class="text">
                                    We find what common problems our clients have and be the best at solving them. We
                                    make our solutions turnkey so we can solve their problems faster and with better
                                    results.
                                    We continuously try to improve our customer facing processes to deliver better
                                    results
                                    to our target audience. Every industry evolves and so should our business. If we
                                    offer
                                    similar services as the competition, we make the way to deliver them or how we work
                                    with our unique customers. We try to get to the solution faster and more accurately
                                    than
                                    the competition can deliver. Our team has proven history of reputation as the expert
                                    in
                                    their field. People who truly have a problem to solve will want to work with the
                                    expert.
                                    Our business model is easy as possible to work with us. Provided access to us
                                    via messaging or emailing 24×7. We simplify our contract or instead, used as an
                                    engagement letter to make working with us easy and convenient.
                                    We address customer pain points. We want to win customers over, so we alleviate
                                    their
                                    pain. We focus on a narrow niche, serves our specific customers instead of trying to
                                    serve everyone. We surprise and delight our customers. We create offer hard to avoid
                                    by customers.<br><br>
                                    The three words describe our brand - Diverse Industries Product/Services, Worldwide
                                    Presence and Professional Team.<br><br>
                                    The three words we would want our customers to use to describe us - After Sales
                                    incase
                                    they need we are here, Assured Quality, we have exactly what you need at best price.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<section class="cta-section-two" id="tribute" style="background:#efe8e3;">
        <div class="auto-container">
             <div class="sec-title text-center" id="corevalues">
            <h2>Tribute to the Almighty</h2>
            <h2 class="text-center" style="margin-top:0px;">&</h2>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
            <div class="row align-items-center">
                  <div class="col-lg-2">
                      <div id="fatherimage"><img src="assets/images/about/team-1.png" alt=""></div>
                  </div>
                <div class="col-lg-5 sm-text-center">
                    <h4 class="text-dark"><strong>Mr. Bharat Raichand</strong></h4>
                            <h5>(19 Oct 1968 - 19 Dec 2020)</h5>
                </div><br>
                <div class="col-lg-5 sm-text-center" style="margin-top:10px!important;">
                        <p class="quote"><i>"Loving memories of beloved Mr. Bharat Raichand and his courage, wisdom, dedication, love, commitment and tremendous blessings."</i></p>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section-two" id="core-team" style="background:white">
    <div class="auto-container">
        <div class="sec-title text-center" style="margin-bottom:40px">
            <h2>Core Team</h2>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
        <div class="row">
             <div class="team-block-one col-lg-4 col-md-4 col-sm-3 col-xs-4" >
                <div class="inner-box" >
                    <div class="image" style="border:0px">
                        <img src="assets/Sushma Raichand.jpg"  alt=""></div>
                    <div class="lower-content lower-content1">
                        <center>
                        <div class="designation">Chair Person</div>
                        <h4 id="t1">Sushma Raichand</h4>
                        </center>
                    </div>
                </div>
            </div><br><br>
            <div class="team-block-one col-lg-4 col-md-4 col-sm-3 col-xs-4">
                <div class="inner-box" >
                    <div class="image"style="border:0px" ><img src="assets/Samrat Raichand.jpg" alt=""></div>
                    <div class="lower-content lower-content1">
                        <center>
                        <div class="designation">Founder  &amp; Group CEO</div>
                     
                        <h4 id="t1">Samrat Raichand</h4>
                        </center>
                    </div>
                </div>
            </div><br><br>
            <div class="team-block-one col-lg-4 col-md-4 col-sm-3 col-xs-4">
                <div class="inner-box">
                    <div class="image" style="border:0px"><img src="assets/Ayush Raichand .jpg" alt=""></div>
                    <div class="lower-content lower-content1">
                        <center>
                        <div class="designation">Group COO</div>
                    
                        <h4 id="t1">Aayush Raichand</h4>
                        </center>
                    </div>
                </div>
            </div>
           
            <!--<div class="team-block-one col-lg-3 col-md-6">-->
            <!--    <div class="inner-box">-->
            <!--        <div class="image"><img src="assets/images/resource/team-4.jpg" alt=""></div>-->
            <!--        <div class="lower-content">-->
            <!--            <div class="designation">Marketing Officer</div>-->
            <!--            <h4>Leonard Melvin</h4>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
</section>
 <!--   <section id="about" class="home-section text-center">-->
 <!--       <div class="container">-->
	<!--	<div class="heading-about">-->
	<!--		<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-lg-12 col-lg-offset-2">-->
	<!--				<div class="wow bounceInDown" data-wow-delay="0.4s">-->
	<!--				<div class="section-heading">-->
	<!--				<h2>Core Team</h2>-->
		

	<!--				</div>-->
	<!--				</div>-->
	<!--				<div class="swiper-nav-button">-->
 <!--                            Add Arrows -->
 <!--                           <div class="swiper-button-prev"><i class="flaticon-right-arrow"></i></div>-->
 <!--                           <div class="swiper-button-next"><i class="flaticon-right-arrow"></i></div>-->
 <!--                       </div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--	<div class="container">-->

	<!--	<div class="row">-->
	<!--		<div class="col-lg-2 col-lg-offset-5">-->
	<!--			<hr class="marginbot-50">-->
	<!--		</div>-->
	<!--	</div>-->
 <!--       <div class="row">-->
 <!--           <div class="col-xs-6 col-sm-4 col-md-4">-->
	<!--			<div class="wow bounceInUp" data-wow-delay="0.2s">-->
 <!--               <div class="team">-->
 <!--                   <div class="inner">-->
	<!--					<h5>Anna Hanaceck</h5>-->
 <!--                       <p class="subtitle">Pixel Crafter</p>-->
 <!--                       <div class="avatar"><img src="assets/Sushma Raichand.jpg" alt="" class="img-responsive img-circle" /></div>-->
                       
 <!--                          <h5 class="text-dark">Chair Person</h5>-->
 <!--                         <div class="card-header bg-dark" style="border-radius:20px">-->
                            
 <!--                           <h5 class="text-light">Sushma Raichand</h5>-->
 <!--                       </div>-->
 <!--                   </div>-->
 <!--               </div>-->
	<!--			</div>-->
 <!--           </div>-->
	<!--		<div class="col-xs-6 col-sm-4 col-md-4">-->
	<!--			<div class="wow bounceInUp" data-wow-delay="0.5s">-->
 <!--               <div class="team boxed-grey">-->
 <!--                   <div class="inner">-->
	<!--					<h5>Maura Daniels</h5>-->
 <!--                       <p class="subtitle">Ruby on Rails</p>-->
 <!--                       <div class="avatar"><img src="assets/Samrat Raichand.jpg" alt="" class="img-responsive img-circle" /></div>-->
           
 <!--      <h5 class="text-dark">Founder  &amp; Group CEO</h5>-->
 <!--        <div class="card-header bg-dark" style="border-radius:20px">-->
 <!--                           <h5 class="text-light">Samrat Raichand </h5>-->
 <!--                       </div>-->
 <!--                   </div>-->
 <!--               </div>-->
	<!--			</div>-->
 <!--           </div>-->
	<!--		<div class="col-xs-6 col-sm-4 col-md-4">-->
	<!--			<div class="wow bounceInUp" data-wow-delay="0.8s">-->
 <!--               <div class="team">-->
 <!--                   <div class="inner">-->
	<!--					<h5>Jack Briane</h5>-->
 <!--                       <p class="subtitle">jQuery Ninja</p>-->
 <!--                       <div class="avatar"><img src="assets/Ayush Raichand .jpg" alt="" class="img-responsive img-circle" /></div>-->
                     
 <!--                           <h5 class="text-dark">Group COO</h5>-->
 <!--                              <div class="card-header bg-dark" style="border-radius:20px">-->
 <!--                           <h5 class="text-light">Aayush Raichand </h5>-->
 <!--                       </div>-->

 <!--                   </div>-->
 <!--               </div>-->
	<!--			</div>-->
 <!--           </div>-->
		
 <!--       </div>		-->
	<!--	</div>-->
	<!--	</div>-->
	<!--</section>-->
	
<!--<section class="news-section" id="livestream">	-->
<!--	<div class="row">-->
<!--	 <div class="col-lg-12">-->
<!--            <div class="outer-box">-->
<!--                <div class="outer-container">-->
                
<!--                    <div class="row m-0 justify-content-between align-items-center">-->
<!--                        <div class="sec-title">-->
<!--                              <h3>Core Team</h3>-->
<!--                            <div class="text-decoration">-->
<!--                                <span class="left"></span>-->
<!--                                <span class="right"></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="swiper-nav-button">-->
                            <!-- Add Arrows -->
<!--                            <div class="swiper-button-prev"><i class="flaticon-right-arrow"></i></div>-->
<!--                            <div class="swiper-button-next"><i class="flaticon-right-arrow"></i></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="news-carousel-wrapper">-->
<!--                    <div class="swiper-container news-carousel">-->
<!--                        <div class="swiper-wrapper">-->
                          
<!--                             <div class="col-xs-6 col-sm-4 col-md-4">-->
<!--				<div class="wow bounceInUp" data-wow-delay="0.2s">-->
<!--                <div class="team">-->
<!--                    <div class="inner">-->
					
<!--                        <div class="avatar"><img src="assets/Sushma Raichand.jpg" alt="" class="img-responsive img-circle" /></div>-->
                       
<!--                           <h5 class="text-dark" style="text-align:center">Chair Person</h5>-->
<!--                          <div class="card-header bg-dark" style="border-radius:20px">-->
                            
<!--                            <h5 class="text-light" style="text-align:center">Sushma Raichand</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--				</div>-->
<!--            </div>-->
                       
                       
<!--                       			<div class="col-xs-6 col-sm-4 col-md-4">-->
<!--				<div class="wow bounceInUp" data-wow-delay="0.5s">-->
<!--                <div class="team boxed-grey">-->
<!--                    <div class="inner">-->
					
<!--                        <div class="avatar"><img src="assets/Samrat Raichand.jpg" alt="" class="img-responsive img-circle" /></div>-->
           
<!--       <h5 class="text-dark" style="text-align:center">Founder  &amp; Group CEO</h5>-->
<!--         <div class="card-header bg-dark" style="border-radius:20px">-->
<!--                            <h5 class="text-light" style="text-align:center">Samrat Raichand </h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--				</div>-->
<!--            </div>-->
                            
                   
                            
<!--                            	<div class="col-xs-6 col-sm-4 col-md-4">-->
<!--				<div class="wow bounceInUp" data-wow-delay="0.8s">-->
<!--                <div class="team">-->
<!--                    <div class="inner">-->
				
<!--                        <div class="avatar"><img src="assets/Ayush Raichand .jpg" alt="" class="img-responsive img-circle" /></div>-->
                     
<!--                            <h5 class="text-dark" style="text-align:center">Group COO</h5>-->
<!--                               <div class="card-header bg-dark" style="border-radius:20px">-->
<!--                            <h5 class="text-light" style="text-align:center">Aayush Raichand </h5>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                </div>-->
<!--				</div>-->
<!--            </div>-->

<!--                        <div class="swiper-scrollbar"></div>-->
<!--                    </div>-->
<!--</div>-->
<!--</section>-->
<section class="sidebar-page-container mt-5" id="group-ceo" style="background:#eceff1;">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 content-side order-lg-2">
                <div class="news-block-six">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img class="lazy-image owl-lazy loaded" src="assets/images/about/ceo.png"
                                    data-src="assets/images/about/ceo.png" alt="" data-was-processed="true"></a>
                        </div>
                        <div class="lower-content"><br>
                            <h4><a>Message from Founder
                                </a></h4>
                            <div class="text">

                                Welcome and thank you for visiting the The Raichand Group’s website. I am Samrat
                                Raichand, Founder and Group Chief Executive Officer.
                                The sole reason behind creation of Raichand is to create solution for coming generation,
                                resource
                                the fellow small business owners trying to get their venture off the ground, provide
                                opportunity to freedom seekers and legacy builders who can turn their hobby into
                                profession, we wanted to help others like us.<br><br>
                                The values we share are embodied in what goes on at Raichand from day to day. Team members
                                must exhibit ethical and honest behavior, and Raichand must offer fair, equal conduct in a
                                safe,
                                healthy workplace. We believe that in such an environment, sound decision making and
                                effective strategies flow naturally from the give-and-take of daily business engagements
                                among all team members.<br><br>
                                Our reputation for corporate integrity attracts great team members, great customers, and
                                even greater opportunities. It is a key to our long-term success.
                                I am continually impressed by the resourcefulness and entrepreneurial quality displayed
                                by
                                our people and the exceptional value they bring to the company. This allows us to
                                deliver
                                added product value and outstanding customer service to clients who can count on us to
                                carry out our promises. Our staff and executive team at Raichand are regularly assessing and
                                reviewing our clients’ needs, the programs we offer, and the effectiveness of the
                                services
                                we provide. Our team is committed to maximizing client satisfaction through innovative
                                and value-added project delivery. We take pride in selecting the right teams to meet the
                                demanding and ever-changing needs of our clients. Our leadership in this industry is
                                directly
                                attributable to our talented staff’s dedicated attention to our clients’ needs and
                                executing
                                effective solutions to achieve success. <br><br>
                                We care about our team members’ health and well-being by providing a safe work
                                environment and encouraging a healthy lifestyle. Above all, we aim to be fair and honest
                                with team members and to provide them with meaningful, challenging work. We believe no
                                one has a monopoly on good ideas, and, in order to grow professionally, we will work
                                with
                                anyone who has constructive proposals for improved performance.<br><br>
                                That is Raichand - a company with a proud present and a bright future!<br><br>
                                On behalf of Raichand, I invite you to explore our website and learn more about all we have
                                to
                                offer. I am sure you will see why we love what we do.
                            </div>
                            <div class="">
                                 <p>Sincerely,</p>
                                 
                                <p>
                                    <strong>
                                        <a href="https://samratraichand.com/" target="_blank" style="color:#000;">Samrat Raichand,</a>
                                        </strong>
                                </p>
                                
                                <p>Founder and Group CEO</p>
                            </div>
                        </div>
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