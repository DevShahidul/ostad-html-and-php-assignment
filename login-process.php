<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$email = $_POST["email"];
			$password = $_POST["password"];

			// Validation
			if(empty($email) || empty($password)) {
				echo "<p style='color:red;'>Both fields are required.</p>";
			} else {
				// Check database for user with matching email and password
				// Replace this code with your own database validation
				$valid_user = false;
				$first_name = "";
				if ($email == "user@example.com" && $password == "password") {
					$valid_user = true;
					$first_name = "John"; // Replace with database lookup
				}

				if ($valid_user) {
					// Redirect to welcome page
					header("Location: welcome.php?first_name=".$first_name);
					exit();
				} else {
					echo "<p style='color:red;'>Invalid login credentials.</p>";
				}
			}
		}