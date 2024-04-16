<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>USER Settings page</title>
	<link rel="stylesheet" type="text/css" href="assets/set.css">
	<link rel="stylesheet" type="text/css" href="assets/home.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
	 <nav class="navbar">
    <div class="contents">
      <div class="logo"><a href="home.php"><img src="assets/ABCDK.jpg"></a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="home.php" class="home-active">Home</a></li>
        <li><a href="show.php">Shows</a></li>
        <li><a href="movie.php">Movies</a></li>
        <li><a href="set.php"><?php session_start(); echo $_SESSION['NAME'] ?></a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
<?php
include 'app/db_connection.php';
$name= $_SESSION['NAME'];
$sql = "SELECT * from users JOIN sub JOIN payment ON users.user_email=sub.email AND users.user_email=payment.user_email WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$name);
$result= $stmt->execute();
$stmt->bind_result($db_name,$db_email,$db_password,$db_phone,$db_city,$db_mail2,$db_type,$db_purchase,$db_money,$db_email3,$db_cardno,$db_paydate);
$display=$stmt->fetch();
if($display){
?>
		<div class="container1">

<div class="leftbox ">
     		<header class="setnav">
     			<a onclick="tabs(0)" class="tab" active>
     				<img src="assets/images/user.png">                Account Info.
     			</a>
     			<a onclick="tabs(1)" class="tab">
     				<img src="assets/images/subscribe.png">           Subscription Details
     			</a>
     			<a onclick="tabs(2)" class="tab">
     				<img src="assets/images/credit-card.png">         Payment Details
     			</a>
     			<a onclick="tabs(4)" class="tab" href="logout.php">
     				<img src="assets/images/logout.png" >             Sign Out
     			</a>
     		</header>
     	</div>
		<!-- <header class="setnav">
     			<a onclick="tabs(0)" class="settab" active>
     				<img src="assets/images/user.png">                Account Info.
     			</a>
     			<a onclick="tabs(1)" class="settab">
     				<img src="assets/images/subscribe.png">           Subscription Details
     			</a>
     			<a onclick="tabs(2)" class="settab">
     				<img src="assets/images/credit-card.png">         Payment Details
     			</a>
     			<a onclick="tabs(4)" class="settab" href="logout.php">
     				<img src="assets/images/logout.png" >             Sign Out
     			</a>
</header> -->
     <div class="con">
     	<div class="rightbox">
     		<div class="profile tabshow">
     			<h1>Account Information</h1><br><br>
     			<h2>Full Name</h2>
     			<input type="text" class="input" value="<?php echo $db_name;?>" readonly>
     			<h2>Email</h2>
     			<input type="text" class="input" value="<?php echo $db_email;?>" readonly>
     			<h2>City</h2>
     			<input type="text" class="input" value="<?php echo $db_city;?>" readonly>
     			<h2>Phone</h2>
     			<input type="text" class="input" value="<?php echo $db_phone;?>" readonly>
     			<h2>Password</h2>
     			<input type="password" class="input" value="<?php echo $db_password;?>" readonly>
          <br><br>
          <button type="submit"><a href="update.php" color="white">Update</a></button>
     		</div>
     		<div class="subscription tabshow">
     			<h1>Subscription Details</h1><br><br>
     			<h2>Subscription Type</h2>
     			<input type="text" class="input" value="<?php echo $db_type;?>" readonly>
     			<h2>Purchase Date</h2>
     			<input type="text" class="input" value="<?php echo $db_purchase;?>" readonly>
     			
     			<h2>Amount</h2>
     			<input type="text" class="input" value="<?php echo $db_money;?>" readonly>
     		</div>
			 <div class="payment tabshow">
     			<h1>Payment Information</h1><br><br>
     			<h2>Account Name</h2>
     			<input type="text" class="input" value="<?php echo $db_name;?>" readonly>	
     			<h2>Card Number</h2>
     			<input type="text" class="input" value="<?php echo $db_cardno;?>" readonly>
     			<h2>Date</h2>
     			<input type="text" class="input" value="<?php echo $db_paydate;?>" readonly>
     		</div>
     	</div>
		</div>
		 
     </div>
<?php }?>
<script type="text/javascript">
	const tabBtn = document.querySelectorAll(".tab");
	const tab = document.querySelectorAll(".tabshow");
function tabs(panelIndex){
	tab.forEach(function(node){
		node.style.display = "none";
	});
tab[panelIndex].style.display = "block";
}
tabs(0);
</script>
<script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$(".tab").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
	})
</script>
<script src="main.js"></script>
</body>
</html>