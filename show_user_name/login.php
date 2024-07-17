
<?php
session_start();

// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "mycode";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform a query to check if the username and password are correct
    $query = "SELECT * FROM demologin WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Username and password are correct
        $_SESSION["email"] = $email;
        header("Location: welcome.php");
        exit();
    } else {
        // Invalid username or password
        echo "<script>
        var message = 'Invalid Username And Password☹️';
        alert(message);
       
      </script>
      ";
    }
}
?>

