<div class="container">
    <h1>Masalah Utama</h1>
    <form action="" method="POST">
        <label for="mproblem">Choose one</label>
        <select name="mproblem" id="mproblem">
            <option value="000">Pelatihan dan Pendidikan Kepegawaian (000)</option>
            <option value="100">Kenaikan Pangkat Pegawai (100)</option>
            <option value="200">Himpunan Mahasiswa Jurusan (200)</option>
            <option value="300">Prestasi Mahasiswa & Dosen (300)</option>
            <option value="400">Kependidikan Internal (400)</option>
        </select>
        <?= form_error('mproblem'); ?>

        <button class="button button-search" type="submit" name="submit">Next</button>
    </form>
</div>