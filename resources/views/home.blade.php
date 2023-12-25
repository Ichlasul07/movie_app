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
        <link href="{{asset('')}}CSS/home.css" rel="stylesheet" />
    </head>
    <body>
    <header>
       <nav class="navbar">
          <div class="navbar-brand">GetMovie</div>
            <ul class="navbar-nav">
                 <li class="nav-item"><a href="#">Home</a></li>
                 <li class="nav-item"><a href="#movie">Movie</a></li>
                 <li id="premium" class="nav-item"><a href="premium">Premium</a></li>
                 <li id="login" class="nav-item"><a href="login">Login</a></li>
    </ul>
</nav>
</header>
<div class="swipe">
<div class="main-text">
        <div class="heading">
            <h3>MULAI BERLANGGANAN SEKARANG <br> DAN TONTON FILM FAVORITMU</h3>
            <div class="class-button">    
            <a class="main-btn" href="#">Get Premium</a>
        </div>
</div>
<swiper-container class="mySwiper" keyboard="true" space-between="30" pagination="true" pagination-clickable="true"
    navigation="false" autoplay-delay="2500" autoplay-disable-on-interaction="false">
    <swiper-slide><img src="{{asset('')}}image/ff10home.jpg" alt="" class="home-img"> </swiper-slide>
    <swiper-slide><img src="{{asset('')}}image/dilans.png" alt="" class="home-img"></swiper-slide>
    <swiper-slide><img src="{{asset('')}}image/insihomee.png" alt="" class="home-img"></swiper-slide>
  </swiper-container>
</div>
</section>

    <section id= "movie" class="shop-container">
        <h2 class="section-tittle">Movie</h2>

        <div class="shop-content">
            <!-- box1 -->
             <div class="product-box">
                <img src="{{asset('')}}image/ff10.jpg" alt="" class="product-img">
                <a href="#">Fast and Furious X</a></li><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked">  5/5</span>
                <i class='bx bx-shopping-bag add-chart'></i>
             </div>

            <!-- box 2 -->
            <div class="product box">
            <img src="{{asset('')}}image/dilan.jpg" alt="" class="product-img">
                <h2 class="product-title">Dilan 1990</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star">  4/5</span>
                <i class='bx bx-shopping-bag add-chart'></i>

             </div>

             <!-- box3 -->
             <div class="product box">
                <img src="{{asset('')}}image/insidious.jpg" alt="" class="product-img">
                <h2 class="product-title">insidious The Red Door</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star">  3/5</span>
                <i class='bx bx-shopping-bag add-chart'></i>
             </div>
</div>
</section>  
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>   
    </body>
</html>
