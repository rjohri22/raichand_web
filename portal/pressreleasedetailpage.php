<?php
//include '../header.php';
include("../dbcon.php");


// print_r($_GET);exit;
//  $sql_policies_cat = "SELECT * FROM policies_cat";
//  $result_policies_cat = mysqli_query($con, $sql_policies_cat);

//  $row_policies_cat = mysqli_fetch_assoc($result_policies_cat);

//  echo $sql_policies = "SELECT * FROM policies JOIN policies_cat ON policies_cat.id =  policies.categories"; 

$sql_policies = "SELECT press_release.*, periods.id as pid,periods.periods
FROM press_release LEFT JOIN periods ON press_release.year=periods.id 
WHERE slug='" . $_GET['slug'] . "'";

// $sql_policies = "SELECT polcy.*, cat.id AS catID, cat.policies_categories
// FROM press_release AS polcy
// LEFT JOIN press_category AS cat
// ON cat.id = polcy.categories
// WHERE polcy.slug = '".$_GET['slug']."'";

// $sql_policies = "SELECT press_release.*, cat.id AS catID, cat.policies_categories
//                                     FROM policies AS polcy
//                                     LEFT JOIN policies_cat AS cat
//                                     ON cat.id = polcy.categories
//                                     WHERE polcy.slug = '".$_GET['slug']."'";
// echo $sql_policies;exit;

$result_policies = mysqli_query($con, $sql_policies);
$result = mysqli_fetch_assoc($result_policies);
$adminUrl =  SITEURL . 'admin/press-release/uploads/';

$name = $adminUrl . $result['slug'] . '.' . $result['file_type'];

// echo $name;exit;

// header('Content-Description: File Transfer');
// header('Content-Type: application/force-download');
// header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
// header('Content-Transfer-Encoding: binary');
// header('Expires: 0');
// header('Cache-Control: must-revalidate');
// header('Pragma: public');
// header('Content-Length: ' . filesize($name));
// ob_clean();
// flush();
// readfile($name); //showing the path to the server where the file is to be download
// exit;

if ($result['file_type'] == 'pdf') {

    $url = $name;
    $content = file_get_contents($url);

    header('Content-Type: application/pdf');
    header('Content-Length: ' . strlen($content));
    header('Content-Disposition: inline; filename="'.basename($name).'"');
    header('Cache-Control: private, max-age=0, must-revalidate');
    header('Pragma: public');
    ini_set('zlib.output_compression', '0');
    die($content);
} else {
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: utf-8");
    header("Content-disposition: attachment; filename=\"" . basename($name) . "\"");
    readfile($name);
}
