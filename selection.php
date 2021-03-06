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
    <link href="css/style.css" rel="stylesheet"> 
</head>


<body onload="selectFunction()">
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
                                    <h1 class="font-white">Selection</h1> 
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
                            <li>Select</li>
                        </ul>
                    </div>
                </div>
                <br>
                <!-- Selection section starts -->

                <section class="selection">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-12 sticky-cart"> 
                                <div class="show-cart" align="center"><a href="#" class="btn theme-btn-dash" data-toggle="modal" data-target="#myCart">Show Cart</a></div> 
                                            <!-- Cart Modal below the footer -->
                                <div class="sidebar clearfix m-b-20">
                                        <div class="main-block">
                                            <div class="sidebar-title white-txt">
                                                <form>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label class="custom-control custom-radio">
                                                        <input id="veg-select" name="radio" type="radio" class="custom-control-input" onclick="selectFunction()"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Veg Breakfast</span> </label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label class="custom-control custom-radio">
                                                        <input id="nonveg-select" name="radio" type="radio" class="custom-control-input" onclick="selectFunction()"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Non Veg Breakfast</span> </label>
                                                    </div>     
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" id="smoothie-select" class="custom-control-input" onclick="selectFunction()"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Smoothies</span> </label>
                                                    </div>                                                   
                                                </form>  

                                            </div>
                                        </div>
                                </div>
                            </div>


                            <div class="col-md-9 col-sm-12 col-xs-12 food-group">
                                <!-- Veg Subscription Card start -->
                                <div class="container-fluid subscription-item hidden" id="veg">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="food-item-wrap">
                                                <div class="figure-wrap bg-image" data-image-src="images/veg.jpg">
                                                    <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                                    <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                    <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                                </div>
                                        </div>
                                        </div>
                                        <div class="col-md-7">
                                            <br>
                                            <h2>
                                                Veg Breakfast Subscription
                                            </h2>
                                            <p>
                                                Subscribe to our on-time Breakfast deliveries.
                                            </p>
                                            <h2 style="font-weight: bolder">₹ 900/month</h2>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="veg-quantity-left-minus btn"  data-type="minus" data-field="">
                                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                        </span>
                                                        <input type="text" id="veg-quantity" name="veg-quantity" class="form-control input-number" value="1" min="1" max="9" size="2">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="veg-quantity-right-plus btn" data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </span>
                                                    </div>                                                            
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <a href="#" class="btn theme-btn-dash">Subscribe Now</a>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Veg Subscription card end -->

                                <!-- Non Veg Subscription Card start -->
                                <div class="container-fluid subscription-item hidden" id="nonveg">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="food-item-wrap">
                                                <div class="figure-wrap bg-image" data-image-src="images/non-veg.jpg">
                                                    <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                                    <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                    <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                                </div>
                                        </div>
                                        </div>
                                        <div class="col-md-7">
                                            <br>
                                            <h2>
                                                Non Veg Breakfast Subscription
                                            </h2>
                                            <p>
                                                Subscribe to our on-time Breakfast deliveries.
                                            </p>
                                            <h2 style="font-weight: bolder">₹ 900/month</h2>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="nonveg-quantity-left-minus btn"  data-type="minus" data-field="">
                                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                        </span>
                                                        <input type="text" id="nonveg-quantity" name="nonveg-quantity" class="form-control input-number" value="1" min="1" max="9" size="2">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="nonveg-quantity-right-plus btn" data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </span>
                                                    </div>                                                            
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <a href="#" class="btn theme-btn-dash">Subscribe Now</a>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Non Veg Subscription card end -->
                                <span class="text-danger hidden" id="warning">*Smoothies can't be subscribed alone<br></span>
                                <br>
                                <!-- Smoothie Subscription Card start -->
                                <div class="container-fluid subscription-item hidden" id="smoothie">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="food-item-wrap">
                                                <div class="figure-wrap bg-image" data-image-src="images/smoothie.jpg">
                                                    <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                                    <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                    <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                                </div>
                                        </div>
                                        </div>
                                        <div class="col-md-7">
                                            <br>
                                            <h2>
                                                Smoothies
                                            </h2>
                                            <p>
                                                Subscribe to our on-time Breakfast deliveries.
                                            </p>
                                            <h2 style="font-weight: bolder">₹ 300/month</h2>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="smoothie-quantity-left-minus btn"  data-type="minus" data-field="">
                                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                        </span>
                                                        <input type="text" id="smoothie-quantity" name="smoothie-quantity" class="form-control input-number" value="1" min="1" max="9" size="2">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="smoothie-quantity-right-plus btn" data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </span>
                                                    </div>                                                            
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <a href="#" class="btn theme-btn-dash">Subscribe Now</a>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Smoothie Subscription card end -->

                            </div>
                        </div>
                    </div>
                </section>
                <!-- Selection Section ends -->




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