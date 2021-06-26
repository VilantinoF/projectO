<div class="container">

    <form action="" method="POST">
        <h1>SIGN IN</h1>
        <div class="form-box">
            <?= $this->session->flashdata('message'); ?>
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
            <button class="button" type="submit" name="signin">Sign In</button>
        </div>
        <br><br>
        <p>Create Account? <a href="<?= base_url('auth/signup') ?>">Sign Up</a></p>
    </form>

</div>