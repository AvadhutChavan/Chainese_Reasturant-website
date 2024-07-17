<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$username = "root";
$password = "";
$database = "student_details";

$connect = mysqli_connect($host, $username, $password, $database);
$sql = "SELECT * FROM student_list";
$result = mysqli_query($connect, $sql);

$json_array = array();

while ($data = mysqli_fetch_assoc($result)) {
    $json_array[] = $data;
}

// echo json_encode($json_array);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Get JSON from Database</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>
<body>
  <h1>Welcome to our page</h1>
 
  <div class="popup">
    <!-- country name -->
    <label for="roll_number">Roll Number</label>
    <select name="roll_number" id="roll_number">
      <option value="21">21</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
    <hr>
    <!-- capital -->
    <label for="">Student Information: <span id="student_information"></span></label>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#roll_number').on('change', function() {
      var rollNumber = $(this).val();
      $.ajax({
        url: 'http://localhost/my%20code/show_user_name/server.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          var studentInformation = "";
          $.each(data, function(index, value) {
            if (value.roll_number == rollNumber) {
              studentInformation = value.student_information;
              return false; // Exit the loop once a matching roll number is found
            }
          });
          $('#student_information').text(studentInformation);
        }
      });
    });
  });
  </script>

</body>
</html>




<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$username = "root";
$password = "";
$database = "dish_rates";

$connect = mysqli_connect($host, $username, $password, $database);
$sql = "SELECT * FROM dish_price";
$result = mysqli_query($connect, $sql);

$json_array = array();

while ($data = mysqli_fetch_assoc($result)) {
    $json_array[] = $data;
}

// echo json_encode($json_array);
?>