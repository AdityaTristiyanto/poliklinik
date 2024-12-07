<?php
session_start();

// Functions
require '../functions.php';

//Query SELECT Table Dokter
$dokter = query("SELECT * FROM dokter");

// Include Layouts header
include '../layouts/admin/header.php';
?>
        <?php include '../layouts/admin/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <!-- Main content -->
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <div class="content-header">
                  <div class="container-fluid">
                      <div class="row mb-2">
                          <div class="col-sm-6">
                              <h1 class="m-0">Dashboard Admin</h1>
                          </div><!-- /.col -->
                          <div class="col-sm-6">
                              <ol class="breadcrumb float-sm-right">
                                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                  <li class="breadcrumb-item active">Dashboard</li>
                              </ol>
                          </div><!-- /.col -->
                      </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
              </div>
              <!-- /.content-header -->

              <!-- Main content -->
              <section class="content">
                <div class="container-fluid">

                <!-- Tabel Data Dokter -->
                  <div class="row">
                    <div class="col-md-10">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Data Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <!-- Menampilkan Data Dokter dari Database -->
                          <?php foreach ($dokter as $row) : ?>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width: 10px">Id</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Poli</th>
                                <th style="width: 40px">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><?= $row["id"]; ?></td>
                                <td><?= $row["nama"]; ?></td>
                                <td><?= $row["alamat"]; ?></td>
                                <td><?= $row["no_hp"]; ?></td>
                                <td><?= $row["id_poli"]; ?></td>
                                <td><span class="badge bg-danger">55%</span></td>
                              </tr>
                            </tbody>
                          </table>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Form Tambah Dokter -->
                <div class="row">
                    <div class="col-md-10">
                      <!-- general form elements -->
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Input Data Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                          <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nama</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Alamat</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Alamat">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">No Hp</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter No Hp">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Poli</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Poli">
                            </div>
                          </div>
                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                      <!-- /.card -->
                    </div>
                </div>

              </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <?php include '../layouts/admin/footer.php'; ?>
