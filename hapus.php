<?php
include('config.php');

if (isset($_GET['nis'])) {
    $nis = $_GET["nis"];
    $sql = "delete from siswa where nis = $nis";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($query) {
        header("Location:index.php?status=sukses");
    } else {
        header("Location:index.php?status=gagal");
    }
} else {
    die("Akses dilarang");
}
?>