<!DOCTYPE html>
<html>
<head>
	<title>Registration and Login Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<?php
		// Display confirmation message if form was submitted successfully
		if (isset($_POST['register'])) {
			echo "<p>Thank you for registering!</p>";
		}
	?>
	<form method="POST" action="">
		<label for="first_name">First Name:</label>
		<input type="text" name="first_name" required><br><br>

		<label for="last_name">Last Name:</label>
		<input type="text" name="last_name" required><br><br>

		<label for="email">Email Address:</label>
		<input type="email" name="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" required><br><br>

		<label for="confirm_password">Confirm Password:</label>
		<input type="password" name="confirm_password" required><br><br>

		<input type="submit" name="register" value="Register">
	</form>

	<h1>Login Form</h1>
	<?php
		// Display error message if login failed
		if (isset($_GET['error'])) {
			echo "<p>Invalid email or password. Please try again.</p>";
		}
	?>
	<form method="POST" action="login.php">
		<label for="email">Email Address:</label>
		<input type="email" name="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" required><br><br>

		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>
