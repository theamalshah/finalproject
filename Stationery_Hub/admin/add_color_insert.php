<?php
session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{
	$color_name=$_POST['color_name'];
	$is_active=1;
	$doi=date("Y-m-d H:i:s");

	 $qry="SELECT * FROM color_tbl WHERE color_name='".$color_name."'";
	echo $qry;

	$res=mysqli_query($conn,$qry);
	
	if(mysqli_num_rows($res)>0)
	{
		echo '<script> alert("This color is Allready Added")</script>';
		echo '<script> window.location="color_manager.php"</script>';
		
	}
	else
     {
     	$qry="INSERT INTO color_tbl(color_name,is_active,doi)VALUES('".$color_name."',
	     $is_active,'".$doi."')";

           $rs=mysqli_query($conn,$qry);

	if($rs)
	{
		  echo '<script> alert("Sucessfully add Color")</script>';
		echo '<script> window.location="color_manager.php"</script>';
		
	}
	else
	{
		 echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="add_color.php"</script>';
	}

     }



}
else
{
	echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="add_color.php"</script>';
}

?>