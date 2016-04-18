<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login and Registration</title>
		<link rel="stylesheet" href="/assets/css/master.css">
	</head>
	<body>
		<?php
		$errors_reg = $this->session->userdata('errors_reg');
		$errors_login = $this->session->userdata('errors_login');
		$this->session->unset_userdata('errors_reg');
		$this->session->unset_userdata('errors_login');
		 ?>
		<div class="wrapper">
			<div class="login">
				<p class="borderline">Log In</p>
				<?php echo form_open('login_form'); ?>
				<form action="/login/welcome" method="post">
					<label for="email">Email:</label>
					<input type="email" name="email">
					<label for="password">Password:</label>
					<input type="password" name="password">
					<input class="loginreg" type="submit" value="Login">
				</form>
				<p class="errors">
					<?php
					if ($errors_login != null) {
						foreach ($errors_login as $key => $value) {
							echo "$value<br>";
						}
					}
					?>
				</p>
			</div>
			<div class="registration">
				<p class="borderline">Registration</p>
				<?php echo form_open('registration_form'); ?>
				<form action="/Login/register" method="post">
					<label for="first_name">First Name:</label>
					<input type="text" name="first_name">
					<label for="last_name">Last Name:</label>
					<input type="text" name="last_name">
					<label for="email">Email:</label>
					<input type="text" name="email">
					<label for="password">Password:</label>
					<input type="password" name="password">
					<label for="confirm_password">Confirm Password:</label>
					<input type="password" name="confirm_password">
					<input class="loginreg" type="submit" value="Register">
				</form>
				<p class="errors">
					<?php
					if ($errors_reg!= null) {
						foreach ($errors_reg as $key => $value) {
							echo "$value<br>";
						}
					}
					?>
				</p>
			</div>
		</div>
	</body>
</html>
