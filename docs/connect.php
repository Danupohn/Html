<?php
$db_name = "myapp_db";
$db_user = "root";
$db_pass = "";
$db_host = "localhost";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// เช็ค error
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database connected successfully!";
?>
