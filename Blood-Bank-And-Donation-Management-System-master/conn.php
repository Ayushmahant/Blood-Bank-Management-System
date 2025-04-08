<?php
$host = "containers-us-west-123.railway.app";  // from your URL
$port = "50657";                                // from your URL
$username = "root";                            // from your URL
$password = "UJRlQnzkfqEvNeFggHjYEHMhhfnKSeCQ"; // from your URL
$database = "railway";                         // from your URL

$conn = mysqli_connect($host, $username, $password, $database, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
