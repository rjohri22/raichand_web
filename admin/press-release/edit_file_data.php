<?php include '../sidebar.php'; ?>
<?php 
include("../../dbcon.php");

if (isset($_POST['submit']))
// echo "<pre>";print_r($_POST);exit;
{

    $newid = $_POST['id'];

    $file_name = $_POST["file_name"];
        $year = $_POST["year"];
        $category = $_POST["category"];
        $tags = $_POST["tags"];
        

        // Get all the submitted data from the form
        $sql = "UPDATE press_release SET `year` = '$year', `file_name` ='$file_name', `category_id`='$category', `tags` = '$tags' WHERE  id='" . $newid . "'";
        
        // Execute query
        $res = mysqli_query($con, $sql);
        if ($res) {
            echo "<script>window.location.href='".SITE_URL."admin/press-release/';</script>";
            exit;
        }else
        {
            echo "data not posted".$sql;
        }
}
?>
