<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome.min.css') }}"> 
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/material-design-iconic-font.min.css') }}">
	
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{ asset('images/bg-01.jpg') }}')">
			<div class="wrap-login100">
				<form class="login100-form-reg validate-form">


					<span class="login100-form-title p-b-34 p-t-27">
						Selamat Datang
					</span>

					<div class="wrap-input100-reg validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100" data-placeholder="NIK"></span>
					</div>

                    <div class="wrap-input100-reg validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="Name">
						<span class="focus-input100" data-placeholder="Nama"></span>
					</div>

					<div class="wrap-input100-reg validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

                    <div class="wrap-input100-reg validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="Conpass">
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
                <div class="content-left" style="background-image: url('{{ asset('images/sisik-9-min-b.jpg') }}');">
                    <!-- Content for the left side -->
                </div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	{{-- <script src="vendor/animsition/js/animsition.min.js"></script> --}}
<!--===============================================================================================-->
	<script src="{{ asset('js/popper.js') }}"></script>
	{{-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> --}}
<!--===============================================================================================-->
	{{-- <script src="vendor/select2/select2.min.js"></script> --}}
<!--===============================================================================================-->
	{{-- <script src="vendor/daterangepicker/moment.min.js"></script> --}}
	{{-- <script src="vendor/daterangepicker/daterangepicker.js"></script> --}}
<!--===============================================================================================-->
	{{-- <script src="vendor/countdowntime/countdowntime.js"></script> --}}
<!--===============================================================================================-->
	<script src="{{ asset('main.js') }}"></script>

</body>
</html>