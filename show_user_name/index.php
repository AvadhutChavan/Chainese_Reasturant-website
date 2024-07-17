<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .login-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: 50px auto;
      max-width: 400px;
      padding: 20px;
    }
    
    h2 {
      text-align: center;
    }
    
    form {
      margin-top: 20px;
    }
    
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type="submit"] {
      background-color: #4CAF50;
      border: none;
      color: #fff;
      padding: 12px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    @media screen and (max-width: 480px) {
      .login-container {
        margin: 20px;
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="index.php" method="POST">
      <input type="text" name="email" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <input type="submit" value="Login">
    </form>
  </div>
  
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
        $_SESSION["first_name"] = $first_name;

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


</body>
</html>
