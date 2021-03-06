﻿<?php
include('config.php');
?>
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
        <header class="header">
            <div class="container">
                <div class="menubar">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-static-top">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="index.html">
                                        <img src="images/biryani-pot-logo.png" class="img-responsive" alt="logo">
                                    </a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse ">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="res-btn">
                                            <a href="reservation.html" class="book-btn">Book a table</a>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right" id="main-menu">
                                        <li>
                                            <a href="index.html">
                                                Home

                                            </a>
                                        </li>
                                        <li>
                                            <a href="about.html">About</a>
                                        </li>
                                        <li>
                                            <a href="food-menu.html">Food menu</a>
                                        </li>   
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Pages
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                        Blog
                                                        <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="blog-page.html">blog page</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-detail-page.html">blog detail page</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle">
                                                        Chef
                                                        <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="chefs.html">Chefs </a>
                                                        </li>
                                                        <li>
                                                            <a href="chef-detail.html">Chef detail </a>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle">
                                                        Gallery
                                                        <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="gallery-two-column.html">Gallery Two Column</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-three-column-measonary.html">Gallery Three Column</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-four-column.html">Gallery Four Column</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="services.html">Services</a>
                                                </li>
                                                <li>
                                                    <a href="404.html">404</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="contact.html">
                                                Contact

                                            </a>
                                        </li>


                                    </ul>

                                </div>
                                <!-- /.navbar-collapse -->
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mobile-menu" data-logo="images/logo.png">


            </div>
        </header>
        <section class="page-title">
            <div class="container">
                <h2 class="title">
                    Food Menu
                </h2>
                <ul class="brdcrumb clearfix">
                    <li>
                        <a href="index.html">Home</a>
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
                    <li class="filter-button" data-filter=".soups">
                        <i class="flaticon-coffee"></i>
                        Soups
                    </li>
                    <li class="filter-button" data-filter=".vegetarian-appetizers">

                        <i class="flaticon-waitress"></i>
                        Vegetarian Appetizers
                    </li>
                    <li class="filter-button" data-filter=".non-vegetarian-appetizers">

                        <i class="flaticon-restaurant-4"></i>
                        Non-Vegetarian Appetizers
                    </li>
                    <li class="filter-button" data-filter=".tandoor-and-grill">

                        <i class="flaticon-restaurant-4"></i>
                        Tandoor and Grill
                    </li>
                    <li class="filter-button" data-filter=".breads">

                        <i class="flaticon-restaurant-4"></i>
                        Breads
                    </li>
                    <li class="filter-button" data-filter=".vegetarian-entree">

                        <i class="flaticon-restaurant-4"></i>
                        Vegetarian Entree
                    </li>
                    <li class="filter-button" data-filter=".chicken-entree">

                        <i class="flaticon-restaurant-4"></i>
                        Chicken Entree
                    </li>
                    <li class="filter-button" data-filter=".goat-entree">

                        <i class="flaticon-restaurant-4"></i>
                        Goat Entree
                    </li>
                    <li class="filter-button" data-filter=".sea-food-entree">

                        <i class="flaticon-restaurant-4"></i>
                        Sea Food Entree
                    </li>
                    <li class="filter-button" data-filter=".signature-biryanis-and-rice-entree">

                        <i class="flaticon-restaurant-4"></i>
                        Signature Biryanis and Rice Entree
                    </li>
                    <li class="filter-button" data-filter=".desserts">

                        <i class="flaticon-restaurant-4"></i>
                        Dessert
                    </li>
                    <li class="filter-button" data-filter=".soft-drinks">

                        <i class="flaticon-restaurant-4"></i>
                        Soft Drinks
                    </li>

                </ul>
                <div class="row food-items">
               <?php
               $dishes = "SELECT Id,Name,Price,Image from menu where Type='soups'";
               $soups = $conn->query($dishes);
               if($soups->num_rows>0){
                while($row = $soups->fetch_assoc()) {
                ?>   
                    <!-- menu box  -->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item soups">
                        <div class="menu-box">
                            <a href="food-detail.php?id=<?php echo $row['Id'];?>">
                                <img src="<?php echo $row['Image']; ?>" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.php?id=<?php echo $row['Id'];?>"> <?php echo $row['Name'];?></a>
                                </h5> 
                                
                                <span>
                                    $<?php echo $row['Price'];?>
                                </span>
                                <!-- <span class="glyphicon glyphicon-shopping-cart cart" style="font-size: 16px;"></span> -->
                            </div>
                            <p>Lorem ipsum dolor sit amet, sectetuera con adipiscing elitan.</p>
                        </div>
                    </div>
                    <!-- menu box ends  -->
                    <?php 
                   }
                    }?>
                    
                     <!-- menu box  -->
                     <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">
                            <a href="food-detail.html">
                                <img src="images/samosa.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Samosa</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Crispy Masala Pepper Corn</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/manchurian.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Paneer Manchurian</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/cutmirchi.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Cut Mirchi</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/onionbhaji.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Onion Pakoda</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/vegmenturianDry.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Vegetable Manchurian</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/chilipaneer.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chillies Paneer</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/chilipakora.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Guntur Mirapakay Bajji</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/chilipotato.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Wok Fried Chilli Potatoes</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/gobhimanchurian.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Gobi Manchurian</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/samosa.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Cafe Samosa</a>
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
                      <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/gobhi-manchurian.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Gobi65</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item non-vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/eggbonda.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Egg Bonda</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item non-vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/ckPepper.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chicken Pepper Fry</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item non-vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/ckchili.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chilly Chicken</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item non-vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/ck65.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chicken 65</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item non-vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/ckmanchuriangravy.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chicken Manchurian</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item non-vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/FishFried.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Crispy Andhra Masala Fried Fish</a>
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
                     <div class="col-md-4 col-sm-6 col-xs-12 grid-item non-vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/ckPakora.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chicken Pakoda</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item non-vegetarian-appetizers">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/shrimpmanchurian.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Shrimp Manchurian</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item tandoor-and-grill">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/seekkabab.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Sheek Kebab</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item tandoor-and-grill">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/cktikka.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chicken Tikka</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item tandoor-and-grill">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/Ckkabob.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Hariyali Chicken Kebab</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item tandoor-and-grill">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Murg Malai Kebab</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item tandoor-and-grill">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/cktandoori.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Tandoori Chicken Half</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item tandoor-and-grill">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/cktandoori.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Tandoori Chicken Full</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item tandoor-and-grill">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/cktikkaleg.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Tangdi Kebab</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item tandoor-and-grill">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/paneertikka.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Paneer Tikka</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item tandoor-and-grill">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/Tandorifish.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Whole Fish Tandoor</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breads">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/naan.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Naan</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breads">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/Roti.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Roti</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breads">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/naanplain.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Butter Naan</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breads">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/onionnaan.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Onion Naan</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breads">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/naan garlic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Garlic Basil Naan</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item breads">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/naan tandoori.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Kashmiri Naan</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/tadkadaal.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Tadka Dal</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/chanamasala.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Punjabi Chana Masala</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/ennaikathirikaicurry.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Bagara Baigan</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/masalagobi.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Aloo-Gobi Masala</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/vegkadai.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Mixed Vegetable Kadai Masala</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/malalikofta.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Malai Kofta (CHEF SPECIAL)</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/paneermasala.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Paneer Tikka Masala</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/navratanKorma.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Navarathan Kurma</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/palakpaneer.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Palak Paneer</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/eggcurry.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Anda Curry (Egg Masala)</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/paneermakhanwala.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Paneer Butter Masala</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item vegetarian-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/kadai paneer.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Kadai Paneer</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> House Special Chicken Curry</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Butter Chicken</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Ginger Chicken</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chicken Tikka Masala</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chicken Korma</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/ckvindaloo.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chicken Vindaloo</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Methi Chicken (HOUSE SPECIAL)</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chicken Chettinadu</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Haryali Chicken Masala</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Hyderabadi Murg Masala</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Chicken Mandhakini (HOUSE SPECIAL)</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item chicken-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Gongura Chicken</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item goat-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> House Special Goat Curry</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item goat-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> Goat Chettinad</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item goat-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> GOAT KURMA</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item goat-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> KADAI GOAT</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item goat-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/SaagGoat.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> GOAT SAAGWALA</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item goat-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> GOAT VINDALOO</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item goat-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> HOUSE SPECIAL GOAT FRY</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item goat-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> MUTTON MANDHAKINI</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item goat-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> GONGURA MUTTON CURRY</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item sea-food-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> ANDHRA SHRIMP FRY</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item sea-food-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> SHRIMP CURRY</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item sea-food-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/shrimpvindaloo.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> SHRIMP VINDALOO</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item sea-food-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> GINGER FISH MASALA</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item sea-food-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> CHEPALA PULUSU ( FISH CURRY )</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item signature-biryanis-and-rice-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> HYDERABADI GOAT DUM BIRYANI</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item signature-biryanis-and-rice-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/shrimpbiryani.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> SHRIMP BIRYANI</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item signature-biryanis-and-rice-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> EGG BIRYANI</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item signature-biryanis-and-rice-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> EGG FRIED RICE</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item signature-biryanis-and-rice-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> EGG NOODLES</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item signature-biryanis-and-rice-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> JEERA RICE</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item signature-biryanis-and-rice-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> PLAIN RICE</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item signature-biryanis-and-rice-entree">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> BIRYANI POT SPECIAL CHICKEN BIRYANI [BONELESS]</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item desserts">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> GULAB JAMUN</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item desserts">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/Rasmalai.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> RASMALAI</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item desserts">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> DOUBLE KA MEETA</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item soft-drinks">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/lassi.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> SALT LASSI</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item soft-drinks">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> SWEET LASSI</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item soft-drinks">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> MANGO LASSI</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item soft-drinks">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> BADAM MILK</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item soft-drinks">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> BOTTLED WATER</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item soft-drinks">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> SODA</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item soft-drinks">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> COFFEE</a>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item soft-drinks">
                        <div class="menu-box">

                            <a href="food-detail.html">
                                <img src="images/menu-pic.jpg" alt="menu pic" class="featured-pic">
                            </a>
                            <div class="menu-title">
                                <h5 class="title bg-secondry">
                                    <a href="food-detail.html"> MASALA CHAI</a>
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
        <footer class="footer section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="row">
                                <div class="col-xs-11 col-sm-10 col-md-9">
                                    <h3 class="main-title footer-title text-left">
                                        <span>
                                            Contact Us
                                        </span>
                                    </h3>
                                </div>
                            </div>

                            <div class="content">
                                <p>
                                    <i class="fa fa-map-marker"> </i>
                                    <span>ADDRESS :</span>123, Street Name, City, Your Country
                                </p>
                                <p>
                                    <i class="fa fa-phone"> </i>
                                    <span>CALL US :</span>+123-456-7890, +987-654-3210
                                </p>
                                <p>
                                    <i class="fa fa-envelope-o"> </i>
                                    <span>EMAIL US :</span>support@ tastybite.com
                                </p>
                                <h5>Follow us on :</h5>
                                <ul class="mini-social">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="row">
                                <div class="col-xs-11 col-sm-10 col-md-9">
                                    <h3 class="main-title footer-title text-left">
                                        <span>
                                            Latest News
                                        </span>
                                    </h3>
                                </div>
                            </div>

                            <ul class="posts clearfix">
                                <li>
                                    <a href="blog-detail-page.html">
                                        <img src="images/post.jpg" alt="" class="featured">
                                    </a>
                                    <h5>
                                        <a href="blog-detail-page.html">
                                            Lorem ipsum dolor sit amet, consectetu era adipiscing ligula.
                                        </a>
                                    </h5>
                                    <p>December 14, 2017</p>
                                </li>
                                <li>
                                    <a href="blog-detail-page.html">
                                        <img src="images/post2.jpg" alt="" class="featured">
                                    </a>
                                    <h5>
                                        <a href="blog-detail-page.html">
                                            Lorem ipsum dolor sit amet, consectetu era adipiscing ligula.
                                        </a>
                                    </h5>
                                    <p>December 14, 2017</p>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-widget">
                            <div class="row">
                                <div class="col-xs-11 col-sm-10 col-md-9">
                                    <h3 class="main-title footer-title text-left">
                                        <span>
                                            Gallery Pics
                                        </span>
                                    </h3>
                                </div>
                            </div>

                            <div class="content">
                                <ul class="gallery clearfix">
                                    <li>
                                        <div>
                                            <a href="images/gal-big.jpg" class="magni-link">
                                                <img src="images/gal.jpg" alt="gallery pic">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="images/gal-big2.jpg" class="magni-link">
                                                <img src="images/gal2.jpg" alt="gallery pic">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="images/gal-big3.jpg" class="magni-link">
                                                <img src="images/gal3.jpg" alt="gallery pic">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="images/gal-big4.jpg" class="magni-link">
                                                <img src="images/gal4.jpg" alt="gallery pic">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="images/gal-big5.jpg" class="magni-link">
                                                <img src="images/gal5.jpg" alt="gallery pic">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="images/gal-big6.jpg" class="magni-link">
                                                <img src="images/gal6.jpg" alt="gallery pic">
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer ends -->

        <div class="copyright">

            <p>
                © Copyright | TastyBite 2018. All Right Reserved Developed By
                <a href="#">Company Name</a>
            </p>
        </div>
    </div>
    <script src="js/jquery.1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>