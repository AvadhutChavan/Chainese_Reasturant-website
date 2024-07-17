<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "student_details";

$connect = mysqli_connect($host, $username, $password, $database);

// Retrieve the ID from the URL parameter
$id = $_GET['id'];

// Read operation - Fetch student details based on ID
$sql = "SELECT * FROM student_list WHERE id = $id";
$result = mysqli_query($connect, $sql);
$student = mysqli_fetch_assoc($result);

// Close the database connection
mysqli_close($connect);
?>


<h2>Edit Student</h2>

<form action="update.php?id=<?php echo $id; ?>" method="post">
  <label for="roll_number">Roll Number</label>
  <input type="text" name="roll_number" id="roll_number" value="<?php echo $student['roll_number']; ?>">
  
  <label for="student_information">Student Information</label>
  <input type="text" name="student_information" id="student_information" value="<?php echo $student['student_information']; ?>">
  
  <input type="submit" value="Update">
</form>


