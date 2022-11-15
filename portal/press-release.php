<?php include '../header.php';
include("../dbcon.php");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<style>
    .fa-file-pdf-o:before {
        content: "\f1c1";
        margin-right: 10px;
    }

    .pdf-header {
        font-weight: 600;
    }

    .category_list_button {
        font-size: 20px !important;
        font-weight: 900 !important;
        color: black !important;
        text-decoration-line: none !important;
    }

    .custom_row {
        margin-left: 3px !important;
    }

    .dwonload_css {
        margin-left: 10% !important;
        width: auto !important;
    }

    /************************ Added for new accordion : START  ************/
    #accordion .mb-0>button:after {
        content: "\f067";
        font-family: "Font Awesome 5 Free";
        position: absolute;
        right: 0;
        color: ##efe8e3;
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

<?php include 'header.php'; ?>
<!-- Page Title -->
<section class="page-title" style="background-image: url(../assets/images/breadcrum/press-release.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>Press Release</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <!-- Modify 24/8/2022 start -->
                    <li><a href="<?php echo SITE_URL; ?>index.php">Home</a></li>
                    <!-- Modify 24/8/2022 end -->
                    <li>Press Relaese</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="faq-section-five" style="margin-top:-20px;background:#fff;padding: 40px 0px 5px;">
    <div class="pattern"></div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-area">
                    <form method="post" action="press-release.php" class="contact-form">
                        <div class="row">
                            <div class="col-md-3 form-group">
                                <label>Years</label>
                                <?php
                                // include("config.php");
                                $sql = "SELECT * FROM `periods`";
                                $result = mysqli_query($con, $sql) or die("Query failed:");
                                //    $row = mysqli_fetch_assoc($result);
                                //     echo '<pre>aaa';print_r($row); exit;
                                ?>
                                <!-- <select class="form-control" id="year" name="year">
                                    <option  value="">select year</option>
                                    <?php
                                    // if (mysqli_num_rows($result) > 0) {
                                    //     while ($row = mysqli_fetch_assoc($result)) {


                                    //         if ($row['periods']) {
                                    //         echo "<option selected value={$row['id']}>{$row['periods']}</option>";
                                    //         } else {
                                    //         echo "<option value={$row['periods']}</option>";
                                    //         }
                                    //     }
                                    // } 
                                    ?>
                                    </option>
                                </select> -->

                                <select class="form-control" id="year" name="year">
                                    <option value="">Select Year</option>
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
                            <div class="col-md-3 form-group">
                                <label>Categories</label>
                                <?php
                                // include("config.php");
                                $sql = "SELECT * FROM press_category";
                                $result = mysqli_query($con, $sql) or die("Query failed:");
                                ?>
                                <select class="form-control" id="category" name="category">

                                    <option value="">Select Category</option>
                                    <?php if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            if (isset($_POST['category']) && $row['id'] == $_POST['category']) {
                                                echo "<option selected value={$row['id']}>{$row['category']}</option>";
                                            } else {
                                                echo "<option value={$row['id']}>{$row['category']}</option>";
                                            }
                                        }
                                    } ?>
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-3 form-group">
                                <label>Tags</label>
                                <select class="form-control" id="tags" name="tags">
                                    <option value="">Select Tag</option>
                                    <?php
                                    $stm = "SELECT * FROM press_release limit 12";
                                    $res = $con->query($stm);
                                    while ($row = mysqli_fetch_array($res)) {

                                        $list = array();
                                        $var = explode(',', $row['tags']);
                                        $ct = count($var);
                                        while ($ct-- != 0) {
                                            array_push($list, $var[$ct]);
                                        }
                                        $data = array_unique($list);
                                        $cst = count($data);
                                        foreach ($data as $key => $value) {
                                            if ($value != "") {
                                                if ($value == $_POST['tags']) {
                                                    echo '<option selected value="' . $value . '">#' . $value . '</option>';
                                                } else {
                                                    echo '<option value="' . $value . '">#' . $value . '</option>';
                                                }
                                            }
                                            // echo ("<option><li><a onclick=\"sendhas('$value')\">#$value</a></li></option>");
                                        }
                                    }
                                    ?>
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-3 link-btn text-left" style="margin-top: 10px;">
                                <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Search</span></button>
                            </div>
                        </div>
                    </form>

                    <?php //echo "<pre>";print_r($_POST); exit; 
                    ?>
                    <br>
                </div>
            </div>

        </div>
    </div>

</section>


<br>

































