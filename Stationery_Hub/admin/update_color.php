<?php

session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{

	$color_id=$_POST['color_id'];
	$color_name=$_POST['color_name'];
	
	$dou=date("Y-m-d H:i:s");


	$sql="SELECT * FROM color_tbl WHERE color_id=$color_id";

	$res=mysqli_query($conn,$sql);

	$row=mysqli_fetch_assoc($res);

	if($row['color_name']==$color_name)
	{
		echo '<script> alert("this Color is Allready Exits")</script>';
		echo '<script> window.location="color_manager.php"</script>';
		
	}
	else
	{


	$qry="UPDATE color_tbl SET color_name='".$color_name."',dou='".$dou."' WHERE color_id=$color_id";

	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		 echo '<script> alert("Sucessfully UPDATED Color")</script>';
		echo '<script> window.location="color_manager.php"</script>';
		
	}
	else
	{
		echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="color_manager.php"</script>';
	}
	
	}
}
else
{
	echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="color_manager.php"</script>';
}

?>