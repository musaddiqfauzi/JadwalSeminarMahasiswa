<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jadwal Seminar | Jadwal Saya</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/logo-unsyiah.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    

</head>
<body class="background-grd-green">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/Avatar-06.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">Musaddiq Fauzi 1504105010087 <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="#" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
							<li class="list-inline-item"><a href="/login" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div>
				</div>
				<br>
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item"><a href="/index" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Beranda</span></a></li>
					<li class="nav-item"><a href="/jadwal-saya" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Jadwal Saya</span></a></li>
					<li class="nav-item"><a href="/kontak-admin" class="nav-link "><span class="pcoded-micon"><i class="feather icon-phone"></i></span><span class="pcoded-mtext">Kontak Admin</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo here   ============ -->
						<img src="assets/images/Logo-TE-01.png" width="90%" alt="" class="logo">
						
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav me-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
								<button type="button" class="close close btn-close position-absolute top-50 end-0 translate-middle" aria-label="Close">
								</button>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ms-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
								<div class="dropdown-menu dropdown-menu-end notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifikasi</h6>
										<div class="float-end">
											<a href="#!" class="m-r-10">Mark as read </a>
											<a href="#!">Clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">TERBARU</p>
										</li>
										<li class="notification">
											<div class="d-flex">
												<div class="flex-grow-1">
													<p><strong>Jadwal Seminar Hasil</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>Baru Saja</span></p>
													<p>Jadwal Sedang Diproses</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">TERDAHULU</p>
										</li>
										<li class="notification">
											<div class="d-flex">
												<div class="flex-grow-1">
													<p><strong>Jadwal Seminar Hasil</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>1 Hari Yang Lalu</span></p>
													<p>Jadwal Telah Diajukan</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="d-flex">
												<div class="flex-grow-1">
													<p><strong>Jadwal Seminar Proposal</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>>1 Tahun Yang Lalu</span></p>
													<p>Rabu, 09 Des 2020 10.30 AM</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">Tampilkan Semua</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Jadwal Saya</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Jadwal Saya</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
		<div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
								<h5>Daftar Jadwal Saya</h5>
                            </div>
                            <div class="col-sm-6 text-end">
                                <a href="/mhs-form-jadwal"><button class="btn btn-info btn-sm btn-round has-ripple"><i class="feather icon-plus"></i> Ajukan Jadwal</button></a>
                            </div>
                        </div>
						<hr>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Seminar</th>
                                        <th>Judul</th>
                                        <th>Komite</th>
                                        <th>Penguji</th>
                                        <th>Jadwal</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>

									<tr>
                                        <td><label class="badge badge-light-warning">Seminar KP</label></td>
                                        <td>KONFIGURASI MIKROTIK PADA JARINGAN SITE TO SITE VPN <br>
											MENGGUNAKAN PROTOKOL SSTP (STUDI KASUS PT. ANGKASA PURA II – <br> 
											BANDAR UDARA INTERNASIONAL SULTAN ISKANDAR MUDA)</td>
                                        <td>
											<h6>Ketua Seminar:</h6>
											<p>Dr. Ir. Roslidar, S.T., M.Sc., IPM.</p>
										</td>
										<td>
											<p>Ir. Afdhal, S.T., M.Sc.</p>
										</td>
                                        <td><b><p class="text-success">Kamis, 28 November 2019<br>08.00 - 10.45</p></b></td>
										<td>
											<a href="/mhs-form-edit-kkp">
												<button type="button" class="btn btn-sm btn-info" disabled><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>                                    
									</tr>

                                    <tr>
                                        <td><label class="badge badge-light-danger">Seminar Proposal</label></td>
                                        <td>PENJADWALAN SEMINAR DAN SIDANG MENGGUNAKAN <br> 
											ALUR ALGORITMA GENETIKA BERBASIS WEBSITE</td>
                                        <td>
											<h6>Ketua Seminar:</h6>
											<p>Dr. Ir. Melinda, S.T., M.Sc., IPU.</p>
											<h6>Pembimbing:</h6>
											<p>1. Dr. Ir. Rizal Munadi, MM., M.T.</p>
											<p>2. Ardiansyah, BSEE., M.Sc</p>
										</td>
										<td>
											<p>1. Prof. Dr. Teuku Yuliar Arif, S.T., M.Kom.</p>
											<p>2. Muhammad Irhamsyah, S.T., M.T.</p>
										</td>
                                        <td><b><p class="text-success">Rabu, 09 Desember 2020<br>10.30 - 13.45</p></b></td>
										
                                        <td>
											<a href="/mhs-form-edit-proposal">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>
                                    </tr>
                                    
									<tr>
                                        <td><label class="badge badge-light-info">Seminar Hasil</label></td>
                                        <td>PENJADWALAN SEMINAR DAN SIDANG MENGGUNAKAN <br> 
											ALUR ALGORITMA GENETIKA BERBASIS WEBSITE</td>
                                        <td>
											<h6>Ketua Seminar:</h6>
											<p>Dr. Ir. Melinda, S.T., M.Sc., IPU.</p>
											<h6>Pembimbing:</h6>
											<p>1. Dr. Ir. Rizal Munadi, MM., M.T.</p>
											<p>2. Ardiansyah, BSEE., M.Sc.</p>
										</td>
										<td>
											<p>1. Prof. Dr. Teuku Yuliar Arif, S.T., M.Kom.</p>
											<p>2. Muhammad Irhamsyah, S.T., M.T.</p>
										</td>
                                        <td><label class="badge badge-light-info">Diproses</label></td>
										<td>
											<a href="/mhs-form-edit-hasil">
												<button type="button" class="btn btn-sm btn-info" disabled><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>                                    
									</tr>
                                    <tr>
                                        <td><label class="badge badge-light-success">Sidang</label></td>
                                        <td>BELUM MENDAFTAR</td>
                                        <td>
											<h6>Ketua Seminar:</h6>
											<p>-</p>
											<h6>Pembimbing:</h6>
											<p>1. - </p>
											<p>2. - </p>
										</td>
										<td>
											<p>1. - </p>
											<p>2. - </p>
										</td>
                                        <td><label class="badge badge-light-danger">Belum Mendaftar</label></td>
										<td>
											<a href="/mhs-form-edit-sidang">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>                                    
									</tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

</div>
</div>
<!-- [ Main Content ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>


<!-- datatable Js -->
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>

<script>
	$('#report-table').DataTable();
</script>
</body>

</html>
