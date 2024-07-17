<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "student_details";

$connect = mysqli_connect($host, $username, $password, $database);

// Retrieve the ID from the URL parameter
$id = $_GET['id'];

// Delete operation - Delete student record based on ID
$sql = "DELETE FROM student_list WHERE id = $id";
mysqli_query($connect, $sql);

// Close the database connection
mysqli_close($connect);

// Redirect back to the admin page
header("Location: admin.php");
exit;
?>


