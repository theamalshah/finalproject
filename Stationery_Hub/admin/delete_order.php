<?php

require "common/dbconnect.php";
$order_id=$_GET['order_id'];


$qry="UPDATE order_tbl SET is_active=0 WHERE order_id=$order_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	   echo '<script> alert("Delete record Successfully")</script>';
		echo '<script> window.location="order_manager.php"</script>';
	
}
else
{
	echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="order_manager.php"</script>';
}

?>