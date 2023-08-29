<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $kelas = $_POST['kelas'];

    $sql = "insert into siswa(id_siswa, nis, nama, alamat, jenis_kelamin, no_telp, kelas) value('', '$nis', '$nama', '$alamat', '$jenis_kelamin', '$no_telp', '$kelas')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location:index.php?status=akses");
    } else {
        header("Location:index.php?status=gagal");
    }
} else {
    die("Akses dilarang");
}
