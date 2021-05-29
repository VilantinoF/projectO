<?php
session_start();

if ( !isset($_SESSION["choosen"]) ) {
    header("Location: signin.php");
    exit;
}

require 'functions.php';

if (isset($_POST["submit"])) {
    if (add_dsn($_POST) > 0) {
        header("location: index.php");
    } else {
        echo "data gagal ditambahkan";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dosen</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="" method="POST">
        <div class="label">
            <h3>Input Dosen</h3>
        </div>
        <div class="form-box">

            <div class="form-input">
                <label for="nip">NIP</label>
                <input type="text" name="nip" id="nip" maxlength="18" required>
            </div>
            <div class="form-input">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-input" required>
                <label for="cars">Pendidikan</label>
                <select name="degree" id="cars">
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
            <div class="form-input">
                <label for="address">Alamat</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="form-input">
                <label for="city">Kota</label>
                <input type="text" name="city" id="city" required>
            </div>
            <button class="button" type="submit" name="submit">SUBMIT!</button>

        </div>
    </form>

</body>

</html>