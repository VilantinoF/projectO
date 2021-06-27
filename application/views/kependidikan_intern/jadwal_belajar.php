<div class="container">

    <a class=button href="<?= base_url('auth/logout'); ?>">Log Out</a>

    <div class="label">Pembagian Jadwal Belajar</div>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Kelas</th>
            <th>Semester</th>
            <th>File</th>
        </tr>
        <?php $i = 0;
        foreach ($jadwal as $row) {
            $i++;  ?>
            <tr>
                <td><?= $i . '.' ?></td>
                <td><?= $row['kls'] ?></td>
                <td><?= $row['smt'] ?></td>
                <?php if (!$row['file']) { ?>
                    <td>Open</td>
                <?php } else { ?>
                    <td><a href="files/<?= $row['file'] ?>">Open</a></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <div class="button-index">
        <a class="button button-index button-mhs" href="<?= base_url('kependidikaninternal/addjadwal'); ?>">Tambah</a>
    </div>

</div>