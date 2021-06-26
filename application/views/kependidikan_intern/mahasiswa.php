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
        <tr>
            <td>1.</td>
            <td><?= $mahasiswa["nim"] ?></td>
            <td><?= $mahasiswa["name"] ?></td>
            <td><?= $mahasiswa["city"] ?></td>
            <?php if (!$mahasiswa['file']) { ?>
                <td>Open</td>
            <?php } else { ?>
                <td><a href="files/<?= $mahasiswa['file'] ?>">Open</a></td>
            <?php } ?>
        </tr>
    </table>

    <a href="<?= base_url('kependidikaninternal/datapribadi') ?>">Kembali</a>

</div>