<?php include '../header.php';
include("../dbcon.php");
 
?>
<!-- link add for pdf xlsx... icon  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- link add for accordian -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<style>
    .fa,
    .fas {
        font-family: 'Font Awesome 5 Pro';
        font-weight: 900;
    }

    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: 0.4s;
        margin-top: 10px;
    }

    .panel {
        padding: 0 18px;
        background-color: #ffffff;
        display: none;
        overflow: hidden;
        box-shadow: 6px 3px 11px #0000004d;
        margin-top: 10px;
        padding: 9px 18px;
        border-radius: 2px;
    }

    .accordion:after {
        content: "\02795";
        font-size: 13px;
        color: #777;
        float: right;
        margin-left: 5px;
    }

    .category_list_button {
        font-size: 20px !important;
        font-weight: 900 !important;
        color: black !important;
        text-decoration-line: none !important;
    }

    /************************ Added for new accordion : START  ************/
    #accordion .mb-0>button:after {
        content: "\f067";
        font-family: "Font Awesome 5 Free";
        position: absolute;
        right: 0;
        color: red;
        font-size: 18px;
        font-weight: 600;
        margin-right: 2%;

    }

    #accordion .mb-0>button[aria-expanded="true"]:after {
        content: "\f068";
        font-family: "Font Awesome 5 Free";
        font-weight: 600;
        color: #efe8e3;
        font-size: 18px;
    }

    /************************ Added for new accordion : END  ************/
</style>
<section class="page-title" style="background-image: url(../assets/images/breadcrum/investor-relation.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>Investors Relation</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <!-- Modify 24/8/2022 start -->
                    <li><a href="<?php echo SITE_URL; ?>index.php">Home</a></li>
                    <!-- Modify 24/8/2022 end -->
                    <li><a href="#">Investors Relation</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="faq-section-five" style="background:#fff;padding: 40px 0px 5px;">
    <div class="pattern"></div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-area">
                    <form method="post" action="investor-relations.php" class="contact-form">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label>Our Companies</label>
                               <?php
                                // include("config.php");
                                $sql = "SELECT * FROM invest_category";
                                $result = mysqli_query($con, $sql) or die("Query failed:");
                                ?>
                                <select class="form-control" id="category" name="category">
                                    <option value="">Select Company</option>
                                    <?php if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            if (isset($_POST['category']) && $row['id'] == $_POST['category']) {
                                                echo "<option selected value={$row['id']}>{$row['invester_category']}</option>";
                                            } else {
                                                echo "<option value={$row['id']}>{$row['invester_category']}</option>";
                                            }
                                        }
                                    } ?>
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>For Periods</label>
                                <?php $sql = "SELECT * FROM `periods`";
                                $result = mysqli_query($con, $sql) or die("Query failed:"); ?>
                                <select class="form-control" id="year" name="year">
                                    <option value="">Select Period</option>
                                    <?php if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            if (isset($_POST['year']) && $row['id'] == $_POST['year']) {
                                                echo "<option selected value={$row['id']}>{$row['periods']}</option>";
                                            } else {
                                                echo "<option  value={$row['id']}>{$row['periods']}</option>";
                                            }
                                        }
                                    } ?>
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4 link-btn text-left" style="margin-top: 10px;">
                                <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Search</span></button>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------- Bootstrap Accordion for investor search : START --------20/09/2022------------------------>
