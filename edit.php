<?php 
include('config.php');

if (isset($_GET['nis'])) {
    $title = "Edit";
    $url = "proses_edit.php";
    $nis = $_GET['nis'];
    $sql = "select * from siswa where nis = $nis";
    $query = mysqli_query($conn, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) < 1) {
        die("Data tidak ditemukan");
    } else {
        $title = "Add";
        $url = "proses_pendaftaran.php";
    }
}
?>