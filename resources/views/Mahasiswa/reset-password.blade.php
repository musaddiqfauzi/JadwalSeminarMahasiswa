<!DOCTYPE html>
<html lang="en">

<head>

	<title>Jadwal Seminar | Login</title>
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
	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	


</head>

<!-- [ Reset Password] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/Logo-TE-02.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Reset Password</h4>
						<div class="form-group mb-3">
							<label class="floating-label" for="nim">NIM</label>
							<input type="text" class="form-control" id="nim" >
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="username">Nama Lengkap</label>
							<input type="type" class="form-control" id="username">
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="email">Email Unsyiah</label>
							<input type="email" class="form-control" id="email">
						</div>
						<div>
						<a href="/login"><button class="btn btn-block btn-primary mb-4">Kembali</button></a>
						<button class="btn btn-block btn-primary mb-4 sweet-success">Reset Password</button>
						<p class="mb-0 text-muted">Belum terdaftar? <a href="/register" class="f-w-400">Daftar</a></p>
						</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>

<script src="assets/js/plugins/sweetalert.min.js"></script>

<script>
	$(document).ready(function() {
		$('.sweet-success').on('click', function() {
		swal("Berhasil", "Password Telah Direset, Silakan Cek Email", "success");
	});
	})
</script>

</body>

</html>
