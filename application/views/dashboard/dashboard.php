<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" sizes="350x300"  href="<?= base_url("assets/img/logo.png")?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Piket
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url("assets/css/material-dashboard.css?v=2.1.0")?>"  rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url("assets/demo/demo.css")?>"  rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
        <span class="text-success">epiket</span>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard'); ?>" >
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
          <li class="nav-item ">
            <a class="nav-link"href="<?php echo base_url('index.php/Dashboard/guru'); ?>">
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
          
            <a class="navbar-brand" href="#" >Dashboard</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-12 ">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">wc</i>
                  </div>
                  <p class="card-category">Siswa Tidak Masuk</p>
                  <h3 class="card-title">4
                    <small>Siswa</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i>Kamis, 22 November 2018
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                  <i class="material-icons">supervisor_account</i>
                  </div>
                  <p class="card-category">Guru Tidak Masuk</p>
                  <h3 class="card-title">4
                  <small>Guru</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i>Kamis, 22 November 2018
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Daftar Siswa Tidak Masuk</h4>
                  <p class="card-category">Kamis, 22 November 2018</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Dari jam ke</th>
                      <th>Ket</th>
                    </thead>
                    
                    <?php foreach ($isi->result() as $kunci) : ?><!--variabel isi dihasilkan kemudian ditampung di $key foreach digunakan apabila ada data di dalam database maka akan di tampilkan / akan ngloop ampai data ditampilkan semua-->
	                    	<tbody>
	      
                              <td><?php echo $kunci->id ?></td>
      
                              <td><?php echo $kunci->nama ?></td>

                              <td><?php echo $kunci->kelas ?></td>
                  
                              <td><?php echo $kunci->darijam ?></td>
                     
	                    				<td><?php echo $kunci->ket ?></td>
	                    			
	                    			</tbody>
	                    	<?php endforeach ?>
                    
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-rose">
                  <h4 class="card-title">Daftar Guru Tidak Masuk</h4>
                  <div class='rowtanggal'>
                  <p class="card-category">Kamis, 22 November 2018</p>
                  </div>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Dari jam ke</th>
                      <th>Keterangan</th>
                    </thead>
                    <?php foreach ($isi2->result() as $kunci2) : ?><!--variabel isi dihasilkan kemudian ditampung di $key foreach digunakan apabila ada data di dalam database maka akan di tampilkan / akan ngloop ampai data ditampilkan semua-->
	                    	<tbody>
	      
                              <td><?php echo $kunci2->id ?></td>
      
                              <td><?php echo $kunci2->nama ?></td>
                  
                              <td><?php echo $kunci2->darijam ?></td>
                     
	                    				<td><?php echo $kunci2->keterangan ?></td>
	                    			
	                    			</tbody>
	                    	<?php endforeach ?>

                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    </div>
  </div>

</body>
<script>
    const m = new Date();
    const months = ["January ","Februari ","Maret ","April","Mei ","Juni ","Juli ","Agustus ","September ","Oktober ","November ","Desember"];
    document.write("bulan").innerHTML = months[m.getMonth()];
  </script>
  <script>
    const d = new Date();
    const day = ["Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jumat,","Sabtu,"];
    document.write("hari").innerHTML = day[d.getDay()];
  </script>


  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function () {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</html>