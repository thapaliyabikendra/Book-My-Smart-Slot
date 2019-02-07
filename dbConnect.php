<?php
			// Database credentials
			$servername = "127.0.0.1";
			$username = "root";
			$dbname = "nodemcu";
			$password = "root1234";
			// Create connection.
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
?>
