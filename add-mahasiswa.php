<?php
session_start();

if ( !isset($_SESSION["choosen"]) ) {
    header("Location: signin.php");
    exit;
}

require 'functions.php';

$data_mhs = query("SELECT * FROM data_mhs");

if (isset($_POST["submit"])) {
    if (add_mhs($_POST) > 0 && add_nilai_mhs($_POST) > 0) {
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
    <title>Add Mahasiswa</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="" method="POST">
        <div class="label">
            <h3>Input Mahasiswa</h3>
        </div>
        <div class="form form-box">

            <div class="data_mhs">
                <div class="form-input">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" maxlength="8" required>
                </div>
                <div class="form-input">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-input">
                    <label for="city">Kota</label>
                    <input type="text" name="city" id="city" required>
                </div>
                <button class="button" type="submit" name="submit">SUBMIT!</button>
            </div>
            <div class="nilai_mhs">
                <div class="form-input">
                    <label for="smt1">Semester 1</label>
                    <input type="number" name="smt1" id="smt1" required>
                </div>
                <div class="form-input">
                    <label for="smt2">Semester 2</label>
                    <input type="number" name="smt2" id="smt2" required>
                </div>
                <div class="form-input">
                    <label for="smt3">Semester 3</label>
                    <input type="number" name="smt3" id="smt3" required>
                </div>
                <div class="form-input">
                    <label for="smt4">Semester 4</label>
                    <input type="number" name="smt4" id="smt4" required>
                </div>
            </div>
        </div>
    </form>


</body>

</html>