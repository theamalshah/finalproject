<?php
session_start();
require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{
	$sec_que=$_POST['sec_que'];
	$is_active=1;
	$doi=date("Y-m-d H:i:s");

	 $qry="SELECT * FROM sec_que_tbl WHERE sec_que='".$sec_que."'";
	

	$res=mysqli_query($conn,$qry);
	
	if(mysqli_num_rows($res)>0)
	{
		echo '<script> alert("This Security Question  is Allready Added")</script>';
		echo '<script> window.location="add_sec_que.php"</script>';
		
	}
	else
     {
     	$qry="INSERT INTO sec_que_tbl(sec_que,is_active,doi)VALUES('".$sec_que."',
	     $is_active,'".$doi."')";

           $rs=mysqli_query($conn,$qry);

	if($rs)
	{
		echo '<script> alert("Sucessfully add Security Question")</script>';
		echo '<script> window.location="sec_que_manager.php"</script>';

	
	}

     }



}
else
{
	echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="add_sec_que.php"</script>';
	
}

?>