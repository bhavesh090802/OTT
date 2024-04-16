<!DOCTYPE html>
<html>

<head>
  <title>Home-ABCDK</title>
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
        <img src="https://ntvb.tmsimg.com/assets/p19575003_b_h8_aa.jpg?w=1280&h=720">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>LOKI (Ep-1)</h1>
          <a href="l1.php." class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- Box-2 -->
      <div class="swiper-slide container">
        <img src="https://www.comingsoon.net/assets/uploads/2021/06/Loki-Season-1-Episode-2-.jpeg">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>LOKI (Ep-2)</h1>
          <a href="l2.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- Box-3 -->
      <div class="swiper-slide container">
        <img src="https://static-koimoi.akamaized.net/wp-content/new-galleries/2021/06/loki-episode-3-love-is-a-dagger-bisexual-twist-is-sylvie-the-enchantress-weve-been-waiting-for-007.jpg">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>LOKI (Ep-3)</h1>
          <a href="l3.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- Box-4 -->
      <div class="swiper-slide container">
        <img src="https://newsdio.com/wp-content/uploads/2021/07/BuzzFeed-1.jpg">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>LOKI (Ep-4)</h1>
          <a href="l4.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- Box-5-->
      <div class="swiper-slide container">
        <img src="https://assets1.ignimgs.com/2021/05/12/loki-poster-2-1620828778337_160w.jpg?width=1280">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>LOKI (Ep-5)</h1>
          <a href="l5.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- Box-6 -->
      <div class="swiper-slide container">
        <img src="https://static3.srcdn.com/wordpress/wp-content/uploads/2021/07/Loki-Episode-6-Loki-and-Sylvie-With-Swords.jpg?q=50&fit=crop&w=960&h=500&dpr=1.5">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>LOKI (Ep-6)</h1>
          <a href="l6.php" class="play">
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