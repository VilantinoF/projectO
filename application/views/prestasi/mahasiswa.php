<div class="container">

    <a class=button href="<?= base_url('auth/logout'); ?>">Log Out</a>

    <h3 class="label"><?= $tittle ?></h3>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Perwakilan</th>
            <th>Jenis Lomba</th>
            <th>File</th>
        </tr>
        <?php $i = 1;
        foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $mhs["nama"] ?></td>
                <td><?= $mhs["kls"] ?></td>
                <td><?= $mhs["perwakilan"] ?></td>
                <td><?= $mhs["jenis_lomba"] ?></td>
                <?php if (!$mhs['file']) : ?>
                    <td>Open</td>
                <?php else : ?>
                    <td><a href="files/<?= $mhs['file'] ?>">Open</a></td>
                <?php endif; ?>
            </tr>
        <?php $i++;
        endforeach ?>
    </table>

    <div class="button-index">
        <a class="button button-index button-mhs" href="<?= base_url('prestasi/addprestasimahasiswa'); ?>">Tambah</a>
    </div>

</div>