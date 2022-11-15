<?php include '../header.php';
include("../dbcon.php");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

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
        font-weight: 600;
        margin-right: 2%;

    }
    #accordion .mb-0>button[aria-expanded="true"]:after {
        content: "\f068";
        font-family: "Font Awesome 5 Free";
        font-weight: 600;
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
                    <li><a href="index.php">Home</a></li>
                    <li>Press Relaese</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Page Title -->

<!-- sidebar-page-container -->

<section class="sidebar-page-container">
    <div class="auto-container">
        <div class="row" style="flex-direction:row-reverse">
            <div class="col-lg-12 content-side order-lg-2">
                <div class="row press-card">
                    <div class="col-lg-12">
                        <div class="contact-form-area">
                            <form method="post" action="press-release.php" class="contact-form">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Years</label>
                                        <select class="form-control" style="width:100%;" name="year" id="year">
                                            <option value="">select year</option>
                                        </select>
                                    </div>

                                    <!-- ==================== category start ========================== -->
                                    <div class="col-md-3">
                                        <label>Categories</label>
                                        <?php 
                                        // include("config.php");
                                        $sql = "SELECT * FROM press_category";
                                        $result = mysqli_query($con, $sql) or die("Query failed:");
                                        ?>
                                        <select class="form-control" id="category" name="category">
                                            <option value="">select category</option>
                                            <?php if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    if ($row['id'] == $_POST['category']) {
                                                        echo "<option selected value={$row['id']}>{$row['category']}</option>";
                                                    } else {
                                                        echo "<option value={$row['id']}>{$row['category']}</option>";
                                                    }
                                                }
                                            } ?>
                                            </option>
                                        </select>
                                    </div>
                                    <!-- ==================== category  END ====================-->

                                    <!-- ==================== Tag START =========================-->

                                    <div class="col-md-3">
                                        <label for="">Tag Cloud</label>
                                        <ul class="clearfix" id="">
                                            <select class="form-control" id="tags" name="tags">
                                                <option value="">Tags</option>
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
                                        </ul>
                                    </div>
                                    <!-- ==================== Tag END =========================-->

                                    <!-- serch button start -->
                                    <div class="col-md-3 link-btn text-right" style="margin-top: 30px;">
                                        <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Search</span></button>
                                    </div>
                                    <!-- serch button start -->

                                </div>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------- Bootstrap Accordion : START ------------------------------------------------>
    <div class="auto-container custom-accordion-section">
        <div id="accordion">

            <?php
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
                            <div class="card-header" id="heading<?php echo $catValue['id']; ?>">
                                <h5 class="mb-0">
                                    <button class="category_list_button btn btn-link <?php echo $collapsed; ?>" data-toggle="collapse" data-target="#collapse<?php echo $catValue['id']; ?>" aria-expanded="<?php echo $area_expanded; ?>" aria-controls="collapse<?php echo $catValue['id']; ?>">

                                        <!-- Category Title ---->
                                        <?php echo ucfirst($catValue['category']); ?>
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
                        $stm = "SELECT * FROM press_release WHERE 1=1 $filterQuery $catQuery";
                        $result = $con->query($stm);
                        foreach ($result as $key => $value) {
                            //print_r($value);exit;
                        ?>
                            <div id="collapse<?php echo $catValue['id']; ?>" class="collapse <?php echo $container_show_class; ?>" aria-labelledby="heading<?php echo $catValue['id']; ?>" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Category Content ---->
                                    <div class="row custom_row">
                                        <div class="col-md-9 col-sm-11 col-xs-11 pdf-block-left">
                                            <p>
                                                <?php if ($value['file_type'] == 'pdf') { ?>
                                                    <i class="fa fa-file-pdf-o"></i>

                                                <?php } elseif ($value['file_type'] == 'xlsx') { ?>
                                                    <i class="fa fa-file-excel-o"></i>

                                                <?php } elseif ($value['file_type'] == 'ppt') { ?>
                                                    <i class="fa fa-file-text"></i>

                                                <?php } elseif ($value['file_type'] == 'doc') { ?>
                                                    <i class="fa  fa-file-word-o"></i>
                                                <?php } ?>

                                                <span class="file_header_acc"><?php echo $value['file_name']; ?></span>
                                            </p>
                                            <p style="margin-left: 20px;">
                                                <span><?php echo $value['year']; ?></span>
                                                <span><?php //echo $value['month']; 
                                                        ?></span>
                                            </p>
                                        </div>

                                        <div class="dwonload_css">
                                            <p>
                                                <span> Download </span>
                                                <a download href="<?php //echo SITE_URL(); 
                                                                    ?>/admin/press-release/uploads/<?php echo $value['file_name'] . '.' . $value['file_type']; ?>" type="button" class="" style="font-size: 25px; color:black;"><i class="fa fa-download" aria-hidden="true"></i>
                                                </a>
                                            </p>
                                            <p>
                                                <span>
                                                    <!-- <?php //echo round($value['file_size'] / 1024, 1);
                                                            ?>KB -->

                                                    <!-- file size in static  -->
                                                    <?php
                                                    $bytes = $value['file_size'];
                                                    // $bytes = floatval($bytes);
                                                    // $arBytes = array(
                                                    //     0 => array(
                                                    //         "UNIT" => "TB",
                                                    //         "VALUE" => pow(1024, 4)
                                                    //     ),
                                                    //     1 => array(
                                                    //         "UNIT" => "GB",
                                                    //         "VALUE" => pow(1024, 3)
                                                    //     ),
                                                    //     2 => array(
                                                    //         "UNIT" => "MB",
                                                    //         "VALUE" => pow(1024, 2)
                                                    //     ),
                                                    //     3 => array(
                                                    //         "UNIT" => "KB",
                                                    //         "VALUE" => 10
                                                    //     ),
                                                    //     4 => array(
                                                    //         "UNIT" => "B",
                                                    //         "VALUE" => 1
                                                    //     ),
                                                    // );

                                                    // foreach ($arBytes as $arItem) {

                                                    //     if ($bytes >= $arItem["VALUE"]) {
                                                    //         $result = $bytes / $arItem["VALUE"];
                                                    //         $result = str_replace(".", ",", strval(round($result, 2))) . " " . $arItem["UNIT"];
                                                    //         echo $result;
                                                    //         break;
                                                    //     }
                                                    // static code for size end
                                                    //dynamic code for size start
                                                    if ($bytes >= 1073741824) {
                                                        $bytes_size = ($bytes/1073741824)." GB";
                                                    } else if ($bytes >= 1048576) {
                                                        $bytes_size = ($bytes / 1048576)  . " MB";
                                                    } else if ($bytes >= 1024) {
                                                        $bytes_size = ($bytes / 1024)  . " KB";
                                                    } else if ($bytes > 1) {
                                                        $bytes_size = $bytes . " bytes";
                                                    } else if ($bytes == 1) {
                                                        $bytes_size = $bytes . " byte";
                                                    } else {
                                                        $bytes_size = "0 bytes";
                                                    }
                                                    echo $bytes_size;                                           
                                                    ?>
                                                    <!-- file size enddddddddddddddddddd -->
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Category Content ---->
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <br/>
    <br/>
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
    $("#year").html(sp);
    
    // serch year and
    function searchme() {
        var year = $('#year').val();
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
            url: '<?php echo SITE_URL;?>admin/press-release/search_year.php',
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
    function sendhas(data)
    {
         $.ajax({
           url:'<?php echo SITE_URL;?>admin/press-release/tagsfind.php',
           data:{
               find:data
           },
           type:'post',
           success:function(data){
               $row = "";
               data = JSON.parse(data);
               var temp= [];
               data.map((item,index)=>{
                   $row += `<div class="col-md-12 padding-0 mt-20">
                        <div class="panel" id="panel-card" style="display: block;">
                            <div class="row">
                                <div class="col-lg-10 col-md-10">
                                    <h6><i class="fa fa-file"></i> ${item['file_name']}</h6>
                                    <small>${item['created_at']}</small>
                                </div>
                                <div class="col-lg-2 col-md-2 text-right">
                                    <small>${Number(item['file_size']).toFixed(2)} MB</small>
                                    <a download href="<?php echo SITE_URL;?>admin/press-release/uploads/${item['file_name']}.${item['file_type']}" type="button" class="btn btn-dark"><i class="fa fa-download" aria-hidden="true"></i></a>
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
           url:'<?php echo SITE_URL;?>admin/press-release/backend.php',
           data:{
               find:input
           },
           type:'post',
           success:function(data){
               $row = "";
               data = JSON.parse(data);
               var temp= [];
               data.map((item,index)=>{
                   $row += `<div class="col-md-12 padding-0 mt-20">
                        <div class="panel" id="panel-card" style="display: block;">
                            <div class="row">
                                <div class="col-lg-10 col-md-10">
                                    <h6><i class="fa fa-file"></i> ${item['file_name']}</h6>
                                    <small>${item['created_at']}</small>
                                </div>
                                <div class="col-lg-2 col-md-2 text-right">
                                    <small>${Number(item['file_size']).toFixed(2)} MB</small>
                                    <a download href="<?php echo SITE_URL;?>admin/press-release/uploads/${item['file_name']}.${item['file_type']}" type="button" class="btn btn-dark"><i class="fa fa-download" aria-hidden="true"></i></a>
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