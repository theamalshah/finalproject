<?php
session_start();
require "common/dbconnect.php";
require "common/profile_img.php";
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';


if(isset($_POST['btn_sb']))
{
	$city_id=$_POST['city_tbl'];
	$state_id=$_POST['state_tbl'];
	$sec_que_id=$_POST['sec_que_tbl'];
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
    $password=$_POST['pass'];
    $pass=base64_encode($password);
	//$password=mysqli_real_escape_string($conn,$_POST['pass']);
	//$pass=md5($password);
	$gender=$_POST['gender'];
	$profile_pic=$target_file;
	$sec_ans=$_POST['sec_ans'];
	$add1=$_POST['add1'];
	$is_active=0;
	$doi=date("Y-m-d H:i:s");
	$user_typ=3;
    
     $qry1 = "SELECT * FROM user_tbl WHERE email='".$email."' ";
      $rs1 = mysqli_query($conn,$qry1);
      if (mysqli_num_rows($rs1)>0) 
        {
        	echo '<script> alert("This email id is Registed ")</script>';
            echo '<script> window.location="signupb2c.php"</script>';
        	  
        }
        else
        {
               $qry="INSERT INTO user_tbl(fname,lname,email,pass,gender,profile_pic,sec_que,sec_ans,add1,city_id, state_id, is_active, doi, user_typ) VALUES ('".$fname."','".$lname."','".$email."','".$pass."','".$gender."','".$profile_pic."',$sec_que_id,'".$sec_ans."','".$add1."',$city_id,$state_id,$is_active,'".$doi."',$user_typ)";
    
    	       $rs=mysqli_query($conn,$qry);
     
	if($rs)
	{
		$body="Name is : $fname $lname<br>
		  for conformation login <br><br>
		  	click on link<br>
		    <a href='http://localhost/Stationery_Hub/Stationery%20Shop/actionb2cemail.php?email=$email'>click Here</a>";
	       

	      $sub="Contact Form Submitted From Website";
	       $mail = new PHPMailer;

	     $mail->isSMTP();                                   // Set mailer to use SMTP
	     $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	     $mail->SMTPAuth = true;                            // Enable SMTP authentication
	     $mail->Username = 'stationeryhub53@gmail.com';          // SMTP username
	     $mail->Password = 'hub@1234'; // SMTP password
	     $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	     $mail->Port = 587;                                 // TCP port to connect to

	     $mail->setFrom($email, 'StationeryHUB');
	     $mail->addReplyTo('stationeryhub53@gmail.com', 'StationeryHUB');
	     $mail->addAddress($email);   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	     $mail->isHTML(true);  // Set email format to HTML

	     $bodyContent = $body;
	
	     $mail->Subject = $sub;
	     $mail->Body    = $bodyContent;

           $mail->SMTPOptions = array(
          'ssl' => array(
                         'verify_peer' => false,
                         'verify_peer_name' => false,
                         'allow_self_signed' => true
                          )
            );
	        if(!$mail->send()) {
	               echo 'Message could not be sent.';
	               echo 'Mailer Error: ' . $mail->ErrorInfo;
	        } 
	        else
	         {
	         	echo '<script> alert("plz Check Email For Conformation")</script>';
                echo '<script> window.location="login.php"</script>';
		      
		      
	   
	       }
	}
        }
   

}
else
{
	echo '<script> alert("direct Url Called")</script>';
                echo '<script> window.location="signupb2c.php"</script>';
	
}
?>