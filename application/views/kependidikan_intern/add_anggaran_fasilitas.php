<div class="container">


    <form action="" method="POST" enctype="multipart/form-data">
        <div class="label">
            <h3>Input Jadwal Belajar</h3>
        </div>
        <div class="form-box">

            <div class="form-input">
                <label for="benda">Benda</label>
                <input type="text" name="benda" id="benda" maxlength="18">
                <?= form_error('benda') ?>
            </div>
            <div class="form-input">
                <label for="gedung">Gedung</label>
                <input type="text" name="gedung" id="gedung" maxlength="18">
                <?= form_error('gedung') ?>
            </div>
            <div class="form-input">
                <label for="file">Select File</label>
                <input type="file" name="file" id="file">
            </div>
            <button class="button" type="submit" name="submit">SUBMIT!</button>

        </div>

    </form>

    <a class="link link-kembali" href="<?= base_url('kependidikaninternal/anggaranFasilitas'); ?>">Kembali</a>


</div>