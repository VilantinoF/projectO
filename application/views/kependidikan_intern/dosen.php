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
        <tr>
            <td>1.</td>
            <td><?= $dosen["nip"] ?></td>
            <td><?= $dosen["name"] ?></td>
            <td><?= $dosen["degree"] ?></td>
            <td><?= $dosen["address"] ?></td>
            <td><?= $dosen["city"] ?></td>
            <?php if (!$dosen['file']) { ?>
                <td>Open</td>
            <?php } else { ?>
                <td><a href="files/<?= $dosen['file'] ?>">Open</a></td>
            <?php } ?>
        </tr>
    </table>

    <a href="<?= base_url('kependidikaninternal/datapribadi') ?>">Kembali</a>

</div>