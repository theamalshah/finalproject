<?php

require "common/dbconnect.php";
$id=$_GET['id'];


$qry="UPDATE feedback_tbl SET is_active=0 WHERE id=$id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	 echo '<script> alert("Delete feedback record Successfully")</script>';
		echo '<script> window.location="feedbackmanager.php"</script>';
	
}
else
{
	echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="feedbackmanager.php"</script>';
}

?>