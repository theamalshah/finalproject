<?php

session_start();
require "common/dbconnect.php";
if(isset($_POST['btnsubmit']))
{

	$user=$_POST['email'];
	$pass=$_POST['pass'];
    $password=base64_encode($pass);
	
   

	$qry="SELECT * FROM user_tbl WHERE user_typ=1 AND is_active=1 AND email='".$user."' ";
	$rs=mysqli_query($conn,$qry);

	if(mysqli_num_rows($rs)>0)
	{
		$qry1="SELECT * FROM user_tbl WHERE email='".$user."' and pass='".$password."' and user_typ=1 and is_active=1";
	    $rs1=mysqli_query($conn,$qry1);
		$row=mysqli_fetch_assoc($rs1);
		if(mysqli_num_rows($rs1)>0)
	      {

		         $_SESSION['data']=$row['fname']."    ".$row['lname'];
		         $_SESSION['userid']=$row['user_id'];
                if(isset($_POST['Remember']))
	               {
		                 setcookie(user,$user,time()+(86400 * 30),"/");
		                 setcookie(pass,$pass,time()+(86400 * 30),"/");
	               }
		        header("location:index.php");
	      }
	      else
	      {
		           echo '<script> alert("password is worng plz try again")</script>';
		          echo '<script> window.location="login.php"</script>';
	      }
		
	}
	
	else
	{
		 echo '<script> alert("email id is worng plz try again")</script>';
		          echo '<script> window.location="login.php"</script>';
	}

	
}
else
{
	   echo '<script> alert("Direct Url Called")</script>';
		echo '<script> window.location="login.php"</script>';
	
}


?>