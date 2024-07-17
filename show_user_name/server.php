<?php
$host="localhost";
$username="root";
$password="";
$database="student_details";

$connect=mysqli_connect($host,$username,$password,$database);
$sql= "SELECT * FROM student_list";
$result=mysqli_query($connect, $sql);

$json_array=array();

while($data= mysqli_fetch_assoc($result)){
    $json_array[]=$data;
}

echo json_encode($json_array);

?>