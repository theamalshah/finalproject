<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE color_tbl SET is_active=2 WHERE color_id=$id";
}
else
{
	$qry="UPDATE color_tbl SET is_active=1 WHERE color_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:color_manager.php");
}
else
{
	echo "update error";
}
?>