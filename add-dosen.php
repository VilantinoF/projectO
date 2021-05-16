<?php

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
    <title>Add Mahasiswa</title>
</head>

<body>

    <form action="" method="POST">
        <label for="nip">
            NIP
            <input type="number" name="nip">
        </label>
        <label for="name">
            Nama
            <input type="text" name="name">
        </label>
        <label for="cars">Pendidikan</label>

        <select name="degree" id="cars">
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select>
        <label for="city">
            Kota
            <input type="text" name="city">
        </label>
        <button type="submit" name="submit">SUBMIT!</button>
    </form>

</body>

</html>