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
                            <img src="img/header_logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="main-menu mobile-menu">
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li class="active"><a href="./clothing">Clothing</a></li>
                            <?php
                                // If the user is logged in, show the logout button
                                if (isset($_SESSION['logged_user'])) {
                                    echo '<li><a href="./logout">Logout</a></li>';
                                } else {
                                    echo '<li><a href="./sign">Login</a></li>';
                                }
                            ?>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-option">
                        <a href="index.html">Home</a>
                        <span>Clothing</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="breadcrumb-text">
                        <h3>Choose what you like</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->  
    
    <!-- Member Section Begin -->
    <section class="member-section spad ap-member">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Clothing</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                // Get all the products from the database
                $products = R::findAll('products');
                // Loop through the products
                foreach ($products as $product) {
                    // Get the product's name
                    $name = $product->name;
                    // Get the product's price
                    $price = $product->price;
                    // Get the product's image
                    $image = $product->picture;
                    // Get the product's id
                    $id = $product->id;
                    // Echo the product's HTML
                    echo '
                    <div class="col-lg-4 col-md-6">
                        <div class="member-item set-bg" data-setbg="'.$_SERVER['HTTP_REFERER'].'img/' . $image . '">
                            <div class="mi-text">
                                <div class="mt-title">
                                    <h4>' . $name . '</h4>
                                    <span>$' . $price . '</span>
                                </div>
                                    <a href="/add/cart?id=' . $id . '" class="primary-btn">Buy</a>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Member Section End -->

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