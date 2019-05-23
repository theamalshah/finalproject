<?php

require "common/dbconnect.php";
$user_id=$_GET['user_id'];


$qry="UPDATE user_tbl SET is_active=0 WHERE user_id=$user_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	header("location:profile_manager.php");
}
else
{
	header("location:profile_manager.php?msg=QRY ERROR!!!");
}

?>