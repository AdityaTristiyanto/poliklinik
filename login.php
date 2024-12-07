<?php
require 'functions.php';

if (isset($_POST['submit'])) {
  $username = stripslashes($_POST['nama']);
  $password = $_POST['alamat'];
  if ($username == 'admin') {
    if ($password == 'admin') {
        $_SESSION['login'] = true;
        $_SESSION['id'] = null;
        $_SESSION['username'] = 'admin';
        $_SESSION['akses'] = 'admin';
        header('Location: admin/index.php');
        exit;
    }
} else {
    $cek_username = $pdo->prepare("SELECT * FROM dokter WHERE nama = :username");
    $cek_username->bindParam(':username', $username);
    try {
        $cek_username->execute();
        if ($cek_username->rowCount() == 1) {
            $baris = $cek_username->fetch(PDO::FETCH_ASSOC);
            if ($password == $baris['alamat']) {
                $_SESSION['login'] = true;
                $_SESSION['id'] = $baris['id'];
                $_SESSION['username'] = $baris['nama'];
                $_SESSION['akses'] = 'dokter';
                header('Location: dokter/index.php'); 
                exit;
            }
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
        die();
    }
}
$_SESSION['error'] = 'Username dan Password Tidak Cocok';
header('Location: login.php'); // Kembali ke halaman login dengan pesan error
exit;

}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login-Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<style>
    * {
        color: black;
        font-family: monospace;
        font-size: large;
    }

    body {
        background-image: url('assets/img/login-registrasi-bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

    .card {
        width: 50%;
    }

    h5,
    p {
        font-family: cursive;
    }
</style>

<body>

    <div class="card">
        <div class="card-header">
            <h3>Login Customer</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Username</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Password</label>
                    <input type="password" class="form-control" id="alamat" name="alamat" placeholder="Enter Password">
                </div>
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic">Username/Password salah</p>
                <?php endif; ?>
                <p>Belum mempunyai akun? Silahkan <a href="register_customers.php">registrasi</a> terlebih dahulu.</p>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>