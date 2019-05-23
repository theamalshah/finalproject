<?php
session_start();
  require "common/dbconnect.php";
   
if(isset($_GET['msg']))
{
    $msg=$_GET['msg'];
}

$email="";
$password="";

if(isset($_COOKIE['user']))
{
    
    $email=$_COOKIE['user'];
}
if(isset($_COOKIE['pass']))
{
    $password=$_COOKIE['pass'];
}   


if(isset($_GET['var']))
{
    
    $_SESSION['var']=$_GET['var'];
}
if(isset($_GET['buss']))
{
    
    $_SESSION['buss']=$_GET['buss'];
}
    
   
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eazzy.me/html/bella-shop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Feb 2015 08:17:44 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stationery Shop</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/plugins/animate/animate.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/theme-green-1.css" rel="stylesheet" id="theme-config-link">

    <!-- Head Libs -->
    <script src="assets/plugins/modernizr.custom.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="wide">
<!-- PRELOADER -->
<!--<div id="preloader">
    <div id="preloader-status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
        <div id="preloader-title">Loading</div>
    </div>
</div>-->
<!-- /PRELOADER -->

<!-- WRAPPER -->
<div class="wrapper">

   <!-- Popup: Shopping cart items -->
   
    
    
    <!-- /Popup: Shopping cart items -->

    <!-- Header top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <ul class="list-inline">
                    
                      <li class="icon-user"><a href="login.php"><img src="assets/img/icon-1.png" alt=""/> <span>Login</span></a></li>
                    <li class="icon-form"><a data-toggle="modal" data-target="#singup"><img src="assets/img/icon-2.png" alt=""/> <span>Not a Member? <span class="colored">Sign Up</span></span></a></li>
                    <li><a href="mailto:stationeryhub53@gmail.com"><i class="fa fa-envelope"></i> <span>stationeryhub53@gmail.com</span></a></li>
                     
                </ul>
            </div>
            <div class="top-bar-right">
                <ul class="list-inline">
                    <li class="hidden-xs"><a href="about.php">About</a></li>
                    
                    <li class="hidden-xs"><a href="contact.php">Contact</a></li>
                    <li class="hidden-xs"><a href="faq.php">FAQ</a></li>
                    <li class="hidden-xs"><a href="wishlist.php">My Wishlist</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- /Header top bar -->

    <!-- HEADER -->
    <header class="header" >
        <div class="header-wrapper">
            <div class="container" >

                <!-- Logo -->
                <div class="logo">
                    <a href="index.php"><img src="assets/img/logoshop.png" alt="Bella Shop" style="width: 1000px; height: 60px;" /> </a>
                </div>
                <!-- /Logo -->

                <!-- Header search -->
                <div class="header-search">
                    <input class="form-control" type="text" placeholder="What are you looking?"/>
                    <button><i class="fa fa-search"></i></button>
                </div>
                <!-- /Header search -->

                <!-- Header shopping cart -->
                <div class="header-cart">
                    <div class="cart-wrapper">
                        <?php
                         if(isset($_SESSION['user_id']))
                           {    
                           $userid=$_SESSION['user_id'];              
                        ?>
                        <a href="wishlist.php" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
                        <a href="orderdetails.php?userid=<?php echo $userid; ?>" class="btn btn-theme-transparent hidden-xs hidden-sm">Track Order</a>
                        <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> Cart-List </span> <i class="fa fa-angle-down"></i></a>
                        
                        <?php
                            }
                            else
                            {
                        ?>
                        <a href="" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
                        <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> Cart-List </span> <i class="fa fa-angle-down"></i></a>
                        <?php
                            }
                         ?>   
                        <!-- Mobile menu toggle button -->
                        <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                        <!-- /Mobile menu toggle button -->
                    </div>
                </div>
                <!-- Header shopping cart -->

            </div>
        </div>
        
    </header>
