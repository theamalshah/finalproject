<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE sec_que_tbl SET is_active=2 WHERE sec_que_id=$id";
}
else
{
	$qry="UPDATE sec_que_tbl SET is_active=1 WHERE sec_que_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:sec_que_manager.php");
}
else
{
	echo "update error";
}
?>