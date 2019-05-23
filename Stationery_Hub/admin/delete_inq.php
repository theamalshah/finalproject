<?php

require "common/dbconnect.php";
$inq_id=$_GET['inq_id'];


$qry="UPDATE inq_tbl SET is_active=0 WHERE inq_id=$inq_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	    echo '<script> alert("Delete inquiry record Successfully")</script>';
		echo '<script> window.location="inquiry_manager.php"</script>';
}
else
{
	echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="inquiry_manager.php"</script>';
	
}

?>