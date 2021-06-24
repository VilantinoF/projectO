<div class="container">

    <a class=button href="logout.php">Log Out</a>


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
            foreach ($data['dsn'] as $row) {
                $i_dsn++; ?>
                <tr>
                    <td><?= $i_dsn; ?></td>
                    <td><a href="data_dsn.php?id=<?= $row["id"]; ?>"><?= $row["nip"]; ?></a></td>
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
            foreach ($data['mhs'] as $row) {
                $i_mhs++; ?>
                <tr>
                    <td><?= $i_mhs; ?></td>
                    <td><a href="data_mhs.php?id=<?= $row["id"] ?>"><?= $row["nim"]; ?></a></td>
                    <td><?= $row["name"]; ?></td>
                    <td><a href="nilai_mhs.php?id=<?= $row["id"]; ?>">Nilai</a></td>
                </tr>
            <?php } ?>
        </table>

    </div>
    <div class="button-index">
        <a class="button button-index button-dsn" href="<?= BASEURL ?>/Dosen/add_dosen">Tambah Dosen</a>
        <a class="button button-index button-mhs" href="<?= BASEURL ?>/Mahasiswa/add_mahasiswa">Tambah Mahasiswa</a>
    </div>

</div>