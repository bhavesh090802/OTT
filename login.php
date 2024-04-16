<?php
include 'app/db_connection.php';
session_start();
if (isset($_POST['submit'])) {
	$Email = $_POST['user_email'];
	$Password = $_POST['user_password'];

	$sql = "SELECT username,user_email,user_password FROM users WHERE user_email=? ";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $Email);
	$stmt->execute();

	$stmt->bind_result($db_name, $db_email, $db_pass);
	if ($stmt->fetch()) {
		$pass_decode = password_verify($Password, $db_pass);
		if ($pass_decode) {
			echo "Login Successful";
			$_SESSION['NAME'] = $db_name;
			header("location:home.php");
		} else {
			echo "Incorrect Password ";
		}
	} else {
		echo "Incorrect email";
	}
	// echo $db_usn;
	// echo $db_pass;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - ABCDK</title>
	<link rel="stylesheet" href="assets/style1.css" media="all" type="text/css">
</head>

<body>


	<header class="showcase">


		<div class="logo">
			<img src="assets/ABCDK.jpg">
		</div>

		<div class="showcase-content">
			<div class="formm">
				<form action="login.php" method="post">
					<h2>LOGIN</h2>

					<div class="info">
						<input type="email" class="email" placeholder="Enter email" id="email" name="user_email" required>


						<input type="password" class="email" placeholder="Enter password" id="password" name="user_password" required>
					</div>
					<div class="btn">
						<button class="btn-primary" type="submit" name="submit">Login</button>
					</div>
				</form>

			</div>

			<div class="signup">
				<p>New to ABCDK?</p>
				<a href="signup.php">Sign Up</a>
			</div>
		</div>
	</header>

</body>

</html>