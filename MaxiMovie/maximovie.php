﻿<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Por favor debes iniciar Sesión");
                window.location = "index.php";
            </script>
        ';
    session_destroy();
    die();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxiMovie - Darcarga tus peliculas favoritas!</title>
    <!-- Link to css-->
    <link rel="stylesheet" href="assets/css/styles-maxi.css">
    <!-- Link Swiper CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--Fav icon-->
    <link rel="shortcut icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <!--box icon-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!--header-->
    <header>
        <!--nav-->
        <div class="nav container">
            <!--Logo-->
            <a href="maximovie.php" class="logo">
                Maxi<span>Movie</span>
            </a>
            <!-- Search Box -->
            <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="search movie">
                <i class='bx bx-search'></i>
            </div>
            <!-- User -->
            <a href="#" class="user">
                <img src="assets/img/user.png" alt="" class="user-img">
            </a>
            <!-- NavBar -->
            <div class="navbar">
                <a href="#home" class="nav-link nav-active">
                    <i class='bx bx-home'></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#popular" class="nav-link">
                    <i class='bx bxs-hot'></i>
                    <span class="nav-link-title">Popular</span>
                </a>
                <a href="#movies" class="nav-link">
                    <i class='bx bx-compass'></i>
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="play-page.php" class="nav-link">
                    <i class='bx bx-tv'></i>
                    <span class="nav-link-title">Movies</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class='bx bx-heart'></i>
                    <span class="nav-link-title">Favourite</span>
                </a>
                <a href="php/cerrar_sesion.php" class="nav-link">
                    <i class='bx bx-door-open'></i>
                    <span class="nav-link-title">Log Out</span>
                </a>
            </div>
        </div>
    </header>
    <!-- Home -->
    <section class="home container" id="home">
        <!--Home image-->
        <img src="assets/img/home-background.png" alt="" class="home-img">
        <!-- Home Text -->
        <div class="home-text">
            <h1 class="home-title">Hitman's Wife's <br>Bodyguard</h1>
            <p>Releasing 10 April</p>
            <a href="#" class="watch-btn">
                <i class='bx bx-right-arrow'></i>
                <span>Watch the trailer</span>
            </a>
        </div>
    </section>
    <!-- Home End -->
    <!-- Popular Section Start-->
    <section class="popular container" id="popular">
        <!-- Heading -->
        <div class="heading">
            <h2 class="heading-title">Popular Movies</h2>
            <!-- Swiper btns -->
            <div class="swiper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <!-- Content -->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">
                <!-- Movies Box 1 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular-movie-1.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Spider-Man: No Way Home</h2>
                            <span class="movie-type">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 2 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular-movie-2.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Jungle Cruise</h2>
                            <span class="movie-type">Action/Adventure</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 3 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular-movie-3.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Loki</h2>
                            <span class="movie-type">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 4 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular-movie-4.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Squid-Game</h2>
                            <span class="movie-type">Action/Drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 5 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular-movie-5.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">The Falcon And The Winter Soldier</h2>
                            <span class="movie-type">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 6 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular-movie-6.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Hawkeye</h2>
                            <span class="movie-type">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 7 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular-movie-7.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Agents of <br>S.H.I.E.L.D</h2>
                            <span class="movie-type">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 8 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular-movie-8.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">The Flash</h2>
                            <span class="movie-type">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Popular Section End-->
    <!-- Movies Section Start-->
    <section class="movies container" id="movies">
        <!-- Heading -->
        <div class="heading">
            <h2 class="heading-title">Movies And Shows</h2>
        </div>
        <!-- Movies Content -->
        <div class="movies-content">
            <!-- Movies Box 1 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="assets/img/movie-1.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Jumanji: Welcome to <br>the Jungle</h2>
                        <span class="movie-type">Action/Comedy</span>
                        <a href="play-page.php" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 2 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="assets/img/movie-2.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Hitman's Wife's Bodyguard</h2>
                        <span class="movie-type">Action/Comedy</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 3 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="assets/img/movie-3.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Shang Shi</h2>
                        <span class="movie-type">Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 4 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="assets/img/movie-4.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Eternals</h2>
                        <span class="movie-type">Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 5 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="assets/img/movie-5.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Spectre</h2>
                        <span class="movie-type">Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 6 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="assets/img/movie-6.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Honey Heist</h2>
                        <span class="movie-type">Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 7 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="assets/img/movie-7.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">The Wolverine</h2>
                        <span class="movie-type">Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 8 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="assets/img/movie-8.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Johnny English</h2>
                        <span class="movie-type">Action/Comedy</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Movies Section End-->
    <!-- Next Page -->
    <div class="next-page">
        <a href="#" class="next-btn">Next Page</a>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; All Right Reserved</p>
    </div>
    <!-- Link Swiper JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--link to js-->
    <script src="assets/js/main-maxi.js"></script>
</body>

</html>