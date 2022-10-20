<?php
// Include config file
require_once "config.php";

$u = $_POST["name"];
$p = $_POST["password"];
echo "SQL connected successfully! <br>";
echo "name:{$u}<br>";
echo "password: {$p} <br>";
echo "password: " . password_hash($p, PASSWORD_DEFAULT) . "<br>";
echo "Server Info: " . mysqli_get_server_info($conn);
$conn->close();
