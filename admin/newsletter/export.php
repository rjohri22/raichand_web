<?php
include("../../dbcon.php");

// print_r($_POST);exit;
$sql = "SELECT * FROM `newsletter` ORDER BY id ASC ";
$result = mysqli_query($con, $sql);
// print_r($sql);

if ($result->num_rows > 0) {
    $delimiter = ",";
    $filename = "newsletter_" . date('Y-m-d') . ".csv";

    // Create a file pointer 
    $f = fopen('php://memory', 'w');

    // Set column headers 
    $fields = array( 'Sr.No','Email Ids');
    fputcsv($f, $fields, $delimiter);
    $counter = 0;
    // Output each row of the data, format line as csv and write to file pointer 
    while ($row = $result->fetch_assoc()) {
        $counter++;
        // $status = ($row['status'] == 1) ? 'Active' : 'Inactive';
        $lineData = array($counter, $row['email']);
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