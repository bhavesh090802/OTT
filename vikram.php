<!DOCTYPE html>
<html>

<head>
  <title>VIKRAM</title>
  <link rel="stylesheet" type="text/css" href="assets/home.css">
  <link rel="stylesheet" href="assets/plays.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
    
  <!-- play movie container -->
    <div class="play-container container">
        <!-- Play Image -->
        <video class="vid" loop="" autoplay="" controls="" width="800px" height="600px"  poster="https://www.newsbricks.com/root_upld/general-news/2021/04/19898/org_51367202104071714.jpg">
		<source src="assets/vikram.mp4" type="video/mp4">
	</video>
    </div>

  <section class="footer">
    <a href="#" class="logo">
      <i class='bx bxs-movie'></i>Movies
    </a>
    <div class="social">
      <a href="https://www.facebook.com/NetflixIN" target="blank"><i class='bx bxl-facebook'></i></a>
      <a href="https://twitter.com/netflixindia" target="blank"><i class='bx bxl-twitter'></i></a>
      <a href="https://www.instagram.com/netflix_in/" target="blank"><i class='bx bxl-instagram'></i></a>
    </div>
  </section>

  <div class="copy">
    <p>&#169; ABCDK ALL RIGHTS RESERVED</p>
  </div>


  <!--Link to Cutom JS-->
  <script src="main.js"></script>

</body>
</html>