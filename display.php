<?php


$servername = 'localhost';
$username = "root";
$password = "";
$database = "robot";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
  die("error connection");
}

$sql = 'select * from robot_info';
$result = $conn->query($sql);

if($result->num_rows >0){
    while ($row = $result->fetch_assoc()){
        echo "Date:" . $row["date"] ."  time:" 
        . $row["time"]."  temperature:". $row["temperature"]."<br>";
    }
}
else{
  echo  " 0 result";
}

$conn->close();



echo "<br>";
?>

<html>

<div>
<form action="home.html">

  <input type="submit" name="back" value="back">
</div>


</html>