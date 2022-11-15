<?php include '../header.php';
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
//  $sql_policies_cat = "SELECT * FROM policies_cat";
//  $result_policies_cat = mysqli_query($con, $sql_policies_cat);

//  $row_policies_cat = mysqli_fetch_assoc($result_policies_cat);

//  echo $sql_policies = "SELECT * FROM policies JOIN policies_cat ON policies_cat.id =  policies.categories"; 
$sql_policies = "SELECT polcy.*, cat.id AS catID, cat.policies_categories
                                    FROM policies AS polcy
                                    LEFT JOIN policies_cat AS cat
                                    ON cat.id = polcy.categories
                                    WHERE polcy.slug = '".$_GET['slug']."'";
                                    // echo $sql_policies;exit;

$result_policies = mysqli_query($con, $sql_policies);
$result = mysqli_fetch_assoc($result_policies);
// echo "<pre>"; print_r($result); exit;
?>
<section class="page-title" style="background-image: url(../assets/images/breadcrum/our-services.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1><?php echo $result['policies_categories']; ?> </h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo SITE_URL;?>index.php">Home</a></li>
                    <li><a href="<?php echo SITE_URL;?>portal/policies.php">Our Polices</a></li>
                    <li><a href="#"><?php echo $result['policies_categories']; ?></a></li>

                </ul>
            </div>
        </div>
    </div>
</section>

<section class="services-details">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-9 content-side">
                <!-- <h3><strong>Description </strong></h3> -->
                <!-- <br> -->
                <div class="text">
                    <p><?php echo $result['description']; ?></p>
                    </div>
            </div>
            <!-- <aside class="col-lg-3">
                <div class="service-sidebar">
                    <img src="../assets/images/services/Mentorship1.jpg">
                </div>
            </aside> -->
        </div>

     
    </div>
    
        
</section>

<?php
include '../footer.php';
// include '../footer.php';?>