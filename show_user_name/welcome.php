<?php
session_start();

if (!isset($_SESSION["email"])) {
    // header("Location: index.php");
    exit();
}

$email = $_SESSION["email"];
// $first_name = $_SESSION["first_name"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="welcome-container">
    
  <marquee>
  <h2>Welcome, <?php echo $email; ?></h2>
    </marquee>
  
  
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>
