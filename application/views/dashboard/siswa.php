<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" sizes="350x300" href="<?= base_url("assets/img/logo2.png")?>"> <meta http-equiv="X-UA-Compatible"
    content="IE=edge,chrome=1" />
  <title>
    KONSUL
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
          <span class="text-success">ekonsul</span>
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
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/siswa'); ?>">
              <i class="material-icons">wc</i>
              <p>Siswa</p>
            </a>
          </li>
          <li class="nav-item ">
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
            <a class="navbar-brand">Siswa</a>
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
                      <li><a class="toggle" onclick="siswa('show')">Tambah Siswa</a></li>
                    </ul>
                  </div>
                  <h4 class="card-title">Menampilkan Semua Siswa</h4>
                  <p class="card-category">Kamis, 22 November 2018</p>
                </div>
                <div class="card-body">
                  <div class="card-body table-responsive">
                  <div id="hasil"></div>
                  <div style="clear:both"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-content">
                  <div id="card_cari">
                    <div class="form-group label-floating">
                      <label class="control-label-danger">Cari Siswa</label>
                      <input type="text" name="cari_siswa" id="cari_siswa" class="form-control" />
                      <span class="material-input"></span>
                    </div>
                  </div> 
                  <form class="form-basic" method="post" action="http://localhost/Epiket/index.php/Cilin/addsiswa">
                  <div id="card_forms"  style="display: none;">
									<input type="hidden" id="siswa_id" value="">
									<div class="form-group label-floating">
										<label class="control-label-danger">Nama</label>
										<input class="form-control" name="nama" id="siswa_noinduk" type="text"required value="">
										<span class="material-input"></span>
									</div>
									<div class="form-group label-floating">
										<label class="control-label-danger">Kelas</label>
										<input class="form-control" name="kelas" id="siswa_nama" type="text" required value="">
										<span class="material-input"></span>
									</div>
									<div class="form-group label-floating">
										<label class="control-label-danger">Dari Jam</label>
										<input class="form-control"name="darijam" id="siswa_kelas" type="text"required value="">
										<span class="material-input"></span>
                  </div>
                  <div class="form-group label-floating">
										<label class="control-label-danger">Ket</label>
										<input class="form-control"name="ket" id="siswa_kelas" type="text" required value="">
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
    <script>
        $(document).ready(function(){
        
        	load_data();
        
        	function load_data(query)
        	{
        		$.ajax({
        			url:"<?php echo base_url('ajaxsearch/fetch'); ?>",
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