<!----------------------------------- Bootstrap Accordion : START ------------------------------------------------>
<div class="auto-container custom-accordion-section">
    <div id="accordion">

        <?php

        // echo $_POST['year'];exit;
        $year = isset($_POST['year']) ? $_POST['year'] : "";
        $category = isset($_POST['category']) ? $_POST['category'] : "";
        $tags = isset($_POST['tags']) ? $_POST['tags'] : "";
        $src = "";
        $filterQuery = "";

        if (isset($year) && $year != "") {
            $filterQuery .= " AND `year` = '$year'";
        }
        if (isset($category) && $category != "") {
            $filterQuery .= " AND `category_id` = '$category'";
        }

        if (isset($tags) && $tags != "") {
            $filterQuery .= " AND `tags` LIKE '%$tags%'";
        }

        $pressCategory = "SELECT * FROM press_category";
        $pressCatResult = $con->query($pressCategory);

        foreach ($pressCatResult as $catKey => $catValue) {
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
                        $catQuery .= " AND `category_id` = '$category' AND `category_id` = '" . $catValue["id"] . "'";
                    } else {
                        $catQuery .= " AND `category_id` = '" . $catValue["id"] . "'";
                    }
                    $stm = "SELECT * FROM press_release WHERE 1=1 $filterQuery $catQuery";
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
                        <div class="card-header" id="heading<?php echo $catValue['id']; ?>">
                            <h5 class="mb-0">
                                <button class="category_list_button btn btn-link <?php echo $collapsed; ?>" data-toggle="collapse" data-target="#collapse<?php echo $catValue['id']; ?>" aria-expanded="<?php echo $area_expanded; ?>" aria-controls="collapse<?php echo $catValue['id']; ?>" style="color:red">

                                    <!-- Category Title ---->
                                    <span id="m"><?php echo ucfirst($catValue['category']); ?></span>
                                    <!-- Category Title ---->

                                </button>
                            </h5>
                        </div>
                    <?php } ?>

                    <?php
                    if (isset($category) && $category != "") {
                        $catQuery .= " AND `category_id` = '$category' AND `category_id` = '" . $catValue["id"] . "'";
                    } else {
                        $catQuery .= " AND `category_id` = '" . $catValue["id"] . "'";
                    }
                    // $stm = "SELECT * FROM press_release WHERE 1=1 $filterQuery $catQuery";
                    $stm = "SELECT press_release.*, periods.id,periods.periods 
                    FROM press_release 
                    LEFT JOIN periods ON press_release.year=periods.id 
                    WHERE 1=1 $filterQuery $catQuery ORDER BY press_release.year ";

                    // SELECT press_release.year, periods.id
                    // FROM press_release
                    // LEFT JOIN periods
                    // ON press_release.year=periods.id
                    // ORDER BY press_release.year;


                    $result = $con->query($stm);
                    foreach ($result as $key => $value) {
                        // echo '<pre>';print_r($value);exit;
                    ?>

                        <div style="background-color:#F5F5F5" id="collapse<?php echo $catValue['id']; ?>" class="collapse <?php echo $container_show_class; ?>" aria-labelledby="heading<?php echo $catValue['id']; ?>" data-parent="#accordion">

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

                                                <!-- <img src="https://www.mahindra.com/assets/img/investor/icons/ZIP/ZIP.png" style="height:20px;width:22px;color:black" /> -->
                                                <!-- <a href="<?php echo SITE_URL; ?>portal/press-release/<?php echo $value['slug']; ?>"><strong style="font-size:18px;color:black;margin-left:10px">
                                                    <?php echo $value['file_name']; ?></strong></a> -->

                                                <?php if ($value['file_type'] == 'pdf') { ?>
                                                    <strong style="font-size:18px;color:black;margin-left:10px"> <?php echo $value['file_name']; ?></strong>
                                                <?php } else { ?>
                                                    <strong style="font-size:18px;color:black;margin-left:19px"> <?php echo $value['file_name']; ?></strong>
                                                <?php } ?>


                                                <!-- <a href="/portal/press-release/<?php echo $value['slug']; ?>"><span class="btn-title"><strong style="font-size:18px;color:black;margin-left:10px"> <?php echo $value['file_name']; ?></strong></span></a> -->

                                                <h5 style="margin-left:35px" id="my"><?php
                                                                                echo date('M, Y', strtotime($value['created_at']));

                                                                                ?></h5>
                                                <!-- <h5 style="margin-left:35px"><?php

                                                                                    // $date = $value['created_at'];  
                                                                                    // echo $date;exit;   
                                                                                    // echo date('F, Y', strtotime($date)); 

                                                                                    ?></h5> -->

                                                <!-- echo $dt->format('F'); -->
                                            </div>
                                            <!-- old url start -->
                                            <!-- href="<?php //echo SITE_URL(); 60px
                                                        ?>/admin/press-release/uploads/<?php //echo $value['file_name'] . '.' . $value['file_type']; 
                                                                                            ?>" -->
                                            <!-- old url END -->
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
                                                <a href="<?php echo SITEURL; ?>portal/press-release/<?php echo $value['periods']; ?>/<?php echo $value['slug'] ?>">



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
                                                            echo $file_size; ?>
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
<!----------------------------------- Bootstrap Accordion : END ------------------------------------------------>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    var info = Number(new Date().getFullYear());
    var yearselected = '<?php echo $year; ?>';
    var sp = "<option value=''>select year</option>";
    for (k = info; k >= 2019; k--) {
        if (yearselected == k) {
            sp += `<option selected value=${k}><li>${k}</li></option>`;
        } else {
            sp += `<option value=${k}><li>${k}</li></option>`;
        }
        // sp += `<option value=${k}><li>${k}</li></option>`;
    }
    //$("#year").html(sp);

    // serch year and
    function searchme() {
        // var year = $('#year').val();
        var month = $('#month').val();
        var category = $('#category').val();
        var tags = $('#tags').val();

        if (month == month) {
            var data = {
                year: year,
                category: category,
                tags: tags,
                // month: month
            };
        } else {
            var data = {
                year: year,
                month: month,
                category: category,
                tags: tags,
            };
        }
        $.ajax({
            url: '<?php echo SITE_URL; ?>admin/press-release/search_year.php',
            data: data,
            type: 'post',
            success: function(data) {
                $row = "";
                data = JSON.parse(data);
                var temp = [];
                data.map((item, index) => {
                    $row += `<div class=" conatiner panel-body custom_search_result >
                    <div class="pdf-grid" category="secreAnnouncements" >
                    <div class="row mm">
                    <div class="col-md-11 col-sm-11 col-xs-11 pdf-block-left">
                    <h5 class="pdf-header"> <i class="fa fa-file-pdf-o"></i>${item['file_name']}</h5>
                                    
                                    <small>${item['year']}</small>
                                    <small>${item['month']}</small>
                                </div>
                                <div class="col-md-1 col-sm-1 col-xs-1 pdf-block-right">
                                <div class="col-lg-2 col-md-2 text-right">
                                    <small>${Number(item['file_size']).toFixed(2)} MB</small>
                                    <a download href="https://raichandgroup.com/admin/press-release/uploads/${item['file_name']}.${item['file_type']}" type="button" class="btn btn-dark"><i class="fa fa-download" aria-hidden="true"></i></a>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>
                    </div>`;
                    // ==================================================================
                    temp.push(item['tags']);
                });
                var tem = [];
                temp.map((item, index) => {
                    temp[index].split(',').map((it, ix) => {
                        tem.push(it);
                    })
                });
                var st = "";
                var v = removeDuplicates(tem);
                v.map((item, index) => {
                    st += `<option><li><a onclick="sendhas('${item}')">#${item}</a></li></option>`;
                });

                $('#tags').html(st);
                $('#playground').html($row);
            }

        });
    }

    function sendhas(data) {
        $.ajax({
            url: '<?php echo SITE_URL; ?>admin/press-release/tagsfind.php',
            data: {
                find: data
            },
            type: 'post',
            success: function(data) {
                $row = "";
                data = JSON.parse(data);
                var temp = [];
                data.map((item, index) => {
                    $row += `<div class="col-md-12 padding-0 mt-20">
                        <div class="panel" id="panel-card" style="display: block;">
                            <div class="row">
                                <div class="col-lg-10 col-md-10">
                                    <h6><i class="fa fa-file"></i> ${item['file_name']}</h6>
                                    <small>${item['created_at']}</small>
                                </div>
                                <div class="col-lg-2 col-md-2 text-right">
                                    <small>${Number(item['file_size']).toFixed(2)} MB</small>
                                    <a download href="<?php echo SITE_URL; ?>admin/press-release/uploads/${item['file_name']}.${item['file_type']}" type="button" class="btn btn-dark"><i class="fa fa-download" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>`;
                    temp.push(item['tags']);
                });
                var tem = [];
                temp.map((item, index) => {
                    temp[index].split(',').map((it, ix) => {
                        tem.push(it);
                    })
                });
                var st = "";
                var v = removeDuplicates(tem);
                v.map((item, index) => {
                    st += `<li><a onclick="sendhas('${item}')">#${item}</a></li>`;
                });

                $('#tags').html(st);
                $('#playground').html($row);
            }

        });

    }

    function removeDuplicates(arr) {
        return [...new Set(arr)];
    }

    function findinfo(input) {
        // alert(input);
        $.ajax({
            url: '<?php echo SITE_URL; ?>admin/press-release/backend.php',
            data: {
                find: input
            },
            type: 'post',
            success: function(data) {
                $row = "";
                data = JSON.parse(data);
                var temp = [];
                data.map((item, index) => {
                    $row += `<div class="col-md-12 padding-0 mt-20">
                        <div class="panel" id="panel-card" style="display: block;">
                            <div class="row">
                                <div class="col-lg-10 col-md-10">
                                    <h6><i class="fa fa-file"></i> ${item['file_name']}</h6>
                                    <small>${item['created_at']}</small>
                                </div>
                                <div class="col-lg-2 col-md-2 text-right">
                                    <small>${Number(item['file_size']).toFixed(2)} MB</small>
                                    <a download href="<?php echo SITE_URL; ?>admin/press-release/uploads/${item['file_name']}.${item['file_type']}" type="button" class="btn btn-dark"><i class="fa fa-download" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>`;
                    temp.push(item['tags']);
                });
                var tem = [];
                temp.map((item, index) => {
                    temp[index].split(',').map((it, ix) => {
                        tem.push(it);
                    })
                });
                var st = "";
                var v = removeDuplicates(tem);
                v.map((item, index) => {
                    st += `<li><a onclick="sendhas('${item}')">#${item}</a></li>`;
                });
                $('#tags').html(st);
                $('#playground').html($row);
            }

        });

    }
</script>
<?php include 'footer.php'; ?>