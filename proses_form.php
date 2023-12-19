<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    // Validasi input (pastikan data tidak kosong)
    if (empty($nama) || empty($email) || empty($no_hp)) {
        echo "Semua bidang harus diisi.";
    } else {
        // Koneksi ke database (ganti dengan informasi koneksi database Anda)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "ujicoba";

        $conn = new mysqli($servername, $username, $password, $database);

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Memasukkan data ke dalam tabel di database
        $sql = "INSERT INTO form_pesanan (nama, email, no_hp) VALUES ('$nama', '$email', '$no_hp')";

         // Prepare statement dengan placeholder (?)
    $stmt = $conn->prepare("INSERT INTO form_pesanan (nama, email, no_hp) VALUES (?, ?, ?)");

    // Bind parameter ke placeholder
    $stmt->bind_param("sss", $nama, $email, $no_hp);

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil dimasukkan ke database";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Menutup koneksi
        $conn->close();
    }
}
?>
