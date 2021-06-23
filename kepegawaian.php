<?php
session_start();

if ( !isset($_SESSION["choosen"]) ) {
    header("Location: signin.php");
    exit;
}

if (isset($_POST["next"])) {
    $value = $_POST["pegawai"];
    header("Location: $value.php");
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
    <h1>Masalah Utama</h1>
        <form action="" method="POST">
            <label for="pegawai">Choose one</label>

            <select name="pegawai" id="pegawai">
                <option value="000">Pelatihan dan Pendidikan Kepegawaian (000)</option>
                <option value="100">Kenaikan Pangkat Pegawai (100)</option>
                <option value="200">Himpunan Mahasiswa Jurusan (200)</option>
                <option value="300">Prestasi Mahasiswa & Dosen (300)</option>
                <option value="400">Kependidikan Internal (400)</option>
            </select>

            <button class="button button-search" type="submit" name="next">Next</button>
        </form>
    </div>


</body>

</html>