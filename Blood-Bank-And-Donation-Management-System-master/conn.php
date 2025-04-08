<?php
$host = getenv("DB_HOST") ?: "hopper.proxy.rlwy.net";
$user = getenv("DB_USER") ?: "root";
$pass = getenv("DB_PASS") ?: "UJRlQnzkfqEvNeFggHjYEHMhhfnKSeCQ";
$db   = getenv("DB_NAME") ?: "railway";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
