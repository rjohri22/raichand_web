<?php include '../header.php'; ?>
<!-- Page Title -->
<?php
$h = "";


?>
<section class="page-title" style="background-image: url(../assets/images/breadcrum/policies.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>Policies</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <!-- Modify 24/8/2022 start -->
                    <li><a href="<?php echo SITE_URL;?>index.php">Home</a></li>
                    <!-- Modify 24/8/2022 end -->
                    <li>Policies</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Page Title -->
<section class="pricing-section style-two">
    <div class="auto-container">
        <!--<div class="row m-0 justify-content-between">-->
        <!--    <div class="sec-title">-->
        <!--        <h2>Policies</h2>-->
        <!--        <span class="text-decoration-two"></span>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="pricing-content pt-20">
            <!-- Tab panes -->
            <div class="tab-content wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 200ms; animation-name: fadeInUp;">
                <div class="tab-pane fadeInUp animated active" id="price-tab-one" role="tabpanel" aria-labelledby="price-tab-one">
                    <div class="wrapper-box">
                        <div class="row">

                            <?php
                            $sql_policies_cat = "SELECT * FROM policies_cat";
                            $result_policies_cat = mysqli_query($con, $sql_policies_cat);

                            if (mysqli_num_rows($result_policies_cat) > 0) {
                                while ($row_policies_cat = mysqli_fetch_assoc($result_policies_cat)) {


                                   // $sql_policies = "SELECT * FROM policies LEFT JOIN bname_category ON bname_category.id =  policies.bname WHERE categories = '" . $row_policies_cat['id'] . "'";
                                    $sql_policies = "SELECT polcy.*, cat.id AS catID, cat.categories, cat.filename
                                    FROM policies AS polcy
                                    LEFT JOIN cat AS cat
                                    ON cat.id = polcy.bname
                                    WHERE polcy.categories = ".$row_policies_cat['id'];
                                    //echo $sql_policies;exit;
                                    $result_policies = mysqli_query($con, $sql_policies);
                                   

                                    if (mysqli_num_rows($result_policies) > 0) {
                                        echo "<div class='col-md-12'><h3 style='padding-top:30px;'><span>" . $row_policies_cat['policies_categories'] . "</span></h3></div>";
                                        while ($row_policies = mysqli_fetch_assoc($result_policies)) { 
                                             //echo "<pre>";print_r($row_policies);
                                            //print_r($row_policies); exit;?>
                                            <div class="col-lg-4 pricing-block style-two active animated fadeInLeft mb-5" data-wow-delay="200ms" data-wow-duration="1200ms">
                                                <?php

                                                //echo "<br><br><br>"; 
                                                ?>
                                                <div class="inner-box">
                                                    <div class="lower-content">
                                                        <?php
                                                        // echo '<prE>';
                                                        // print_r($row_policies);
                                                        // exit;

                                                        // $sql_bname_category = "SELECT * FROM bname_category";
                                                        // $result_bname_category = mysqli_query($con, $sql_bname_category);
                          
                                                        // if (mysqli_num_rows($result_bname_category) > 0) {
                                                        //     while ($row_bname_category = mysqli_fetch_assoc($result_bname_category)) {
                                                        //         if ($row_bname_category['id'] == $row_policies['bname']) {
                                                        $folder = "../admin/policies/image/" . $row_policies['filename']; ?>
                                                        <img src="<?= $folder; ?>" style="height:80px; margin-bottom:5px;">     
                                                        <?php
                                                        // }
                                                        //     }
                                                        // }

                                                        // echo $row1['id'];exit;
                                                        // if ($row_policies['categories'] == $row_policies_cat['id']) {

                                                        //echo "fsdfsdf";exit;
                                                        ?>

                                                        <h4><?php echo $row_policies['title']; ?></h4>
                                                        <div class="link-btn">
                                                            <a class="theme-btn btn-style-one" href="<?php echo SITE_URL;?>/portal/policies/<?php echo $row_policies['slug']; ?>"><span class="btn-title" target="_blank">View More</span></a>
                                                            <!-- <a class="theme-btn  href=btn-style-one" href="detailpage.php?id=<?php //echo $row_policies['id']; ?>"><span class="btn-title">View More</span></a> -->

                                                        </div>


                                                        <!-- <div class="link-btn"><a href="detailpage.php" class="theme-btn btn-style-one" data-toggle="modal"><span class="btn-title">View More</span></a></div> -->



                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php
                                        // contin;
                                        // }

                                    }
                                    ?>

                            <?php

                                    //     echo '<div class="col-lg-4 pricing-block style-two active animated fadeInLeft"
                                    //     data-wow-delay="200ms" data-wow-duration="1200ms">
                                    //     <div class="inner-box">
                                    //         <div class="lower-content">
                                    //             <img src="https://raichandgroup.com/admin/policies/image/'.$row['bname'].'.png" style="height:80px; margin-bottom:5px;">
                                    //             <h4>'.$row['title'].'</h4>
                                    //             <div class="link-btn"><a href="#" class="theme-btn btn-style-one"
                                    //                     data-toggle="modal" data-target=".bd-example-modal-'.$row['id'].'"><span
                                    //                         class="btn-title">View More</span></a></div>
                                    //         </div>
                                    //     </div>
                                    // </div>';



                                }
                            }
                            ?>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</section>
<?php include 'footer.php'; ?>


<!-- Modal -->
<?php

$sql = "SELECT * FROM policies";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="modal fade bd-example-modal-' . $row['id'] . '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                        aria-hidden="true" style="background: #0000004d;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Raichand Management Policies</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ' . $row['description'] . '
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
    }
}
?>