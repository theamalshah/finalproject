<?php

session_start();
require "common/dbconnect.php";
if(isset($_POST['btnsubmit']))
{

	$user=$_POST['email'];
	 $pass=$_POST['pass'];
    $password=base64_encode($pass);
	
	
	$qry1="SELECT * FROM user_tbl WHERE user_typ>0 AND is_active=1 AND  email='".$user."'  ";
	$rs1=mysqli_query($conn,$qry1);

	if(mysqli_num_rows($rs1)>0)
	{

		 $qry="SELECT * FROM user_tbl WHERE email='".$user."' AND pass='".$password."' AND user_typ>0 AND is_active=1";
	    $rs=mysqli_query($conn,$qry);

        if(mysqli_num_rows($rs)>0)
	      {
	      	   $row=mysqli_fetch_assoc($rs);
		        $_SESSION['name']=$row['fname']."    ".$row['lname'];
		        $_SESSION['user_id']=$row['user_id'];
		        $user_typ=$row['user_typ'];

		       if ($user_typ==2) 
		       {
			       $_SESSION['b2b']=$user_typ;
		       }

                 if(isset($_POST['remember']))
	               {
		                 setcookie(user,$user,time()+(86400 * 30),"/");
		                 setcookie(pass,$pass,time()+(86400 * 30),"/");
	               }

	              if(isset($_SESSION['var']))
	              {
	    	          header("location:inquery.php");
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