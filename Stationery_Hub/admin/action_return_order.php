<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE return_order_tbl SET is_active=2 WHERE return_id=$id";
}
else
{
	$qry="UPDATE return_order_tbl SET is_active=2 WHERE return_id=$id";
}


$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:return_manager.php");
}
else
{
	echo "update error";
}
?>