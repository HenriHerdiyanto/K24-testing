<?php
include "config.php";


session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
// Buat perintah SQL untuk mengambil data
$sql = "SELECT * FROM users";

// Jalankan perintah SQL
$result = mysqli_query($conn, $sql);

// Buat array kosong untuk menyimpan data
$data = array();

// Tarik data dari hasil query ke dalam array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Ubah array ke format JSON
$json = json_encode($data);

// Tampilkan data JSON


?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>K 24</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a href="home.php" class="navbar-brand btn btn-primary text-white">HOME</a>
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] . "!" . "</h1>"; ?>
            <form class="d-flex" role="search">
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                <a href="../logout.php" class="btn btn-outline-danger" type="submit">Logout</a>
            </form>
        </div>
    </nav><br><br><br>
    <h1 class="text-center">Berikut adalah data dari table user berupa JSON</h1><br><br><br>
    <?php echo $json; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>