<div class="auto-container custom-accordion-section">
    <div id="accordion">
     <?php
        $year = isset($_POST['year']) ? $_POST['year'] : "";
        $category = isset($_POST['category']) ? $_POST['category'] : "";
        $src = "";
        $filterQuery = "";

        if (isset($year) && $year != "") {
            $filterQuery .= " AND `year` = '$year'";
        }
        if (isset($category) && $category != "") {
            $filterQuery .= " AND `invester_category` = '$category'";
        }
        $pressCategory = "SELECT * FROM invest_category";
        $pressCatResult = $con->query($pressCategory);

        foreach ($pressCatResult as $catKey => $catValue) 
        {
            $catQuery = "";
            if ((isset($category) && $category != "" && $category == $catValue['id']) || !$category) {
                if ($catKey == 0) {
                    $area_expanded = "true";
                    $collapsed = "";
                    $container_show_class = "show";
                } else {
                    $area_expanded = "false";
                    $collapsed = "collapsed";
                    $container_show_class = "";
                }
            ?>
            <div class="card">
                    <?php
                    if (isset($category) && $category != "") {
                        $catQuery .= " AND `invester_category` = '$category' AND `invester_category` = '" . $catValue["id"] . "'";
                    } else {
                        $catQuery .= " AND `invester_category` = '" . $catValue["id"] . "'";
                    }
                    $stm = "SELECT * FROM invester_relation WHERE 1=1 $filterQuery $catQuery";
                    $result = $con->query($stm);
                    if ($result->num_rows > 0) {
                    ?>
                    
                     <style>
                        @media screen and (max-width:600px)
                        {
                            #m
                            {
                                font-size:14px;
                            }
                        }
                    </style>
                        <div class="card-body" id="heading<?php echo $catValue['id']; ?>">
                            <h5 class="mb-0">
                                <button class="category_list_button btn btn-link <?php echo $collapsed; ?>" data-toggle="collapse" data-target="#collapse<?php echo $catValue['id']; ?>" aria-expanded="<?php echo $area_expanded; ?>" aria-controls="collapse<?php echo $catValue['id']; ?>" style="color:red">

                                    <!-- Category Title ---->
                                    <span id="m" style="color:red"><?php echo ucfirst($catValue['invester_category']); ?></span>
                                    <!-- Category Title ---->

                                </button>
                            </h5>
                        </div>
                    <?php } ?>
                    <?php
                    if (isset($category) && $category != "") {
                        $catQuery .= " AND `invester_category` = '$category' AND `invester_category` = '" . $catValue["id"] . "'";
                    } else {
                        $catQuery .= " AND `invester_category` = '" . $catValue["id"] . "'";
                    }
                    // $stm = "SELECT * FROM press_release WHERE 1=1 $filterQuery $catQuery";
                    $stm = "SELECT invester_relation.*, periods.id,periods.periods 
                    FROM invester_relation 
                    LEFT JOIN periods ON invester_relation.year=periods.id 
                    WHERE 1=1 $filterQuery $catQuery ORDER BY invester_relation.year ";

                    // SELECT press_release.year, periods.id
                    // FROM press_release
                    // LEFT JOIN periods
                    // ON press_release.year=periods.id
                    // ORDER BY press_release.year;


                    $result = $con->query($stm);
                    foreach ($result as $key => $value) { ?>

                        <div style="" id="collapse<?php echo $catValue['id']; ?>" class="collapse <?php echo $container_show_class; ?>" aria-labelledby="heading<?php echo $catValue['id']; ?>" data-parent="#accordion">

                            <div class="container">

                                <div class="card" style="margin-top:15px;margin-bottom:15px">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-9 col-sm-8 col-xs-12 pdf-block-left">

                                                <?php if ($value['file_type'] == 'pdf') { ?>

                                                    <i class="fa fa-file-pdf-o"></i>

                                                <?php } elseif ($value['file_type'] == 'xlsx') { ?>
                                                    <i class="fa fa-file-excel-o"></i>


                                                <?php } elseif ($value['file_type'] == 'ppt') { ?>
                                                    <i class="fa fa-file-text"></i>

                                                <?php } elseif ($value['file_type'] == 'doc') { ?>
                                                    <i class="fa  fa-file-word-o"></i>

                                                <?php } elseif ($value['file_type'] == 'docx') { ?>
                                                    <i class="fa  fa-file-word-o"></i>

                                                <?php } elseif ($value['file_type'] == 'zip') { ?>
                                                    <i class="fa fa-file-zip-o"></i>

                                                    <i class="bi bi-file-earmark-zip-fill"></i>
                                                <?php } elseif ($value['file_type'] == 'xls') { ?>
                                                    <i class="fa  fa-file-excel-o"></i>

                                                <?php } else { ?>
                                                    <i class=""></i>
                                                <?php
                                                } ?>
                                                <strong style="font-size:18px;color:black;margin-left:19px;opacity:0.6"> <?php echo $value['title']; ?></strong>

                                                <h5 style="margin-left:35px" id="my">
                                                    <?php echo date('M, Y', strtotime($value['created_at'])); ?>
                                                </h5>

                                            </div>
<style>
                    @media screen and (max-width:600px)
                    {
                        #shdown1
                        {
                            margin-left:132!importantpx;
                           
                        }
                        #shdown
                        {
                            margin-left:32px;
                             font-style:bold;
                        }
                        #my 
                        {
                            font-size:15px;
                        }
                        .me
                        {
                            margin-top:15px;
                        }
                        
                    }
                    @media screen and (width:844px)
                    {
                        #shdown
                        {
                            font-size:17px;
                        }
                    }
                </style>

                                            <div class="col-md-3 col-sm-4 col-xs-12 pdf-block-right">
                                                <a href="<?php echo SITEURL; ?>portal/investors-relation/<?php echo $value['periods']; ?>/<?php echo $value['slug'] ?>">

                                                  <h5 id="shdown" class="pdf-header me " style="color:black">Download
                                                        <span style="margin-left:20px">
                                                            <img id="logo"  src="https://www.mahindra.com/assets/img/investor/icon-download-red.png" />
                                                        </span>
                                                        <h5 id="shdown" style="color:black">
                                                            <?php
                                                            $bytes = round($value['file_size'], 2);
                                                            if ($bytes >= 1073741824) {

                                                                $bytes_size = ($bytes / 1073741824);
                                                                $file_size = number_format($bytes_size, 2) . "GB";
                                                            } else if ($bytes >= 1048576) {
                                                                $bytes_size = ($bytes / 1048576);
                                                                $file_size = number_format($bytes_size, 2) . " MB";
                                                            } else if ($bytes >= 1024) {
                                                                $bytes_size = ($bytes / 1024);
                                                                $file_size = number_format($bytes_size, 2)  . " KB";
                                                            } else if ($bytes > 1) {
                                                                $bytes_size = $bytes;
                                                                $file_size = number_format($bytes_size, 2) . " bytes";
                                                            } else if ($bytes == 1) {
                                                                $bytes_size = $bytes;
                                                                $file_size = number_format($bytes_size, 2) . " byte";
                                                            } else {
                                                                $bytes_size = "0 bytes";
                                                            }
                                                            echo  (isset($file_size)?$file_size:"") ; ?>
                                                        </h5>
                                                </a>
                                            </div>
                                        </div>
                                       
                                        <!-- Category Content ---->
                                    </div>
                                </div>
                              
                            </div>
                              
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
<br />
<br />
<!---------- Bootstrap Accordion for investor search: END ------------------------------------------------>

<?php /* <div class="auto-container pb-35" id="info">

    <?php

    $stm = "SELECT * FROM invest_category";
    $res = $con->query($stm);
    // print_r($res);
    $arams = array();
    while ($row = mysqli_fetch_array($res)) {
        echo '<div class="accordion-contianer"> <button class="accordion">' . $row['invester_category'] . '</button> <div class="panel"> <div class="row">'; ?>
        <!-- download link old              <a download type="button" href="/admin/invester/upload/'.$row1['title'].'.'.$row1['file_type'].'" class="btn btn-dark"><i class="fa fa-download" aria-hidden="true"></i></a> -->
        <?php

        $stm = "SELECT * FROM invester_relation where invester_category like '%{$row['invester_category']}%'";
        $res2 = $con->query($stm);
        // print_r($res);
        $arams = array();
        while ($row1 = mysqli_fetch_array($res2)) {
            echo '<div class="col-lg-8 col-md-8">
                                            
                                                <h6><i class="fa fa-file"></i> ' . $row1['title'] . '</h6>
                                                <small>' . $row1['created_at'] . '</small>
                                            </div>
                                              <div class="col-lg-4 col-md-4 text-right">
                                                <small>' . number_format($row1['file_size'], 2, '.', '') . ' MB</small>
                                                  
                                                  <a download type="button" href="/portal/investors-relation/' . $row1['title'] . '.' . $row1['file_type'] . '" class="btn btn-dark"><i class="fa fa-download" aria-hidden="true"></i></a>                            
                                            </div>';
        }
        ?>
    <?php
        echo '</div>
                                    </div>
                                </div>';
    }
    ?>

</div> */ ?>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    function findinfo() {
        var input = $('#company').val();
        if (!input) {
            $('#periods').append('<option value="">All</option>');
        }
        $.ajax({
            url: '<?php echo SITE_URL; ?>load_categories.php',
            data: {
                find: input
            },
            type: 'post',
            success: function(data) {
                data = JSON.parse(res);
                $('#periods').append('<option>All</option>');
                var len = data.length;
                for (var i = 0; i < len; i++) {
                    var id = data[i].id;
                    var service_title = data[i].service_title;
                    if (id == services) {
                        selected = true;
                    } else {
                        selected = false;
                    }
                    $('#periods').append($("<option></option>").attr("id", id).attr("value", id).attr("selected", selected).text(service_title));
                }
            }

        });
    }

    function addWidget() {
        var str = `<div class="accordion-contianer "> 
        <button class="accordion">Announcements</button> 
            <div class="panel">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                 <h6><i class="fa fa-file"></i> Schedule-Presentation of Analyst-Institutional Investor Meetings    post Q3FY22 results</h6>
                </div>
                  <div class="col-lg-4 col-md-4 text-right">
                    <small>0.10 MB</small>
                        <a download type="button" href="<?php echo SITE_URL; ?>admin/invester/upload/Schedule-Presentation of Analyst-Institutional Investor Meetings post Q3FY22 results.pdf" class="btn btn-dark"><i class="fa fa-download" aria-hidden="true"></i></a>
                </div>
                </div>
            </div>
            </div>`;
        $('#info').html(str);
        $(".panel").on("click", function(e) {
            var $_target = $(e.currentTarget);
            var $_panelBody = $_target.find(".panel-collapse");
            if ($_panelBody) {
                $_panelBody.collapse('toggle')
            }
        });
    }
</script>
<?php include 'footer.php'; ?>