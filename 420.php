<?php
session_start();

if (!isset($_SESSION["choosen"])) {
    header("Location: signin.php");
    exit;
}

require 'functions.php';


$jadwal = query("SELECT * FROM jadwal");


// if (isset($_POST["search"])) {
//     $result = $_POST["keyword"];
//     header("Location: search.php?search=$result");
// }


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

        <a class=button href="logout.php">Log Out</a>


        <div class="search">
            <form action="" method="POST">
                <input type="text" name="keyword" id="keyword" placeholder="Search...">
                <button class="button button-search" type="submit" name="search">Search</button>
            </form>
        </div>


        <h3 class="label">Tabel Kelas</h3>
        <table class="table">
            <tr>
                <th>No.</th>
                <th>Kelas</th>
                <th>Semester</th>
            </tr>
            <?php $i = 0;
            foreach ($jadwal as $row) {
                $i++; ?>
                <tr>
                    <td><?= $i ?></td>
                    <?php if (!$row['file']) { ?>
                        <td><?= $row["kls"] ?></td>
                    <?php } else { ?>
                        <td><a href="files/<?= $row['file'] ?>"><?= $row["kls"] ?></a></td>
                    <?php } ?>
                    <td>Semester <?= $row["smt"] ?></td>
                </tr>
            <?php } ?>
        </table>

        <div class="button-index">
            <a class="button button-index button-dsn" href="add-jadwal.php">Tambah Data</a>
        </div>

    </div>

</body>

</html>