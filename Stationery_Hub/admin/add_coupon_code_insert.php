<?php

   require "common/dbconnect.php";

   if(isset($_POST['btn_sb']))
    {
   	  $code=$_POST['coupon_code'];
   	  $discount=$_POST['discount'];
   	  $is_active=1;
	$doi=date("Y-m-d H:i:s");
	   

	$qry="SELECT * FROM coupon_code WHERE coupon_code='".$code."'";

	$res=mysqli_query($conn,$qry);
	
	if(mysqli_num_rows($res)>0)
	{
		echo '<script> alert("This code is Allready Added")</script>';
		echo '<script> window.location="add_coupon_code.php"</script>';
		
	}
	else
     {
     	$qry="INSERT INTO `coupon_code`(`coupon_code`, `discount`, `is_active`, `doi`) VALUES ('".$code."',$discount,$is_active,'".$doi."')";

           $rs=mysqli_query($conn,$qry);

	if($rs)
	{
		echo '<script> alert("Sucessfully add Coupon Code")</script>';
		echo '<script> window.location="coupon_code_manager.php"</script>';
		
	}

     }

   }
   else
   {
   	   echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="add_coupon_code.php"</script>';
   }


?>