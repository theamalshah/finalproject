<?php
session_start();
		//$name=$_SESSION['data'];
if(!isset($_SESSION['user_id']))
{
    header("location:login.php?msg=11111");
}

require "common/dbconnect.php";

if(isset($_POST['btn_sb']))
{
    $user_id=$_SESSION['user_id'];
	$oldpass=$_POST['opass'];
	$opass=base64_encode($oldpass);
	$newpass=$_POST['npass'];
	$npass=base64_encode($newpass);
	$conformpass=$_POST['cpass'];
	$cpass=base64_encode($conformpass);
  
   
		$qry="SELECT * FROM user_tbl WHERE user_id=$user_id AND user_typ>1";
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
			                	echo '<script> alert("New_Passowrd_AND_Conform_Password_is_not_same Plz Try Agian")</script>';
	                            echo '<script> window.location="index.php"</script>';
				              
			                }

		
		              }
		              else
		              {
		              	 echo '<script> alert("Old Password is Not Correct PLZ Try Agian")</script>';
	                     echo '<script> window.location="index.php"</script>';
                         
		              }
	}

}
}
else
{
	 echo '<script> alert("Something is worng plz check by admin")</script>';
	echo '<script> window.location="index.php"</script>';
	
}



?>
