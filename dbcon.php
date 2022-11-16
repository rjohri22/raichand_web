<?php

$host = $_SERVER['HTTP_HOST'];
$con = "";

echo $host;

exit();


if($host == 'raichandgroup.com'){
    $con = mysqli_connect('localhost', 'raichand_website_user', 'raichand@web22', 'raichand_website') or die('not connected');   
}
else{

    $con = mysqli_connect('localhost', 'root', '', 'raichand_website') or die('not connected kk'); 
} 
 
function getSiteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    if($_SERVER['HTTP_HOST']=="raichandgroup.com"){
        
    $domainName = $_SERVER['HTTP_HOST'] . '/';
    }
    else{

        $domainName = $_SERVER['HTTP_HOST'] . '/raichand_final/';
    }
    return $protocol . $domainName;
}
define('SITEURL', getSiteURL());

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}
