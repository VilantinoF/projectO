<?php
session_start();

if (!isset($_SESSION["choosen"])) {
    header("Location: kepegawaian.php");
    exit;
}

if (isset($_POST["next"])) {
    $value = $_POST["pegawai"];

    header("Location: $value.php");
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
        <form action="" method="POST">
            <label for="pegawai">Choose one</label>

            <select name="pegawai" id="pegawai">
                <option value="910">Data Pribadi (000)</option>
                <option value="920">Fasilitas Pendidikan (100)</option>
                <option value="930">Pembagian Jadwal Belajar (200)</option>
                <option value="940">Data Himpunan (300)</option>
                <option value="950">Anggaran Fasilitas (400)</option>
                <option value="960">Daftar Mata Kuliah (500)</option>
                <option value="970">Data Cuti Mahasiswa (600)</option>
                <option value="980">Jurusan (700)</option>
                <option value="990">Magang (800)</option>
            </select>

            <button class="button button-search" type="submit" name="next">Next</button>
        </form>
    </div>


</body>

</html>