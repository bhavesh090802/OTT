<!DOCTYPE html>
<html>

<head>
  <title>Home-ABCDK</title>
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
        <li><a href="set.php"><?php session_start();
                              echo $_SESSION['NAME'] ?></a></li>
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
        <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/avengersendgame_lob_mas_mob_01.jpg">
        <div class="home-text">
          <span>Marvel Universe</span>
          <h1>Avenger<br> Endgame</h1>
          <a href="endgame.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- box 2 -->
      <div class="swiper-slide container">
        <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/hc_940x529/public/media/image/2021/11/spider-man-no-way-home-2543495.jpg?itok=d4hyKAvQ">
        <div class="home-text">
          <span>Marvel Universe</span>
          <h1>Spider-man:<br> No Way Home</h1>
          <a href="nwh.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <!-- box 3 -->
      <div class="swiper-slide container">
        <img src="https://s2.dmcdn.net/v/TV6MV1Xn1O4GBjOpW/x1080">
        <div class="home-text">
          <span>Marvel Universe</span>
          <h1>Doctor Strange</h1><br>
          <h4>in the</h4><br>
          <h1>Multiverse of Madness</h1>
          <a href="mom.php" class="play">
            <i class='bx bx-play'></i>
          </a>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </section>

  <!-- movies -->
  <section class="movies" id="movies">
    <h2 class="heading">Movies</h2>
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
    </div>
  </section>

  <section class="shows" id="shows">
    <h2 class="heading">Popular Shows</h2>
    <!-- Shows Container -->
    <div class="show-container swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide box">
          <div class="box-img">
            <a href="moon.php">
            <img src="https://images3.alphacoders.com/123/1235846.png">
          </div>
            <h3>Moon Knight</h3>
          </a>
          <span>Action fiction | 1 season</span>
        </div>

        <!-- box 2 -->
        <div class="swiper-slide box">
          <div class="box-img">
            <a href="mirzapur.php">
            <img src="https://static.toiimg.com/photo/msid-78801772/Mirzapur.jpg?78801772">
          </div>
            <h3>Mirzapur</h3>
          </a>
          <span>Thriller | 2 seasons</span>
        </div>

        <!-- box 3 -->
        <div class="swiper-slide box">
          <div class="box-img">
            <a href="loki.php">
            <img src="https://i.pinimg.com/736x/98/5b/12/985b12110e5edb673b117486359c82ee.jpg">
          </div>
            <h3>LOKI</h3>
          </a>
          <span>Superhero | 1 season</span>
        </div>

        <!-- box 4 -->
        <div class="swiper-slide box">
          <div class="box-img">
            <a href="loser.php">
            <img src="https://www.pinkvilla.com/files/styles/celebrity-listing/public/loser_2_web_series.jpg?itok=BOHAUXvg">
          </div>
            <h3>LOSER</h3>
          </a>
          <span>Indian drama series | 1 season</span>
        </div>
        <!-- box-5 -->
        <div class="swiper-slide box">
          <div class="box-img">
            <a href="hanuman.php">
            <img src="https://1.bp.blogspot.com/-19zNWS3IKEE/YR_6qjlM7DI/AAAAAAAE2Z0/ptLWgDXa5UgHfTNxF44Euph3B4UXOA8gQCLcBGAsYHQ/s1087/iloh_poster_2b.jpg">
          </div>
            <h3>The Legend of Hanuman</h3>
          </a>
          <span> Animation | 2 seasons</span>
        </div>
        <!-- box 6 -->
        <div class="swiper-slide box">
          <div class="box-img">
            <a href="sgames.php">
            <img src="https://republic-imagekit.azureedge.net/republic-prod/stories/images/15320057195b508d576514d.jpg">
          </div>
            <h3>Sacred Games</h3>
          </a>
          <span> Thriller | 2 seasons</span>
        </div>
      </div>
    </div>
  </section>
  <section class="footer">
    <a href="#" class="logo">
      <i class='bx bxs-movie'></i>ABCDK
    </a>
    <div class="social">
      <a href="https://www.facebook.com" target="blank"><i class='bx bxl-facebook'></i></a>
      <a href="https://twitter.com" target="blank"><i class='bx bxl-twitter'></i></a>
      <a href="https://www.instagram.com" target="blank"><i class='bx bxl-instagram'></i></a>
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