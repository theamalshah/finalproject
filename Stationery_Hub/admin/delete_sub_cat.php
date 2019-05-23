<?php

require "common/dbconnect.php";
$sub_cat_id=$_GET['sub_cat_id'];

$qry="UPDATE sub_cat_tbl SET is_active=0 WHERE sub_cat_id=$sub_cat_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	echo '<script> alert("Delete Record sucessfully")</script>';
	echo '<script> window.location="sub_cate_manager.php"</script>';
}
else
{
	echo '<script> alert("Something is worng plz check by admin")</script>';
	echo '<script> window.location="sub_cate_manager.php"</script>';
	
}

?>