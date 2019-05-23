<?php
  session_start();
  require "common/dbconnect.php";
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
<div id="preloader">
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
</div>
<!-- /PRELOADER -->

<!-- WRAPPER -->
<div class="wrapper">

   <!-- Popup: Shopping cart items -->
     <?php
         if(isset($_SESSION['user_id']))
            {  
              $user_id=$_SESSION['user_id'];                    
     ?>
    <div class="modal fade popup-cart" id="popup-cart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="container">
                <div class="cart-items">
                    <div class="cart-items-inner">
                          <?php
                                $qry="SELECT * FROM cart_tbl  WHERE is_active=1 AND user_id=$user_id ";
                                $total=0;
                                 $rs=mysqli_query($conn,$qry);
                              while($row=mysqli_fetch_assoc($rs))
                               {
                          ?>
                        <div class="media">
                                 <?php
                                   $prod_id=$row['prod_id'];
                                    $qry1="SELECT * FROM product_tbl  WHERE prod_id=$prod_id";
                                    $rs1=mysqli_query($conn,$qry1);
                                    $row1=mysqli_fetch_assoc($rs1);
                                    $path1=$row1['prod_img1'];
                                  ?>
                            <a class="pull-left" href="#"><img class="media-object item-image" src="../admin/<?php echo $path1;?>" alt=""></a>
                            <a class="pull-right" href="#">
                            
                            <p class="pull-right item-price"><?php echo $row['prod_price']; ?>&nbsp</p>
                            

                            <div class="media-body">
                                <h4 class="media-heading item-title"><a href="#"><?php echo $row1['prod_name']; ?></a></h4>
                                
                            </div>
                            
                        </div>
                          <?php
                                $total = $total + $row['prod_price'];
                               }
                          ?>
                        <div class="media">
                            
                            <p class="pull-right item-price"><?php echo $total; ?></p>
                            <div class="media-body">
                                <h4 class="media-heading item-title summary">Subtotal</h4>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <div>
                                    <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal">Close</a>
                                    <a href="shopping-cart.php" class="btn btn-theme btn-theme-transparent btn-call-checkout">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
           <?php  
                 }
                
            ?>
    
    
    <!-- /Popup: Shopping cart items -->

    <!-- Header top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <ul class="list-inline">
                    <?php
                         if(isset($_SESSION['user_id']))
                         {                      
                    ?>
                    <li class="dropdown flags">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/icon-1.png" alt=""/> <span><?php echo $_SESSION['name']; ?></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="profile.php">View profile</a></li>
                            <li><a data-toggle="modal" data-target="#changepass">Change Password</a></li>
                            <li><a href="logout.php">LogOut</a></li>
                        </ul>
                    </li>
                      
                    <?php  
                         }
                         else
                         {
                      ?>
                      <li class="icon-user"><a href="login.php"><img src="assets/img/icon-1.png" alt=""/> <span>Login</span></a></li>
                    <li class="icon-form"><a data-toggle="modal" data-target="#singup"><img src="assets/img/icon-2.png" alt=""/> <span>Not a Member? <span class="colored">Sign Up</span></span></a></li>
                    <li><a href="mailto:stationeryhub53@gmail.com"><i class="fa fa-envelope"></i> <span>stationeryhub53@gmail.com</span></a></li>
                     <?php       
                        
                        }
                     ?>
                </ul>
            </div>
            <div class="top-bar-right">
                <ul class="list-inline">
                    <li class="hidden-xs"><a href="about.php">About</a></li>
                    
                    <li class="hidden-xs"><a href="contact.php">Contact</a></li>
                    
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