<div class="container">


    <form action="" method="POST" enctype="multipart/form-data">
        <div class="label">
            <h3>Input Dosen</h3>
        </div>
        <div class="form-box">

            <div class="form-input">
                <label for="nip">NIP</label>
                <input type="text" name="nip" id="nip" maxlength="18" required>
            </div>
            <div class="form-input">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-input" required>
                <label for="cars">Pendidikan</label>
                <select name="degree" id="cars">
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
            <div class="form-input">
                <label for="address">Alamat</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="form-input">
                <label for="city">Kota</label>
                <input type="text" name="city" id="city" required>
            </div>
            <div class="form-input">
                <label for="file">Select File</label>
                <input type="file" name="file" id="file">
            </div>
            <button class="button" type="submit" name="submit">SUBMIT!</button>

        </div>

        <a href="<?= BASEURL ?>">Kembali</a>

    </form>
    
    
</div>