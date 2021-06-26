<div class="container">

    <h3 class="label"><?= $tittle ?></h3>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tim/Individu</th>
            <th>Jenis Lomba</th>
            <th>File</th>
        </tr>
        <?php $i = 1;
        foreach ($dosen as $d) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $d["nama"] ?></td>
                <td><?= $d["perwakilan"] ?></td>
                <td><?= $d["jenis_lomba"] ?></td>
                <?php if (!$d['file']) : ?>
                    <td>Open</td>
                <?php else : ?>
                    <td><a href="files/<?= $d['file'] ?>">Open</a></td>
                <?php endif; ?>
            </tr>
        <?php $i++;
        endforeach ?>
    </table>

    <div class="button-index">
        <a class="button button-index button-mhs" href="<?= base_url('prestasi/addprestasidosen'); ?>">Tambah</a>
    </div>

</div>