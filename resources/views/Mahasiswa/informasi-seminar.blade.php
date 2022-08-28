<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jadwal Seminar | Informasi</title>
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
					<li class="active nav-item"><a href="/beranda" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Beranda</span></a></li>
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
                            <h5 class="m-b-10">Informasi Seminar</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/beranda"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#!">Informasi Seminar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Informasi Seminar</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="nav flex-column nav-pills mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-kkp-tab" data-bs-toggle="pill" href="#v-pills-kkp" role="tab" aria-controls="v-pills-kkp" aria-selected="true">Seminar KP</a>
                                    <a class="nav-link" id="v-pills-proposal-tab" data-bs-toggle="pill" href="#v-pills-proposal" role="tab" aria-controls="v-pills-proposal" aria-selected="false">Seminar Proposal</a>
                                    <a class="nav-link" id="v-pills-hasil-tab" data-bs-toggle="pill" href="#v-pills-hasil" role="tab" aria-controls="v-pills-hasil" aria-selected="false">Seminar Hasil</a>
                                    <a class="nav-link" id="v-pills-sidang-tab" data-bs-toggle="pill" href="#v-pills-sidang" role="tab" aria-controls="v-pills-sidang" aria-selected="false">Sidang</a>
                                    <a class="nav-link" id="v-pills-informasi-tab" data-bs-toggle="pill" href="#v-pills-informasi" role="tab" aria-controls="v-pills-informasi" aria-selected="false">Informasi Status Penjadwalan</a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-kkp" role="tabpanel" aria-labelledby="v-pills-kkp-tab">
                                        <h5>Seminar KP</h5>
                                        <h5 class="text-primary">Format Penulisan Nama File Seminar Kerja Praktek</h5>
                                        <ul>
                                            <li>Borang KP : Bor-KP_NIM.pdf</li>
                                            <li>Laporan KP : KP_NIM.pdf</li>
                                            <li>Slide Presentasi : Slide_NIM.ppt</li>
                                        </ul>
                                        <h5 class="text-primary">Syarat Pendaftaran Seminar Kerja Praktek</h5>
                                        <ul>
                                            <li>Tiga Rangkap (3x) Buku Laporan KP</li>
                                            <li>Satu Rangkap (1x) Borang KP-3 (min konsultasi 5x)</li>
                                            <li>Satu Rangkap (1x) Borang KP-4 (min konsultasi 5x)</li>
                                            <li>Satu Rangkap (1x) Borang KP-5 (telah diisi dengan nilai dari instansi)</li>
                                            <li>Dua Rangkap (2x) Borang KP-7</li>
                                            <li>Satu Rangkap (1x) Borang KP-8</li>
                                            <li>Satu Rangkap (1x) Borang KP-9</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-proposal" role="tabpanel" aria-labelledby="v-pills-proposal-tab">
                                        <h5>Seminar Proposal</h5>
                                        <h5 class="text-primary">Format Penulisan Nama File Seminar Proposal Tugas Akhir</h5>
                                        <ul>
                                            <li>Borang TA-1 : Bor-TA1_NIM.pdf</li>
                                            <li>Transkrip Online : Transkrip_NIM.pdf</li>
                                            <li>Proposal TA : Sempro_NIM.pdf</li>
                                            <li>Lembaran Plagiasi : Plagiasi_NIM.pdf</li>
                                            <li>Slide Presentasi : Slide_NIM.ppt</li>
                                            <li>Bukti Persetujuan Dosen Pembimbing : Bukti_Persetujuan.pdf </li>
                                        </ul>
                                        <h5 class="text-primary">Syarat Pendaftaran Seminar Proposal Tugas Akhir</h5>
                                        <ul>
                                            <li>Telah LULUS Seminar Kerja Praktek (KP)</li>
                                            <li>Lima rangkap (5x) Proposal TA</li>
                                            <li>Satu rangkap (1x) Borang TA1-A</li>
                                            <li>Satu rangkap (1x) Borang TA1-B</li>
                                            <li>Tiga rangkap (3x) Borang TA1-C</li>
                                            <li>Lima rangkap (5x) Borang TA1-D</li>
                                            <li>Satu rangkap (1x) Borang TA1-E</li>
                                            <li>Satu rangkap (1x) Borang TA1-F dan TA-Sem</li>
                                            <li>Print-out Transkrip Online</li>
                                            <li>Tunjukkan Logbook bukti konsultasi Proposal (minimal 4x)</li>
                                            <li>Lembaran check plagiasi</li>
                                        </ul>
                                        <h5 class="text-primary">Check Plagiasi</h5>
                                        <p>Proposal ditolak bila kemiripannya > 30%</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-hasil" role="tabpanel" aria-labelledby="v-pills-hasil-tab">
                                        <h5>Seminar Hasil</h5>
                                        <h5 class="text-primary">Format Penulisan Nama File Seminar Hasil</h5>
                                        <ul>
                                            <li>Borang TA-2 : Bor-TA2_NIM.pdf</li>
                                            <li>Buku Skripsi : Semhas_NIM.pdf</li>
                                            <li>Slide Presentasi : Slide_NIM.ppt</li>
                                            <li>Bukti Persetujuan Dosen Pembimbing : Bukti_Persetujuan.pdf </li>
                                        </ul>
                                        <h5 class="text-primary">Syarat Pendaftaran Seminar Hasil Tugas Akhir</h5>
                                        <ul>
                                            <li>Lima rangkap (5x) Buku TA</li>
                                            <li>Satu rangkap (1x) Borang TA2-A</li>
                                            <li>Satu rangkap (1x) Borang TA2-B</li>
                                            <li>Tiga rangkap (3x) Borang TA2-C dan TA1-C</li>
                                            <li>Satu rangkap (1x) Borang TA2-D</li>
                                            <li>Satu rangkap (1x) Borang TA2-E dan TA-Sem</li>
                                            <li>Tunjukkan Logbook bukti konsultasi TA (minimal 4x)</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-sidang" role="tabpanel" aria-labelledby="v-pills-sidang-tab">
                                        <h5>Sidang</h5>
                                        <h5 class="text-primary">Format Penulisan Nama File Sidang Tugas Akhir</h5>
                                        <ul>
                                            <li>Borang TA-2 : Bor-TA2_NIM.pdf</li>
                                            <li>Transkrip Akhir : Transkrip_NIM.pdf</li>
                                            <li>Buku Skripsi : Sidang_NIM.pdf</li>
                                            <li>Lembaran Plagiasi : Plagiasi_NIM.pdf</li>
                                            <li>Slide Presentasi : Slide_NIM.ppt</li>
                                            <li>Bukti Persetujuan Dosen Pembimbing : Bukti_Persetujuan.pdf </li>
                                        </ul>
                                        <h5 class="text-primary">Syarat Pendaftaran Sidang Tugas Akhir</h5>
                                        <ul>
                                            <li>Lima rangkap (5x) Buku skripsi yang telah disahkan komite</li>
                                            <li>Satu rangkap (1x) Borang TA2-F</li>
                                            <li>Satu rangkap (1x) Borang TA2-G</li>
                                            <li>Lima rangkap (5x) Borang TA2-H</li>
                                            <li>Satu rangkap (1x) Borang TA2-I</li>
                                            <li>Bukti submit (Email) Jurnal Ilmiah Mahasiswa (JIM) dan RAMA</li>
                                            <li>Transkrip nilai dari Bagian Akademik</li>
                                            <li>Tunjukkan Logbook bukti konsultasi TA (minimal 2x) </li>
                                            <li>Lembaran Check plagiasi</li>
                                        </ul>
                                        <h5 class="text-primary">Check Plagiasi</h5>
                                        <p>Buku Skripsi ditolak bila kemiripannya > 30%</p>
                                        <h5 class="text-primary">TOEFL</h5>
                                        <p>Sertifikat/Nilai	TOEFL	(Min nilai 477 atau 80% kehadiran kursus)</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-informasi" role="tabpanel" aria-labelledby="v-pills-informasi-tab">
                                        <h5>Informasi Status Penjadwalan</h5>
                                        <hr>
                                        <h5><label class="badge badge-light-danger">Belum Mendaftar</label></h5>
                                        <p>Mahasiswa yang belum mendaftar seminar dan sidang dapat menanyakan informasi kepada pihak jurusan atau menunggu
                                        pengumuman dari pihak jurusan terkait batas waktu awal dan akhir pendaftaran sesuai jenis seminar dan sidang</p>

                                        <h5><label class="badge badge-light-danger">Diajukan</label></h5>
                                        <p>Mahasiswa yang telah mengajukan pendaftaran seminar dan sidang akan ditinjau oleh pihak jurusan</p>
                                        
                                        <h5><label class="badge badge-light-info">Diproses</label></h5>
                                        <p>Penjadwalan yang telah diajukan dan sudah ditinjau oleh pihak jurusan akan diproses penjadwalannya dengan  
                                        penentuan komite dan jadwal selama 2-3 hari masa kerja pihak jurusan</p>
                                        
                                        <h5><label class="badge badge-light-success">Dijadwalkan</label></h5>
                                        <p>Setelah Komite dan Jadwal telah ditentukan oleh pihak jurusan, maka pihak jurusan menerbitkan jadwal pada tabel data penjadwalan seminar dan sidang mahasiswa.
                                            Penjadwalan hanya berlaku dalam waktu sepekan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- subscribe end -->
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


<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>

<script>
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
</script>
</body>

</html>
