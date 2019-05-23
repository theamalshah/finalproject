<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE feedback_tbl SET is_active=2 WHERE id=$id";
}
else
{
	$qry="UPDATE feedback_tbl SET is_active=1 WHERE id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:feedbackmanager.php");
}
else
{
	echo "update error";
}
?>