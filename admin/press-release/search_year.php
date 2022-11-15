<?php
include('config.php');

// echo "<pre>";print_r($_POST);exit;
$year = $_POST['year'];
$category = $_POST['category'];
$tags = $_POST['tags'];

// $month = $_POST['month'];
$src = "";
// $filterQuery ="";

// if (isset($year) && $year != "") {
//     $src .= " AND `year` = '$year'";
// } 

// if (isset($category) && $category != "") {
//     $filterQuery .= " AND `category_id` = '$category'";
// } 

// if (isset($tags) && $tags != "") {
//     $filterQuery .= " AND `tags` LIKE '%$tags%'";
// } 

if (isset($year)){
$src ="SELECT * FROM press_release WHERE year = $year AND `category_id` = $category AND `tags` LIKE '%$tags%'";
}
// if(isset($category)){
//     // echo "hhdfhgfgfgdfhgffh";exit;
//     $src .= "SELECT * FROM press_release WHERE  `category_id` = $category";    
// }
// if(isset($tags)){
//     // echo "hhdfhgfgfgdfhgffh";exit;
//     $src = "SELECT * FROM press_release WHERE `tags` = LIKE '$tags'";
// }
$q = $con->query($src);


// print_r(json_encode(mysqli_fetch_array($q)));
$arr = array();
$i = 0;
while ($row = mysqli_fetch_assoc($q)) {
    $arr[$i] = $row;
    $i++;
}

print_r(json_encode($arr));
exit;
