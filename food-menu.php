<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasty bite</title>
    <meta name="description" content="">
    <link rel="icon" href="favicon.ico" type="images/ico" sizes="16x16">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/lity.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="js/modernizr-3.5.0.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- ====== scroll to top ====== -->
    <a id="toTopBtn" title="Go to top" href="javascript:void(0)">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- loader  -->
    <div class="loader">
        <h1>Loading...</h1>
        <div id="cooking">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div id="area">
                <div id="sides">
                    <div id="pan"></div>
                    <div id="handle"></div>
                </div>
                <div id="pancake">
                    <div id="pastry"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader ends  -->
    <div class="wrapper">
        <?php
        include('header.php');
        ?>
        <section class="page-title">
            <div class="container">
                <h2 class="title">
                    Food Menu
                </h2>
                <ul class="brdcrumb clearfix">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="current">
                        Food Menu
                    </li>
                </ul>
            </div>
        </section>
        <!-- menu section  -->
        <section class="food-menu-section food-bg section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="main-title text-left">
                            <span class="bg-reverse">Food Dishes</span>
                        </h2>
                    </div>
                </div>

                <ul class="menus sort-foods">
                    <li class="filter-button active" data-filter="*">
                        <i class="flaticon-tray-1"></i>

                        All
                    </li>
                    <li class="filter-button" data-filter=".breakfast">
                        <i class="flaticon-coffee"></i>
                        Breakfast
                    </li>
                    <li class="filter-button" data-filter=".lunch">

                        <i class="flaticon-waitress"></i>
                        Lunch
                    </li>
                    <li class="filter-button" data-filter=".dinner">

                        <i class="flaticon-restaurant-4"></i>
                        Dinner
                    </li>

                </ul>


                <div class="row food-items">
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breakfast">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Breakfast Complete</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item dinner">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic2.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html">Pizza Capricciosa</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breakfast">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic3.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html">Vegetarian Breakfast</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breakfast">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic4.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html">Fried Potatoes Garlic</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item lunch">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic5.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html">Fresh Brasserie Pasta</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item lunch">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic6.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html">Smoky Veggie Chilli</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item lunch">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic7.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html">French Toast</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item dinner">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic8.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html">Lobster Roll</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item dessert">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic9.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html">Steak Sandwich</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                </div>
            </div>

        </section>

        <section class="chef-hero-bg chef-hero-drinks-pic section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="main-title text-left">
                            <span class="chef-hero-drinks-pic">
                                Drinks
                                <i class="chef-hero-drinks-pic"></i>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- drinks section  -->
        <section class="food-menu-section food-drinks-bg section-padding">
            <div class="container">


                <ul class="menus sort-drinks">
                    <li class="filter-button active" data-filter="*">
                        <i class="flaticon-tray-1"></i>

                        All
                    </li>
                    <li class="filter-button" data-filter=".breakfast">
                        <i class="flaticon-coffee"></i>
                        Breakfast
                    </li>
                    <li class="filter-button" data-filter=".lunch">

                        <i class="flaticon-waitress"></i>
                        Lunch
                    </li>


                </ul>


                <div class="row drinks-items">
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breakfast">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Breakfast Complete</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item dinner">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic2.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Pizza Capricciosa</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breakfast">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic3.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Vegetarian Breakfast</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breakfast">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic4.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Fried Potatoes Garlic</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item lunch">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic5.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Fresh Brasserie Pasta</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item lunch">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic6.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Smoky Veggie Chilli</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item lunch">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic7.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">French Toast</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item dinner">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic8.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Lobster Roll</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item dessert">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic9.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Steak Sandwich</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                </div>
            </div>

        </section>
        <!-- drinks section ends  -->

        <section class="chef-hero-bg chef-hero-dessert-pic section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="main-title text-left">
                            <span class="chef-hero-dessert-pic">
                                Desserts
                                <i class="chef-hero-dessert-pic"></i>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- dessert section  -->
        <section class="food-menu-section  section-padding">
            <div class="container">


                <ul class="menus sort-desserts">
                    <li class="filter-button active" data-filter="*">
                        <i class="flaticon-tray-1"></i>

                        All
                    </li>
                    <li class="filter-button" data-filter=".breakfast">
                        <i class="flaticon-coffee"></i>
                        Breakfast
                    </li>
                    <li class="filter-button" data-filter=".lunch">

                        <i class="flaticon-waitress"></i>
                        Lunch
                    </li>
                    <li class="filter-button" data-filter=".dinner">

                        <i class="flaticon-restaurant-4"></i>
                        Dinner
                    </li>
                    <li class="filter-button" data-filter=".dessert">

                        <i class="flaticon-spaghetti"></i>
                        Dessert
                    </li>

                </ul>


                <div class="row dessert-items">
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breakfast">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Breakfast Complete</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item dinner">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic2.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Pizza Capricciosa</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breakfast">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic3.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Vegetarian Breakfast</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breakfast">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic4.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Fried Potatoes Garlic</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item lunch">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic5.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Fresh Brasserie Pasta</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item lunch">
                        <div class="menu-box">
                            <a href="food-detail.html">
                                <img src="images/menu-pic6.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Smoky Veggie Chilli</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item lunch">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic7.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">French Toast</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item dinner">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic8.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Lobster Roll</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item dessert">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic9.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-main">
                                    <a href="food-detail.html">Steak Sandwich</a>
                                </h5>
                                <span>
                                    $20.00
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                </div>
            </div>

        </section>
        <!-- dessert section ends  -->
        <!-- call out section  -->
        <section class="call-out-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h2>Experience the real taste of our food.</h2>
                    </div>
                    <div class="col-md-2">
                        <div class="call-out-btn">
                            <a href="contact.html" class="btn-custom">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- call out section ends -->
        <!-- footer  -->
                      <?php include('footer.php'); ?>
        <!-- footer ends -->

         
    </div>
    <script src="js/jquery.1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
