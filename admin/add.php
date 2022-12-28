<?php
include "../config.php"


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>K 24</title>
</head>

<body>
    <div class="container">
        <form action="add_proses.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Tambah User</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" " required>
            </div>
            <div class=" input-group">
                <input type="email" placeholder="Email" name="email" " required>
            </div>
            <div class=" input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="No. Handphone" name="nohp" required>
            </div>
            <div class="input-group">
                <input type="date" placeholder="Tgl. Lahir" name="tgl" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="pria / wanita" name="jk" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="No. KTP" name="ktp" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login </a></p>
        </form>
    </div>
</body>

</html>