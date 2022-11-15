<?php

$host = $_SERVER['HTTP_HOST'];
$con = "";

if($host == 'raichandgroup.thevitalscience.com'){
    $con = mysqli_connect('localhost', 'thevital_test_user', '!B}kekXa@&v%', 'thevital_raichandgroup_22082022') or die('not connected');   
}
else{

    $con = mysqli_connect('localhost', 'root', '', 'raichand_website') or die('not connected kk'); 
} 
 
function getSiteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'] . '/raichand_final/';
    return $protocol . $domainName;
}
define('SITEURL', getSiteURL());

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}
