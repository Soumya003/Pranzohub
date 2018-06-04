<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codenpixel.com/demo/foodpicky/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 May 2018 04:52:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="site-wrapper" >
            <section class="bg-image space-md" data-image-src="images/image01.jpg" style="padding-top: 0px;">
            <!--header starts-->
                <?php include 'common/navbar.php'; ?>
            <!-- header ends -->
            <br><br>
            
                <!-- top Links -->
                <!-- <div class="top-links">
                    <div class="container">
                        <ul class="row links">
                            <li class="col-xs-12 col-sm-3 link-item active"><span>1</span><a href="#">Choose Your Location</a></li>
                            <li class="col-xs-12 col-sm-3 link-item"><span>2</span><a href="#">Choose Restaurant</a></li>
                            <li class="col-xs-12 col-sm-3 link-item"><span>3</span><a href="#">Pick Your favorite food</a></li>
                            <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a href="#">Order and Pay online</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- end:Top links -->
                <!-- start: Inner page hero -->
                    <br><br><br>
                    <div class="profile" >
                        <div class="container">
                            <div class="row" align="center">
                                <div class="col-xs-12 col-sm-12 col-lg-12 cursive">
                                    <h1 class="font-white">Subscription</h1> 
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
                <!-- end:Inner page hero -->
            <div class="page-wrapper">
                <div class="breadcrumb">
                    <div class="container">
                        <ul>
                            <li><a href="index.php" class="active">Home</a></li>
                            <li>Subscription</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Subscription Section start -->
                   
                <section class="popular">
                    <div class="container">
                        <div class="title text-xs-center m-b-30">
                            <h2>Choose your subscription</h2>
                            <p class="lead">The easiest way to your favourite breakfast</p>
                        </div>
                        <div class="row">
                            <!-- Each popular food item starts -->
                            <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                <div class="food-item-wrap">
                                    <div class="figure-wrap bg-image" data-image-src="images/veg.jpg">
                                        <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                        <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="profile.html">Veg Breakfast</a></h5>
                                        <div class="product-name">Fried Chicken with cheese</div>
                                        <div class="price-btn-block"> <span class="price">₹ 900/month</span> <a href="selection.php" class="btn theme-btn-dash pull-right" onclick="subscribeVegFunction()">Subscribe Now</a> </div>
                                    </div>
                                    <div class="restaurant-block">
                                        <div class="left">
                                            <a class="pull-left" href="profile.html"> <img src="images/logo-small.jpg" alt="Restaurant logo" height="50" width="50" /></a>
                                            <div class="pull-left right-text"> <a href="#">Pranzohub</a> <span>Bhubaneswar</span> </div>
                                        </div>
                                        <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Each popular food item starts -->
                            <!-- Each popular food item starts -->
                            <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                <div class="food-item-wrap">
                                    <div class="figure-wrap bg-image" data-image-src="images/non-veg.jpg">
                                        <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                        <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="profile.html">Non Veg Breakfast</a></h5>
                                        <div class="product-name">Fried Chicken with cheese</div>
                                        <div class="price-btn-block"> <span class="price">₹ 900/month</span> <a href="selection.php" class="btn theme-btn-dash pull-right" onclick="subscribeNonvegFunction()">Subscribe Now</a> </div>
                                    </div>
                                    <div class="restaurant-block">
                                        <div class="left">
                                            <a class="pull-left" href="profile.html"> <img src="images/logo-small.jpg" alt="Restaurant logo" height="50" width="50" /> </a>
                                            <div class="pull-left right-text"> <a href="#">Pranzohub</a> <span>Bhubaneswar</span> </div>
                                        </div>
                                        <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Each popular food item starts -->
                            <!-- Each popular food item starts -->
                            <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                <div class="food-item-wrap">
                                    <div class="figure-wrap bg-image" data-image-src="images/smoothie.jpg">
                                        <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                        <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="profile.html">Smoothies</a></h5>
                                        <div class="product-name">Fried Chicken with cheese</div>
                                        <div class="price-btn-block"> <span class="price">₹ 300/month</span> <a href="selection.php" class="btn theme-btn-dash pull-right" onclick="subscribeSmoothieFunction()">Subscribe Now</a> </div>
                                    </div>
                                    <div class="restaurant-block">
                                        <div class="left">
                                            <a class="pull-left" href="profile.html"> <img src="images/logo-small.jpg" alt="Restaurant logo" height="50" width="50" /></a>
                                            <div class="pull-left right-text"> <a href="#">Pranzohub</a> <span>Bhubaneswar</span> </div>
                                        </div>
                                        <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Each popular food item starts -->
                        </div>
                    </div>
                </section>

                <!-- Subscription Section End -->

                <section class="app-section">
                    <div class="app-wrap">
                        <div class="container">
                            <div class="row text-img-block text-xs-left">
                                <div class="container">
                                    <div class="col-xs-12 col-sm-6  right-image text-center hidden-xs-down">
                                        <figure> <img src="images/app.png" alt="Right Image"> </figure>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 left-text">
                                        <h3>The Best Food Delivery App</h3>
                                        <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery &amp; Takeout App.</p>
                                        <div class="social-btns">
                                            <a href="#" class="app-btn apple-button clearfix">
                                                <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                                <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                            </a>
                                            <a href="#" class="app-btn android-button clearfix">
                                                <div class="pull-left"><i class="fa fa-android"></i> </div>
                                                <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- start: FOOTER -->
                        <?php include 'common/footer.php' ?> 
                <!-- end:Footer -->
            </div>
            <!-- end:page wrapper -->
        </div>
    <!--/end:Site wrapper -->
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
    <script src="js/bar.js"></script>
    <script src="js/selection.js"></script>
</body>


<!-- Mirrored from codenpixel.com/demo/foodpicky/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 May 2018 04:52:38 GMT -->
</html>