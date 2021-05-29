<?php
require 'functions.php';

if (isset($_POST["signup"])) {
    if (signup($_POST) > 0) {
        echo "  <script>
                    alert('User Berhasih Ditambahkan');
                    window.location.replace('signin.php');
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <form action="" method="POST">
            <div class="form-box">
                <div class="form-input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="form-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form-input">
                    <label for="password2">Password Confirmation</label>
                    <input type="password" name="password2" id="password2">
                </div>
                <button class="button" type="submit" name="signup">Sign Up!</button>
            </div>
        </form>

    </div>


</body>

</html>