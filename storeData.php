<?php
 
 
 function storedata(){
   $temperature = $_POST['temperature'];
 
   $servername = 'localhost';
   $username = "root";
   $password = "";
   $database = "robot";
 
   $conn = new mysqli($servername,$username,$password,$database);
 
   if($conn->connect_error){
     die("error connection");
   }
 
   
   $sql = "insert into robot_info values(now(),hour(curtime()),'$temperature')";
 
   if($conn->query($sql)){
     echo 'saved';
   }
   else{
     echo $conn->error;
   }

   $conn->close();
 }

 storedata();
 



 echo "<br>";
 ?>
 
 <html>
 
 <div>
 <form action="home.html">
 
   <input type="submit" name="back" value="back">
 </div>
 
 
 </html>
