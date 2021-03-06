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
                                    <h1 class="font-white">Profile</h1> 
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
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Profile Section start -->
                    
                    <section class="contact-page inner-page">
                       <div class="container">
                          <div class="row">
                             <!-- REGISTER -->
                             <div class="col-md-8 profile">
                                <div class="widget">
                                   <div class="widget-body">
                                      <form>
                                         <div class="row">
                                            <div class="form-group col-sm-6">
                                               <label for="exampleInputEmail1">First Name</label>
                                               <input class="form-control" type="text" value="Artisanal kale" id="example-text-input"> 
                                            </div>
                                            <div class="form-group col-sm-6">
                                               <label for="exampleInputEmail1">Last Name</label>
                                               <input class="form-control" type="text" value="Artisanal kale" id="example-text-input-2"> 
                                            </div>
                                            <div class="form-group col-sm-6">
                                               <label for="exampleInputEmail1">Email address</label>
                                               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                            </div>
                                            <div class="form-group col-sm-6">
                                               <label for="exampleInputEmail1">Phone number</label>
                                               <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input-3"> <small class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                            </div>
                                            <div class="form-group col-sm-12">
                                               <label for="exampleTextarea">Adress</label>
                                               <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                            </div>
                                            <div class="form-group col-sm-6">
                                               <label for="exampleInputEmail1">Locality</label>
                                               <input class="form-control" type="text" placeholder="Rajmahal" id="example-text-input" list="area"> 
                                                <datalist id="area">
                                                    <option value="Rajmahal">
                                                    <option value="Nayapalli">
                                                    <option value="Bapuji Nagar">
                                                    <option value="Ashok Nagar">
                                                    <option value="Saheed Nagar">
                                                </datalist>
                                            </div>
                                            <div class="form-group col-sm-6">
                                               <label for="exampleInputEmail1">Pincode</label>
                                               <input class="form-control" type="text" placeholder="751001" id="example-text-input-2"> 
                                            </div>
                                            <div class="form-group col-sm-6">
                                               <label for="exampleInputEmail1">City/Town</label>
                                               <input class="form-control" type="text" value="Bhubaneswar" id="example-text-input" disabled> 
                                            </div>
                                            <div class="form-group col-sm-6">
                                               <label for="exampleInputEmail1">State</label>
                                               <input class="form-control" type="text" value="Odisha" id="example-text-input-2" disabled> 
                                            </div>
                                         </div>
                                          <br>
                                         <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                               <p> <a href="#" class="btn theme-btn-dash">Edit Profile</a> </p>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                               <p align="center"> <a href="#" class="btn theme-btn-dash">Edit Phone</a> </p>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                               <p align="right"><button class="btn theme-btn-dash" id="change-pwd" onclick="selectFunction()">Change Password</button></p>
                                            </div>
                                         </div>
                                      </form>
                                   </div>
                                   <!-- end: Widget -->
                                </div>
                                <!-- /REGISTER -->
                             </div>
                             <!-- WHY? -->
                            <div class="col-md-4">

                              <table class="table">
                                <thead>
                                    <tr>
                                        <th>Subscription Status:</th>
                                        <th class="text-success">Active</th>
                                    </tr>
                                    <tr>
                                        <th>Current Subscription:</th>
                                        <th class="text-success">01 May 18 - 01 July 18</th>
                                    </tr>
                                    <tr>
                                        <th>Subscription Item:</th>
                                        <th>Veg + Smoothies </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Subscribed on:</th>
                                        <th>01 May 18</th>
                                    </tr>
                                    <tr>
                                        <th>Last Accessed on:</th>
                                        <th>05 May 18</th>
                                    </tr>
                                    <tr>
                                        <th>Registered On:</th>
                                        <th>02 April 18</th>
                                    </tr>
                                    
                                </tbody>
                              </table>
                              <hr>
                              <?php include 'modules/change-password.php'; ?>
                            <!-- <div class="">
                                <h4>Registration is fast, easy, and free.</h4>
                                <p>Once you"re registered, you can:</p>
                                <hr>
                                <img src="images/Local.png" alt="" class="img-fluid">
                                <p></p> -->
                                <!-- <div class="panel">
                                   <div class="panel-heading">
                                      <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq1" aria-expanded="false"><i class="ti-info-alt" aria-hidden="true"></i>Can I viverra sit amet quam eget lacinia?</a></h4>
                                   </div>
                                   <div class="panel-collapse collapse" id="faq1" aria-expanded="false" role="article" style="height: 0px;">
                                      <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum ut erat a ultricies. Phasellus non auctor nisi, id aliquet lectus. Vestibulum libero eros, aliquet at tempus ut, scelerisque sit amet nunc. Vivamus id porta neque, in pulvinar ipsum. Vestibulum sit amet quam sem. Pellentesque accumsan consequat venenatis. Pellentesque sit amet justo dictum, interdum odio non, dictum nisi. Fusce sit amet turpis eget nibh elementum sagittis. Nunc consequat lacinia purus, in consequat neque consequat id. </div>
                                   </div>
                                </div> -->
                                <!-- end:panel -->
                                <!-- <div class="panel">
                                   <div class="panel-heading">
                                      <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq2" aria-expanded="true"><i class="ti-info-alt" aria-hidden="true"></i>Can I viverra sit amet quam eget lacinia?</a></h4>
                                   </div>
                                   <div class="panel-collapse collapse" id="faq2" aria-expanded="true" role="article">
                                      <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum ut erat a ultricies. Phasellus non auctor nisi, id aliquet lectus. Vestibulum libero eros, aliquet at tempus ut, scelerisque sit amet nunc. Vivamus id porta neque, in pulvinar ipsum. Vestibulum sit amet quam sem. Pellentesque accumsan consequat venenatis. Pellentesque sit amet justo dictum, interdum odio non, dictum nisi. Fusce sit amet turpis eget nibh elementum sagittis. Nunc consequat lacinia purus, in consequat neque consequat id. </div>
                                   </div>
                                </div> -->
                                <!-- end:Panel -->
                                <!-- <h4 class="m-t-20">Contact Customer Support</h4>
                                <p> If you"re looking for more help or have a question to ask, please </p>
                                <p> <a href="contact.php" class="btn theme-btn-dash">Contact Us</a> </p>
                              </div> -->
                            </div>
                             <!-- /WHY? -->
                          </div>
                       </div>
                    </section>

                <!-- Profile Section End -->         

                <!-- Subscription Table Section End -->
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <hr><h2 align="center">Subscription History</h2><hr><br>
                      <table class="table" id="subscription-table">
                        <thead>
                            <tr>
                                <th style="width:15%">ID</th>
                                <th style="width:10%">Date</th>
                                <th style="width:35%">Items</th>
                                <th style="width:20%">Period</th>
                                <th style="width:10%">Amount</th>
                                <th style="width:10%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td data-th="ID">#QRI12890012</td>
                              <td data-th="Date">01 May 18</td>
                              <td data-th="Items">
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-5">
                                    <img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                    <h5 class="nomargin" align="center">Veg</h5>
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-5">
                                    <img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                    <h5 class="nomargin" align="center">Smoothie</h5>
                                  </div>
                                </div>
                              </td>
                              <td data-th="Period">01 May 18 - 01 July 18</td>
                              <td data-th="Amount">₹1800</td>
                              <td data-th="Status"><span class="text-success">Active</span></td>
                            </tr>
                            <tr>
                              <td data-th="ID">#QRI12890012</td>
                              <td data-th="Date">01 May 18</td>
                              <td data-th="Items">
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-5">
                                    <img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                    <h5 class="nomargin" align="center">Veg</h5>
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-5">
                                    <img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                    <h5 class="nomargin" align="center">Smoothie</h5>
                                  </div>
                                </div>
                              </td>
                              <td data-th="Period">01 May 18 - 01 July 18</td>
                              <td data-th="Amount">₹1800</td>
                              <td data-th="Status"><span class="text-danger">Expired</span></td>
                            </tr> 
                            <tr>
                              <td data-th="ID">#QRI12890012</td>
                              <td data-th="Date">01 May 18</td>
                              <td data-th="Items">
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-5">
                                    <img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                    <h5 class="nomargin" align="center">Veg</h5>
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-5">
                                    <img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                    <h5 class="nomargin" align="center">Smoothie</h5>
                                  </div>
                                </div>
                              </td>
                              <td data-th="Period">01 May 18 - 01 July 18</td>
                              <td data-th="Amount">₹1800</td>
                              <td data-th="Status"><span class="text-info">Upcoming</span></td>
                            </tr> 

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <br><br>
                <!-- Subscription Table Section End -->
                

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
    <script src="js/profile.js"></script>
</body>


<!-- Mirrored from codenpixel.com/demo/foodpicky/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 May 2018 04:52:38 GMT -->
</html>