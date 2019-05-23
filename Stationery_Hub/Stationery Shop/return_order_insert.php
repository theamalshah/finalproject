<?php
session_start();
require "common/dbconnect.php";
if (isset($_POST['btn_ro'])) 
{
   $user_id=$_SESSION['user_id'];
   $order_id=$_POST['order_id'];
   $order_no=$_POST['order_no'];
   $product_id=$_POST['product_id'];
   $qun=$_POST['qun'];
   $price=$_POST['price'];
   $return=$_POST['return'];
   $is_active=1;
   $doi=date("Y-m-d H:i:s");
   $dou=date("Y-m-d H:i:s");
  
    $qry="INSERT INTO `return_order_tbl`( `user_id`, `order_id`, `order_no`, `product_id`, `qun`, `price`, `reasone`, `is_active`, `doi`) VALUES ($user_id,$order_id,$order_no,$product_id,$qun,$price,'".$return."',$is_active,'".$doi."')";

    $rs=mysqli_query($conn,$qry);
     
	if($rs)
	{
		
		$qry1="UPDATE `order_tbl` SET `status`=200,`dou`='".$dou."' WHERE id=$order_id ";
		 $rs1=mysqli_query($conn,$qry1);
		   if($rs1)
		   {
		   	  echo '<script> alert("OREDR_IS_SUCESSFULLY_RETURN")</script>';
              echo '<script> window.location="orderdetails.php"</script>';
             
		   }
		   else
		   	{
		   		 echo '<script> alert("check this order in track order")</script>';
              echo '<script> window.location="orderdetails.php"</script>';
                    
		   	}
		 
	}
	else
	{
		 echo '<script> alert("select reasone why you return this order")</script>';
              echo '<script> window.location="orderdetails.php"</script>';
		
	}

}	
else
  {
  	 echo '<script> alert("Direct Url Called")</script>';
              echo '<script> window.location="index.php"</script>';
		
  }

?>