

<?php  
include '../header.php';
include '../dbcon.php';
?>
<style>
.services-section-three {
    position: relative;
    padding: 29px 0 0px;
}
.owl-nav.disabled {
    display: block !important;
}
.owl-nav.disabled button {
    top: 30px !important;
}
</style>
<script src="/assets/js/owl.js"></script>
<script src="/assets/js/script.js"></script>
        <?php
// print_r($_POST); exit;
$html = "";
        if(isset($_POST["id"])) //Or do whatever you want
    {

        $bname = $_POST["id"];                                      
        $sql = "SELECT * FROM `service` WHERE `is_del` = 0 AND `cat_f`LIKE '%$bname%'";
        $result = mysqli_query($con, $sql);
    }
        if (mysqli_num_rows($result)>0)
        {
            // function limit_text($text, $limit) {
            //     if (str_word_count($text, 0) > $limit) {
            //         $words = str_word_count($text, 2);
            //         $pos   = array_keys($words);
            //         $text  = substr($text, 0, $pos[$limit]) . '...';
            //         // echo $text;exit;
            //     }
            //     return $text;
            // } 
            ?>
            <div class="theme_carousel owl-theme owl-carousel" id="services_response"
    data-options='{"items": 4,"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}' style="padding-top: 50px;">

            <?php
            
            while ($row=mysqli_fetch_assoc($result))
            {
    ?>
    
                                        
    <div class="service-block-three">
        <div class="inner-box">
            <div class="image">
                <?php //echo SITE_URL; exit;?>
                <img src="<?php echo SITE_URL.'uploadimg/'.$row['images']; ?>" alt="">
                </div>
            <div class="content">
                <div class="icon"><span class="flaticon-question"></span></div>
                <h5><?php echo $row['service_title'];?></h5>
                <a href="/services/entrepreneurship-incubation.php" class="read-more-link">Read More <i
                        class="fa fa-caret-right"></i></a>
            </div>
            <div class="overlay-content">
                <div class="content-wrapper">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-question"></span>
                        </div>
                        <h4><?php 
                        $title = $row['service_title'];
                        echo $newtext = wordwrap($title, 18, "<br />\n");
                        ?></h4>
                    </div>
                    <div class="outer-box">
                        <div class="text">
                            <?php                                                                                                                                       
                                $short_dec = $row['short_description'];                                                        
                                if (strlen($short_dec) > 82){

                                    echo $str = substr($short_dec, 0, 82) . '...';
                                }
                                else{
                                    echo $short_dec;
                                }
                                //echo limit_text($short_dec, 15);
                            ?>
                        </div>
                        <a href="/services_detail/services_detail_page.php?id=<?php echo $row['id']; ?>" class="read-more-link">Read
                            More <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php 
    } 
    ?>
    </div>
    <?php // while loop close
     } // if condition close 
    // echo  json_encode();
    ?>
    
