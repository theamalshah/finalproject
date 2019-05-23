<?php

session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{

	$brand_id=$_POST['brand_id'];
	$bname=$_POST['bname'];
	
	$dou=date("Y-m-d H:i:s");


	$sql="SELECT * FROM brand_tbl WHERE brand_id=$brand_id";

	$res=mysqli_query($conn,$sql);

	$row=mysqli_fetch_assoc($res);

	if($row['bname']==$bname)
	{
		echo '<script> alert("This Brand is Allready Added")</script>';
		echo '<script> window.location="brand_manager.php"</script>';

		
	}
	else
	{


	$qry="UPDATE brand_tbl SET bname='".$bname."',dou='".$dou."' WHERE brand_id=$brand_id";

	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		echo '<script> alert(" UPDATED  record sucessfully")</script>';
		echo '<script> window.location="brand_manager.php"</script>';
		
	}
	else
	{
		echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="brand_manager.php"</script>';
	}
	
	}
}
else
{
	    echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="brand_manager.php"</script>';
}

?>