<?php
session_start();

if (!isset($_SESSION["choosen"])) {
    header("Location: signin.php");
    exit;
}

require 'functions.php';

if (isset($_POST["submit"])) {
    // var_dump($_FILES);die;
    if (add_jadwal($_POST) > 0) {
        header("location: 420.php");
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
    <title>Add Jadwal Kelas</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="label">
            <h3>Input Jadwal Kelas</h3>
        </div>
        <div class="form-box">

            <div class="form-input">
                <label for="kls">Kelas</label>
                <input type="text" name="kls" id="kls" maxlength="18" required>
            </div>
            <div class="form-input">
                <label for="smt">Semester</label>
                <select name="smt" id="smt">
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                    <option value="5">Semester 5</option>
                </select>
            </div>
            <div class="form-input">
                <label for="file">Select File</label>
                <input type="file" name="file" id="file">
            </div>
            <button class="button" type="submit" name="submit">SUBMIT!</button>

        </div>
    </form>

</body>

</html>