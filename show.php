<!DOCTYPE html>
<html>

<head>
    <title>Home-ABCDK</title>
    <link rel="stylesheet" type="text/css" href="assets/movie.css">
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

    <!-- shows -->
    <section class="movies" id="movies">
        <!-- movies container -->
        <div class="movies-container">
            
            <!-- box 1 -->
            <div class="box">
                <div class="box-img">
                    <a href="moon.php">
                    <img src="https://images3.alphacoders.com/123/1235846.png">
                </div>
                    <h3>Moon Knight</h3>
                </a>
                <span>Action fiction | 1 season</span>
            </div>
            
            <!-- box 2 -->
                <div class="box">
                    <div class="box-img">
                        <a href="mirzapur.php">
                        <img src="https://static.toiimg.com/photo/msid-78801772/Mirzapur.jpg?78801772">
                    </div>
                        <h3>Mirzapur</h3>
                    </a>
                    <span>Thriller | 2 seasons</span>
                </div>

            <!-- box 3 -->
            <div class="box">
                <div class="box-img">
                    <a href="loki.php">
                    <img src="https://i.pinimg.com/736x/98/5b/12/985b12110e5edb673b117486359c82ee.jpg">
                </div>
                    <h3>LOKI</h3>
                </a>
                <span>Superhero | 1 season</span>
            </div>

            <!-- box 4 -->
            <div class="box">
                <div class="box-img">
                    <a href="loser.php">
                    <img src="https://www.pinkvilla.com/files/styles/celebrity-listing/public/loser_2_web_series.jpg?itok=BOHAUXvg">
                </div>
                    <h3>LOSER</h3>
                </a>
                <span>Indian drama series | 1 season</span>
            </div>
            <!-- box-5 -->
            <div class="box">
                <div class="box-img">
                    <a href="hanuman.php">
                    <img src="https://1.bp.blogspot.com/-19zNWS3IKEE/YR_6qjlM7DI/AAAAAAAE2Z0/ptLWgDXa5UgHfTNxF44Euph3B4UXOA8gQCLcBGAsYHQ/s1087/iloh_poster_2b.jpg">
                </div>
                    <h3>The Legend of Hanuman</h3>
                </a>
                <span> Animation | 2 seasons</span>
            </div>
            <!-- box 6 -->
            <div class="box">
                <div class="box-img">
                    <a href="sgames.php">
                    <img src="https://republic-imagekit.azureedge.net/republic-prod/stories/images/15320057195b508d576514d.jpg">
                </div>
                    <h3>Sacred Games</h3>
                </a>
                <span> Thriller | 2 seasons</span>
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