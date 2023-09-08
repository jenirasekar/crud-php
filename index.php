<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h3>Daftar Siswa</h3>
    </header>
    <nav><a href="v_form.php"><button>Tambah baru</button></a></nav>
    <br>
    <table class="table table-striped">
        <thead>
            <tr class="table table-success">
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No. Telepon</th>
                <th>Kelas</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from siswa";
            $query = mysqli_query($conn, $sql);
            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $siswa['nis'] . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                echo "<td>" . $siswa['no_telp'] . "</td>";
                echo "<td>" . $siswa['kelas'] . "</td>";
                echo "<td>";
                echo "<a href='w_form.php?nis=" . $siswa['nis'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?nis=" . $siswa['nis'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total:
        <?php echo mysqli_num_rows($query) ?>
    </p>
</body>

</html>