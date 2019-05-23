<?php
session_start();
require "common/dbconnect.php";


if(isset($_POST['btn_sb']))
{

	$prod_id=$_SESSION['prod_id'];
	$user_id=$_SESSION['user_id'];	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile_no=$_POST['mobile_no'];
	$inq_msg=$_POST['msg'];
	
	$is_active=1;
	$doi=date("Y-m-d H:i:s");
   
   $qry="INSERT INTO inq_tbl(prod_id,user_id,name,email,mobile_no,inq_msg,is_active,doi) VALUES ($prod_id,$user_id,'".$name."','".$email."','".$mobile_no."','".$inq_msg."',$is_active,'".$doi."')";
    
    	$rs=mysqli_query($conn,$qry);
     
	if($rs)
	{
	     echo '<script> alert("Your Inquery IS sent to Admin")</script>';
          echo '<script> window.location="index.php"</script>';
		
	}
	else
	{
		 echo '<script> alert("Plz enter Right Information")</script>';
          echo '<script> window.location="inquery.php"</script>';
		
	}

}
else
{
	 echo '<script> alert("Direct Url Called")</script>';
          echo '<script> window.location="inquery.php"</script>';
}
?>