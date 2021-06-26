<div class="container">

    <h3 class="label">Struktur Organisasi</h3>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jabatan</th>
            <th>File</th>
        </tr>
        <?php $i = 1;
        foreach ($struktur as $j) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $j["nama"] ?></td>
                <td><?= $j["kelas"] ?></td>
                <td><?= $j["jabatan"] ?></td>
                <?php if (!$j['file']) : ?>
                    <td>Open</td>
                <?php else : ?>
                    <td><a href="files/<?= $j['file'] ?>">Open</a></td>
                <?php endif; ?>
            </tr>
        <?php $i++;
        endforeach ?>
    </table>

    <div class="button-index">
        <a class="button button-index button-mhs" href="<?= base_url('hmj/addstruktur'); ?>">Tambah</a>
    </div>

</div>