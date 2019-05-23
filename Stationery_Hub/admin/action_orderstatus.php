<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==25)
{
	$qry="UPDATE order_tbl SET status=50 WHERE order_id=$id";
}
elseif ($status==50)
{
	$qry="UPDATE order_tbl SET status=75 WHERE order_id=$id";
}
elseif ($status==75)
{
	$qry="UPDATE order_tbl SET status=100 WHERE order_id=$id";
}
else
{
	$qry="UPDATE order_tbl SET status=100 WHERE order_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:order_manager.php");
}
else
{
	echo "update error";
}
?>