<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE sub_cat_tbl SET is_active=2 WHERE sub_cat_id=$id";
}
else
{
	$qry="UPDATE sub_cat_tbl SET is_active=1 WHERE sub_cat_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:sub_cate_manager.php");
}
else
{
	echo "update error";
}
?>