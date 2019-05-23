<?php

session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{

	$sub_cat_id=$_POST['sub_cat_id'];
	$sub_cat_name=$_POST['sub_cat_name'];
	$cat_id=$_POST['cname'];
	
	$dou=date("Y-m-d H:i:s");


	$sql="SELECT * FROM sub_cat_tbl WHERE sub_cat_id=$sub_cat_id AND cat_id=$cat_id ";

	$res=mysqli_query($conn,$sql);

	$row=mysqli_fetch_assoc($res);

	if($row['sub_cat_name']==$sub_cat_name)
	{
		echo '<script> alert("This Sub-categary is Allready Added")</script>';
		echo '<script> window.location="sub_cate_manager.php"</script>';
		//header("location:edit_sub_cat.php?sub_cat_id=$sub_cat_id&msg=No Update ");
	}
	else
	{


	$qry="UPDATE sub_cat_tbl SET sub_cat_name='".$sub_cat_name."',cat_id=$cat_id,dou='".$dou."' WHERE sub_cat_id=$sub_cat_id";

	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		echo '<script> alert("This Sub-categary is Sucessfully  UPDATED")</script>';
		echo '<script> window.location="sub_cate_manager.php"</script>';
		
	}
	else
	{
		echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="sub_cate_manager.php"</script>';
	}
	
	}
}
else
{
	echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="sub_cate_manager.php"</script>';
	
}

?>