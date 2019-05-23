<?php

session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{

	$cityid=$_POST['c_id'];
	$cityname=$_POST['city_name'];
	$stateid=$_POST['state_name'];
	
	$dou=date("Y-m-d H:i:s");


	$sql="SELECT * FROM city_tbl WHERE city_id=$cityid";

	$res=mysqli_query($conn,$sql);

	$row=mysqli_fetch_assoc($res);

	if($row['city_name']==$cityname)
	{
		echo '<script> alert("This city is Allready Added")</script>';
		echo '<script> window.location="city_manager.php"</script>';

		
	}
	else
	{


	$qry="UPDATE city_tbl SET city_name='".$cityname."',state_id=$stateid,dou='".$dou."' WHERE city_id=$cityid";

	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		echo '<script> alert("Sucessfully UPDATED city")</script>';
		echo '<script> window.location="city_manager.php"</script>';
	}
	else
	{
		 echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="city_manager.php"</script>';
	}
	
	}
}
else
{
	echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="city_manager.php"</script>';
	
}

?>