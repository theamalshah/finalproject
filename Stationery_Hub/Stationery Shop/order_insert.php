<?php
session_start();
require "common/dbconnect.php";
    
if (isset($_POST['btn_or'])) 
{
	 $qry="SELECT * FROM order_tbl WHERE is_active=1 ORDER BY order_id DESC " ;
            $rs=mysqli_query($conn,$qry);
	        $row=mysqli_fetch_assoc($rs);
	        
	        
	      if ($row['order_id'] == 0) 
	      {
	      	$o=1;
	      }
	      else
	      {
	      	$o=$row['order_id']+1;
	      }

	$user_id=$_POST['user_id'];

	
	 $qry1="SELECT * FROM cart_tbl  WHERE is_active=1 AND user_id=$user_id ";
            $rs1=mysqli_query($conn,$qry1);
	 while($row1=mysqli_fetch_assoc($rs1))
        {
	        $cart_id=$row1['cart_id'];
	        $prod_id=$row1['prod_id'];
	        $qun=$row1['main_qun'];
	        $cart_price=$row1['prod_price'];
	

	          $total_price=$_POST['price'];
	          $fname=$_POST['fname'];
	          $lname=$_POST['lname'];
	          $add1=$_POST['add'];
	          $city_id=$_POST['city_tbl'];
	          $state_id=$_POST['state_tbl'];
	          $postcode=$_POST['postcode'];
	          $email=$_POST['email'];
	          $mobile=$_POST['mobile'];
	          $decs=$_POST['decs'];
	          $payment=$_POST['payment'];
	          $status=25;
	          $is_active=1;
	          $doi=date("Y-m-d H:i:s");

	           
            $qry="INSERT INTO order_tbl(order_id,user_id,cart_id,prod_id,qun,cart_price,total_price,fname,lname,add1,state_id,city_id,pincode,email,mobile,decs,payment,status,is_active,doi) VALUES ($o,$user_id,$cart_id,$prod_id,$qun,$cart_price,'".$total_price."','".$fname."','".$lname."','".$add1."',$state_id,$city_id,$postcode,'".$email."',$mobile,'".$decs."','".$payment."',$status,$is_active,'".$doi."')";
            
            
               $rs=mysqli_query($conn,$qry);

        }	  

	          if($rs)
	          {
		
                   $qry2="UPDATE cart_tbl SET is_active=2 WHERE user_id=$user_id";
                    $rs2=mysqli_query($conn,$qry2);

                      echo '<script> alert("Order Is Genreted  check your Order in Track Order")</script>';
                       echo '<script> window.location="index.php"</script>';
                     
            	
	          }
	          else
	         {

	         	echo '<script> alert("Enter Right information as Required ")</script>';
                echo '<script> window.location="shopping-cart.php"</script>';
		          
		         
	        }
  
	
}
else
{
	echo '<script> alert("Something is wrong is check by admin ")</script>';
     echo '<script> window.location="shopping-cart.php"</script>';
	
}  




?>