<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE brand_tbl SET is_active=2 WHERE brand_id=$id";
}
else
{
	$qry="UPDATE brand_tbl SET is_active=1 WHERE brand_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:brand_manager.php");
}
else
{
	echo "update error";
}
?>