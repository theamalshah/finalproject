<?php
session_start();
require "common/dbconnect.php";
  
    if (isset($_POST['update'])) 
           {
               
                   $qun=$_POST['qun'];
                   print_r($qun);
                   
                 foreach ($qun as $key => $value)
                  {
                  	  $cart_id=$key;
                  	  $v=$value;
                  	 
                  	  
                      $qry="SELECT * FROM cart_tbl  WHERE is_active=1 AND cart_id=$key ";
                      $rs=mysqli_query($conn,$qry);
                      $row=mysqli_fetch_assoc($rs);

                       $main_qun=$row['main_qun'];
                       $price=$row['prod_price'];
                       $a=$main_qun+$v;
                        
                       

                     $qry1="UPDATE cart_tbl SET main_qun=$a  WHERE cart_id=$key";
                             
                                 $rs1=mysqli_query($conn,$qry1);
                                 
                 }
            
              
            }
     
	if($rs1)
	{
    echo '<script> alert("Quentety IS update")</script>';
      echo '<script> window.location="shopping-cart.php"</script>';

		

	}
else
{
  echo '<script> alert("Enter Required Information ")</script>';
      echo '<script> window.location="shopping-cart.php"</script>';
	
}
?>
