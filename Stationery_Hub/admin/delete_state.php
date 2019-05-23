<?php

require "common/dbconnect.php";
$s_id=$_GET['s_id'];


$qry="UPDATE state_tbl SET is_active=0 WHERE state_id=$s_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	  echo '<script> alert("Delete record Successfully")</script>';
		echo '<script> window.location="state_manager.php"</script>';
	
}
else
{
	    echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="state_manager.php"</script>';
}

?>