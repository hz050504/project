<?php
define('DB_SERVER', 'mysql');
define('DB_USERNAME', 'php');
define('DB_PASSWORD', 'php');
define('DB_DATABASE', 'users');

// Create connection
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
//
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
