<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nama = $_POST['nama'];
			$email = $_POST['email'];

            // validasi data
			if(empty($nama) || empty($email)) {
				header('Location: 1error.php');
				exit;
			}

			$date = date('d/m/Y');
			$time = date('h:i:s a');
			
			echo "<h2>Welcome, $nama!</h2>";
			echo "<p>Email: $email</p>";
			echo "<p>Login time: $time, $date</p>";
		}
	?>
</body>
</html>
