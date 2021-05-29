<?php
session_start();

if (!isset($_SESSION["choosen"])) {
    header("Location: signin.php");
    exit;
}

if (isset($_POST["next"])) {
    $value = $_POST["pegawai"];

    header("Location: index.php");
    exit();
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    
</head>

<body>

    <div class="container">
    <h1>Sub Masalah</h1>
        <form action="" method="POST">
            <label for="pegawai">Choose one</label>

            <select name="pegawai" id="pegawai">
                <option value="910">Data Pribadi (910)</option>
                <option value="920">Fasilitas Pendidikan (920)</option>
                <option value="930">Pembagian Jadwal Belajar (930)</option>
                <option value="940">Data Himpunan (940)</option>
                <option value="950">Anggaran Fasilitas (950)</option>
                <option value="960">Daftar Mata Kuliah (960)</option>
                <option value="970">Data Cuti Mahasiswa (970)</option>
                <option value="980">Jurusan (980)</option>
                <option value="990">Magang (990)</option>
            </select>

            <button class="button button-search" type="submit" name="next">Next</button>
        </form>
    </div>


</body>

</html>