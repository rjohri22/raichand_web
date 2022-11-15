<?php     
include "dbcon.php";

    $id = $_POST['id'];
    $return_arr = array();
    // echo $id;exit;
    $query =  $con->query("SELECT * FROM  `service` WHERE is_del = 0");
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) { 
    $childCat = array_filter(explode(',', $row['cat_f']));
    if (in_array($id, $childCat)) {
        // $service_title[] = "";
        // $selected = "checked='checked'";

        // $data = array();
        // $data['service_title'] = $row['service_title'];
        // $data['service_id'] = $row['id'];

    $service_title = $row['service_title'];
    $service_id =  $row['id'];

    $return_arr[] = array(
    "id" => $service_id,
    "service_title" => $service_title,
   );
    } 
    // else{
        //     $service_title[]="";
        // }
        // print_r($childCat);exit;
    }
    // print_r($return_arr);exit;

echo json_encode($return_arr);
}
