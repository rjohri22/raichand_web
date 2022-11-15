<?php
//include '../header.php';
include("../dbcon.php");

$sql_policies = "SELECT invester_relation.*, periods.id as pid,periods.periods
FROM invester_relation LEFT JOIN periods ON invester_relation.year=periods.id 
WHERE slug='" . $_GET['slug'] . "'";


$result_policies = mysqli_query($con, $sql_policies);
$result = mysqli_fetch_assoc($result_policies);
$adminUrl =  SITEURL . 'admin/invester/upload/';

$name = $adminUrl . $result['slug'] . '.' . $result['file_type'];


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
