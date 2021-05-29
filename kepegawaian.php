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
                <option value="000">Perencanaan Kebutuhan Pegawai (000)</option>
                <option value="100">Rekruitmen Pegawai (100)</option>
                <option value="200">Pelatihan dan Pendidikan Kepegawaian (200)</option>
                <option value="300">Kenaikan Pangkat Pegawai (300)</option>
                <option value="400">Mutasi dan Rotasi Pegawai (400)</option>
                <option value="500">Kinerja Pegawai (500)</option>
                <option value="600">Kesejahteraan dan Cuti Pegawai (600)</option>
                <option value="700">Pensiun Pegawai (700)</option>
                <option value="800">Dosir Pegawai (800)</option>
                <option value="900">Kependidikan Internal (900)</option>
            </select>

            <button class="button button-search" type="submit" name="next">Next</button>
        </form>
    </div>


</body>

</html>