<?php

session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{

	$cat_id=$_POST['cat_id'];
	$cname=$_POST['cname'];
	
	$dou=date("Y-m-d H:i:s");


	$sql="SELECT * FROM cat_tbl WHERE cat_id=$cat_id";

	$res=mysqli_query($conn,$sql);

	$row=mysqli_fetch_assoc($res);

	if($row['cname']==$cname)
	{
		echo '<script> alert("This categary is Allready Added")</script>';
		echo '<script> window.location="cat_manager.php"</script>';
	}
	else
	{


	$qry="UPDATE cat_tbl SET cname='".$cname."',dou='".$dou."' WHERE cat_id=$cat_id";

	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		
		echo '<script> alert("UPDATED  record sucessfully")</script>';
		echo '<script> window.location="cat_manager.php"</script>';
	}
	else
	{
       echo '<script> alert("UPDATED error plz enter right information as requery")</script>';
		echo '<script> window.location="cat_manager.php"</script>';
		
	}
	
	}
}
else
{
	  echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="cat_manager.php"</script>';
	
}

?>