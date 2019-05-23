<?php

require "common/dbconnect.php";
$cityid=$_GET['cid'];


$qry="UPDATE city_tbl SET is_active=0 WHERE city_id=$cityid";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	echo '<script> alert("Delete record Successfully")</script>';
		echo '<script> window.location="city_manager.php"</script>';
	
}
else
{
	 echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="city_manager.php"</script>';
}

?>