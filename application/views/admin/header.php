<?php
date_default_timezone_set('Asia/Jakarta');
$cek    = $user->row();
$nama   = $cek->nama_lengkap;
$email  = '';

$level  = $cek->username;

$menu 		= strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo base_url();?>"/>

	<title><?php echo $judul_web; ?></title>
	<link rel="icon" type="image/png" href="assets/panel/images/logo_dark.png">

	<link rel="stylesheet" href="assets/template/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="assets/template/vendors/base/vendor.bundle.base.css">
	<link rel="stylesheet" href="assets/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="assets/template/css/style.css">


	<!-- Core JS files -->
	<script src="assets/template/vendors/base/vendor.bundle.base.js"></script>
	<script src="assets/template/vendors/chart.js/Chart.min.js"></script>
	<script src="assets/template/vendors/datatables.net/jquery.dataTables.js"></script>
	<script src="assets/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<script src="assets/template/js/off-canvas.js"></script>
	<script src="assets/template/js/hoverable-collapse.js"></script>
	<script src="assets/template/js/template.js"></script>
	<script src="assets/template/js/dashboard.js"></script>
	<script src="assets/template/js/data-table.js"></script>
	<script src="assets/template/js/jquery.dataTables.js"></script>
	<script src="assets/template/js/dataTables.bootstrap4.js"></script>
	<script src="assets/template/js/jquery.cookie.js" type="text/javascript"></script>

	<?php
	if ($sub_menu == "" or $sub_menu == "profile" or $sub_menu == "ubah_pass" or $menu == "laporan" or $sub_menu == "statistik") {?>
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/panel/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="assets/panel/js/core/app.js"></script>
	<!-- <script type="text/javascript" src="assets/panel/js/pages/dashboard.js"></script> -->
	<!-- /theme JS files -->
	<?php
	}; ?>

  <?php if($sub_menu == "verifikasi" or $sub_menu == "profile" or $sub_menu == "ubah_pass" or $menu == "laporan" or $sub_menu == "statistik"){ ?>
  
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<!-- <link href="assets/panel/css/bootstrap.css" rel="stylesheet" type="text/css"> -->
	<link href="assets/panel/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/colors.css" rel="stylesheet" type="text/css">
  <!-- Core JS files -->
	<script type="text/javascript" src="assets/panel/js/plugins/loaders/pace.min.js"></script>
	<!-- <script type="text/javascript" src="assets/panel/js/core/libraries/jquery.min.js"></script> -->
	<script type="text/javascript" src="assets/panel/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->
  <?php }; ?>

	<?php
	if ($sub_menu == "verifikasi" or $sub_menu == "set_pengumuman") {?>
		<!-- Theme JS files -->
	<script type="text/javascript" src="assets/panel/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/panel/js/core/app.js"></script>
	<script type="text/javascript" src="assets/panel/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

	<?php
	} ?>

		<script src="assets/panel/js/select2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/panel/css/sweetalert.css">

		<script type="text/javascript" src="assets/panel/js/sweetalert.min.js"></script>
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href=""><img style="margin-right: 10px; width: 35px;" src="assets/panel/images/default.png" alt="logo"/><span style="font-size: 12px;">SMK TARUNA MANDIRI</span></a>
          <a class="navbar-brand brand-logo-mini" href=""><img style="margin-right: 10px; width: 35px;" src="assets/panel/images/default.png" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name"><?php echo ucwords($nama); ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="panel_admin/profile" class="dropdown-item">
                <i class="mdi mdi-account-circle text-primary"></i>
                Profile
              </a>
              <a href="panel_admin/ubah_pass" class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Ubah Password
              </a>
              <a href="panel_admin/logout" class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
	<div class="container-fluid page-body-wrapper">
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<ul class="nav">
			<li class="nav-item <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'active';} ?>">
				<a class="nav-link" href="Panel_admin">
				<i class="mdi mdi-home menu-icon"></i>
				<span class="menu-title">Dashboard</span>
				</a>
			</li>
			<li style="<?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'color: black !important;';} ?>" class="nav-item <?php if($menu == 'panel_admin' AND $sub_menu == 'verifikasi' OR $sub_menu == 'edit_materi'){echo 'active';} ?>">
				<a class="nav-link text-dark decoration-none" href="Panel_admin/verifikasi">
          <i <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'style="color: black"';} ?> class=" mdi mdi-account-convert  menu-icon"></i>
          <span <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'style="color: black"';} ?> class="menu-title">Verifikasi</span>
				</a>
			</li>
			<li class="nav-item <?php if($menu == 'panel_admin' AND $sub_menu == 'export'){echo 'active';} ?>">
				<a class="nav-link" href="Panel_admin/export">
				<i <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'style="color: black"';} ?> class="mdi mdi-arrow-down-bold-circle-outline  menu-icon"></i>
				<span <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'style="color: black"';} ?> class="menu-title">Export Formulir</span>
				</a>
			</li>
			<li class="nav-item <?php if($menu == 'panel_admin' AND $sub_menu == 'set_pengumuman'){echo 'active';} ?>">
				<a class="nav-link" href="Panel_admin/set_pengumuman">
				<i <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'style="color: black"';} ?> class="mdi mdi-pencil-box-outline menu-icon"></i>
				<span <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'style="color: black"';} ?> class="menu-title">Setting Pengumuman</span>
				</a>
			</li>
			<li class="nav-item <?php if($menu == 'panel_admin' AND $sub_menu == 'statistik'){echo 'active';} ?>">
				<a class="nav-link" href="Panel_admin/statistik">
				<i <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'style="color: black"';} ?> class=" mdi mdi-chart-line menu-icon"></i>
				<span <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'style="color: black"';} ?> class="menu-title">Statistik Pendaftaran</span>
				</a>
			</li>
			<li class="nav-item d-flex align-items-center justify-content-center py-2">
				<!-- <a class="nav-link">
          <i class=""></i>
          <span class="text-gray">-- Lainnya --</span>
        </a> -->
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
				<i <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'style="color: black"';} ?> class="mdi mdi-settings menu-icon"></i>
				<span <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'style="color: black"';} ?> class="menu-title">Pengaturan</span>
				<i <?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'style="color: black"';} ?> class="menu-arrow"></i>
				</a>
				<div class="collapse" id="auth">
				<ul class="nav flex-column sub-menu">
					<li  class="nav-item <?php if($sub_menu == 'profile'){echo 'active';} ?>"> <a class="nav-link" href="Panel_admin/profile"> Login </a></li>
					<li class="nav-item <?php if($sub_menu == 'ubah_pass'){echo 'active';} ?>"> <a class="nav-link" href="Panel_admin/ubah_pass">Ubah Password</a></li>
				</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Panel_admin/logout">
				<i style="color: red;" class="mdi mdi-power menu-icon"></i>
				<span style="color: black;" class="menu-title">Keluar</span>
				</a>
			</li>
			</ul>
		</nav>
		<!-- partial -->
		<div class="main-panel">
        	<div class="content-wrapper">