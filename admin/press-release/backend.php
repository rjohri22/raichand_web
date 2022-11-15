<?php
    include("../../dbcon.php");
    $year = $_POST['find'];
    $src = "";
    $src = "SELECT * FROM press_release WHERE `category` = '$year' ";
    
    $q = $con->query($src);
    // print_r(json_encode(mysqli_fetch_array($q)));
    $arr = array();
    $i = 0;
    while($row = mysqli_fetch_assoc($q))
    {
        $arr[$i] = $row;
        $i++;
    }
    print_r(json_encode($arr));
?>