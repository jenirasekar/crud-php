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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Siswa</title>
</head>

<body>
    <header>
        <h3>Formulir Siswa</h3>
    </header>
    <form action="proses_pendaftaran.php" method="post">
        <fieldset>
            <legend>
                <h2>Form Siswa</h2>
            </legend>
            <div>
                <label for="nis">NIS: </label>
                <br>
                <input type="text" name="nis" id="nis" value="<?php if (isset($_GET['nis'])) {
                                                                    $siswa['nis'];
                                                                } ?>">
            </div>
            <div>
                <label for="nama">Nama: </label>
                <br>
                <input type="text" name="nama" id="nama" value="<?php if (isset($_GET['nama'])) {
                                                                    $siswa['nama'];
                                                                } ?>">
            </div>
            <div>
                <label for="alamat">Alamat: </label>
                <br>
                <textarea name="alamat" value="<?php if (isset($_GET['alamat'])) {
                                                    $siswa['alamat'];
                                                } ?>"></textarea>
            </div>
            <div>
                <label for="jenis_kelamin">Jenis kelamin: </label>
                <br>
                <?php if (isset($_GET['jenis_kelamin'])) {
                    $jenis_kelamin = $siswa['jenis_kelamin'];
                ?>
                    <td>
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki">
                        <?php if ($jenis_kelamin == 'Laki-laki') {
                            echo 'checked';
                        } ?>>Laki-laki

                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
                        <?php if ($jenis_kelamin == 'Perempuan') {
                            echo 'checked';
                        } ?>>Perempuan
                    </td>
                <?php } else { ?>
                    <td><br>
                        <input type="radio" name="jenis_kelamin`" id="jenis_kelamin" value="Laki-laki">Laki-laki
                        <input type="radio" name="jenis_kelamin`" id="jenis_kelamin" value="Perempuan">Perempuan
                    </td>
                <?php } ?>
            </div>
            <div>
                <label for="no_telp">No telepon:</label>
                <br>
                <input type="tel" name="no_telp" id="no_telp" value="<?php if (isset($_GET['nis'])) {
                    echo $siswa['no_telp'];
                } ?>">
            </div>
            <div>
                <label for="kelas">Kelas:</label>
                <br>
                <input type="text" name="kelas" id="kelas" value="<?php if (isset($_GET['nis'])) {
                    echo $siswa['kelas'];
                } ?>">
            </div>
            <hr>
            <div>
                <input type="submit" name="simpan" id="simpan" value="Simpan">
            </div>
        </fieldset>
    </form>
</body>

</html>