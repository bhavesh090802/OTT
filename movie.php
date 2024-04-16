<!DOCTYPE html>
<html>

<head>
  <title>Home-ABCDK</title>
  <!-- <link rel="stylesheet" type="text/css" href="assets/home.css"> -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/movie.css">
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

  <!-- movies -->
  <section class="movies" id="movies">
    <!-- movies container -->
    <!-- box 1 -->
    <div class="movies-container">
      <div class="box">
        <div class="box-img">
          <a href="RRR.php">
        <img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2020/03/25/899248-rrr-motion-poster-ss-rajamouli-ram-charan-jr-ntr.png">
        </div>
        <h3>RRR(Telugu)</h3>
        </a>
        <span>184 min|Action|Drama</span>
      </div>

      <!-- box 2 -->
      <div class="box">
        <div class="box-img">
          <a href="kgf2.php">
          <img src="https://www.pinkvilla.com/files/styles/amp_metadata_content_image/public/kgf_os_main.jpeg">
        </div>
          <h3>KGF 2(Kannada)</h3>
        </a>
        <span>176 min|Action|Drama</span>
      </div>

      <!-- box 3 -->
      <div class="box">
        <div class="box-img">
        <a href="vikram.php">

          <img src="https://www.newsbricks.com/root_upld/general-news/2021/04/19898/org_51367202104071714.jpg">
        </div>
          <h3>Vikram (Tamil)</h3>
        </a>
        <span>173 min|Action|Mystery</span>
      </div>

      <!-- box 4 -->
      <div class="box">
        <div class="box-img">
          <a href="don.php">
          <img src="https://images.indianexpress.com/2022/05/don-siva.jpg">
        </div>
          <h3>Don</h3>
        </a>
        <span>121 min|Drama|Action</span>
      </div>
      <!-- box-5 -->
      <div class="box">
        <div class="box-img">
          <a href="beast.php">
          <img src="https://www.filmibeat.com/img/2022/05/x1-1651664905.jpg.pagespeed.ic.lxFtPfa9zj.jpg">
        </div>
          <h3>Beast</h3>
        </a>
        <span>155 min|Action|Crime</span>
      </div>
      <!-- box 6 -->
      <div class="box">
        <div class="box-img">
          <a href="sundar.php">
          <img src="https://www.pinkvilla.com/imageresize/ante_sundaraniki_release_date_poster.jpg?width=752&format=webp&t=pvorg">
        </div>
          <h3>Ante Sundaraniki</h3>
        </a>
        <span>180 min|Comedy|Rom-com</span>
      </div>
      
      <!-- box 7 -->
      <div class="box">
        <div class="box-img">
          <h3>Avenger Endgame</h3>
          <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/avengersendgame_lob_mas_mob_01.jpg">
        </div>
        <a href="endgame.php">
        </a>
        <span>182 min|Action|Sci-fi</span>
      </div>
      
      <!-- box 8 -->
      <div class="box">
        <div class="box-img">
          <a href="nwh.php">
          <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/hc_940x529/public/media/image/2021/11/spider-man-no-way-home-2543495.jpg?itok=d4hyKAvQ">
        </div>
          <h3>Spider-man: No Way Home</h3>
        </a>
        <span>148 min|Action|Adventure</span>
      </div>

      <!-- box 9 -->
      <div class="box">
        <div class="box-img">
          <a href="mom.php">
          <img src="https://pbs.twimg.com/media/FEALo09X0AAiaeQ.jpg:large">
        </div>
          <h3>Doctor Strange in the Multiverse of Madness</h3>
        </a>
        <span>126 min|Action|Adventure</span>
      </div>
    </div>
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