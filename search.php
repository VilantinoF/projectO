<?php
require 'functions.php';

$keyword = $_GET["search"];

$table_data = search($keyword);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Search result for '<?= $keyword ?>'</h2>
        <div class="table">
            <table class="table-dsn">
                <tr>
                    <th>No.</th>
                    <th>NIP / NIM</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                </tr>
                <?php $i = 0;
                foreach ($table_data as $row) {
                    $i++; ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <?php if ($row["type"] === 'dsn') { ?>
                            <td><a href="data_dsn.php?id=<?= $row["id"] ?>"><?= $row["nim"] ?></a></td>
                        <?php } else { ?>
                            <td><a href="data_mhs.php?id=<?= $row["id"] ?>"><?= $row["nim"] ?></a></td>
                        <?php } ?>
                        <td><?= $row["name"]; ?></td>
                        <td><?= $row["type"]; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <a href="index.php">Kembali</a>
    </div>
</body>

</html>