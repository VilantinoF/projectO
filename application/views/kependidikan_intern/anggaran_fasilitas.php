<div class="container">

    <a class=button href="<?= base_url('auth/logout'); ?>">Log Out</a>

    <div class="label">Anggaran Fasilitas Pendidikan</div>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Benda</th>
            <th>Gedung</th>
            <th>File</th>
        </tr>
        <?php $i = 0;
        foreach ($anggaran as $row) {
            $i++;  ?>
            <tr>
                <td><?= $i . '.' ?></td>
                <td><?= $row['benda'] ?></td>
                <td><?= $row['gedung'] ?></td>
                <?php if (!$row['file']) { ?>
                    <td>Open</td>
                <?php } else { ?>
                    <td><a href="files/<?= $row['file'] ?>">Open</a></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <div class="button-index">
        <a class="button button-index button-mhs" href="<?= base_url('kependidikaninternal/addAnggaranFasilitas'); ?>">Tambah</a>
    </div>

</div>