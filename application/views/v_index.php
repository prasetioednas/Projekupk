<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pembayaran SPP || Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/bpm.jpg');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animate/animate.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animsition/css/animsition.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/daterangepicker/daterangepicker.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="<?= site_url('admin/cekLogin'); ?>" method="POST">
					<span class="login100-form-title p-b-32">
						Pembayaran SPP
					<p>SMK BINA PUTRA MANDIRI</p>
					</span>


					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/animsition/js/animsition.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/bootstrap/js/popper.js');?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/daterangepicker/moment.min.js');?>"></script>
	<script src="<?= base_url('assets/vendor/daterangepicker/daterangepicker.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/countdowntime/countdowntime.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/js/main.js');?>"></script>
	<script src="<?= base_url()?>/assets/js/sweetalert2.all.min.js"></script>

</body>
</html>