<?php

require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';
require "common/dbconnect.php";

session_start();

if(isset($_POST['btn_sb']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['message'];

$doi=date("Y-m-d H:i:s");

$qry="INSERT INTO `feedback_tbl`(`name`, `email`, `subject`, `message`, `doi`, `is_active`) VALUES ('".$name."','".$email."','".$sub."','".$msg."','".$doi."','1')";

$res=mysqli_query($conn,$qry);
   if($res)
      {
      	$body="Name is : $name<br>
		   Email is : $email<br>
		   Subject is : $sub<br>
		   Message is : $msg<br><br>";
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

	$mail->setFrom('stationeryhub53@gmail.com', 'StationeryHUB');
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
	} else {
		    echo '<script> alert("Message has been sent Admin")</script>';
		   echo '<script> window.location="contact.php"</script>';
		
	   
	}
	
      }
}
else
{
	 echo '<script> alert("Direct Url Called")</script>';
		   echo '<script> window.location="contact.php"</script>';
	
}

?>
<?php
//require 'PHPMailer/PHPMailerAutoload.php';



if(!isset($_GET['submit']))
{
	echo "Direct URL Called";
	exit();
}
	$name=$_GET['txt_name'];
	$email=$_GET['txt_email'];
	$contact=$_GET['txt_contact'];
	$msg=$_GET['txt_msg'];

	

?>
