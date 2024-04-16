<!DOCTYPE html>
<html>

<head>
  <title>LOSER</title>
  <link rel="stylesheet" type="text/css" href="assets/home.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
  <section class="home swiper" id="home">
    <div class="swiper-wrapper">
      <!-- box-1 -->
      <div class="swiper-slide container">
        <img src="https://m.media-amazon.com/images/M/MV5BZWNlN2YzYTUtNGI1NS00OTU5LWI2YzItYjNjNjdiYjQ1NzgzXkEyXkFqcGdeQXVyOTcwODI5MTg@._V1_.jpg">
        <div class="home-text">
            <h1>LOSER</h1>
            <span>Season 1</span>
          <a href="lr1.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </section>

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
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <!--Link to Cutom JS-->
  <script src="main.js"></script>

</body>
</html>