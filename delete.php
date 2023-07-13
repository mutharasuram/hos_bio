<?php
include('db.php');

$id = $_POST['id'];
$query = "DELETE FROM `patient_bio` WHERE `id`='$id'";
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