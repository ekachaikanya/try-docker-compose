<?php
$conn = new mysqli("db", "user", "password", "mydatabase");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<h1>Hello Docker! Connected to MariaDB successfully.</h1>";
?>
