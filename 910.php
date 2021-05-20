<?php
require 'functions.php';


$data_mhs = query("SELECT * FROM data_mhs");
$data_dsn = query("SELECT * FROM data_dsn");


if (isset($_POST["search"])) {
    $data_dsn = search($_POST["keyword"]);
    $data_mhs = search($_POST["keyword"]);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">


    <div class="search">
        <form action="" method="POST">
            <input type="text" name="keyword" id="keyword" placeholder="Search...">
            <button type="submit" name="search">Search</button>
        </form>
    </div>


        <div class="label">
            <h3>Tabel Dosen</h3>
            <h3>Tabel Mahasiswa</h3>
        </div>
        <div class="table">
            <table class="table-dsn">
                <tr>
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama</th>
                </tr>
                <?php $i_dsn;
                foreach ($data_dsn as $row) {
                    $i_dsn++; ?>
                    <tr>
                        <td><?= $i_dsn; ?></td>
                        <td><a href="data_dsn.php?id=<?= $row["id"]; ?>"><?= $row["nip"]; ?></a></td>
                        <td><?= $row["name"]; ?></td>
                    </tr>
                <?php } ?>
            </table>
            <table class="table-mhs">
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                </tr>
                <?php $i_mhs;
                foreach ($data_mhs as $row) {
                    $i_mhs++; ?>
                    <tr>
                        <td><?= $i_mhs; ?></td>
                        <td><?= $row["nim"]; ?></td>
                        <td><?= $row["name"]; ?></td>
                        <td><a href="nilai_mhs.php?id=<?= $row["id"]; ?>">Nilai</a></td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <div class="button-index">
            <a class="button button-index button-dsn" href="add-dosen.php">Tambah Dosen</a>
            <a class="button button-index button-mhs" href="add-mahasiswa.php">Tambah Mahasiswa</a>
        </div>

    </div>

</body>

</html>