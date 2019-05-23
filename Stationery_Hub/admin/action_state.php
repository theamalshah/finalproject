<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE state_tbl SET is_active=2 WHERE state_id=$id";
}
else
{
	$qry="UPDATE state_tbl SET is_active=1 WHERE state_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:state_manager.php");
}
else
{
	echo "update error";
}
?>