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
                                    <h1 class="font-white">Checkout</h1> 
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
                            <li>Selection</li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
                <div class="container m-t-30">
                    <div class="widget clearfix">
                        <!-- /widget heading -->
                        <div class="widget-heading">
                            <h3 class="widget-title text-dark">
                                            Cart summary
                                        </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-sm-6 margin-b-30">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>First Name*</label>
                                                    <input type="text" class="form-control" placeholder="John"> </div>
                                                <!--/form-group-->
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Last Name*</label>
                                                    <input type="text" class="form-control" placeholder="Doe"> </div>
                                                <!--/form-group-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Country*</label>
                                                    <select class="form-control">
                                                        <option>India</option>
                                                        <option>USA</option>
                                                        <option>UK</option>
                                                        <option>Australia</option>
                                                        <option>Japan</option>
                                                        <option>Columbia</option>
                                                        <option>Poland</option>
                                                    </select>
                                                </div>
                                                <!--/form-group-->
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Company Name</label>
                                                    <input type="text" class="form-control" placeholder="Lorem ipsum"> </div>
                                                <!--/form-group-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Full Address*</label>
                                                    <input type="text" class="form-control" placeholder="124, Lorem Street.."> </div>
                                                <!--/form-group-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>City / State*</label>
                                                    <input type="text" class="form-control" placeholder="Jaipur"> </div>
                                                <!--/form-group-->
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Zip/ Postal Code*</label>
                                                    <input type="text" class="form-control" placeholder="302012"> </div>
                                                <!--/form-group-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Email Address*</label>
                                                    <input type="text" class="form-control" placeholder="john@doe.com"> </div>
                                                <!--/form-group-->
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>phone*</label>
                                                    <input type="text" class="form-control" placeholder="123-345-3322"> </div>
                                                <!--/form-group-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="cart-totals margin-b-20">
                                            <div class="cart-totals-title">
                                                <h4>Cart Summary</h4> </div>
                                            <div class="cart-totals-fields">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Cart Subtotal</td>
                                                            <td>$29.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping &amp; Handling</td>
                                                            <td>$2.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-color"><strong>Total</strong></td>
                                                            <td class="text-color"><strong>$31.00</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--cart summary-->
                                        <div class="payment-option">
                                            <ul class=" list-unstyled">
                                                <li>
                                                    <label class="custom-control custom-radio  m-b-20">
                                                        <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Payment on delivery</span>
                                                        <br> <span>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span> </label>
                                                </li>
                                                <li>
                                                    <label class="custom-control custom-radio  m-b-10">
                                                        <input name="radio-stacked" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Paypal <img src="images/paypal.jpg" alt="" width="90"></span> </label>
                                                </li>
                                            </ul>
                                            <p class="text-xs-center"> <a href="#" class="btn btn-outline-success btn-block">Pay now</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
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
</body>


<!-- Mirrored from codenpixel.com/demo/foodpicky/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 May 2018 04:52:38 GMT -->
</html>