<div class="container">


    <form action="" method="POST" enctype="multipart/form-data">
        <div class="label">
            <h3>Input Mahasiswa</h3>
        </div>
        <div class="form form-box">

            <div class="data_mhs">
                <div class="form-input">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" maxlength="8">
                    <div class="alert"><?= form_error('nim'); ?></div>
                </div>
                <div class="form-input">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name">
                    <div class="alert"><?= form_error('name'); ?></div>

                </div>
                <div class="form-input">
                    <label for="city">Kota</label>
                    <input type="text" name="city" id="city">
                    <div class="alert"><?= form_error('city'); ?></div>

                </div>
                <div class="form-input">
                    <label for="file">Select File</label>
                    <input type="file" name="file" id="file">
                </div>
                <button class="button" type="submit" name="submit">SUBMIT!</button>
            </div>
            <div class="nilai_mhs">
                <div class="form-input">
                    <label for="smt1">Semester 1</label>
                    <input type="number" name="smt1" id="smt1">
                    <div class="alert"><?= form_error('smt1'); ?></div>

                </div>
                <div class="form-input">
                    <label for="smt2">Semester 2</label>
                    <input type="number" name="smt2" id="smt2">
                    <div class="alert"><?= form_error('smt2'); ?></div>

                </div>
                <div class="form-input">
                    <label for="smt3">Semester 3</label>
                    <input type="number" name="smt3" id="smt3">
                    <div class="alert"><?= form_error('smt3'); ?></div>

                </div>
                <div class="form-input">
                    <label for="smt4">Semester 4</label>
                    <input type="number" name="smt4" id="smt4">
                    <div class="alert"><?= form_error('smt4'); ?></div>

                </div>
            </div>

        </div>

        <a href="<?= base_url('kependidikaninternal/datapribadi'); ?>">Kembali</a>

    </form>


</div>