<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$first_name = $_POST["first-name"];
			$last_name = $_POST["last-name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$confirm_password = $_POST["confirm-password"];

			if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
				echo "<p style='color:red;'>All fields are required.</p>";
			} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<p style='color:red;'>Invalid email format.</p>";
			} elseif($password != $confirm_password) {
				echo "<p style='color:red;'>Password and confirm password do not match.</p>";
			} else {
				echo "<p style='color:green;'>Registration successful!</p> <a href='login.php'>Click here to visit the login page</a>";
                
			}
		}