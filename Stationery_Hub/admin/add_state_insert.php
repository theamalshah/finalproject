<?php
session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{
	$stname=$_POST['state_name'];
	$is_active=1;
	$doi=date("Y-m-d H:i:s");

	 $qry="SELECT * FROM state_tbl WHERE state_name='".$stname."'";
	

	$res=mysqli_query($conn,$qry);
	
	if(mysqli_num_rows($res)>0)
	{
		echo '<script> alert("This state is Allready Added")</script>';
		echo '<script> window.location="add_state.php"</script>';
		
	}
	else
     {
     	$qry="INSERT INTO state_tbl(state_name,is_active,doi)VALUES('".$stname."',
	     $is_active,'".$doi."')";

           $rs=mysqli_query($conn,$qry);

	if($rs)
	{
		echo '<script> alert("Sucessfully add State")</script>';
		echo '<script> window.location="state_manager.php"</script>';

	}
	else
	{
		echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="add_state.php"</script>';
	}

     }



}
else
{
	echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="add_state.php"</script>';
}

?>