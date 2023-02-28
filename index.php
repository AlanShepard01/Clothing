<?php
include "system/init.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shrotcut icon" href="img/Wikipedia-Flags-JP-Japan-Flag.ico">
    <title>SAMURAI | clothing store</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="/">
                            <img src="img/header_logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="main-menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./">Home</a></li>
                            <li><a href="./clothing">Clothing</a></li>
                            <?php
                                // If the user is logged in, show the logout button
                                if (isset($_SESSION['logged_user'])) {
                                    echo '<li><a href="./logout">Logout</a></li>';
                                } else {
                                    echo '<li><a href="./sign">Login</a></li>';
                                }
                            ?>
                            <li><a href="./cart.php">Cart</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/1.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hs-text">
                        <h2>First Russian Streetwear brand</h2>
                        <a href="sign.html" class="primary-btn">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="img/about us.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="as-text">
                        <div class="section-title">
                            <h2>About the store</h2>
                        </div>
                        <p class="f-para">SAMURAI - IT IS A RUSSIAN STREETWEAR BRAND DOMINATED BY JAPANESE STREET STYLE</p>
                        <p class="s-para">OUR TEAM PUTS THEIR SOUL INTO EVERY PRODUCT THEY MAKE. WE ONLY USE BOLD DESIGNS THAT ARE UNLIKE OTHER BRANDS.
                            THE QUALITY OF OUR PRODUCTS IS ALWAYS TOP NOTCH.
                            PRICES DO NOT EXCEED THE NORM AND ARE FULLY JUSTIFIED</p>
                        <a href="#" class="primary-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="img/services/service-1.png" alt="">
                        <h4>High quality</h4>
                        <p>All our products comply with international quality standards.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="img/services/service-2.png" alt="">
                        <h4>Online support</h4>
                        <p>Our technical support works 24/7.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="img/services/service-3.png" alt="">
                        <h4>Fast delivery</h4>
                        <p>Delivery in Russia is carried out in 5 working days.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="portfolio-item set-bg large-item" data-setbg="img/portfolio/portfolio-1.jpg">
                        <div class="pi-hover">
                            <a href="img/portfolio/portfolio-1.jpg" class="search-icon image-popup"><i
                                    class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="portfolio-item set-bg" data-setbg="img/portfolio/portfolio-2.jpg">
                        <div class="pi-hover">
                            <a href="img/portfolio/portfolio-2.jpg" class="search-icon image-popup"><i
                                    class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item set-bg" data-setbg="img/portfolio/portfolio-3.jpg">
                                <div class="pi-hover">
                                    <a href="img/portfolio/portfolio-3.jpg" class="search-icon image-popup"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item set-bg" data-setbg="img/portfolio/portfolio-4.jpg">
                                <div class="pi-hover">
                                    <a href="img/portfolio/portfolio-4.jpg" class="search-icon image-popup"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-option">
                        <div class="fo-logo">
                            <a href="#">
                                <img src="img/header_logo.png" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Address: Omsk, Russia</li>
                            <li>Phone: +79083146069</li>
                        </ul>
                    </div>
                </div>
            <div class="copyright-text"><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());
</script> 
All rights reserved | made <i class="ti-heart" aria-hidden="true"></i> by Anton Kuznetsov
</p></div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>