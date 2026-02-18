<?php
$servername = "db";  // ชื่อ Service ใน docker-compose
$username = "user";
$password = "password";
$dbname = "mydatabase";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// เช็ค
if ($conn->connect_error) {
  die("เชื่อมต่อล้มเหลว: " . $conn->connect_error);
}
echo "เย้! เชื่อมต่อ MariaDB สำเร็จแล้ว";
?>
