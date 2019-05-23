<?php

             


$email="";
$password="";

if(isset($_COOKIE['user']))

{
	
	$email=$_COOKIE['user'];
}
if(isset($_COOKIE['pass']))
{
	$password=$_COOKIE['pass'];
   
}	

?>
<!DOCTYPE html>
<head> 
<title>Login</title>
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
	<h2 align="center">Sign In Now</h2>
	   <form method="post" action="check_login.php">
      
       
	    
      <div> <h3> Email_id:-</h3></div>
      
      
      
		        <input type="text" name="email" class="ggg" value="<?php echo $email; ?>">
	    <h3> Password:-</h3>
     
      
		<input type="password" name="pass" class="ggg" value="<?php echo $password; ?>">
	
		<input type="checkbox" name="Remember">Remember 

	    <input type="submit" name="btnsubmit" value="LOGIN">
	
</form>
		
		<p><a href="reg.php">Create an account</a></p>
		<p><a data-toggle="modal" data-target="#forgotpass">Forgot PassWord??</a></p>
</div>
<div class="modal fade" id="forgotpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
      </div>
        <div class="col-md-12" style=" padding-top: 50px; background-color: white; ">
                            <form action="forgotpassword.php" method="post">

                              <div class="col-md-8">
                                <div class="form-group">
                                    <input class="form-control" name="forgotemail" type="text" placeholder="Enter Your Registration Email" required="" />
                                </div>
                              </div>  
                              <div class="col-md-4">
                                <div class="form-group">

                                    <button class="btn btn-theme btn-theme-transparent" type="submit" name="forgot_btn">email</button>
                                </div>
                              </div>
                                
                            </form>


                      </div>
    </div>
  </div>
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
