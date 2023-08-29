<?php
$conn = mysqli_connect("localhost", "root", "", "db_siswa");

if (!$conn) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
} else {
    echo "Berhasil";
}
?>