<?php

include "../../dbcon.php";
 
if (isset($_GET['delete_id'])) {

    $id = $_GET['delete_id'];
    $q = "UPDATE `service` SET `is_del`= 1 WHERE id = $id";
    $query = mysqli_query($con, $q);
}
header("Location: " .SITEURL."admin/service_creation/");
exit();
