<?php

include "../../dbcon.php" ;

// print_r($_POST);exit;
// if(isset($_POST['anajan'])){
    // $sql = "SELECT * FROM `categories`";
    // $sql = "SELECT * FROM `categories`";
    // $result = mysqli_query($con, $sql);
    
// echo "dgdfgdfgd";exit;
//    echo "<pre>"; print_r($_POST);exit;
// }
if(isset($_POST['submit'])){
    
    $id=$_POST['id'];
    //  echo $id;exit;
    $service_title=$_POST['service_title'];
    
    $slug = trim(strtolower(str_replace(" ","-",$service_title)),'-');
    $service_url="";
    // $service_url=$_POST['service_url'];

    $category="";
    // $category=$_POST['category'];

    $short_des=$_POST['short_des'];
    // $tinymceeditor=$_POST['tinymceeditor'];
    $tinymceeditor = stripslashes($_POST['tinymceeditor']);//get data from textarea tiny MCE editorcvhu0tu
    $tag=$_POST['tag'];
    $categories=$_POST['categories'];
    // print_r($categories);exit;
    $category_list="";
    foreach($categories as $cat)
    {
        $category_list .= $cat.",";
    }
    // echo $hob;exit;
    
    // print_r($hob);exit;
    $date = date('Y-m-d H:i:s');
    // $target_dir = "/uploadimg"; //Directory Name

    $upload_image=$_FILES["image"]["name"];
    $temp_name = $_FILES["image"]["tmp_name"];
    $existing_image = $_POST["existing_image"];

    $upload_image_detail=$_FILES["image_detail"]["name"];
    $temp_name_detail = $_FILES["image_detail"]["tmp_name"];
    $existing_image_detail = $_POST["existing_image_detail"];

    // $upload_image=$_FILES["existing_img"]["name"];
    // echo $temp_name = $_FILES["existing_img"]["tmp_name"];exit;

    
    if($upload_image == ""){
        $image1 = $existing_image;
    }
    else{
        move_uploaded_file($temp_name,  $_SERVER['DOCUMENT_ROOT'].'/'.'uploadimg/'.$_FILES["image"]["name"]);
        $image1 = $upload_image;
    }

    if($upload_image_detail == ""){
        $image2 = $existing_image_detail;
    }
    else{
        move_uploaded_file($temp_name_detail,  $_SERVER['DOCUMENT_ROOT'].'/'.'uploadimg/'.$_FILES["image_detail"]["name"]);
        $image2 = $upload_image_detail;
    }

 
    $q = "UPDATE `service` SET `service_title`='$service_title',`service_url`='$service_url',`category`='$category',
    `cat_f`='$category_list', `modify`='$date',`short_description`='$short_des',`long_description`='$tinymceeditor',
    `images`='$image1',`image_detail`='$image2', `tag`='$tag',`slug`='$slug' WHERE `id`='$id'";
     
    $query=mysqli_query($con,$q);      

}
echo "<script type='text/javascript'>
window.location.href = 'index.php?update=done';
</script>";
// header("Location: ".SITEURL."admin/service_creation");exit();



?>