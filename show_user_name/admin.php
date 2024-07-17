<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "student_details";

$connect = mysqli_connect($host, $username, $password, $database);

// Read operation - Fetch student list
$sql = "SELECT * FROM student_list";
$result = mysqli_query($connect, $sql);
$students = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close the database connection
mysqli_close($connect);
?>
<h2>Student List</h2>

<table>
  <tr>
    <th>Roll Number</th>
    <th>Student Information</th>
    <th>Action</th>
  </tr>
  <?php foreach ($students as $student): ?>
  <tr>
    <td><?php echo $student['roll_number']; ?></td>
    <td><?php echo $student['student_information']; ?></td>
    <td>
      <a href="edit.php?id=<?php echo $student['id']; ?>">Edit</a> |
      <a href="delete.php?id=<?php echo $student['id']; ?>">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
