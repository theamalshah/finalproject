<?php

require "common/dbconnect.php";

if(isset($_GET['email']))
    {
     $email=$_GET['email'];
     $qry="UPDATE user_tbl SET is_active=1 WHERE email='".$email."'";
     $rs=mysqli_query($conn,$qry);
    if($rs)
     {
	     header("location:login.php?succsesfully");
      }
     else
      {
      	  echo $email;
	       echo "update error";
       }
    }
    else{
    	header("location:login.php?check_your_email");
    }


?>