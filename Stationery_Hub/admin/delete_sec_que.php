<?php

require "common/dbconnect.php";
$sec_que_id=$_GET['sec_que_id'];


$qry="UPDATE sec_que_tbl SET is_active=0 WHERE sec_que_id=$sec_que_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	echo '<script> alert("Delete record Successfully")</script>';
		echo '<script> window.location="sec_que_manager.php"</script>';
	
}
else
{
	echo '<script> alert("Direct URL Called")</script>';
	echo '<script> window.location="sec_que_manager.php"</script>';
}

?>