<?php
session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{
	$bname=$_POST['bname'];
	$is_active=1;
	$doi=date("Y-m-d H:i:s");

	 $qry="SELECT * FROM brand_tbl WHERE bname='".$bname."'";
	

	$res=mysqli_query($conn,$qry);
	
	if(mysqli_num_rows($res)>0)
	{
		
        echo '<script> alert("Allready Exist Brand")</script>';
		echo '<script> window.location="add_brand.php"</script>';
		
	}
	else
     {
     	$qry="INSERT INTO brand_tbl(bname,is_active,doi)VALUES('".$bname."',
	     $is_active,'".$doi."')";

           $rs=mysqli_query($conn,$qry);

	if($rs)
	{
		echo '<script> alert("Sucessfully add Brand")</script>';
		echo '<script> window.location="add_brand.php"</script>';
		
	}

   }



}
else
{
	   echo '<script> alert("Direct URL called.")</script>';
		echo '<script> window.location="add_brand.php"</script>';
	
}

?>