<?php
include 'app/db_connection.php';

if (isset($_POST['next'])) {

	$email = $_POST['email'];
	$date = $_POST['date'];
	$type = $_POST['type'];
	$amount = $_POST['amount'];

	$sql = " INSERT into sub (email,type,purchase_date,amount) values (?,?,?,?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sssi", $email, $type, $date, $amount);
	$result = $stmt->execute();

	if ($result) {
		header('location:paynew.php');
	} else {
		echo 'Not Registered';
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="assets/sub.css">
	<title>Subscription</title>
</head>

<body>
	<div class="showcase">
		<div class="logo">
			<img src="assets/ABCDK.jpg" alt="">
		</div>
		<div class="wrapper">
			<form method="post" action="sub.php">
				<fieldset class="con">
					<legend>Subscription Type</legend>
					<br><br>
					<label for="email" class="data">Email</label><br><br>
					<input class="input" type="email" name="email" placeholder="Enter your Email" required><br><br>

					<label for="date" class="data">Starting from</label><br><br>
					<input class="input" type="text" name="date" value="<?php echo date('d/m/y'); ?>" readonly> <br><br><br>

					<label for="type" class="data">Type</label><br><br>
					<input class="radio" type="radio" name="type" value="Monthly">Monthly<br><br><br><br>


					<label for="amount" class="data">Quality</label><br><br>
					<div class="radio">
						<input class="radio" type="radio" name="amount" value="400" readonly>SD <br><br>


						<input class="radio" type="radio" name="amount" value="800" readonly>HD <br><br>


						<input class="radio" type="radio" name="amount" value="1200" readonly>FULL HD<br><br>
					</div>
					<div class="btn">
					<button type="submit" name="next" class="btn-primary"><B><I>Next</I></B></button><br><br><br>
					</div>
					<br>
				</fieldset>
			</form>
		</div>
	</div>
</body>

</html>