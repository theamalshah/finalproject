<?php

require "common/dbconnect.php";
$user_id=$_GET['user_id'];


$qry="UPDATE user_tbl SET is_active=0 WHERE user_id=$user_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	   echo '<script> alert("Delete record Successfully")</script>';
		echo '<script> window.location="b2c_user_manager.php"</script>';
}
else
{
	echo '<script> alert("Direct URL Called")</script>';
	echo '<script> window.location="b2c_user_manager.php"</script>';
}

?>