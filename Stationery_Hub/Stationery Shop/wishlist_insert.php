<?php
session_start();
require "common/dbconnect.php";

	$user_id=$_SESSION['user_id'];
	$prod_id=$_GET['prodid'];
	echo $prod_id;
           $qry="SELECT * FROM product_tbl  WHERE prod_id=$prod_id";
                                 $rs=mysqli_query($conn,$qry);
                                 $row=mysqli_fetch_assoc($rs);
                                  if(isset($_SESSION['b2b']))
                                    {  
                                         $prod_price=$row['b2b_price'];
                                    }
                                    else
                                    {
                                           $prod_price=$row['b2c_price'];
                                    }
                                  

                                 echo $prod_price;

	$is_active=1;
	$doi=date("Y-m-d H:i:s");
	
    $qry1="INSERT INTO wishlist_tbl(user_id,prod_id,prod_price,is_active,doi) VALUES ($user_id,$prod_id,'".$prod_price."',$is_active,'".$doi."')";
	
    
   
    
    	$rs1=mysqli_query($conn,$qry1);
     
	if($rs1)
	{
         echo '<script> alert(" Thanks for wish this product ")</script>';
            echo '<script> window.location="index.php"</script>';
		
	}
else
{
          echo '<script> alert("Direct_URL_Called ")</script>';
            echo '<script> window.location="index.php"</script>';
	
}
?>