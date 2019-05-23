<?php
session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{
	$cat_id=$_POST['cname'];
	$sub_cat_name=$_POST['sub_cat_name'];
	$is_active=1;
	$doi=date("Y-m-d H:i:s");

	 $qry="SELECT * FROM sub_cat_tbl WHERE sub_cat_name='".$sub_cat_name."'";

	$res=mysqli_query($conn,$qry);
	
	if(mysqli_num_rows($res)>0)
	{
		echo '<script> alert("categary Allready Exist")</script>';
		echo '<script> window.location="add_subcate.php"</script>';
		
	}
	else
	{
               $qry="INSERT INTO sub_cat_tbl(cat_id,sub_cat_name,is_active,doi) VALUES ('".$cat_id."','".$sub_cat_name."',$is_active,'".$doi."')";
  
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		echo '<script> alert("Sucess add sub categary")</script>';
		echo '<script> window.location="sub_cate_manager.php"</script>';
		
	}

	}
   
    
}
else
{
	    echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="add_subcate.php"</script>';
  
}

?>