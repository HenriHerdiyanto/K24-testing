<?php
session_start();
$id = $_SESSION['id'];
include "config.php";
$user = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($user);
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>K 24</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body><br><br><br>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>No Handphone</th>
                    <th>Tgl Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>No KTP</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php echo "<td>" . $row['username'] . "</td>"; ?>
                    <?php echo "<td>" . $row['email'] . "</td>"; ?>
                    <?php echo "<td>" . $row['password'] . "</td>"; ?>
                    <?php echo "<td>" . $row['nohp'] . "</td>"; ?>
                    <?php echo "<td>" . $row['tgl'] . "</td>"; ?>
                    <?php echo "<td>" . $row['jk'] . "</td>"; ?>
                    <?php echo "<td>" . $row['ktp'] . "</td>"; ?>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>