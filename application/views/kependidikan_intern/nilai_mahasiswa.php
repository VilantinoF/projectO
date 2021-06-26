<div class="container">
    <h3 class="label">Tabel Nilai</h3>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
        </tr>
        <tr>
            <td>1. </td>
            <td><?= $nilaiMhs["nim"] ?></td>
            <td><?= $nilaiMhs["name"] ?></td>
            <td><?= $nilaiMhs["smt1"] ?></td>
            <td><?= $nilaiMhs["smt2"] ?></td>
            <td><?= $nilaiMhs["smt3"] ?></td>
            <td><?= $nilaiMhs["smt4"] ?></td>
        </tr>
    </table>

    <a href="<?= base_url('kependidikaninternal/datapribadi') ?>">Kembali</a>


</div>