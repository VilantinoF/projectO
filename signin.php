<?php
session_start();

require 'functions.php';

if (isset($_POST["signin"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["choosen"] = true;
            header("Location: kepegawaian.php");
            exit;
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

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
                <button class="button" type="submit" name="signin">Sign In</button>
            </div>
            <a href="signup.php">SIGN UP</a>
        </form>

    </div>


</body>

</html>