<?php
// Check if the form was submitted
if (isset($_POST['login'])) {
	// Retrieve form data
	$email = $_POST['email'];
	$password = $_POST['password'];
}
	// Validate form data
	if (empty($email) || empty($password)) {
		header("Location: index.php?error=1");
		exit();
	}
