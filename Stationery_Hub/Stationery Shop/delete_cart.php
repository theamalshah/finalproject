<?php

require "common/dbconnect.php";
$cart_id=$_GET['cart_id'];


//$qry="UPDATE cart_tbl SET is_active=0 WHERE cart_id=$cart_id";
$qry="DELETE FROM cart_tbl WHERE cart_id=$cart_id ";
$rs=mysqli_query($conn,$qry);

if($rs)
{
    echo '<script> alert("Your Cart Item Is Delete")</script>';
	echo '<script> window.location="shopping-cart.php"</script>';
	
}
else
{
	echo '<script> alert("Direct Url Called")</script>';
		echo '<script> window.location="shopping-cart.php"</script>';
	
}

?>