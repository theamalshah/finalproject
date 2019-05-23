<?php
session_start();
require "common/dbconnect.php";
  
	$user_id=$_SESSION['user_id'];
	$prod_id=$_SESSION['prod_id'];
	$prod_price=$_SESSION['prod_price'];
	$main_qun=1;
	
	$is_active=1;
	$doi=date("Y-m-d H:i:s");
	

	$qry="INSERT INTO cart_tbl(user_id,prod_id,main_qun,prod_price,is_active,doi) VALUES ($user_id,$prod_id,$main_qun,'".$prod_price."',$is_active,'".$doi."')";
    
    	$rs=mysqli_query($conn,$qry);
     
	if($rs)
	{
		 echo '<script> alert("This Product is Added In Your Cart")</script>';
		echo '<script> window.location="index.php"</script>';
		
	}
else
{
	 echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="product_details.php"</script>';
	
}
?>