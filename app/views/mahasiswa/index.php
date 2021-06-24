<div class="container">

    <h3 class="label">Tabel Mahasiswa</h3>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Domisili</th>
            <th>File</th>
        </tr>
        <?php $i = 0;
        foreach ($data_mhs as $row) {
            $i++; ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["city"] ?></td>
                <?php if (!$row['file']) { ?>
                    <td>Open</td>
                <?php } else { ?>
                    <td><a href="files/<?= $row['file'] ?>">Open</a></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <a href="<?= BASEURL ?>">Kembali</a>

</div>