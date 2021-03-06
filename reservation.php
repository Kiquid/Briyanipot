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
                                        <img src="images/logo.png" class="img-responsive" alt="logo">
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
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="food-menu.html">Food menu</a>
                                                </li>
                                                <li>
                                                    <a href="food-detail.html">Food detail</a>
                                                </li>

                                            </ul>
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
                    Book Table
                </h2>
                <ul class="brdcrumb clearfix">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="current">
                        Book Table
                    </li>
                </ul>
            </div>
        </section>
        <!-- service section  -->
        <!-- reservation section -->
        <section class="reservation-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="main-title text-left">
                                    <span>Reserve Now</span>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">


                                <div class="sub-title">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eg dolor. Aenean mas cum sociis natoque penatibus
                                        magnis dis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <form action="#" method="post" class="reserv-form">

                            <div class="row">
                                <div class="col-xs-6 sm-full">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Name" name="Name" required>
                                        <span>
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 sm-full">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Phone" name="Phone" required>
                                        <span>
                                            <i class="fa fa-phone"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 sm-full">
                                    <div class="input-box">
                                        <input type="email" class="form-control" placeholder="Email" name="Email" required>
                                        <span>
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 sm-full">
                                    <div class="input-box">
                                        <input type="date" class="form-control" placeholder="Date" name="Date" required>
                                        <span>
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-xs-6 sm-full">
                                    <div class="input-box">
                                        <input type="time" class="form-control" placeholder="Time" name="Time" required>
                                        <span>
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 sm-full">
                                    <div class="input-box pr-40">
                                        <select class="form-control" name="Persons" required>
                                            <option value=" ">Persons</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <span>
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="submit" name="submit" class="btn-submit">Book a table</button>
                                </div>
                            </div>

                        </form>
      <!-- booking form  ends-->
      </div>
                    <div class="col-md-4">
                        <div class="special-box reserv-aside">
                            <div class="hours-box">
                                <h3>Restaurant Hours</h3>

                                <div class="row">
                                    <!-- hours  -->
                                    <div class="col-xs-6">
                                        <div class="hours">
                                            <div class="icon">
                                                <i class="flaticon-coffee"></i>
                                            </div>
                                            <h4 class="hours-title">Breakfast</h4>
                                            <p class="hours-text">9:00AM - 11:30AM</p>
                                        </div>
                                    </div>
                                    <!-- hours ends  -->
                                    <!-- hours  -->
                                    <div class="col-xs-6">
                                        <div class="hours">
                                            <div class="icon">
                                                <i class="flaticon-chicken"></i>
                                            </div>
                                            <h4 class="hours-title">Lunch</h4>
                                            <p class="hours-text">11:30AM - 2:00PM</p>
                                        </div>
                                    </div>
                                    <!-- hours ends  -->
                                    <!-- hours  -->
                                    <div class="col-xs-6">
                                        <div class="hours">
                                            <div class="icon">
                                                <i class="flaticon-restaurant-4"></i>
                                            </div>
                                            <h4 class="hours-title">Dinner</h4>
                                            <p class="hours-text">5:30PM - 11:00PM</p>
                                        </div>
                                    </div>
                                    <!-- hours ends  -->
                                    <!-- hours  -->
                                    <div class="col-xs-6">
                                        <div class="hours">
                                            <div class="icon">
                                                <i class="flaticon-ice-cream"></i>
                                            </div>
                                            <h4 class="hours-title">Dessert</h4>
                                            <p class="hours-text">9:00AM - 11:00PM</p>
                                        </div>
                                    </div>
                                    <!-- hours ends  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- reservation section -->
        <section class="service-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="main-title text-left">
                            <span>Services</span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-12">
                                <div class="service">
                                    <div class="icon">
                                        <i class="flaticon-cake"></i>
                                    </div>
                                    <h4 class="service-title"><a href="#">Birthday Party</a></h4>
                                    <p>
                                        Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa
                                        Cum sociis natoque.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12">
                                <div class="service">
                                    <div class="icon">
                                        <i class="flaticon-catering"></i>
                                    </div>
                                    <h4 class="service-title"><a href="#">Charity Events</a></h4>
                                    <p>
                                        Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa
                                        Cum sociis natoque.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="service-chef-figure">
                            <img src="images/service-chef.png" class="img-responsive" alt="service chef">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-12">
                                <div class="service">
                                    <div class="icon">
                                        <i class="flaticon-people"></i>
                                    </div>
                                    <h4 class="service-title"><a href="#">Events Party</a></h4>
                                    <p>
                                        Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa
                                        Cum sociis natoque.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12">
                                <div class="service">
                                    <div class="icon">
                                        <i class="flaticon-table"></i>
                                    </div>
                                    <h4 class="service-title"><a href="#">Private Dinning</a></h4>
                                    <p>
                                        Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa
                                        Cum sociis natoque.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- service section  -->
        <!-- testimonial section -->
        <section class="testimonial-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                        <h2 class="main-title text-right">
                            <span class="bg-reverse">Testimonials</span>
                        </h2>
                    </div>
                </div>
                <div class="testy-slider testimonial-slider owl-carousel" data-items="2" data-margin="30" data-loop="true" data-smart-speed="400"
                     data-dots="false" data-nav="true" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false"
                     data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true"
                     data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="2"
                     data-r-large-nav="true" data-r-large-dots="false">
                    <div class="item">
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="image">
                                        <img src="images/testi-pic.jpg" alt="testimonial pic">

                                        <h5>SERENA DOE</h5>
                                        <span>Happy Customer</span>
                                    </div>
                                </div>
                                <div class="col-xs-9">
                                    <div class="testi-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                            dolor. Aenean mas cum sociis natoque penatibus magnis dis.
                                        </p>
                                        <p class="rating">
                                            <span>Customer Rating :</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="image">
                                        <img src="images/testi-pic2.jpg" alt="testimonial pic">

                                        <h5>RICHARD DOE</h5>
                                        <span>Happy Customer</span>
                                    </div>
                                </div>
                                <div class="col-xs-9">
                                    <div class="testi-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                            dolor. Aenean mas cum sociis natoque penatibus magnis dis.
                                        </p>
                                        <p class="rating">
                                            <span>Customer Rating :</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="image">
                                        <img src="images/testi-pic.jpg" alt="testimonial pic">

                                        <h5>SERENA DOE</h5>
                                        <span>Happy Customer</span>
                                    </div>
                                </div>
                                <div class="col-xs-9">
                                    <div class="testi-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                            dolor. Aenean mas cum sociis natoque penatibus magnis dis.
                                        </p>
                                        <p class="rating">
                                            <span>Customer Rating :</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="image">
                                        <img src="images/testi-pic2.jpg" alt="testimonial pic">

                                        <h5>RICHARD DOE</h5>
                                        <span>Happy Customer</span>
                                    </div>
                                </div>
                                <div class="col-xs-9">
                                    <div class="testi-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                            dolor. Aenean mas cum sociis natoque penatibus magnis dis.
                                        </p>
                                        <p class="rating">
                                            <span>Customer Rating :</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial section ends -->
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
                        
<?php
if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $time = $_POST['Time'];
    $phone = $_POST['Phone'];
    $date = $_POST['Date'];
    $persons = $_POST['Persons'];
    $current_date = date("Y-m-d");
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
     if(preg_match("/^[a-zA-Z '.-]{3,20}$/", $name)) {
      if(preg_match("/^[0-9]{10}$/", $phone)){
       if($persons > 0){
        $reserve = $conn->prepare("INSERT into reservation(Name,Email,Phone,Date,Time,NoOfGuests) value(?,?,?,?,?,?)");
        $reserve->bind_param('ssssss',$name,$email,$phone,$date,$time,$persons);
        if($reserve->execute() == true){
            echo "<script>alert('inserted successfullly.')</script>";
            //header('location:reservation.php');
        }
        else{
            echo "<script>alert('Failed to insert.')</scritp>";
        }
      
       }
       else{
          echo "<script>alert('Guests field should contain atlest 1 person.')</script>";
       }
       
      }
      else{
        echo "<script>alert('Mobile number should contain 10 numeric characters.')</scritp>";
      }
     }
     else{
       echo "<script>alert('Name field should contain characters and numeric characters.')</script>";
     }
    }
    else{
        echo "<script>alert('Invalid Email format.')</script>";
    }
}
?>