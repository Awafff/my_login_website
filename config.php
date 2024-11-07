<?php
$servername = "localhost";
$username = "root";  // Ganti dengan username MySQL Anda
$password = "0208";      // Ganti dengan password MySQL Anda
$dbname = "login_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
  
