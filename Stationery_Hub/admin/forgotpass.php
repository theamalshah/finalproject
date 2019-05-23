<?php
require "common/dbconnect.php";

if(isset($_GET['email']))
{
    $email=$_GET['email'];
    $qry = "SELECT * FROM user_tbl WHERE email='".$email."' ";
      $rs = mysqli_query($conn,$qry);
      $row=mysqli_fetch_assoc($rs);

      $sec_que_id=$row['sec_que'];
      $sec_ans=$row['sec_ans'];

      $qry1 = "SELECT * FROM sec_que_tbl WHERE sec_que_id=$sec_que_id ";
      $rs1 = mysqli_query($conn,$qry1);
      $row1=mysqli_fetch_assoc($rs1);

      $sec_que=$row1['sec_que'];

}

?>
<!DOCTYPE html>
<head> 
<title>forgot password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2 align="center">Forgot Password/h2>
	   <form method="post" action="forgotpassword_email.php" class="form-login">
     <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="main_sec_ans" value="<?php echo $sec_ans; ?>">
	    <h3>Security Question</h3>
		        <input class="form-control" type="text" name="sec_que" value="<?php echo $sec_que; ?>" readonly>
	    <h3> Answer </h3>
		<input class="form-control" type="password" name="enter_sec_ans"  placeholder="enter right answer" required="">
	     <input class="btn btn-theme btn-block btn-theme-dark" type="submit" name="btnsubmit" value="CONFORM">
	
</form>
	
</div>

</div>
  
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
