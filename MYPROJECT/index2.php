<?php error_reporting(0);?>

<?php
session_start();
if (empty($_SESSION['user'])) {
?>
   <script text="javascript">
	           alert('SILAHKAN ISI USERNAME DAN PASSWORD ANDA');
	           document.location='http://localhost/dorne/index.php'
	       </script>
<?php
  return;
}
?>

<head>
	<title>TOUR AND TRAVEL</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/coba.css">
	<link rel="stylesheet" type="text/css" href="assets/css/table.css">
	 <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo">
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/logo-user-png-4.png" class="img-circle" alt="Avatar"> <span>user</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="profile"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="keluar"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="" class="active"><i class="lnr lnr-home"></i> <span>ADMIN</span></a></li>
						<li>
							<a href="#user" data-toggle="collapse" class="collapsed"><i class="fa fa-user"></i> <span>USER</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="user" class="collapse ">
								<ul class="nav">
									<li><a href="user" title="user">CUSTOMER</a></li>
									<li><a href="admin" title="admin">ADMIN</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#submenu" data-toggle="collapse" class="collapsed"><i class="fa fa-rocket"></i> <span>PESAWAT</span><i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="submenu" class="collapse ">
								<ul class="nav">
									<li><a href="bandara" title="BANDARA">BANDARA</a></li>
									<li><a href="daftar_pesawat" title="daftar_pesawat">DAFTAR PESAWAT</a></li>
									<li><a href="jadwal_penerbangan" title="jadwal_penerbangan">JADWAL PENERBANGAN</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#TRAIN" data-toggle="collapse" class="collapsed"><i class="fa fa-train"></i> <span>KERETA API</span><i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="TRAIN" class="collapse ">
								<ul class="nav">
									<li><a href="stasiun" title="stasiun">STASIUN</a></li>
									<li><a href="daftar_kereta" title="daftar_kereta">DAFTAR KERETA API</a></li>
									<li><a href="jadwal_berangkat" title="jadwal_keberangkatan">JADWAL BERANGKAT</a></li>
								</ul>
							</div>
						</li>
						<li><a href="booking" title="booking"><i class="lnr lnr-chart-bars"></i> <span>BOOKING</span></a>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->


	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>

	<div id="body">

		<?php 
		 if($_GET['page']=="user"){
					include"proses/customer/user.php";
				}else if($_GET['page']=="booking"){
					include "proses/booking/booking.php";
				}else if($_GET['page']=="bandara"){
					include "proses/pesawat/bandara.php";
				}else if ($_GET['page']=="keluar") {
					include "keluar.php";
				}else if($_GET['page']=="jadwal_penerbangan"){
					include "proses/pesawat/jadwal_penerbangan.php";
				}else if($_GET['page']=="daftar_pesawat"){
					include"proses/pesawat/daftar_pesawat.php";
				}else if($_GET['page']=="admin"){
					include"proses/admin/admin.php";
				}else if($_GET['page']=="stasiun"){
					include"proses/kereta/stasiun.php";
				}else if($_GET['page']=="daftar_kereta"){
					include"proses/kereta/daftar_kereta.php";
				}else if($_GET['page']=="jadwal_berangkat"){
					include"proses/kereta/jadwal_berangkat.php";
				}else if($_GET['page']=="tambah_bandara"){
		 			include"proses/pesawat/input_data_bandara.php";
		 		}else if($_GET['page']=="input_pesawat"){
		 			include 'proses/pesawat/input_daftar_pesawat.php';
		 		}else if($_GET['page']=="input_penerbangan"){
		 			include 'proses/pesawat/input_jadwal_penerbangan.php';
		 		}else if($_GET['page']=="input_stasiun"){
		 			include 'proses/kereta/input_stasiun.php';
		 		}else if($_GET['page']=="input_data_kereta_api"){
		 			include 'proses/kereta/input_data_kereta_api.php';
		 		}else if($_GET['page']=="input_berangkat"){
		 			include 'proses/kereta/input_jadwal_berangkat.php';
		 		}else if ($_GET['page']=="edit_bandara"){
		 			include 'proses/pesawat/edit_bandara.php';
		 		}else if ($_GET['page']=="edit_customer"){
		 			include 'proses/customer/edit_customer.php';
		 		}else if ($_GET['page']=="edit_booking"){
		 			include 'proses/booking/edit_booking.php';
		 		}else if ($_GET['page']=="edit_pesawat"){
		 			include 'proses/pesawat/edit_pesawat.php';
		 		}else if ($_GET['page']=="edit_jadwal_penerbangan"){
		 			include 'proses/pesawat/edit_jadwal_penerbangan.php';
		 		}else if ($_GET['page']=="edit_stasiun"){
		 			include 'proses/kereta/edit_stasiun.php';
		 		}else if ($_GET['page']=="edit_daftar_kereta"){
		 			include 'proses/kereta/edit_daftar_kereta.php';
		 		}else if ($_GET['page']=="edit_jadwal_berangkat"){
		 			include 'proses/kereta/edit_jadwal_berangkat.php';
		 		}else if ($_GET['page']=="profile"){
		 			include 'proses/admin/profile.php';
		 		}else{
		 			include 'proses/customer/user.php';
		 		}
	?>
	</div>
</div>
</body>
