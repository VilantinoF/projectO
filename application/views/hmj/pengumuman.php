<div class="container">

    <h3 class="label">Pengumuman</h3>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>File</th>
        </tr>
        <?php $i = 1;
        foreach ($event as $e) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $e["judul"] ?></td>
                <td><?= $e["tgl"] ?></td>
                <td><?= $e["ket"] ?></td>
                <?php if (!$e['file']) : ?>
                    <td>Open</td>
                <?php else : ?>
                    <td><a href="files/<?= $e['file'] ?>">Open</a></td>
                <?php endif; ?>
            </tr>
        <?php $i++;
        endforeach ?>
    </table>

    <div class="button-index">
        <a class="button button-index button-mhs" href="<?= base_url('hmj/addpengumuman'); ?>">Tambah</a>
    </div>

</div>