<?php     
session_start();
require "common/dbconnect.php";
$name=$_SESSION['data'];
if(!isset($_SESSION['data']))
{
    header("location:login.php");
}
echo '<script> alert("welcome")</script>';
require "common/header.php";
 

$qry = "SELECT * FROM user_tbl WHERE user_typ=2 AND is_active=1";
$rs = mysqli_query($conn,$qry);
$b2b_user = mysqli_num_rows($rs);

$qry1 = "SELECT * FROM user_tbl WHERE user_typ=3 AND is_active=1";
$rs1 = mysqli_query($conn,$qry1);
$b2c_user = mysqli_num_rows($rs1);

$qry2 = "SELECT * FROM cat_tbl WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$category = mysqli_num_rows($rs2);

$qry2 = "SELECT * FROM sub_cat_tbl WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$subcategory = mysqli_num_rows($rs2);

$qry2 = "SELECT * FROM product_tbl WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$product = mysqli_num_rows($rs2);

$qry2 = "SELECT * FROM brand_tbl WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$brand = mysqli_num_rows($rs2);

$qry2 = "SELECT * FROM color_tbl WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$color = mysqli_num_rows($rs2);

$qry2 = "SELECT * FROM state_tbl WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$state = mysqli_num_rows($rs2);

$qry2 = "SELECT * FROM city_tbl WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$city = mysqli_num_rows($rs2);

$qry2 = "SELECT * FROM order_tbl WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$order = mysqli_num_rows($rs2);

$qry2 = "SELECT * FROM return_order_tbl WHERE  is_active=2";
$rs2 = mysqli_query($conn,$qry2);
$return_order = mysqli_num_rows($rs2);

$qry2 = "SELECT * FROM inq_tbl WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$inquery = mysqli_num_rows($rs2);

$qry2 = "SELECT * FROM feedback_tbl WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$feedback = mysqli_num_rows($rs2);

$qry2 = "SELECT * FROM coupon_code WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$coupon_code = mysqli_num_rows($rs2);

?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<!--LINE-1-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2" style="border-radius: 50px 0px;">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Visitors</h4>
					<h3 style="color:white;"></h3>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1" style="border-radius: 50px 0px;">
				<a href="user_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>B2B Users</h4>
						<h3 style="color:white;"><?php echo $b2b_user; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				 </a> 
				</div>
			</div>

			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3" style="border-radius: 50px 0px;">
				<a href="b2c_user_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>B2C Users</h4>
						<h3 style="color:white;"><?php echo $b2c_user; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				</a>  
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4" style="border-radius: 50px 0px;">
				<a href="cat_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa fa-tags fa-3x" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Category</h4>
						<h3 style="color:white;"><?php echo $category; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				  </a>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- LINE-1 -->

		<!--LINE-2-->
       <div class="market-updates">
            <div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4" style="border-radius: 50px 0px;">
				<a href="sub_cate_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-tags fa-3x" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Sub_Category</h4>
						<h3 style="color:white;"><?php echo $subcategory; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				 </a> 
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2" style="border-radius: 50px 0px;">
				<a href="pro_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-lg fa-product-hunt fa-3x "> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Products</h4>
					<h3 style="color:white;"><?php echo $product; ?></h3>
				  </div>
				  <div class="clearfix"> </div>
				 </a> 
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1" style="border-radius: 50px 0px;">
				<a href="brand_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-btc fa-3x" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Brand</h4>
						<h3 style="color:white;"><?php echo $brand; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				</a> 
				</div>
			</div>
			
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3" style="border-radius: 50px 0px;">
				<a href="color_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-copyright fa-3x"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Color</h4>
						<h3 style="color:white;"><?php echo $color; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				</a>  
				</div>
			</div>
			
		   <div class="clearfix"> </div>
		</div>	
		<!--LINE-2-->

		<!--LINE-3-->
       <div class="market-updates">
            <div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3" style="border-radius: 50px 0px;">
				<a href="state_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-globe fa-3x"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>State</h4>
						<h3 style="color:white;"><?php echo $state; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				</a>  
				</div>
			</div>
            <div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4" style="border-radius: 50px 0px;">
				<a href="city_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>City</h4>
						<h3 style="color:white;"><?php echo $city; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				 </a> 
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2" style="border-radius: 50px 0px;">
				<a href="order_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart fa-3x"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Order</h4>
					<h3 style="color:white;"><?php echo $order; ?></h3>
				  </div>
				  <div class="clearfix"> </div>
				 </a> 
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1" style="border-radius: 50px 0px;">
				<a href="return_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-truck fa-3x" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Return-Order</h4>
						<h3 style="color:white;"><?php echo $return_order; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				</a> 
				</div>
			</div>
			
			
			
		   <div class="clearfix"> </div>
		</div>	
		<!--LINE-3-->
				
		<!--LINE-4-->
       <div class="market-updates">
            <div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1" style="border-radius: 50px 0px;">
				<a href="inquery_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-edit fa-3x" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Inquery</h4>
						<h3 style="color:white;"><?php echo $inquery; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				</a> 
				</div>
			</div>
            <div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3" style="border-radius: 50px 0px;">
				<a href="feedback_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-comments fa-3x"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>FeedBack</h4>
						<h3 style="color:white;"><?php echo $feedback; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				</a>  
				</div>
			</div>
            <div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4" style="border-radius: 50px 0px;">
				<a href="coupon_code_manager.php">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-gift fa-3x" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Coupon_Code</h4>
						<h3 style="color:white;"><?php echo $coupon_code; ?></h3>
					</div>
				  <div class="clearfix"> </div>
				 </a> 
				</div>
			</div>
			
			
		   <div class="clearfix"> </div>
		</div>	
		<!--LINE-4-->
					
</section>
 <!-- footer -->
 <?php
require "common/footer.php";
	?>	 