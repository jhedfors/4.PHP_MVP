<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login and Registration</title>
		<link rel="stylesheet" href="/assets/css/master.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="login">
				<p class="borderline">Log In</p>
				<form action="/login/welcome" method="post">
					<label for="email">Email:</label>
					<input type="email" name="email">
					<label for="password">Password:</label>
					<input type="password" name="password">
					<input class="loginreg" type="submit" value="Login">
				</form>
			</div>
			<div class="registration">
				<p class="borderline">Registration</p>
				<form action="/Users/register" method="post">
					<label for="first_name">First Name:</label>
					<input type="text" name="first_name">
					<label for="last_name">Last Name:</label>
					<input type="text" name="last_name">
					<label for="email">Email:</label>
					<input type="text" name="email">
					<label for="password">Password:</label>
					<input type="text" name="password">
					<label for="confirm_password">Confirm Password:</label>
					<input type="text" name="confirm_password">
					<input class="loginreg" type="submit" value="Register">
				</form>

			</div>

		</div>

	</body>
</html>
