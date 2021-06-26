<div class="container">


    <form action="" method="POST" enctype="multipart/form-data">
        <div class="label">
            <h3><?= $tittle ?></h3>
        </div>
        <div class="form-box">

            <div class="form-input">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" maxlength="18">
            </div>
            <?= form_error('name') ?>
            <div class="form-input">
                <label for="jenis_lomba">Jenis Lomba</label>
                <input type="text" name="jenis_lomba" id="jenis_lomba" maxlength="18">
            </div>
            <?= form_error('jenis_lomba') ?>
            <div class="form-input">
                <label for="perwakilan">Perwakilan</label>
                <select name="perwakilan" id="perwakilan">
                    <option value="tim">Tim</option>
                    <option value="individu">Individu</option>
                </select>
            </div>
            <button class="button" type="submit" name="submit">SUBMIT!</button>

        </div>

        <a href="<?= base_url('prestasi/dosen'); ?>">Kembali</a>

    </form>


</div>