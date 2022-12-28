<?php
// INCLUDE KONEKSI KE DATABASE
include_once("../config.php");

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

// AMBIL DATA DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>K 24</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a href="add.php" class="navbar-brand btn btn-success text-white">Tambah data</a>
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] . "!" . "</h1>"; ?>
            <form class="d-flex" role="search">
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                <a href="../logout.php" class="btn btn-outline-danger" type="submit">Logout</a>
            </form>
        </div>
    </nav><br><br><br>
    <!-- <a class="btn btn-primary" href="home.php">Home</a> -->
    <!-- <a class="btn btn-success" href="add.php">Tambah Data Baru</a><br /><br /><br><br><br> -->
    <h2 class="text-center">Data User</h2>
    <table class="table table-hover" width='100%' border=0>

        <tr bgcolor='#CCCCCC'>
            <td>Username</td>
            <td>Email</td>
            <td>password</td>
            <td>No hp</td>
            <td>Tanggal Lahir</td>
            <td>jenis kelamin</td>
            <td>No KTP</td>
            <td>Update</td>
        </tr>
        <?php

        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['username'] . "</td>";
            echo "<td>" . $res['email'] . "</td>";
            echo "<td>" . $res['password'] . "</td>";
            echo "<td>" . $res['nohp'] . "</td>";
            echo "<td>" . $res['tgl'] . "</td>";
            echo "<td>" . $res['jk'] . "</td>";
            echo "<td>" . $res['ktp'] . "</td>";
            echo "<td><a class='btn btn-warning' href=\"edit.php?id=$res[id]\">Edit</a> | <a class='btn btn-danger' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Kamu yakin untuk delete ini?')\">Delete</a></td>";
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>