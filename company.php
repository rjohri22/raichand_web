<?php
$req = $_GET['req'];
$cname = array();
    $cname["Managemnet"] = ["abc","def","xyz"];
    $cname["Bussiness"] = ["alpha","beta","gama"];
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($cname[$req]);
?>