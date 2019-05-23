<?php 
require "common/dbconnect.php";
   if (isset($_POST['forgot_btn'])) 
   {
     $forgot_email=$_POST['forgotemail'];
         $qry1 = "SELECT * FROM user_tbl WHERE user_typ>1 AND email='".$forgot_email."' ";
      $rs1 = mysqli_query($conn,$qry1);
      if (mysqli_num_rows($rs1)>0) 
        {
           
        	  header("location:sec_que_checking.php?email=$forgot_email");
        }
        else
        {
            echo '<script> alert("This Email Address not Register enter your right Email")</script>';
            echo '<script> window.location="login.php"</script>';
        }
     
     
   }
   else
   {
      echo '<script> alert("Direct Url Called")</script>';
       echo '<script> window.location="forgotpassword.php"</script>';
   	  
   }

?>