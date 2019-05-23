<?php

require "common/dbconnect.php";
$buss_det_id=$_GET['buss_det_id'];


$qry="UPDATE buss_det_tbl SET is_active=0 WHERE buss_det_id=$buss_det_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	header("location:business_manager.php");
}
else
{
	header("location:business_manager.php?msg=QRY ERROR!!!");
}

?>