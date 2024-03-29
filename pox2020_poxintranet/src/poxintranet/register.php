<!DOCTYPE html>
<html lang="ko">
<head>
	<title>POX Intranet</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="static/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="static/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="static/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="static/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="static/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="static/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="static/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="static/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="static/css/util.css">
	<link rel="stylesheet" type="text/css" href="static/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form action="/api/signup" method="post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Sign up
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required" required>
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required" required>
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div>
							<a href="index" class="txt1">
                            [!] Do you already have an account?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="login100-form-btn">
							Sign up
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	<script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="static/vendor/animsition/js/animsition.min.js"></script>
	<script src="static/vendor/bootstrap/js/popper.js"></script>
	<script src="static/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="static/vendor/select2/select2.min.js"></script>
	<script src="static/vendor/daterangepicker/moment.min.js"></script>
	<script src="static/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="static/vendor/countdowntime/countdowntime.js"></script>
	<script src="static/js/main.js"></script>

</body>
</html>