<?php
session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{
	$catname=$_POST['cat_name'];
	$is_active=1;
	$doi=date("Y-m-d H:i:s");

	 $qry="SELECT * FROM cat_tbl WHERE cname='".$catname."'";
	

	$res=mysqli_query($conn,$qry);
	
	if(mysqli_num_rows($res)>0)
	{
		echo '<script> alert("categary Allready Exist")</script>';
		echo '<script> window.location="add_category.php"</script>';
		//header("location:add_category.php?msg=State already exist");
	}
	else
     {
     	$qry="INSERT INTO cat_tbl(cname,is_active,doi)VALUES('".$catname."',
	     $is_active,'".$doi."')";

           $rs=mysqli_query($conn,$qry);

	if($rs)
	{
		echo '<script> alert("SucessFully add categary")</script>';
		echo '<script> window.location="add_category.php"</script>';
		//header("location:cat_manager.php");
		
	}

     }



}
else
{
	header("location:add_state.php?msg=Direct URL called.");
}

?>