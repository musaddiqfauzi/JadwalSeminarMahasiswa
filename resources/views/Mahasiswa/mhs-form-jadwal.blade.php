<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jadwal Seminar | Form Jadwal</title>
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
	<link rel="stylesheet" href="assets/css/plugins/select2.min.css">
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
							<li class="list-inline-item"><a href="login.html" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div>
				</div>
				<br>
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item"><a href="/beranda" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Beranda</span></a></li>
					<li class="active nav-item"><a href="/jadwal-saya" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Jadwal Saya</span></a></li>
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
                            <h5 class="m-b-10">Pengajuan Jadwal</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/beranda"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/jadwal-saya">Jadwal Saya</a></li>
                            <li class="breadcrumb-item"><a href="#!">Pengajuan Jadwal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="row">
            <div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h5 class="mb-3">Form Pengajuan Jadwal</h5>
						<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active text-uppercase" id="kkp-tab" data-bs-toggle="tab" href="#kkp" role="tab" aria-controls="home" aria-selected="true">Seminar KP</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-uppercase" id="proposal-tab" data-bs-toggle="tab" href="#proposal" role="tab" aria-controls="profile" aria-selected="false">Seminar Proposal</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-uppercase" id="hasil-tab" data-bs-toggle="tab" href="#hasil" role="tab" aria-controls="contact" aria-selected="false">Seminar Hasil</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-uppercase" id="sidang-tab" data-bs-toggle="tab" href="#sidang" role="tab" aria-controls="contact" aria-selected="false">Sidang</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="kkp" role="tabpanel" aria-labelledby="kkp-tab">
								<div class="row">
									<div class="col-md-8">
										<h5 class="mt-3">Form Seminar KP</h5>
										<hr>
										<form>
											<div class="row mb-3">
												<label for="inputEmail3" class="col-sm-3 col-form-label">Judul</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputEmail3">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Dosen Pembimbing</label>
												<div class="col-sm-9">
													<select class="js-dosen-array col-sm-12"></select>
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Pembimbing Lapangan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputEmail3">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Borang KP (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Laporan KP (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Slide Presentasi (.ppt)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" aria-label="file example">
												</div>
											</div>
											<button type="button" class="btn btn-primary sweet-success">Ajukan Penjadwalan</button>
										</form>
									</div>
								</div>
							</div>
							<div class="tab-pane fade active" id="proposal" role="tabpanel" aria-labelledby="proposal-tab">
								<div class="row">
									<div class="col-md-8">
										<h5 class="mt-3">Form Seminar Proposal</h5>
										<hr>
										<form action="{{route('proposal')}}" enctype="multipart/form-data" method="POST">
                                            @csrf
											<div class="row mb-3">
												<label for="inputEmail3" class="col-sm-3 col-form-label">Judul</label>
												<div class="col-sm-9">
													<input type="text" name="judul" class="form-control" id="inputEmail3">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Bidang</label>
												<div class="col-sm-9">
													<select class="js-bidang-array col-sm-12" name="bidang"></select>
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Dosen Wali</label>
												<div class="col-sm-9">
													<select class="js-dosen-array col-sm-12" name="dosen_wali"></select>
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Dosen Pembimbing 1</label>
												<div class="col-sm-9">
													<select class="js-dosen-array col-sm-12" name="dosen_pembimbing_1"></select>
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Dosen Pembimbing 2</label>
												<div class="col-sm-9">
													<select class="js-dosen-array col-sm-12 " name="dosen_pembimbing_2"></select>
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Borang TA-1 (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="borang_ta_1" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Transkrip Online (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="transkrip_online" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Proposal TA (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="proposal_ta" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Lembaran Plagiasi (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="lembaran_plagiasi"  aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Slide Presentasi (.ppt)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="slide_presentasi" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Bukti Persetujuan Dosen Pembimbing (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="bukti_persetujuan" aria-label="file example">
												</div>
											</div>
											<button type="submit" class="btn btn-primary">Ajukan Penjadwalan</button>
										</form>
									</div>
								</div>
							</div>
							<div class="tab-pane fade active" id="hasil" role="tabpanel" aria-labelledby="hasil-tab">
								<div class="row">
									<div class="col-md-8">
										<h5 class="mt-3">Form Seminar Hasil</h5>
										<hr>
										<form action="{{route('seminarhasil')}}" enctype="multipart/form-data" method="POST">
                                            @csrf
											<div class="row mb-3">
												<label for="inputEmail3" class="col-sm-3 col-form-label">Judul</label>
												<div class="col-sm-9">
													<input type="text" name="judul" value="{{ old('judul', $data->judul) }}" class="form-control" id="inputEmail3">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Bidang</label>
												<div class="col-sm-9">
													<input type="text" name="bidang" value="{{ old('bidang', $data->bidang) }}" class="form-control" id="inputEmail3">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Dosen Pembimbing 1</label>
												<div class="col-sm-9">
													<input type="text" name="dosen_pembimging_1" value="{{ old('dosen_pembimbing_1', $data->dosen_pembimbing_1) }}" class="form-control" id="inputEmail3">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Dosen Pembimbing 2</label>
												<div class="col-sm-9">
													<input type="text" name="dosen_pembimging_2" value="{{ old('dosen_pembimbing_2', $data->dosen_pembimbing_2) }}" class="form-control" id="inputEmail3">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Borang TA-2 (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="borang_ta_1" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Buku Skripsi (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="buku_skripsi" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Slide Presentasi (.ppt)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="slide_presentasi" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Bukti Persetujuan Dosen Pembimbing (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="bukti_persetujuan" aria-label="file example">
												</div>
											</div>
											<button type="submit" class="btn btn-primary sweet-success">Ajukan Penjadwalan</button>
										</form>
									</div>
								</div>
							</div>
							<div class="tab-pane fade active" id="sidang" role="tabpanel" aria-labelledby="sidang-tab">
								<div class="row">
									<div class="col-md-8">
										<h5 class="mt-3">Form Sidang</h5>
										<hr>
										<form action="{{route('sidang')}}" enctype="multipart/form-data" method="POST">
											<div class="row mb-3">
												<label for="inputEmail3" class="col-sm-3 col-form-label">Judul</label>
												<div class="col-sm-9">
													<input type="text" name="judul" value="{{ old('judul', $data->judul) }}" class="form-control" id="inputEmail3">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Bidang</label>
												<div class="col-sm-9">
													<input type="text" name="bidang" value="{{ old('bidang', $data->bidang) }}" class="form-control" id="inputEmail3">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Dosen Pembimbing 1</label>
												<div class="col-sm-9">
													<input type="text" name="dosen_pembimging_1" value="{{ old('dosen_pembimbing_1', $data->dosen_pembimbing_1) }}" class="form-control" id="inputEmail3">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Dosen Pembimbing 2</label>
												<div class="col-sm-9">
													<input type="text" name="dosen_pembimging_2" value="{{ old('dosen_pembimbing_2', $data->dosen_pembimbing_2) }}" class="form-control" id="inputEmail3">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Borang TA-2 (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="borang_ta_1" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Transkrip Akhir (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="transkrip_online" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Buku Skripsi (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="buku_skipsi" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Lembaran Plagiasi (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" class="form-control" name="lembaran_plagiasi" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Slide Presentasi (.ppt)</label>
												<div class="col-sm-9">
													<input type="file" name="slide_presentasi" class="form-control" aria-label="file example">
												</div>
											</div>
											<div class="row mb-3">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Bukti Persetujuan Dosen Pembimbing (.pdf)</label>
												<div class="col-sm-9">
													<input type="file" name="bukti_persetujuan" class="form-control" aria-label="file example">
												</div>
											</div>
											<button type="submit" class="btn btn-primary sweet-success">Ajukan Penjadwalan</button>
										</form>
									</div>
								</div>
							</div>
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


<!-- select2 Js -->
<script src="assets/js/plugins/select2.full.min.js"></script>

<!-- sweet alert Js -->
<script src="assets/js/plugins/sweetalert.min.js"></script>

<script>
	$(document).ready(function() {
	// [ loading array ]
		var data1 = [{
			id: 0,
			text: '--- Pilih Dosen ---'
		}, {
			id: 'Prof. Dr. Ir Yuwaldi Away,??M.Sc',
			text: 'Prof. Dr. Ir Yuwaldi Away,??M.Sc'
		}, {
			id: 'Prof. Dr. Ir. Nasaruddin, S.T.,M.Eng., IPU',
			text: 'Prof. Dr. Ir. Nasaruddin, S.T.,M.Eng., IPU'
		}, {
			id: 'Prof. Dr. Khairul Munadi, S.T., M.Eng',
			text: 'Prof. Dr. Khairul Munadi, S.T., M.Eng'
		}, {
			id: 'Prof. Dr. Fitri Arnia, S.T., M.Eng.Sc',
			text: 'Prof. Dr. Fitri Arnia, S.T., M.Eng.Sc'
		}, {
			id: 'Prof. Dr. Teuku Yuliar Arif, S.T., M.Kom',
			text: 'Prof. Dr. Teuku Yuliar Arif, S.T., M.Kom'
		}, {
			id: 'Dr. Tarmizi, S.T., M.Sc',
			text: 'Dr. Tarmizi, S.T., M.Sc'
		}, {
			id: 'Dr. Ir. Syahrial, M.Eng',
			text: 'Dr. Ir. Syahrial, M.Eng'
		}, {
			id: 'Dr. Ir. Rizal Munadi, MM., M.T.',
			text: 'Dr. Ir. Rizal Munadi, MM., M.T.'
		}, {
			id: 'Dr. Rakhmad Syafutra Lubis, S.T., M.T.',
			text: 'Dr. Rakhmad Syafutra Lubis, S.T., M.T.'
		}, {
			id: 'Dr. Taufiq A. Gani, S.Kom, M.Eng.Sc',
			text: 'Dr. Taufiq A. Gani, S.Kom, M.Eng.Sc'
		}, {
			id: 'Dr. Ir. Suriadi, S.T., M.Sc., IPM., ASEAN.Eng',
			text: 'Dr. Ir. Suriadi, S.T., M.Sc., IPM., ASEAN.Eng'
		}, {
			id: 'Dr. Ira Devi Sara, S.T., M.Eng.Sc',
			text: 'Dr. Ira Devi Sara, S.T., M.Eng.Sc'
		}, {
			id: 'Dr. Rusdha Muharar, S.T., M.Sc',
			text: 'Dr. Rusdha Muharar, S.T., M.Sc'
		}, {
			id: 'Dr. Ir. Melinda, S.T.,??M.Sc., IPU',
			text: 'Dr. Ir. Melinda, S.T.,??M.Sc., IPU'
		}, {
			id: 'Dr. Ir. Ramzi Adriman, S.T., M.Sc',
			text: 'Dr. Ir. Ramzi Adriman, S.T., M.Sc'
		}, {
			id: 'Afnan, S.Kom, MM(T), M.Sc',
			text: 'Afnan, S.Kom, MM(T), M.Sc'
		}, {
			id: 'Ir. Mansur Gapy, M.T.',
			text: 'Ir. Mansur Gapy, M.T.'
		}, {
			id: 'Ir. Syahrizal, M.T.',
			text: 'Ir. Syahrizal, M.T.'
		}, {
			id: 'Syukriyadin, S.T., M.T.',
			text: 'Syukriyadin, S.T., M.T.'
		}, {
			id: 'Ir. Agus Adria,??M.Sc',
			text: 'Ir. Agus Adria,??M.Sc'
		}, {
			id: 'Ir. Ramdhan Halid Siregar, S.T., M.T., IPM.,ASEAN.Eng',
			text: 'Ir. Ramdhan Halid Siregar, S.T., M.T., IPM.,ASEAN.Eng'
		}, {
			id: 'Ir. Hubbul Walidainy, S.T., M.T., IPM.,ASEAN.Eng',
			text: 'Ir. Hubbul Walidainy, S.T., M.T., IPM.,ASEAN.Eng'
		}, {
			id: 'Ir. Mahdi Syukri, S.T., M.T., IPM',
			text: 'Ir. Mahdi Syukri, S.T., M.T., IPM'
		}, {
			id: 'Ir. Fahri Heltha, M.Eng',
			text: 'Ir. Fahri Heltha, M.Eng'
		}, {
			id: 'Ir. Ernita Dewi Meutia, PG.Dipl., M.Sc',
			text: 'Ir. Ernita Dewi Meutia, PG.Dipl., M.Sc'
		}, {
			id: 'Mohd. Syaryadhi, S.T., M.Sc',
			text: 'Mohd. Syaryadhi, S.T., M.Sc'
		}, {
			id: 'Dr. Alfisyahrin, S.T., M.T.',
			text: 'Dr. Alfisyahrin, S.T., M.T.'
		}, {
			id: 'Muhammad Irhamsyah, S.T., M.T.',
			text: 'Muhammad Irhamsyah, S.T., M.T.'
		}, {
			id: 'Zulhelmi, S.T., M.Sc',
			text: 'Zulhelmi, S.T., M.Sc'
		}, {
			id: 'Ir. Yunidar, S.Si., M.T.',
			text: 'Ir. Yunidar, S.Si., M.T.'
		}, {
			id: 'Ir. Yunidar, S.Si., M.T.',
			text: 'Zulfikar, S.T., M.Sc'
		}, {
			id: 'Dr. Ir. Roslidar, S.T.,??M.Sc., IPM',
			text: 'Dr. Ir. Roslidar, S.T.,??M.Sc., IPM'
		}, {
			id: 'Ir. Rahmad Dawood, S.Kom,??M.Sc., IPM., ASEAN.Eng',
			text: 'Ir. Rahmad Dawood, S.Kom,??M.Sc., IPM., ASEAN.Eng'
		}, {
			id: 'Ir. Ahmadiar, S.T., M.Sc',
			text: 'Ir. Ahmadiar, S.T., M.Sc'
		}, {
			id: 'Ir. Hafidh, S.T., M.T., IPU',
			text: 'Ir. Hafidh, S.T., M.T., IPU'
		}, {
			id: 'Ir. Elizar, S.T.,??M.Sc., IPM',
			text: 'Ir. Elizar, S.T.,??M.Sc., IPM'
		}, {
			id: 'Ir. Fardian, S.T., M.Sc',
			text: 'Ir. Fardian, S.T., M.Sc'
		}, {
			id: 'Ir. Afdhal, S.T., M.Sc',
			text: 'Ir. Afdhal, S.T., M.Sc'
		}, {
			id: 'Ir. Alfatirta Mufti, S.T., M.Sc',
			text: 'Ir. Alfatirta Mufti, S.T., M.Sc'
		}, {
			id: 'Sayed Muchallil, S.T., M.Sc',
			text: 'Sayed Muchallil, S.T., M.Sc'
		}, {
			id: 'Ardiansyah, BSEE., M.Sc',
			text: 'Ardiansyah, BSEE., M.Sc'
		}, {
			id: 'Yudha Nurdin, S.T.,M.T.',
			text: 'Yudha Nurdin, S.T.,M.T.'
		}, {
			id: 'Aulia Rahman, S.T., M.Sc',
			text: 'Aulia Rahman, S.T., M.Sc'
		}, {
			id: 'Dr. Kahlil, S.T., M.Eng.',
			text: 'Dr. Kahlil, S.T., M.Eng.'
		}, {
			id: 'Maya Fitria, S.Kom., M.Sc',
			text: 'Maya Fitria, S.Kom., M.Sc'
		}, {
			id: 'Dr. Rita Khathir, S.TP, M.Sc',
			text: 'Dr. Rita Khathir, S.TP, M.Sc'
		}, {
			id: 'Ir. Fathurrahman, S.T.,??M.Eng.Sc',
			text: 'Ir. Fathurrahman, S.T.,??M.Eng.Sc'
		}, {
			id: 'Akhyar, S.T., M.Eng',
			text: 'Akhyar, S.T., M.Eng'
		}, {
			id: 'Al Bahri, S.ST., M.T',
			text: 'Al Bahri, S.ST., M.T'
		}, {
			id: 'Masduki Khamdan Muchamad, S.Kom., M.Sc.',
			text: 'Masduki Khamdan Muchamad, S.Kom., M.Sc.'
		}, {
			id: 'Dr. Khairun Saddami, S.T',
			text: 'Dr. Khairun Saddami, S.T'
		}, {
			id: 'Dr. Yunida, S.T.',
			text: 'Dr. Yunida, S.T.'
		}, {
			id: 'Dr. Maulisa Oktiana, S.T.',
			text: 'Dr. Maulisa Oktiana, S.T.'
		}, {
			id: 'Rika Sri Utami, M.Sc.',
			text: 'Rika Sri Utami, M.Sc.'
		}];
		$(".js-dosen-array").select2({
			data: data1
		});

	var data2 = [{
       id: 0,
       text: '--- Pilih Bidang ---'
    }, {
        id: 'Teknik Energi Listrik',
        text: 'Teknik Energi Listrik'
    }, {
        id: 'Teknik Telekomunikasi',
        text: 'Teknik Telekomunikasi'
    },{
        id: 'Teknik Informatika & Komputer',
        text: 'Teknik Informatika & Komputer'
    },{
        id: 'Teknik Elektronika & Instrumentasi',
        text: 'Teknik Elektronika & Instrumentasi'
    },{
        id: 'Teknik Sistem Kendali',
        text: 'Teknik Sistem Kendali'
    }];
    $(".js-bidang-array").select2({
        data: data2
    });

		$('.sweet-success').on('click', function() {
		swal("Berhasil!", "Data Berhasil Diubah!", "success");
	});

	})
</script>

</body>
</html>
