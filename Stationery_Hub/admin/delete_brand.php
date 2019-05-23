<?php

require "common/dbconnect.php";
$brand_id=$_GET['brand_id'];


$qry="UPDATE brand_tbl SET is_active=0 WHERE brand_id=$brand_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	   echo '<script> alert("Delete record Successfully")</script>';
		echo '<script> window.location="brand_manager.php"</script>';
	
}
else
{
	   echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="brand_manager.php"</script>';
}

?>