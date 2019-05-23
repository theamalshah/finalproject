<?php
session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{
	$stateid=$_POST['state_name'];
	$city=$_POST['city_name'];
	$is_active=1;
	$doi=date("Y-m-d H:i:s");

	 $qry="SELECT * FROM city_tbl WHERE city_name='".$city."'";

	$res=mysqli_query($conn,$qry);
	
	if(mysqli_num_rows($res)>0)
	{
		echo '<script> alert("This city is Allready Added")</script>';
		echo '<script> window.location="add_city.php"</script>';
		
	}
	else
	{
               $qry="INSERT INTO city_tbl(state_id,city_name,is_active,doi) VALUES ('".$stateid."','".$city."',$is_active,'".$doi."')";
  
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		 echo '<script> alert("Sucessfully add City")</script>';
		echo '<script> window.location="city_manager.php"</script>';
		
	}

	}
   
    
}
else
{
  echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="add_city.php"</script>';
}

?>