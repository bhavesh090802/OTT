<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update of Information</title>
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

if(isset($_POST['update'])){
$name= $_SESSION['NAME'];
$ch_name = $_POST['name'];
$ch_country = $_POST['country'];
$ch_mobile = $_POST['mobile'];


$sql = "UPDATE users set username=?,CITY=?,PHONE=? where username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss",$ch_name,$ch_country,$ch_mobile,$name);
$result= $stmt->execute();
if($result){
  $_SESSION['NAME'] = $ch_name;
   header('location:set.php');
}else{
	header('location:update.php');

}
}
?>
<form method="post" action="update.php">
	<div class="con">
	<div class="rightbox">
     			<h1>Update Information</h1><br><br>
     			<h2>Full Name</h2>
     			<input type="text" class="input" name="name" placeholder="Enter Your New Name" required>
     			<h2>City</h2>
     			<input type="text" class="input" name="country" placeholder="Enter Your City"required>
     			<h2>Mobile</h2>
     			<input type="text" class="input" name="mobile" placeholder="Enter Your Mobile"required>
          <br><br>
     			<button name="update" type="submit">Update</button>
     	
	</div>
</form>
</body>
</html>