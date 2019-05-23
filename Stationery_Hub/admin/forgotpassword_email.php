<?php
require "common/dbconnect.php";
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';
   if (isset($_POST['btnsubmit'])) 
   {
     $email=$_POST['email'];
     $main_sec_ans=$_POST['main_sec_ans'];
      $sec_ans=$_POST['enter_sec_ans'];
     
    

     if ($main_sec_ans == $sec_ans) 
     {
     	 $qry = "SELECT * FROM user_tbl WHERE email='".$email."' ";
      $rs = mysqli_query($conn,$qry);
      $row=mysqli_fetch_assoc($rs);

       $password=$row['pass'];
       
       $aaa= base64_decode($password);

     	$body="your password is  : $aaa<br>  ";
	       

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
                     echo '<script> alert("Password will Be Send On Your Email Address")</script>';
                    echo '<script> window.location="login.php"</script>';
		      
	   
	         }
     }
     else
     {
                 echo '<script> alert("ANSWER_IS_WRONG_FOR_SECURITY_PLZ_TRY_AGAIN")</script>';
                    echo '<script> window.location="login.php"</script>';
     	
     }
     
   }
   else
   {
      echo '<script> alert("DIRECT_URL_CALLED")</script>';
      echo '<script> window.location="login.php"</script>';
   	  
   }


?>