<?php
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
                    Food Detail
                </h2>
                <ul class="brdcrumb clearfix">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="current">
                        Food Details
                    </li>
                </ul>
            </div>
        </section>

        <section class="page-section foods-details-bg food-details  section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">          
                    <?php
                        $id = $_GET['menu'];
                        $dish = "SELECT DISTINCT menu.Id,menu.* FROM menu join orders on menu.Id=orders.MenuId";
                        $dishes = $conn->query($dish);
                        
                        ?>
                         <table style="border:1px solid black">
                             <tr style="border:1px solid black">
                                 <th style="border:1px solid black">ID</th>
                                 <th style="border:1px solid black">Name</th>
                                 <th style="border:1px solid black">Price(each)</th>
                                 <th style="border:1px solid black">Quantity</th>
                                 <th style="border:1px solid black">Item Total</th>
                                 <th style="border:1px solid black">Remove Item</th>
                             </tr>
                         <?php 
                         while($row = $dishes->fetch_assoc()){                            
                            ?>
                             <tr>
                                 <td style="border:1px solid black"><?php echo $row['Id'];?></td>
                                 <td style="border:1px solid black"><?php echo $row['Name'];?></td>
                                 <td style="border:1px solid black"><input type="hidden" id="price" value="<?php echo $row['Price'];?>"><?php echo $row['Price'];?></td>
                                 <td style="border:1px solid black"><input type="text" name="quantity" id="quantity" onchange="quantity()"></td>
                                 <td style="border:1px solid black"><input type="text" id="total_price" readonly><div id="total_price"></div></td>
                                 <td style="border:1px solid black"><i class="fa fa-trash"></i></td>
                             </tr>
                        <?php } ?>        
                         </table>
                        <!-- dish slider ends -->
                    </div>
                    <div class="col-md-4">
                        <!-- food card  -->
                        <div class="food-card">
                            <h3 class="title"><?php echo $row['Name'];?></h3>
                            <p><b>SubTotal :</b> <div id="subtotal">da</div></p>
                            <p><b>Tax :</b> <div id="totaltax">da</div></p>
                            <p><b>Conveninence Fee :</b> <div id="totalfee">da</div></p>
                            <p><b>Total Amount :</b> <div id="totalamount">da</div></p>
                            <p><b>Order To :</b> <input type="radio" name="order" value="pick up">Pick Up
                                    <input type="radio" name="order" value="deliver">Deliver
                                    <input type="radio" name="order" value="dine in">Dine In</p>
                            <p><b>Total Amount :</b> da</p>
                             
                            <p><b>Total Amount :</b>
                                <textarea name="special_instructions"></textarea>
                            </p>
                            <button class="btn-custom"> Place Order </button>
                    </div>
                </div>
            </div>

        </section>
        <!-- our chefs section ends -->
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
    <script>
    function quantity(){
        var price = $("#price").val();
        var quantity = $("#quantity").val();
        var totalprice = price * quantity;
         document.getElementById('total_price').value = totalprice;      
         console.log(price.length);
           
    }
    </script>
</body>

</html>