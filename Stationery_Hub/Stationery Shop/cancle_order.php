<?php

require "common/dbconnect.php";
$id=$_GET['id'];


$qry="UPDATE order_tbl SET is_active=0 WHERE id=$id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
        echo '<script> alert("Your Order Is Cancled")</script>';
		echo '<script> window.location="orderdetails.php"</script>';
	
}
else
{
	  echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="orderdetails.php"</script>';
	
}

?>