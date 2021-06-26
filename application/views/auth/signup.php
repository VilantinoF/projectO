<div class="container">

    <form action="" method="POST">
        <h1>SIGN UP</h1>
        <div class="form-box">
            <div class="form-input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <?= form_error('username'); ?>
            <div class="form-input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <?= form_error('password'); ?>
            <div class="form-input">
                <label for="password2">Password Confirmation</label>
                <input type="password" name="password2" id="password2">
            </div>
            <?= form_error('password2'); ?>
            <button class="button" type="submit" name="signup">Sign Up</button>
        </div>
        <br><br>
        <p>Sign In <a href="<?= base_url('auth/index') ?>">Here</a></p>
    </form>

</div>