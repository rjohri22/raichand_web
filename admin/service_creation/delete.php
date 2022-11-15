<?php

include "../../dbcon.php";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'] . '/';

if (isset($_GET['delete_id'])) {

    $id = $_GET['delete_id'];
    $q = "UPDATE `service` SET `is_del`= 1 WHERE id = $id";
    $query = mysqli_query($con, $q);
}
header("Location: " . $protocol . $domainName . "admin/service_creation/");
exit();
