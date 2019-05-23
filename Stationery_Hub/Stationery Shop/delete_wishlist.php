<?php

require "common/dbconnect.php";
$id=$_GET['id'];


$qry="UPDATE wishlist_tbl SET is_active=0 WHERE id=$id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	 echo '<script> alert("Your wishlist Product Is Delete")</script>';
	echo '<script> window.location="wishlist.php"</script>';
	header("location:wishlist.php");
}
else
{
	    echo '<script> alert("Direct Url Called")</script>';
		echo '<script> window.location="wishlist.php"</script>';
	
}

?>