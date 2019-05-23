<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE inq_tbl SET is_active=2 WHERE inq_id=$id";
}
else
{
	$qry="UPDATE inq_tbl SET is_active=1 WHERE inq_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:inquiry_manager.php");
}
else
{
	header("location:inquiry_manager.php?update error");
}
?>