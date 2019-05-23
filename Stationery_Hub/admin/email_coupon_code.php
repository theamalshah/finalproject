<?php
session_start();
require "common/dbconnect.php";
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';



if(isset($_POST['btn_sb']))
{
	$coupon_code=$_POST['coupon_code'];
	echo $coupon_code;

	$email=$_POST['email'];
       $qry="SELECT * FROM coupon_code where code_id=$coupon_code";
          $rs=mysqli_query($conn,$qry);
          $row=mysqli_fetch_assoc($rs);
          $code=$row['coupon_code'];
    
		$body="<h1> welcome </h1>

		<h3>It's Discount coupon code when selling product into our site than using this coupon code.</h3>
		        <h3>  coupon Code :- <b>$code </b></h3>

		          <p>open the <a href='http://localhost/Stationery_Hub/Stationery Shop/index.php'>StationeryHub</a></p>
		          ";
	       echo $body;

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
	         	echo '<script> alert("code sent on email address")</script>';
                echo '<script> window.location="send_coupon_code_manager.php"</script>';
		      
	   
	       }
	
		

}
else
{
	echo '<script> alert("Direct URL Called")</script>';
	 echo '<script> window.location="send_coupon_code_manager.php"</script>';
}
?>