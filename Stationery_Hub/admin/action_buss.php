<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE buss_det_tbl SET is_active=2 WHERE buss_det_id=$id";
}
else
{
	$qry="UPDATE buss_det_tbl SET is_active=1 WHERE buss_det_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:business_manager.php");
}
else
{
	echo "update error";
}
?>