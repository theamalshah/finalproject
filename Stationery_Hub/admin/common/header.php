<?php

$name=$_SESSION['data'];
if(!isset($_SESSION['data']))
{
header("location:login.php");
}
?>
<!DOCTYPE html>
<head>
    <title>Admin:Stationery Hub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/fontawesome.css" rel="stylesheet">
    
    
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
    <script src="js/jquery.min.js"></script>
    
     <script type="text/javascript">
    $(document).ready(function() {
        //alert("hi");
        $("select.category").change(function() {                
              //alert("in");
              var select_id = $(".category option:selected").val();
              
              //alert(select_id);
              var qrystrng = 'id='+select_id;
              //alert(qrystrng);
              $.ajax({    //create an ajax request to load_page.php
                type: "POST",
                url: "ajaxsubcategory.php",             
                data:qrystrng,
                dataType: "html",  //expect html to be returned                
                success: function(response){
                    //alert(response);          
                    $(".subcategory").html(response); 
                }
                

            });
        });
    });
    </script>
    
</head>
<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="index.php" class="logo">
                    HUB TEAM
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                         <!-- <span class="username" value="<?php  $name; ?>" ></span> -->
                            <?php echo $name; ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout pull-right">
                            <li><a href="edit_profile.php"><i class=" fa fa-suitcase"></i> Profile</a></li>
                            <li><a href="changepass.php"><i class="fa fa-cog"></i> Change Password</a></li>
                            <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                    
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-copyright"></i>
                                <span>Category</span>
                            </a>
                            <ul class="sub">
                                <li><a href="add_category.php">Add Category</a></li>
                                <li><a href="cat_manager.php">Category Manager</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-copyright"></i>
                                <span>Sub Category</span>
                            </a>
                            <ul class="sub">
                                <li><a href="add_subcate.php">Add Sub Category</a></li>
                                <li><a href="sub_cate_manager.php">Sub Category Manager</a></li>
                            </ul>
                        </li>
                        
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-btc"></i>
                                <span>Brand</span>
                            </a>
                            <ul class="sub">
                                <li><a href="add_brand.php">Add Brand</a></li>
                                <li><a href="brand_manager.php">Brand Manager</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                             <a href="javascript:;">
                              <i class="fa fa-copyright"></i>
                                  <span>Color</span>
                             </a>
                            <ul class="sub">
                                <li><a href="add_color.php">Add color</a></li>
                                <li><a href="color_manager.php">color Manager</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-lg fa-product-hunt"></i>
                                <span>Product</span>
                            </a>
                            <ul class="sub">
                                <li><a href="add_product.php">Add Product</a></li>
                                <li><a href="pro_manager.php">Product Manager</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-strikethrough"></i>
                                <span>State</span>
                            </a>
                            <ul class="sub">
                                <li><a href="add_state.php">Add State</a></li>
                                <li><a href="state_manager.php">State Manager</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-copyright"></i>
                                <span>City</span>
                            </a>
                            <ul class="sub">
                                <li><a class="active" href="add_city.php">Add City</a></li>
                                <li><a href="city_manager.php">City Manager</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="">
                               <i class="fa fa-strikethrough"></i>
                                <span>Security Question</span>
                            </a>
                            <ul class="sub">
                                <li><a href="add_sec_que.php">Add Security Question</a></li>
                                <li><a href="sec_que_manager.php">Security Question Manager</a></li>
                            </ul>
                        </li>
                         <li class="sub-menu">
                            <a href="">
                               <i class="fa fa-gift"></i>
                                <span>Coupon Code </span>
                            </a>
                            <ul class="sub">
                                <li><a href="add_coupon_code.php">Genrate Coupon Code</a></li>
                                <li><a href="coupon_code_manager.php">Coupon Code Manager</a></li>
                                <li><a href="send_coupon_code_manager.php">Send Coupon Code Manager</a></li>
                            </ul>
                        </li>
                         <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span>User Manager</span>
                            </a>
                            <ul class="sub">
                                <li><a href="user_manager.php">B2B User-Manager</a></li>
                                <li><a href="b2c_user_manager.php">B2C User-Manager</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="order_manager.php">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Order Manager</span>
                            </a>
                        </li>
                         <li>
                            <a href="return_manager.php">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Return Order </span>
                            </a>
                        </li>
                         
                         <li>
                            <a href="inquiry_manager.php">
                                <i class="fa fa-user"></i>
                                <span>inquiry Manager</span>
                            </a>
                        </li>
                         <li>
                            <a href="feedbackmanager.php">
                                <i class="fa fa-user"></i>
                                <span>Feedback Manager</span>
                            </a>
                        </li>
                       
                        
                    </ul>      </div>
                    <!-- sidebar menu end-->
                </div>
            </aside>
