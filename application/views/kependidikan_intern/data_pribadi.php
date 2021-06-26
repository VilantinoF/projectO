<div class="container">

    <a class=button href="<?= base_url('auth/logout'); ?>">Log Out</a>

    <div class="search">
        <form action="" method="POST">
            <input type="text" name="keyword" id="keyword" placeholder="Search...">
            <button class="button button-search" type="submit" name="search">Search</button>
        </form>
    </div>


    <div class="label">
        <h3>Tabel Dosen</h3>
        <h3>Tabel Mahasiswa</h3>
    </div>
    <div class="table">
        <table class="table-dsn">
            <tr>
                <th>No.</th>
                <th>NIP</th>
                <th>Nama</th>
            </tr>
            <?php $i_dsn = 0;
            foreach ($dosen as $row) {
                $i_dsn++; ?>
                <tr>
                    <td><?= $i_dsn; ?></td>
                    <td><a href="<?= base_url('kependidikaninternal/dosen/' . $row['id']) ?>"><?= $row["nip"]; ?></a></td>
                    <td><?= $row["name"]; ?></td>
                </tr>
            <?php } ?>
        </table>
        <table class="table-mhs">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Nilai</th>
            </tr>
            <?php $i_mhs = 0;
            foreach ($mahasiswa as $row) {
                $i_mhs++; ?>
                <tr>
                    <td><?= $i_mhs; ?></td>
                    <td><a href="<?= base_url('kependidikaninternal/mahasiswa/' . $row['id']) ?>"><?= $row["nim"]; ?></a></td>
                    <td><?= $row["name"]; ?></td>
                    <td><a href="<?= base_url('kependidikaninternal/nilaimahasiswa/' . $row['id']) ?>">Nilai</a></td>
                </tr>
            <?php } ?>
        </table>

    </div>
    <div class="button-index">
        <a class="button button-index button-dsn" href="<?= base_url('kependidikaninternal/adddosen'); ?>">Tambah Dosen</a>
        <a class="button button-index button-mhs" href="<?= base_url('kependidikaninternal/addmhs'); ?>">Tambah Mahasiswa</a>
    </div>

</div>