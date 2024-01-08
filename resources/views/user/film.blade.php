<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GetMovie</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{asset('')}}CSS/film.css" rel="stylesheet" />
    </head>
    <body>
        <body>
            <header>
               <nav class="navbar">
                  <div class="navbar-brand">GetMovie</div>
                    <ul class="navbar-nav">
                         <li class="nav-item"><a href="#">Home</a></li>
                         <li class="nav-item"><a href="#movie">Movie</a></li>
                         <li id="premium" class="nav-item"><a href="premium">Premium</a></li>
                         <li id="login" class="nav-item"><a href="login">Login</a></li>
                         <li id="register" class="nav-item"><a href="register">Register</a></li>
            </ul>
        </nav>
        </header>
        <div class="swipe">
        <div class="main-text">
                <div class="heading">
                    <h3>FAST X</h3>
                    <div class="class-button">    
                    <a class="main-btn" href="#">Nonton Sekarang</a>
                </div>
        </div>
        <div class="home-img">
        <video id="myVideo" autoplay muted loop class="product-img">
            <source src="{{asset('')}}video/fastx.mp4" alt="" type="video/mp4">
        </video>
        </div>
        </section>
        
    </body>