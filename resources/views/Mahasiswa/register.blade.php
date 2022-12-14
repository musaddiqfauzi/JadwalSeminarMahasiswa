<!DOCTYPE html>
<html lang="en">

<head>
	<title>Jadwal Seminar | Register</title>
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

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <img src="assets/images/Logo-TE-02.png" alt="" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Register</h4>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="nim">NIM</label>
                                <input type="text" name="nim" class="form-control" id="nim" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="username">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" id="username" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="email">Email Unsyiah</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="">
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="">
                            </div>
                            {{-- <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="Password" placeholder="">
                            </div> --}}
                            <button type="submit" class="btn btn-primary sweet-success mb-4">Daftar</button>
                        </form>
						<p class="mb-2">Sudah punya akun? <a href="/login" class="f-w-400">Masuk</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
