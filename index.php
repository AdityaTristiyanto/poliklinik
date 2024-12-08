<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <!-- Optional: Add Bootstrap for grid system -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Optional: Add your own styles -->
    <style>
        .card {
            margin-bottom: 20px;
        }

        /* Kartu poliklinik lebih besar */
        .card-poliklinik {
            height: 100%;
        }

        .card-login {
            height: 100%;
        }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <span class="brand-text font-weight-light">Poliklinik</span>
                </a>
            </div>
        </nav>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Informasi Poliklinik -->
                <div class="row justify-content-center main-content">
                    <div class="col-lg-12 text-center">
                        <h1 class="display-4 mb-4">Selamat Datang di Poliklinik Kami</h1>
                        <p class="lead mb-5">Kami menyediakan berbagai layanan kesehatan dengan dokter-dokter yang berpengalaman. Pilih poliklinik yang sesuai dengan kebutuhan Anda.</p>

                        <!-- Grid untuk Kartu Poliklinik -->
                        <div class="row mb-5">
                            <!-- Kartu Poliklinik Umum -->
                            <div class="col-md-6">
                                <div class="card card-poliklinik">
                                    <div class="card-body">
                                        <h5 class="card-title">Poliklinik Umum</h5>
                                        <p class="card-text">Layanan kesehatan umum untuk pemeriksaan kesehatan dan pengobatan.</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Kartu Poliklinik Gigi -->
                            <div class="col-md-6">
                                <div class="card card-poliklinik">
                                    <div class="card-body">
                                        <h5 class="card-title">Poliklinik Gigi</h5>
                                        <p class="card-text">Layanan untuk pemeriksaan dan perawatan kesehatan gigi dan mulut.</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Grid untuk Kartu Login (Pasien dan Dokter) -->
                        <div class="row justify-content-center">
                            <!-- Kartu Login Pasien -->
                            <div class="col-md-6 col-lg-3">
                                <div class="card card-login">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Login Pasien</h5>
                                        <p class="card-text">Masuk untuk membuat janji atau mengakses data kesehatan Anda.</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="auth/login_pasien.php" class="btn btn-primary">Login Pasien</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Kartu Login Dokter -->
                            <div class="col-md-6 col-lg-3">
                                <div class="card card-login">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Login Dokter</h5>
                                        <p class="card-text">Masuk untuk mengelola jadwal, pasien, dan data lainnya.</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="auth/login_dokter.php" class="btn btn-primary">Login Dokter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer class="main-footer text-center">
            <strong>Poliklinik &copy; 2024</strong>
        </footer>
    </div>

    <!-- AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    <!-- Optional: Add Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>