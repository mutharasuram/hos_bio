<?php
include('db.php');
$date=date('Y-m-d');

$name = $_POST['name'];
$pid = $_POST['pid'];
$iso = $_POST['iso'];
$cropped = $_POST['cropped-image'];
$finger = $_POST['finger'];
$fingerprint = $_POST['fingerprint'];


$query = "INSERT INTO `patient_bio` (`patientid`, `name`, `Encodediso`,`image`,`finger`,`figerimg`,`date`) VALUES ('$pid', '$name', '$iso','$cropped','$finger','$fingerprint','$date')";

// Perform the query
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Query executed successfully
    
    header("Location:list.php");
exit();
} else {
    // Query was not successful
    echo 'Error executing query: ' . mysqli_error($conn);
}




?>