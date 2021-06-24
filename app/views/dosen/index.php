<div class="container">

    <h3 class="label">Tabel Dosen</h3>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pendidikan</th>
            <th>Alamat</th>
            <th>Domisili</th>
            <th>File</th>
        </tr>
        <?php $i = 0;
        foreach ($data['dsn'] as $row) {
            $i++; ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["nip"] ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["degree"] ?></td>
                <td><?= $row["address"] ?></td>
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