<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ujicoba"; // Nama database yang Anda buat di phpMyAdmin

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "";

// Query SQL dan operasi database lainnya bisa dilakukan di sini...

// Menutup koneksi
$conn->close();
?>
