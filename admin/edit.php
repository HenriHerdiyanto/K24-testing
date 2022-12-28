<?php
// including the database connection file
include_once("../config.php");

if (isset($_POST['update'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $nohp = mysqli_real_escape_string($conn, $_POST['nohp']);
    $tgl = mysqli_real_escape_string($conn, $_POST['tgl']);
    $jk = mysqli_real_escape_string($conn, $_POST['jk']);
    $ktp = mysqli_real_escape_string($conn, $_POST['ktp']);

    // checking empty fields
    if (empty($username) || empty($email) || empty($password) || empty($nohp) || empty($tgl) || empty($jk) || empty($ktp)) {

        if (empty($username)) {
            echo "<font color='red'>username field is empty.</font><br/>";
        }

        if (empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }

        if (empty($password)) {
            echo "<font color='red'>password field is empty.</font><br/>";
        }

        if (empty($nohp)) {
            echo "<font color='red'>nohp field is empty.</font><br/>";
        }

        if (empty($tgl)) {
            echo "<font color='red'>tgl field is empty.</font><br/>";
        }

        if (empty($jk)) {
            echo "<font color='red'>jk field is empty.</font><br/>";
        }

        if (empty($ktp)) {
            echo "<font color='red'>ktp field is empty.</font><br/>";
        }
    } else {
        //updating the table
        $result = mysqli_query($conn, "UPDATE users SET username='$username',email='$email',password='$password',nohp='$nohp',tgl='$tgl',jk='$jk',ktp='$ktp' WHERE id=$id");

        //redirectig to the display page. In our case, it is index.php
        header("Location: home.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $username = $res['username'];
    $email = $res['email'];
    $password = $res['password'];
    $nohp = $res['nohp'];
    $tgl = $res['tgl'];
    $jk = $res['jk'];
    $ktp = $res['ktp'];
}
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
    <a href="home.php">Home</a>
    <h2 class="text-center">Halaman Edit User</h2>
    <br /><br />
    <div class="container">
        <form name="form1" method="post" action="edit.php">
            <table class="table table-hover" border="1">
                <tr>
                    <td>Username</td>
                    <td><input class="form-control" type="text" name="username" value="<?php echo $username; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="text" name="email" value="<?php echo $email; ?>"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input class="form-control" type="text" name="password" value="<?php echo $password; ?>"></td>
                </tr>
                <tr>
                    <td>No Handphone</td>
                    <td><input class="form-control" type="text" name="nohp" value="<?php echo $nohp; ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input class="form-control" type="text" name="tgl" value="<?php echo $tgl; ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input class="form-control" type="text" name="jk" value="<?php echo $jk; ?>"></td>
                </tr>
                <tr>
                    <td>ktp</td>
                    <td><input class="form-control" type="text" name="ktp" value="<?php echo $ktp; ?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>