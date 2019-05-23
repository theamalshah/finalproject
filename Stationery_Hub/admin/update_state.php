<?php

session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{

	$sid=$_POST['s_id'];
	$sname=$_POST['state_name'];
	
	$dou=date("Y-m-d H:i:s");


	$sql="SELECT * FROM state_tbl WHERE state_id=$sid";

	$res=mysqli_query($conn,$sql);

	$row=mysqli_fetch_assoc($res);

	if($row['state_name']==$sname)
	{
		echo '<script> alert("This State is Allready Added")</script>';
		echo '<script> window.location="edit_state.php"</script>';
		
	}
	else
	{


	$qry="UPDATE state_tbl SET state_name='".$sname."',dou='".$dou."' WHERE state_id=$sid";

	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		echo '<script> alert("Sucessfully State UPDATED")</script>';
		echo '<script> window.location="state_manager.php"</script>';
		
	}
	else
	{
		 echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="edit_state.php"</script>';
	}
	
	}
}
else
{
	echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="state_manager.php"</script>';
}

?>