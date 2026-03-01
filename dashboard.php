<?php
session_start();
include "config.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$result = $conn->query("SELECT COUNT(*) AS total FROM users");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<body>
<h2>Dashboard</h2>
<p>Welcome, <?php echo $_SESSION['user']; ?></p>
<p>Active Users: <?php echo $row['total']; ?></p>
<a href="logout.php">Logout</a>
</body>
</html>