<?php require "common/menu.php";  ?>  
    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="block-title"><span>Login</span></h3>
                         <form method="post" action="check_login.php" class="form-login">
                            <div class="row">
                                <div class="col-md-12 hello-text-wrap">
                                    <span class="hello-text text-thin">Hello, welcome to your account</span>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"><input class="form-control" type="text" name="email" value="<?php echo $email; ?>"  placeholder="User name or email" required></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"><input class="form-control" type="password" name="pass" value="<?php echo $password; ?>" placeholder="Your password" required></div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember me</label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 text-right-lg">
                                    <a class="forgot-password" href="#" data-toggle="modal" data-target="#forgot">forgot password?</a>
                                </div>
                                <div class="col-md-6">
                                     <input class="btn btn-theme btn-block btn-theme-dark" type="submit" name="btnsubmit" value="LOGIN">
                                    
                                </div>
                            </div>
                        </form>
                 
                    </div>
                    <div class="col-sm-6">
                        <h3 class="block-title"><span>Create New Account</span></h3>
                        <form action="#" class="create-account">
                            <div class="row">
                                <div class="col-md-12 hello-text-wrap">
                                    <span class="hello-text text-thin">Create Your Account on Stationery-shop</span>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="block-title">Signup Today and You'll be able to</h3>
                                    <ul class="list-check">
                                        <li>Online Order Status</li>
                                        <li>See Ready Hot Deals</li>
                                        <li>Love List</li>
                                        <li>Sign up to receive exclusive news and private sales</li>
                                        <li>Quick Buy Stuffs</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-block btn-theme btn-theme-dark btn-create" data-toggle="modal" data-target="#singup">Create Account</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

       

    </div>
    <!-- /CONTENT AREA -->

  <!-- FOOTER -->

        <!-- /PAGE -->
<footer class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">About Us</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <ul class="social-icons">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">News Letter</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <form action="#">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Enter Your Mail and Get $10 Cash"/>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-theme btn-theme-transparent">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-categories">
                            <h4 class="widget-title">Information</h4>
                            <ul>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="feedback.php">Contact Us</a></li>
                                <li><a href="faq.php">Terms and Conditions</a></li>
                                <li><a href="#">Private Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-tag-cloud">
                            <h4 class="widget-title">Item Tags</h4>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Top Sellers</a></li>
                                <li><a href="#">E commerce</a></li>
                                <li><a href="#">Hot Deals</a></li>
                                <li><a href="#">Supplier</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Theme</a></li>
                                <li><a href="#">Website</a></li>
                                <li><a href="#">Isamercan</a></li>
                                <li><a href="#">Themeforest</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-meta">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="copyright">Copyright 2018 STATIONERY SHOP   |   All Rights Reserved   |   Designed By Hub-Team</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="payments">
                            <ul>
                                <li><img src="assets/img/preview/payments/visa.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/mastercard.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/paypal.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/american-express.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/visa-electron.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/maestro.jpg" alt=""/></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

   

<div class="modal fade" id="singup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document" style="margin-top: 200px;" >
    <div class="modal-content" >
     
                       <div class="col-md-6">
                            <a class="btn btn-theme btn-block btn-theme-dark" href="signup.php">I'm Business men</a>
                      </div>
                      <div class="col-md-6">
                                     <a class="btn btn-theme btn-block btn-theme-dark" href="signupb2c.php">I'M Customer</a>
                      </div>
      
                         
    </div>
  </div>
</div>

<div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document" style="padding-top: 100px;" >
    <div class="modal-content" >
     
                       <div class="col-md-12" style=" padding-top: 50px; background-color: gray; ">
                            <form action="forgotpassword.php" method="post">

                              <div class="col-md-8">
                                <div class="form-group">
                                    <input class="form-control" name="forgotemail" type="text" placeholder="Enter Your Registration Email"/>
                                </div>
                              </div>  
                              <div class="col-md-4">
                                <div class="form-group">

                                    <button class="btn btn-theme btn-theme-transparent" name="forgot_btn">email</button>
                                </div>
                              </div>
                                
                            </form>


                      </div>
                      
    </div>
  </div>
</div>



</div>

<!-- /WRAPPER -->

<!-- JS Global -->
<script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/plugins/superfish/js/superfish.min.js"></script>
<script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="assets/plugins/jquery.sticky.min.js"></script>
<script src="assets/plugins/jquery.easing.min.js"></script>
<script src="assets/plugins/jquery.smoothscroll.min.js"></script>
<script src="assets/plugins/smooth-scrollbar.min.js"></script>


<!-- JS Page Level -->
<script src="assets/js/theme.js"></script>
<script src="assets/js/material.min.js"></script>


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/plugins/jquery.cookie.js"></script>

<!--<![endif]-->

</body>

<!-- Mirrored from eazzy.me/html/bella-shop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Feb 2015 08:19:37 GMT -->
</html>
 <!-- FOOTER -->