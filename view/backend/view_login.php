<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/backend/bootstrap4/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/backend/bootstrap4/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/backend/bootstrap4/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/backend/bootstrap4/css/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/backend/bootstrap4/css/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/backend/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/backend/bootstrap4/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/backend/bootstrap4/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	<style>
font-family: 'Lato', sans-serif;
font-family: 'Anton', sans-serif;
</style>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-55" style="font-family: 'Lato', sans-serif;font-weight: bold;">
						Đăng nhập
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Chưa nhập tài khoản">
						<input style="font-family: 'Lato', sans-serif;" class="input100" type="text" name="user" placeholder="Tài khoản">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Chưa nhập mật khẩu">
						<input style="font-family: 'Lato', sans-serif;" class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					

					<div class="contact100-form-checkbox m-l-4 text-center">
						<span class="txt1" style="font-family: 'Lato', sans-serif;">
							<?php if(isset($_GET["err"]))
							echo "Đăng nhập không thành công";
							?>
						</span>
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<button type="submit" class="login100-form-btn" style="font-family: 'Lato', sans-serif;font-weight: bold;">
							Đăng nhập
						</button>
					</div>

					

					

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="public/backend/bootstrap4/js/jquery-3.3.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public/backend/bootstrap4/js/popper.js"></script>
	<script src="public/backend/bootstrap4/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="public/backend/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="public/backend/bootstrap4/js/main.js"></script>

</body>
</html>