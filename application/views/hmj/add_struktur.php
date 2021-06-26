<div class="container">


    <form action="" method="POST" enctype="multipart/form-data">
        <div class="label">
            <h3>Input Struktur Organisasi</h3>
        </div>
        <div class="form-box">

            <div class="form-input">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" maxlength="18">
            </div>
            <?= form_error('name') ?>
            <div class="form-input">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" maxlength="18">
            </div>
            <div class="form-input">
                <label for="kelas">Kelas</label>
                <select name="kelas" id="kelas">
                    <option value="1">ABT-2A</option>
                    <option value="2">ABT-2B</option>
                    <option value="3">ABT-2C</option>
                </select>
            </div>
            <?= form_error('jabatan') ?>
            <button class="button" type="submit" name="submit">SUBMIT!</button>

        </div>

        <a href="<?= base_url('hmj/struktur'); ?>">Kembali</a>

    </form>


</div>