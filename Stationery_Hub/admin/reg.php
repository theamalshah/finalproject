<?php  
require "common/dbconnect.php";

$qry1="SELECT * FROM state_tbl WHERE is_active=1";
$rs1=mysqli_query($conn,$qry1);
if(!mysqli_num_rows($rs1)>0)
{
  header("location:add_state.php?msg=No categary found plz first ADD Main categary");
}
$qry2="SELECT * FROM city_tbl WHERE is_active=1";
$rs2=mysqli_query($conn,$qry2);
if(!mysqli_num_rows($rs2)>0)
{
  header("location:add_city.php?msg=No categary found plz first ADD Main categary");
}
$qry3="SELECT * FROM sec_que_tbl WHERE is_active=1";
$rs3=mysqli_query($conn,$qry3);
if(!mysqli_num_rows($rs2)>0)
{
  header("location:add_city.php?msg=No categary found plz first ADD Main categary");
}
?>
<!DOCTYPE html>
<head>
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/material-kit.css" >
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
      <div class="" style="margin-top: 100px; background-image: url('../images/bg.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2">
					<div class="card card-signup">
						<form class="form" method="post" action="reg_insert.php" enctype="multipart/form-data">
							<div class="header header-primary text-center">
								
								<h4 class="card-title">Registration</h4>
							</div>
							<div class="card-content">
                                 
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">first Name</i>
									</span>
									<input type="text" class="form-control" name="fname" placeholder="First Name..." required="">
								</div>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">Last Name</i>
									</span>
									<input type="text" class="form-control" name="lname" placeholder="Last Name..." required="">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">Email   </i>
									</span>
									<input type="text" class="form-control" name="email" placeholder="Email..." required="">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">Password</i>
									</span>
									<input type="password" placeholder="Password..." name="pass" class="form-control" / required="">
								</div>
							
								<div class="input-group">
								   <span class="input-group-addon">
										<i class="material-icons">Gender&nbsp;</i>
									</span>
								    <label>
									    <input type="radio" name="gender"  value="male" required="">&nbsp;
									    Male
								    </label>
								    &nbsp;
								    <label>
									     <input type="radio" name="gender" value="female" />&nbsp;
									     female
								     </label>
							    </div>
							     <div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">Address1</i>
									</span>
									<div class="form-group label-floating">
							            <label class="control-label"> You can write your address here...</label>
							            <textarea class="form-control" rows="3" name="add1" required=""></textarea>
	                                </div>
								</div>
							    <div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">State</i>
									</span>
								
									<select class="form-control country" name="state_tbl" required="">
                                           <option value="0">Select State</option>
                                            <?php while($row1=mysqli_fetch_assoc($rs1))
                                                    {
                                              ?>
                                            <option value="<?php echo $row1['state_id']; ?>">
                                                <?php echo $row1['state_name']; ?>
                                            </option>
                                            
                                            <?php
                                               }
                                            ?>
                                    </select>
								</div>
								
							    <div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">City</i>
									</span>
								
									<select class="form-control country" name="city_tbl" required="">
                                           <option value="0">Select City</option>
                                            <?php while($row2=mysqli_fetch_assoc($rs2))
                                                    {
                                              ?>
                                            <option value="<?php echo $row2['city_id']; ?>">
                                                <?php echo $row2['city_name']; ?>
                                            </option>
                                            
                                            <?php
                                               }
                                            ?>
                                    </select>
								</div>

								
								
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">Security Question</i>
									</span>
								
									<select class="form-control country" name="sec_que_tbl" required="">
                                           <option value="0">Select Question</option>
                                            <?php while($row3=mysqli_fetch_assoc($rs3))
                                                    {
                                              ?>
                                            <option value="<?php echo $row3['sec_que_id']; ?>">
                                                <?php echo $row3['sec_que']; ?>
                                            </option>
                                            
                                            <?php
                                               }
                                            ?>
                                    </select>
								</div>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">Security Answer</i>
									</span>
									<input type="text" class="form-control" name="sec_ans" placeholder="Give you Perfect answer..." required="">
								</div>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">Profile</i>
									</span>
								
									<input type="file" name="fileupload" class="form-control" required="" />
								</div>
								<div class="col-lg-6" align="center" >
                                                    
                                        <button class="btn btn-primary" name="btn_sb" type="submit">SingUp</button>
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
