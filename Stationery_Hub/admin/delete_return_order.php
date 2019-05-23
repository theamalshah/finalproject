<?php

require "common/dbconnect.php";
$return_id=$_GET['return_id'];


$qry="UPDATE return_order_tbl SET is_active=0 WHERE return_id=$return_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	   echo '<script> alert("Delete return order record Successfully")</script>';
		echo '<script> window.location="return_manager.php"</script>';
	
}
else
{
	 echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="return_manager.php"</script>';
}

?>