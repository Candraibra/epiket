<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" sizes="350x300" href="<?= base_url("assets/img/logo2.png")?>"> <meta http-equiv="X-UA-Compatible"
    content="IE=edge,chrome=1" />
  <title>
    Konsel
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
          <span class="text-success">ekonsel</span>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/siswa'); ?>">
              <i class="material-icons">wc</i>
              <p>Siswa</p>
            </a>
          </li>
          <li class="nav-item  active ">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/bimbingan'); ?>">
              <i class="material-icons">record_voice_over</i>
              <p>Bimbingan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/kunjungan'); ?>">
              <i class="material-icons">library_books</i>
              <p>Kunjungan</p>
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
            <a class="navbar-brand">BIMBINGAN</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
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
                      <li><a class="toggle" onclick="siswa('show')">Tambah Bimbingan</a></li>
                    </ul>
                  </div>
                  <h4 class="card-title">Menampilkan Semua Bimbingan</h4>
                  <p class="card-category">Kamis, 22 November 2018</p>
                </div>
                <div class="card-body">
                  <div class="card-body table-responsive">
                    <table class="table table-hover" id="tablesiswa">
                      <thead class="text-warning">
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Email</th>
                        <th>Keluhan</th>
                      </thead>
                      <?php foreach ($isi->result() as $key) : ?>
                      <!--variabel isi dihasilkan kemudian ditampung di $key foreach digunakan apabila ada data di dalam database maka akan di tampilkan / akan ngloop ampai data ditampilkan semua-->
                      <tbody>
                        <td>
                          <?php echo $key->id ?>
                        </td>
                        <td>
                          <?php echo $key->fullname ?>
                        </td>
                        <td>
                          <?php echo $key->kelas ?>
                        </td>
                        <td>
                          <?php echo $key->email ?>
                        </td>
                        <td>
                          <?php echo $key->keluhan ?>
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
                      <label for="exampleInput1" class="bmd-label-floating">Cari Bimbingan</label>
                      <input type="text" name="cari_siswa" id="cari_siswa" class="form-control" />
                      <span class="material-input"></span>
                    </div>
                  </div> 
                  <form class="form-basic" method="post" action="http://localhost/Ekonsel/index.php/Cilin/addbimbingan">
                  <div id="card_forms"  style="display: none;">
									<input type="hidden" id="siswa_id" value="">
									<div class="form-group label-floating">
										<label class="control-label-danger">Nama</label>
										<input class="form-control" name="fullname" id="fullname" type="text"required value="">
										<span class="material-input"></span>
									</div>
									<div class="form-group label-floating">
										<label class="control-label-danger">Kelas</label>
                    <select class="form-control" name="kelas">
                      <option value="X TJA 1">X TJA 1</option>
                      <option value="X TJA 2">X TJA 2</option>
                      <option value="X TJA 3">X TJA 3</option>
                      <option value="X TJA 4">X TJA 4</option>
                      <option value="X TKJ 1">X TKJ 1</option>
                      <option value="X TKJ 2">X TKJ 2</option>
                      <option value="X TKJ 3">X TKJ 3</option>
                      <option value="X TKJ 4">X TKJ 4</option>
                      <option value="X RPL 1">X RPL 1</option>
                      <option value="X RPL 2">X RPL 2</option>
                      <option value="X RPL 3">X RPL 3</option>
                      <option value="X RPL 4">X RPL 4</option>
                      <option value="XI TJA 1">XI TJA 1</option>
                      <option value="XI TJA 2">XI TJA 2</option>
                      <option value="XI TJA 3">XI TJA 3</option>
                      <option value="XI TJA 4">XI TJA 4</option>
                      <option value="XI TKJ 1">XI TKJ 1</option>
                      <option value="XI TKJ 2">XI TKJ 2</option>
                      <option value="XI TKJ 3">XI TKJ 3</option>
                      <option value="XI TKJ 4">XI TKJ 4</option>
                      <option value="XI RPL 1">XI RPL 1</option>
                      <option value="XI RPL 2">XI RPL 2</option>
                      <option value="XI RPL 3">XI RPL 3</option>
                      <option value="XI RPL 4">XI RPL 4</option>
                      <option value="XII TJA 1">XII TJA 1</option>
                      <option value="XII TJA 2">XII TJA 2</option>
                      <option value="XII TJA 3">XII TJA 3</option>
                      <option value="XII TJA 4">XII TJA 4</option>
                      <option value="XII TKJ 1">XII TKJ 1</option>
                      <option value="XII TKJ 2">XII TKJ 2</option>
                      <option value="XII TKJ 3">XII TKJ 3</option>
                      <option value="XII TKJ 4">XII TKJ 4</option>
                      <option value="XII RPL 1">XII RPL 1</option>
                      <option value="XII RPL 2">XII RPL 2</option>
                      <option value="XII RPL 3">XII RPL 3</option>
                      <option value="XII RPL 4">XII RPL 4</option>
                    </select>
										<span class="material-input"></span>
									</div>
                  <div class="form-group label-floating">
										<label class="control-label-danger">email</label>
                    <input type="text" class="form-control hasDatepicker" name="email"placeholder="dd/mm/yyyy" required value="">
										<span class="material-input"></span>
									</div>
									<div class="form-group label-floating">
										<label class="control-label-danger">Keluhan</label>
										<input class="form-control"name="keluhan" id="keluhan" type="text"required value="">
										<span class="material-input"></span>
                  </div>
                  <div class="form-group label-floating">
										<label class="control-label-danger">Ket</label>
									  <select class="form-control" name="ket">
                      <option value="I">Izin</option>
                      <option value="A">Alpha</option>
                      <option value="S">Sakit</option>
                    </select>
										<span class="material-input"></span>
                  </div>
									<div class="right">                          
										<div class="btn btn-default btn-simple" id="btn_batal"value='reset' onclick="siswa('batal')">gakjadi</div>
									  <button class="btn btn-danger" id="btn_post" type="submit" value="Submit">Tambah</button>
									</div>     
								</div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script>$('#tablesiswa').DataTable({
            "autoWidth": false,
            "order": []
        });
    </script>
    <script>
      $('.toggle').click(function () {
        $('#target').toggle('slow');
      });</script>
    <script src="<?= base_url("assets/js/material-tripath.js")?>" type="text/javascript"></script>
    <script src="<?= base_url("assets/js/core/jquery.min.js")?>" type="text/javascript"></script>
    <!--   Core JS Files   -->
    <script src="<?= base_url("assets/js/core/popper.min.js")?>" type="text/javascript"></script>
    <script src="<?= base_url("assets/js/core/bootstrap-material-design.min.js")?>" type="text/javascript"></script>
    <script src="<?= base_url("assets/js/plugins/perfect-scrollbar.jquery.min.js")?>"> </script> <!-- Google Maps
      Plugin -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="<?= base_url("assets/js/plugins/chartist.min.js")?>"> </script> <!-- Notifications Plugin -->
    <script src="<?= base_url("assets/js/plugins/bootstrap-notify.js")?>"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url("assets/js/material-dashboard.min.js?v=2.1.0")?>" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?= base_url("assets/demo/demo.js")?>"> </script> 
  </body>
</html>