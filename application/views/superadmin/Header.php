<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= " " . NAMA_APLIKASI ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url() ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="shortcut icon" href="<?= base_url() ?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?= base_url() ?>/favicon.ico" type="image/x-icon">
	<!-- Custom styles for this template-->
	<link href="<?= base_url() ?>css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="<?= base_url() ?>assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>css/custom.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/toast/jquery.toast.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>superadmin/beranda">
				<div class="sidebar-brand-icon">
					<i class="fas fa-user"></i>
				</div>
				<div class="sidebar-brand-text mx-3">KOPIPRO</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Menu
			</div>

			<!-- Nav Item - Dashboard -->
			<li class="nav-item <?php if (strtolower($this->uri->segment(2)) == 'beranda') echo 'active' ?>">
				<a class="nav-link" href="<?= base_url() ?>superadmin/beranda">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Beranda</span></a>
			</li>
			<!-- Nav Item - Agenda -->
			<li class="nav-item <?php if (strtolower($this->uri->segment(2)) == 'agenda') echo 'active' ?>">
				<a class="nav-link" href="<?= base_url() ?>superadmin/agenda">
					<i class="fas fa-fw fa-book"></i>
					<span>Agenda</span></a>
			</li>
			<!-- Nav User -->
			<li class="nav-item <?php if (strtolower($this->uri->segment(2)) == 'user') echo 'active' ?>">
				<a class="nav-link" href="<?= base_url() ?>superadmin/user">
					<i class="fas fa-user-plus"></i>
					<span>User</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Search -->


					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->

						<!-- Nav Item - Alerts -->

						<!-- Nav Item - Messages -->

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('user_level') ?>
									<small><?= $this->session->userdata('email') ?></span>
								<img class="img-profile rounded-circle" src="<?= base_url(); ?>img/undraw_profile.svg">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									<?= $this->session->userdata('fullname') ?>
								</a>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Keluar
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->
