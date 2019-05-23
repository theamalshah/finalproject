<?php
session_start();
require "common/dbconnect.php";
		//$name=$_SESSION['data'];
if(!isset($_SESSION['data']))
{
    header("location:login.php");
}
if(isset($_POST['btn_sb']))
{

    $user_id=$_SESSION['userid'];
	$oldpass=$_POST['opass'];
	$opass=base64_encode($oldpass);
	$newpass=$_POST['npass'];
	$npass=base64_encode($newpass);
	$conformpass=$_POST['cpass'];
	$cpass=base64_encode($conformpass);
  
    

   
		$qry="SELECT * FROM user_tbl WHERE user_id=$user_id AND user_typ=1";
		$rs=mysqli_query($conn,$qry);
		
		
		if (mysqli_num_rows($rs)>0) 
			{
				while($row=mysqli_fetch_array($rs))
				{
					$oldpass=$row['pass'];
					if ($opass==$oldpass) 
					  {
			             if($npass==$cpass)
			                {
                                $qry="UPDATE user_tbl SET pass='".$npass."' WHERE user_id=$user_id ";
								$qry2=mysqli_query($conn,$qry);
								echo '<script> alert("Password is succesfully Change plz login again")</script>';
	                          echo '<script> window.location="login.php"</script>';
				 				
			                }
			                else
			                {
			                	echo '<script> alert("New_Passowrd_AND_Conform_Password_is_not_same")</script>';
	                         echo '<script> window.location="changepass.php"</script>';
				              
			                }

		
		              }
		              else
		              {
		              	echo '<script> alert("Old Password is Not Correct")</script>';
	                     echo '<script> window.location="changepass.php"</script>';
                        
		              }
	            }

            }
}
else
{
	echo '<script> alert("Direct URl Called")</script>';
	   echo '<script> window.location="changepass.php"</script>';
   
}	




?>
