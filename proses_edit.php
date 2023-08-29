<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $kelas = $_POST['kelas'];
    
    $sql = "update siswa set nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', kelas='$kelas' where nis = $nis";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($query) {
        header("Location:index.php?status=sukses");
    } else {
        header("Location:index.php?status=gagal");
    }
} else {
    die("Akses dilarang");
}
