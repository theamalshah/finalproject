<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE product_tbl SET is_active=2 WHERE prod_id=$id";
}
else
{
	$qry="UPDATE product_tbl SET is_active=1 WHERE prod_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:pro_manager.php");
}
else
{
	echo "update error";
}
?>