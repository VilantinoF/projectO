<?php

if (isset($_POST["submit"])) {
    if (add_mhs($_POST) > 0) {
        header("location: index.html");
    } else {
        echo "Data gagal ditambahkan";
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
    
    <form action="index.php" method="POST">
        <label for="nim">
            NIM
            <input type="number" name="nim">
        </label>
        <label for="name">
            Nama
            <input type="text" name="name">
        </label>
        <label for="city">
            Kota
            <input type="text" name="city">
        </label>
        <button type="submit"  name="submit">SUBMIT!</button>
    </form>

</body>
</html>