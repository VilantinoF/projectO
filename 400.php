<?php
session_start();

if (!isset($_SESSION["choosen"])) {
    header("Location: signin.php");
    exit;
}

if (isset($_POST["next"])) {
    $value = $_POST["pegawai"];
    switch ($_POST["pegawai"]) {
        case '410':
            # code...
            header("Location: $value.php");
            break;
        case '420':
            header("Location: $value.php");
            break;
        case '430':
            header("Location: $value.php");
            break;
        default:
            # code...
            echo "ERROR 404 Page Not Found";
            break;
    }

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
                <option value="410">Data Pribadi (410)</option>
                <option value="420">Pembagian Jadwal Belajar (420)</option>
                <option value="430">Anggaran Fasilitas Pendidikan (430)</option>
            </select>

            <button class="button button-search" type="submit" name="next">Next</button>
        </form>
    </div>


</body>

</html>