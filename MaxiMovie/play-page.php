<?php

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
    <title>Jumanji: Welcome to the Jungle</title>
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
                <a href="maximovie.php" class="nav-link nav-active">
                    <i class='bx bx-home'></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class='bx bxs-hot'></i>
                    <span class="nav-link-title">Popular</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class='bx bx-compass'></i>
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="#home" class="nav-link">
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
    <!--Play Movie Container-->
    <div class="play-container container">
        <!--play image-->
        <img src="assets/play-page/play-background.jpg" alt="" class="play-img">
        <!--play text-->
        <div class="play-text">
            <h2>Jumanji: Welcome to the Jungle</h2>
            <!--Ratings-->
            <div class="rating">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <!--Tags-->
            <div class="tags">
                <span>Action</span>
                <span>Adventure</span>
            </div>
            <!--Trailer Button-->
            <a href="#" class="watch-btn">
                <i class='bx bx-right-arrow'></i>
                <span>Watch the trailer</span>
            </a>
            <!--Play button-->
            <i class='bx bx-right-arrow play-movie'></i>
            <!--Video Container-->
            <div class="video-container">
                <!--Video Box-->
                <div class="video-box">
                    <iframe id="myvideo" src="https://www.youtube.com/embed/hzp5nZIX8u8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <!--Close video icon width="560" height="315"-->
                    <i class='bx bx-x close-video'></i>
                </div>
            </div>
        </div>
    </div>
    <!--About-->
    <div class="about-movie container">
        <h2>Jumanji: Welcome to the Jungle</h2>
        <p>Cuatro adolescentes encuentran un viejo videojuego que los absorbe y los transporta a una selva peligrosa, donde se convierten en personajes adultos y tienen que ir superando pruebas terribles para terminar el juego y regresar al mundo real.</p>
        <!--Movie Cast-->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="assets/play-page/cast1.jpg" alt="" class="cast-img">
                <span class="cast-title">Dwayne Johnson</span>
            </div>
            <div class="cast-box">
                <img src="assets/play-page/cast2.jpg" alt="" class="cast-img">
                <span class="cast-title">Karen Gillan</span>
            </div>
            <div class="cast-box">
                <img src="assets/play-page/cast3.jpg" alt="" class="cast-img">
                <span class="cast-title">Kevin Hart</span>
            </div>
            <div class="cast-box">
                <img src="assets/play-page/cast4.jpg" alt="" class="cast-img">
                <span class="cast-title">Jack Black</span>
            </div>
            <div class="cast-box">
                <img src="assets/play-page/cast5.jpg" alt="" class="cast-img">
                <span class="cast-title">Nick Jonas</span>
            </div>
            <div class="cast-box">
                <img src="assets/play-page/cast6.jpg" alt="" class="cast-img">
                <span class="cast-title">Madison Isemas</span>
            </div>

        </div>
        <!--Download-->
        <div class="download">
            <h2 class="download-title">Download Movie</h2>
            <div class="download-link">
                <a href="https://www.mediafire.com/file/cvx15qbad9e2zal/Jumanji_En_La_Selva.mp4/file" target="_blank">Download</a>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; All Right Reserved</p>
    </div>
    <!--link swiper files-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--link to js-->
    <script src="assets/js/main-maxi.js"></script>
</body>

</html>