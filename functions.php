<?php

//Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "poliklinik");

// Registrasi Pasien
function registrasi($data) {
    global $conn;

    // Ambil data dari table pasien
    $result = mysqli_query($conn, "SELECT * FROM pasien");

    $nama = strtolower(stripslashes($data["name"]));
    $alamat = mysqli_real_escape_string($conn, $data["alamat"]);

    //Cek Admin sudah ada atau belum
    mysqli_query($conn, "SELECT name FROM pasien WHERE name='$name'");

    if (mysqli_fetch_assoc($result)) {
        echo    "<script>
                    alert('Akun sudah terdaftar!');
                    document.location.href = 'register.php';
                </script>";
        return false;
    }
}

//Menampilkan values table
function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>