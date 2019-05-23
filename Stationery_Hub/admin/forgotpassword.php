<?php 
require "common/dbconnect.php";
   if (isset($_POST['forgot_btn'])) 
   {
     $forgot_email=$_POST['forgotemail'];
         $qry1 = "SELECT * FROM user_tbl WHERE   user_typ=1 AND is_active=1 AND email='".$forgot_email."'";
      $rs1 = mysqli_query($conn,$qry1);
      if (mysqli_num_rows($rs1)>0) 
        {
          
        	  header("location:forgotpass.php?email=$forgot_email");
        }
        else
        {
          echo '<script> alert("This Email Address Not Register Enter Your Right Email")</script>';
        echo '<script> window.location="login.php"</script>';
        	
        }
     
     
   }
   else
   {
       echo '<script> alert("DIRECT_URL_CALLED")</script>';
        echo '<script> window.location="login.php"</script>';
   	 
   }

?>