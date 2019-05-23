<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE city_tbl SET is_active=2 WHERE city_id=$id";
}
else
{
	$qry="UPDATE city_tbl SET is_active=1 WHERE city_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:city_manager.php");
}
else
{
	echo "update error";
}
?>