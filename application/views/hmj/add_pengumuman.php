<div class="container">


    <form action="" method="POST" enctype="multipart/form-data">
        <div class="label">
            <h3>Input Event</h3>
        </div>
        <div class="form-box">

            <div class="form-input">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul">
            </div>
            <?= form_error('judul') ?>
            <div class="form-input">
                <label for="tgl">Tanggal</label>
                <input type="text" name="tgl" id="tgl">
            </div>
            <?= form_error('tgl') ?>
            <div class="form-input">
                <label for="ket">Keterangan</label>
                <input type="text" name="ket" id="ket">
            </div>
            <?= form_error('ket') ?>
            <button class="button" type="submit" name="submit">SUBMIT!</button>

        </div>

        <a href="<?= base_url('hmj/pengumuman'); ?>">Kembali</a>

    </form>


</div>