<?php

$host = $_SERVER['HTTP_HOST'];
$con = "";
 

if($host == 'raichandgroup.com'){
    $con = mysqli_connect('localhost', 'raichand_website_user', 'modern@2022', 'raichand_website') or die('not connected');   
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

function getDocRootPath(){

    if($_SERVER['HTTP_HOST']=="raichandgroup.com"){

        $docroot= $_SERVER['DOCUMENT_ROOT'].'/';
        
    }
    else{

        $docroot= $_SERVER['DOCUMENT_ROOT'].'/raichand_final/';
    }
    
    return       $docroot;
}
define('SITEURL', getSiteURL());
define('DOCROOT',getDocRootPath());
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}
define("EMAIL_HOST","smtp.gmail.com");
define("EMAIL_USERNAME",""); 
define("EMAIL_PASSWORD","");
define("EMAIL_FROMMAIL","raichandfinal@gmail.com");
define("EMAIL_FROMNAME","RAICHAND GROUP");
