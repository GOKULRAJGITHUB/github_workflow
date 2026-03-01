<?php
$host = "localhost";
$user = "app_user";
$pass = "StrongPassword@123";
$db   = "login_demo";
staging_changes

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}
?>