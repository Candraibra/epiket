
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
          <li class="nav-item   ">
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
          <li class="nav-item active">
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
            <a class="navbar-brand">Admin</a>
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
                      <li><a onclick="admin('show')">Tambah Admin</a></li>
                      <li><a href="<?php echo base_url('index.php/Dashboard/export_excel'); ?>">Export ke excel</a></li>
                    </ul>
                  </div>
                  <h4 class="card-title">Menampilkan Semua Admin</h4>
                  <p class="card-category">Kamis, 22 November 2018</p>
                </div>
                <div class="card-body">
                <div id="hasil"></div>
                  <div style="clear:both"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-content">
                  <div id="card_cari">
                    <div class="form-group label-floating">
                      <label for="exampleInput1" class="bmd-label-floating">Cari Admin</label>
                      <input type="text" name="cari_siswa" id="cari_siswa" class="form-control" />
                      <span class="material-input"></span>
                    </div>
                  </div>
                  <div id="card_forms"  style="display: none;">
									<div class="form-group label-floating">
										<label class="control-label-danger">Nama</label>
										<input class="form-control" name="nama" type="text" >
										<span class="material-input"></span>
									</div>
									<div class="form-group label-floating">
										<label class="control-label-danger">No ID</label>
										<input class="form-control" name="no_induk" type="text" >
										<span class="material-input"></span>
									</div>
									<div class="form-group label-floating">
										<label class="control-label-danger">Level</label>
										<input class="form-control"name="level" type="text">
										<span class="material-input"></span>
                  </div>
                  <div class="form-group label-floating">
										<label class="control-label-danger">Password</label>
										<input class="form-control"name="password" type="text">
										<span class="material-input"></span>
                  </div>
                  <div class="form-group label-floating">
										<label class="control-label-danger">Ulangi Password</label>
										<input class="form-control" type="text" >
										<span class="material-input"></span>
                  </div>
									<div class="right">
										<input type="hidden" id="method" value="">
										<button class="btn btn-default btn-simple" id="btn_batal" onclick="admin('batal')">gakjadi</button>
										<button class="btn btn-danger" id="btn_post" onclick="admin('post')">tambah</button>
									</div>
								</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
        $(document).ready(function(){
        
        	load_data();
        
        	function load_data(query)
        	{
        		$.ajax({
        			url:"<?php echo base_url('ajaxsearch/fetch2'); ?>",
        			method:"POST",
        			data:{query:query},
        			success:function(data){
        				$('#hasil').html(data);
        			}
        		})
        	}
        
        	$('#cari_siswa').keyup(function(){
        		var search = $(this).val();
        		if(search != '')
        		{
        			load_data(search);
        		}
        		else
        		{
        			load_data();
        		}
        	});
        });
    </script>
    <script>
      $('.toggle').click(function () {
        $('#target').toggle('slow');
      });
      </script>
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