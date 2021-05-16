<?php

$id = $_GET["id"];
$nilai_mhs = query("SELECT * FROM nilai_mhs WHERE id=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
</head>

<body>

    <table>
        <tr>
            <th>No.</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
        </tr>
        <?php $i; foreach($nilai_mhs as $row) { $i++; ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row["smt1"] ?></td>
            <td><?= $row["smt2"] ?></td>
            <td><?= $row["smt3"] ?></td>
            <td><?= $row["smt4"] ?></td>
        </tr>
        <?php } ?>
    </table>

</body>

</html>