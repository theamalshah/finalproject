<?php

session_start();
require "common/dbconnect.php";



if(isset($_POST['btn_sb']))
{

	$user_id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$state_id=$_POST['state_tbl'];
	$city_id=$_POST['city_tbl'];
	$add1=$_POST['add1'];
	
	$dou=date("Y-m-d H:i:s");


	$sql="SELECT * FROM user_tbl WHERE user_id=$user_id";

	$res=mysqli_query($conn,$sql);

	$row=mysqli_fetch_assoc($res);

	if($row['fname']==$fname)
	{
		echo '<script> alert("No_Update Found")</script>';
		echo '<script> window.location="edit_profile.php"</script>';
		
	}
	else
	{
		$qry="UPDATE user_tbl SET fname='".$fname."',lname='".$lname."',email='".$email."',gender='".$gender."',add1='".$gender."',`city_id`=$city_id,`state_id`=$state_id,dou='".$dou."' WHERE user_id=$user_id";

 

	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		echo '<script> alert("Details Successfully Updated ")</script>';
		echo '<script> window.location="edit_profile.php"</script>';
		
	
	}
	else
	{
		echo '<script> alert("Something is worng plz check by admin")</script>';
	   echo '<script> window.location="edit_profile.php"</script>';
	}
	
	}
	
	
}
elseif (isset($_POST['btn_sb1'])) 
{
	    require "common/edit_profile_img.php";
	   
	    $user_id=$_POST['id'];
        $profile_pic=$target_file1;
	   

	     $qry="UPDATE user_tbl SET profile_pic='".$profile_pic."' WHERE user_id=$user_id";

	    $rs=mysqli_query($conn,$qry);
	    if($rs)
	    {
	    	echo '<script> alert("Image Successfully Updated ")</script>';
		    echo '<script> window.location="edit_profile.php"</script>';
		    
	    }
	    else
	    {
		    echo '<script> alert("Something is worng plz check by admin")</script>';
	   echo '<script> window.location="edit_profile.php"</script>';
	    }

}
else
{
	 echo '<script> alert("Direct URl Called")</script>';
	   echo '<script> window.location="edit_profile.php"</script>';
}

?>