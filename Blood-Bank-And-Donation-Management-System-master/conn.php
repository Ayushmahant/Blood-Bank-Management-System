<?php
$host = "hopper.proxy.rlwy.net";
$port = 50657;
$username = "root";
$password = "UJRlQnzkfqEvNeFggHjYEHMhhfnKSeCQ";
$database = "railway";

$conn = mysqli_connect($host, $username, $password, $database, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "✅ Connected successfully to Railway MySQL!";
?>
