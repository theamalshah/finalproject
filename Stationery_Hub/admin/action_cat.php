<?php

require "common/dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==1)
{
	$qry="UPDATE cat_tbl SET is_active=2 WHERE cat_id=$id";
}
else
{
	$qry="UPDATE cat_tbl SET is_active=1 WHERE cat_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	
	 echo '<script> window.location="cat_manager.php"</script>';
}
else
{
	echo '<script> alert("Something is worng plz check by admin")</script>';
	 echo '<script> window.location="cat_manager.php"</script>';
}
?>