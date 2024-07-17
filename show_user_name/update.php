<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "student_details";

$connect = mysqli_connect($host, $username, $password, $database);

// Retrieve the ID from the URL parameter
$id = $_GET['id'];

// Retrieve the updated data from the form submission
$rollNumber = $_POST['roll_number'];
$studentInformation = $_POST['student_information'];

// Update operation - Update student details based on ID
$sql = "UPDATE student_list SET roll_number = '$rollNumber', student_information = '$studentInformation' WHERE id = $id";
mysqli_query($connect, $sql);

// Close the database connection
mysqli_close($connect);

// Redirect back to the admin page
header("Location: admin.php");
exit;
?>
