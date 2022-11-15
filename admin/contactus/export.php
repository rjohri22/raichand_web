<?php
include("../../dbcon.php");

// print_r($_POST);exit;
$sql = "SELECT * FROM contact_us ORDER BY id ASC ";
$result = mysqli_query($con, $sql);
// print_r($sql);

if ($result->num_rows > 0) {
    $delimiter = ",";
    $filename = "contacted_" . date('Y-m-d') . ".csv";

    // Create a file pointer 
    $f = fopen('php://memory', 'w');

    // Set column headers 
    $fields = array( 'Name','Email', 'Mobile', 'Company', 'Designation', 'Business Name', 'Services', 'Countries', 'Response');
    fputcsv($f, $fields, $delimiter);

    // Output each row of the data, format line as csv and write to file pointer 
    while ($row = $result->fetch_assoc()) {
        // $status = ($row['status'] == 1) ? 'Active' : 'Inactive';
        $lineData = array($row['name'], $row['email'], $row['mobile'], $row['company'], $row['deg'], $row['bname'], $row['services'],$row['country'],$row['type'],$row['message']);
        fputcsv($f, $lineData, $delimiter);
    }

    // Move back to beginning of file 
    fseek($f, 0);

    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer 
    fpassthru($f);
}
exit;

?>