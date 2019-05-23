<?php

require "common/dbconnect.php";
$id=$_GET['id'];


$qry="UPDATE coupon_code SET is_active=0 WHERE code_id=$id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	header("location:coupon_code_manager.php");
}
else
{
	header("location:coupon_code_manager.php?msg=QRY ERROR!!!");
}

?>