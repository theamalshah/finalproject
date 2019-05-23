<?php

require "common/dbconnect.php";
$cat_id=$_GET['cat_id'];


$qry="UPDATE cat_tbl SET is_active=0 WHERE cat_id=$cat_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	 echo '<script> alert("Delete Record sucessfully")</script>';
	 echo '<script> window.location="cat_manager.php"</script>';
	//header("location:cat_manager.php");
}
else
{
	echo '<script> alert("Something is Worng plz check")</script>';
	 echo '<script> window.location="cat_manager.php"</script>';
	//header("location:cat_manager.php?msg=QRY ERROR!!!");
}

?>