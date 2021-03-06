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
                    Contact Us
                </h2>
                <ul class="brdcrumb clearfix">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="current">
                        Contact
                    </li>
                </ul>
            </div>
        </section>
        <!-- contact section -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h3 class="main-title text-left">
                            <span>
                                Get In Touch
                            </span>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-10">


                                <div class="sub-title">
                                    <p>
                                        Biryani Pot creating a wonderful dining experience for you & your family.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <form action="#"  method="post" class="reserv-form">
                            <div class="input-box">
                                <input type="text" class="form-control" placeholder="Name" name="Name">
                                <span>
                                    <i class="fa fa-pencil"></i>
                                </span>
                            </div>
                            <div class="input-box">
                                <input type="text" class="form-control" placeholder="Phone" name="Phone">
                                <span>
                                    <i class="fa fa-phone"></i>
                                </span>
                            </div>
                            <div class="input-box">
                                <input type="email" class="form-control" placeholder="Email" name="Email">
                                <span>
                                    <i class="fa fa-envelope-o"></i>
                                </span>
                            </div>
                            <div class="input-box">
                                <textarea class="form-control" placeholder="your message" name="Message"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn-secondry" value="submit">Send Message</button>
                        </form>
                                               <!-- booking form  ends-->
                    </div>
                    <div class="col-md-4">
                        <ul class="contact">
                            <li>

                                <div class="icon">
                                    <img src="images/con1.jpg" alt="contact">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <p class="title">Address:</p>
                                <p>295 Daniel Webster Hwy, Nashua, NH-03060</p>

                            </li>
                            <li>

                                <div class="icon">
                                    <img src="images/con2.jpg" alt="contact">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <p class="title">Cal Us:</p>
                                <p>
                                    (603) 888-6003
                                </p>

                            </li>
                            <li>

                                <div class="icon">
                                    <img src="images/con3.jpg" alt="contact">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <p class="title">Email us:</p>
                                <p>
                                    biryanipotorders@gmail.com
                                </p>

                            </li>
                        </ul>

                        <p class="min-title"> Follow us on</p>
                        <ul class="mini-social m-top20">
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


                <div class="map">
                    <div id="map"></div>
                </div>
            </div>
        </section>

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
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="openWindow">Open Modal</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>
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
                                    <span>ADDRESS :</span>295 Daniel Webster Hwy, Nashua, NH-03060
                                </p>
                                <p>
                                    <i class="fa fa-phone"> </i>
                                    <span>CALL US :</span>(603) 888-6003
                                </p>
                                <p>
                                    <i class="fa fa-envelope-o"> </i>
                                    <span>EMAIL US :</span>biryanipotorders@gmail.com
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
    <!-- google map api  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWGUaG5S3B5VikF8UtVCgjki1Pv_HKGgo"></script>

    <script src="js/main.js"></script>
  <script>
        $(document).ready(function() {
        setTimeout(function() {
            $("#myModal").fadeOut();;
        },5000);
    });
    </script>

</body>

</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      if(preg_match("/^[a-zA-Z '.-]{3,20}$/", $name)) {
      if(preg_match("/^[0-9]{10}$/", $phone)) {
        $insert_message = $conn->prepare("INSERT into contactus(Name,Email,Phone,Message) values(?,?,?,?)");
        $insert_message->bind_param("ssss", $name, $email, $phone, $message);
        if($insert_message->execute() == true){
           // echo "<script id='message'>alert('inserted successfully...')</script>";
            header('location:contact.php');
        }
        else{
            echo "<script id='message'>alert('Error inserting data.')</script>";
        }
      }
      else{
          echo "<script id='message'>alert('Incorrect mobile.')</script>";
      }
      }
      else{
          echo "<script>alert('Name field should contain characters and numeric characters')</script>";
      }
    }
    else{
        echo "<script id='message'>alert('Incorrect Email format.')</script>";
    }   
}
?>