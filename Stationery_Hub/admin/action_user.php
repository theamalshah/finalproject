<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE user_tbl SET is_active=2 WHERE user_id=$id";
}
else
{
	$qry="UPDATE user_tbl SET is_active=1 WHERE user_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:user_manager.php");
}
else
{
	echo "update error";
}
?>