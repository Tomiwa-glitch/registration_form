<?php 
	session_start();
	if(isset($_SESSION['userlogin'])) {
		header("Location: index.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

		<div class="login-container">
			<div class="logo-wrapper">
				<div class="logo-container">
					<img src="img/21baseWeb.png" alt="21bsae logo">
				</div>
			</div>

				<div class="login-form">
					<form method="POST" class="">
						<div class="username-input data-input">
							<div class="user-icon">
								<span class="fa fa-user"></span>
							</div>
							<input type="text" name="username" class="user-name" id="username" placeholder="Username" required>
						</div>
						
						<div class="password-input data-input"> 
							<div class="user-icon">
								<span class="fa fa-key"></span>
							</div>
							<input type="password" name="password" class="pass-word" id="password" placeholder="Password" required >
						</div>

						<div class="remember-me">
							<div class="rememberchck">
								<input type="checkbox" id="customControlInline" name="rememberME">
							</div>
							<div class="textp"> <p for="customControlInline">Remember me</p></div>
						</div>

						<div class="submit-button">
							<button class="login_btn" name="create" id="submit" type="button"> Login </button>
						</div>

						<div class="form-footer">
							<p class="signup"> Don't have an account? <a href="registration.php"> Sign Up </a></p>
							<p class="forgotPassword"><a href="#"> Forgot your password? </a></p>
						</div>
					</form>
				</div>
		</div>
	









	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

<script>
	$(function() {
		$("#submit").click(function(e) {
		
			var valid = this.form.checkValidity();

			if(valid){
				var username = $('#username').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data: {username: username, password: password},
				success: function(data) {
					if($.trim(data) === "1") {
						setTimeout('window.location.href = "index.php"', 2000);
					}
				},
				error: function(data) {
					alert(data);
				}
			});


		});
	});
 </script>
</body>
</html>