<?php

include "../../dbcon.php" ;

// print_r($_POST);exit;
// if(isset($_POST['anajan'])){
    // $sql = "SELECT * FROM `categories`";
    // $sql = "SELECT * FROM `categories`";
    // $result = mysqli_query($con, $sql);
    

    // print_r($result);exit;
// }
$error="";
if(isset($_POST['submit'])){
    // echo "fgdgdfgdfg";exit;
    $service_title=$_POST['service_title'];
    
    $slug = trim(strtolower(str_replace(" ","-",$service_title)),'-');
    // $service_url=$_POST['service_url'];
    $service_url="";

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
    // echo $category_list;exit;
    
    // print_r($hob);exit;
    $date = date('Y-m-d H:i:s');
    // $target_dir = "/uploadimg"; //Directory Name

    $upload_image=$_FILES["image"]["name"];
    $temp_name = $_FILES["image"]["tmp_name"];


    $upload_image_detail=$_FILES["image_detail"]["name"];
    $temp_name_detail = $_FILES["image_detail"]["tmp_name"];

    move_uploaded_file($temp_name,  DOCROOT.'uploadimg/'.$_FILES["image"]["name"]);
    move_uploaded_file($temp_name_detail, DOCROOT.'uploadimg/'.$_FILES["image_detail"]["name"]);

    
    // $filename=$_FILES['image']['name'];
//    print_r($_FILES["image"]);exit;
    // print_r($filename);exit;
//     $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
//     $extensions_arr = array("jpg","jpeg","png","gif");
//     if( in_array($imageFileType,$extensions_arr) ){     
// echo $_FILES["image"]["tmp_name"];exit;
 
//         // Upload files and store in database
//         if(move_uploaded_file($_FILES["image"]["tmp_name"],'uploadimg/'.$filename)){
//            echo "er"; exit;
//         }}

    $q="INSERT INTO `service` (`service_title`, `service_url`, `category`,`modify`,`short_description`,`long_description`,`images`,`image_detail`,`tag`,`cat_f`,`slug`,`is_del`) 
    VALUES ('$service_title','$service_url','$category','$date','$short_des','$tinymceeditor','$upload_image','$upload_image_detail','$tag','$category_list','$slug',0)";
    
    $query=mysqli_query($con,$q);

     $error= mysqli_error($con);
        

}


if(!empty( $error)){

    echo $error;

    exit();
    
}

echo "<script type='text/javascript'>
window.location.href = 'index.php?insert=done';
</script>";
// header("Location: ".SITEURL."admin/service_creation/");
// exit();



?>