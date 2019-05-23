<?php

require "common/dbconnect.php";
$color_id=$_GET['color_id'];


$qry="UPDATE color_tbl SET is_active=0 WHERE color_id=$color_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	    echo '<script> alert("Delete record Successfully")</script>';
		echo '<script> window.location="color_manager.php"</script>';
	
}
else
{
	    echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="color_manager.php"</script>';
}

?>