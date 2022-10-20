<?php
$servername = "mysql";
$username = "php";
$password = "php";
$u = $_POST["name"];
$p = $_POST["password"];

// Create connection
$conn = mysqli_connect($servername, $username, $password);
//
// Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
   }
   echo "SQL connected successfully! <br>";
   echo "SQL connected successfully! <br>";
   echo "name:{$u}<br>";
   echo "password: {$p} <br>";
   echo "password: ".password_hash($p, PASSWORD_DEFAULT)."<br>";
   echo "Server Info: ". mysqli_get_server_info($conn);


   $conn->close(); 
?>
