<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" sizes="350x300" href="<?= base_url("assets/img/logo2.png")?>"> <meta http-equiv="X-UA-Compatible"
    content="IE=edge,chrome=1" />
  <title>
    Piket
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url("assets/css/material-dashboard.css?v=2.1.0")?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url("assets/demo/demo.css")?>" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          <span class="text-success">epiket</span>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item   ">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/siswa'); ?>">
              <i class="material-icons">wc</i>
              <p>Siswa</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/guru'); ?>">
              <i class="material-icons">supervisor_account</i>
              <p>Guru</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/pengumuman'); ?>">
              <i class="material-icons">record_voice_over</i>
              <p>Pengumuman</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/admin'); ?>">
              <i class="material-icons">person</i>
              <p>Admin</p>
            </a>
          </li>
          <li class="separator"></li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/logout'); ?>">
              <i class="material-icons">power_settings_new</i>
              <p>Keluar</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Guru</a>
          </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-danger">
                  <div class="dropdown float-right">
                    <button class="btn btn-danger btn-just-icon float-right" data-toggle="dropdown"><i class="material-icons">more_vert</i></button>
                    <ul class="dropdown-menu">
                      <li><a onclick="Guru('tambah')">Tambah Guru</a></li>
                    </ul>
                  </div>
                  <h4 class="card-title">Menampilkan Semua Guru</h4>
                  <p class="card-category">Sabtu, 24 November 2018</p>
                </div>
                <div class="card-body">
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                      <thead class="text-warning">
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Dari jam ke</th>
                        <th>Ket</th>
                      </thead>
                      <?php foreach ($isi->result() as $key) : ?>
                      <!--variabel isi dihasilkan kemudian ditampung di $key foreach digunakan apabila ada data di dalam database maka akan di tampilkan / akan ngloop ampai data ditampilkan semua-->
                      <tbody>
                        <td>
                          <?php echo $key->id ?>
                        </td>
                        <td>
                          <?php echo $key->nama ?>
                        </td>
                        <td>
                          <?php echo $key->darijam ?>
                        </td>
                        <td>
                          <?php echo $key->keterangan ?>
                        </td>
                      </tbody>
                      <?php endforeach ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-content">
                  <div id="card_cari">
                    <div class="form-group label-floating">
                      <label class="control-label-danger">Cari Guru</label>
                      <input class="form-control" id="siswa_cari" type="text" value="">
                      <span class="material-input"></span>
                    </div>
                    <div class="right">
                      <button class="btn btn-danger" onclick="" id="btn_cari">Cari</button>
                    </div>
                  </div>
                  <div id="target" style="display: none;">
                    <input type="hidden" id="siswa_id" value="">
                    <div class="form-group label-floating">
                      <label class="control-label"></label>
                      <input class="form-control" id="siswa_noinduk" type="text" value="">
                      <span class="material-input"></span>
                    </div>
                    <div class="form-group label-floating">
                      <label class="control-label"></label>
                      <input class="form-control" id="siswa_nama" type="text" value="">
                      <span class="material-input"></span>
                    </div>
                    <div class="form-group label-floating">
                      <label class="control-label"></label>
                      <input class="form-control" id="siswa_kelas" type="text" value="">
                      <span class="material-input"></span>
                    </div>
                    <div class="right">
                      <div class="float-left hidden" id="siswa_opt">
                        <div class="dropdown">
                          <button id="btn_option" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
                            <b class="caret"></b>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="pointer" onclick="siswa('batal')">Cencel</a></li>
                            <li><a class="pointer" onclick="siswa('hapus')"><span class="text-danger">Delete</span></a></li>
                          </ul>
                        </div>
                      </div>
                      <input type="hidden" id="method" value="">
                      <button class="btn btn-default btn-simple" id="btn_batal" onclick="siswa('batal')">Cencel</button>
                      <button class="btn btn-primary" id="btn_post" onclick="siswa('post')">Tambah</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url("assets/js/core/jquery.min.js")?>" type="text/javascript"></script>
    <script src="<?= base_url("assets/js/core/popper.min.js")?>" type="text/javascript"></script>
    <script src="<?= base_url("assets/js/core/bootstrap-material-design.min.js")?>" type="text/javascript"></script>
    <script src="<?= base_url("assets/js/plugins/perfect-scrollbar.jquery.min.js")?>"> </script> <!-- Google Maps
      Plugin -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="<?= base_url("assets/js/plugins/chartist.min.js")?>"> </script> <!-- Notifications Plugin -->
    <script src="<?= base_url("assets/js/plugins/bootstrap-notify.js")?>"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url(" assets/js/material-dashboard.min.js?v=2.1.0")?>" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?= base_url("assets/demo/demo.js")?>"> </script> </body> </html>