<div class="container">


    <form action="" method="POST" enctype="multipart/form-data">
        <div class="label">
            <h3>Input Jadwal Belajar</h3>
        </div>
        <div class="form-box">

            <div class="form-input">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" maxlength="18">
                <?= form_error('kelas') ?>
            </div>
            <div class="form-input">
                <label for="smt">Semester</label>
                <select name="smt" id="smt">
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                </select>
            </div>
            <div class="form-input">
                <label for="file">Select File</label>
                <input type="file" name="file" id="file">
            </div>
            <button class="button" type="submit" name="submit">SUBMIT!</button>

        </div>

        <a href="<?= base_url('kependidikaninternal/jadwal'); ?>">Kembali</a>

    </form>


</div>