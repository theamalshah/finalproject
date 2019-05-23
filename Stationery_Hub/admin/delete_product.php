<?php

require "common/dbconnect.php";
$prod_id=$_GET['prod_id'];


$qry="UPDATE product_tbl SET is_active=0 WHERE prod_id=$prod_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	   echo '<script> alert("Sucessfully Delete Product")</script>';
		echo '<script> window.location="pro_manager.php"</script>';
	
}
else
{
	  echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="pro_manager.php"</script>';
	
}

?>