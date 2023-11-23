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
	@vite('resources/css/app.css')
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

	<div class="limiter font-lexend">
		<div class="container-login100" style="background-image: url('{{ asset('images/bg-01.jpg') }}')">
			<div class="wrap-login100">

				<div class="content-left" style="background-image: url('{{ asset('images/sisik-9-min-b.jpg') }}');">
					<!-- Content for the left side -->
				</div>

				<form class="login100-form validate-form" action="{{ url('/masuk') }}" method="post">
					@csrf
					<span class="login100-form-title p-b-34 p-t-27">
						Selamat Datang
					</span>
					{{-- <label for="" class="text-[22px]">NIK</label> --}}
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="nik">
						<span class="focus-input100 " data-placeholder="NIK"></span>
					</div>

					{{-- <label for="" class="text-[22px]">Kata Sandi</label> --}}
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100 " data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Masuk
						</button>
					</div>
					<div class="mt-6 container-login100-form-btn">
						<p class="text-black">Belum mempunyai akun?
							<a href="{{url('daftar')}}" class=" text-blue-700 hover:opacity-60">Daftar</a>
						</p>
					</div>
				</form>
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
	<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>