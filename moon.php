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
        <img src="https://aiptcomics.com/wp-content/uploads/2022/01/moon-knight-poster-1.jpeg?ezimgfmt=rs:412x350/rscb1/ng:webp/ngcb1">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>Moon Knight (Ep-1)</h1>
          <a href="m1.php." class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- Box-2 -->
      <div class="swiper-slide container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzIxMzOVL7fkH7aPYKcJ7FQm9nqkyE3YDf5g&usqp=CAU">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>Moon Knight (Ep-2)</h1>
          <a href="m2.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- Box-3 -->
      <div class="swiper-slide container">
        <img src="https://www.disneyplusinformer.com/wp-content/uploads/2022/04/Moon-Knight-Episode-3-Poster-2-1-e1649959780102.jpg">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>Moon Knight (Ep-3)</h1>
          <a href="m3.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- Box-4 -->
      <div class="swiper-slide container">
        <img src="https://cdn.mos.cms.futurecdn.net/tVJwNn6kyBBeYxVVjjcqAA-1200-80.jpg">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>Moon Knight (Ep-4)</h1>
          <a href="m4.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- Box-5-->
      <div class="swiper-slide container">
        <img src="https://www.disneyplusinformer.com/wp-content/uploads/2022/04/Moon-Knight-Poster-Episode-5-1-e1651000114896.jpg">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>Moon Knight (Ep-5)</h1>
          <a href="m5.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- Box-6 -->
      <div class="swiper-slide container">
        <img src="https://mlpnk72yciwc.i.optimole.com/cqhiHLc.WqA8~2eefa/w:auto/h:auto/q:75/https://bleedingcool.com/wp-content/uploads/2022/05/FHM0220_106_comp_WTA_v0333.1041_R2.jpg">
        <div class="home-text">
          <span>Marvel Series</span>
          <h1>Moon Knight (Ep-6)</h1>
          <a href="m6.php" class="play">
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