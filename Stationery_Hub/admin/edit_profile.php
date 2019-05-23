<?php
session_start();
require "common/dbconnect.php";
require "common/header.php";
if (isset($_SESSION['userid'])) 
{
	$userid=$_SESSION['userid'];
}
$qry="SELECT * FROM user_tbl WHERE user_id=$userid";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);

$path=$row['profile_pic'];
?>
 <section id="main-content">
                <section class="wrapper">
                    <div class="form-w3layouts">
                        <!-- page start-->
                        <div class="row">
                        <div class="col-lg-5">
                                <section class="panel">
                                    <header class="panel-heading">
                                        EDIT PROFILE Image
                                    </header>
                                    <div class="panel-body">
                                    <div class="col-lg-8 col-lg-offset-2" style="margin-bottom: 30px;" >
                                    	<img class="img-rounded img-responsive img-raised" src="<?php echo $path;?>" style="width: 300px; height: 200px;" alt=""/>
                                    </div>
                                    
                                       <form class="form-horizontal" id="ct_form" action="update_profile.php" method="post" enctype="multipart/form-data">
                                          <input type="hidden" name="id" value="<?php echo $userid; ?>">
                                            
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Profile Image</label>
                                                <div class="col-lg-6">
                                    
                                                    <input class="form-control" type="file" name="fileupload1">
                                                </div>
                                            </div>
                                       
                                            <div class="form-group" >
                                                
                                                <div class="col-lg-6" align="center" >
                                                    
                                                    <button class="btn btn-primary"  name="btn_sb1" type="submit">Submit</button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-6">
                                <section class="panel">
                                    <header class="panel-heading">
                                        EDIT PRODUCT
                                    </header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" id="ct_form" action="update_profile.php" method="post">
                                <div class="col-md-12">
                                    <input  type="hidden"  name="id" value="<?php echo $row['user_id']; ?>" >
                                    <label for="disabledSelect">First Name<sup>*</sup></label>
                                    <div class="form-group"><input class="form-control" type="text"  name="fname" value="<?php echo $row['fname']; ?>" ></div>
                                </div>
                                <div class="col-md-12">
                                    <label for="disabledSelect">Last Name<sup>*</sup></label>

                                    <div class="form-group"><input class="form-control" type="text" name="lname" value="<?php echo $row['lname']; ?>"></div>
                                </div>
                                <div class="col-md-12">
                                    <label for="disabledSelect">Email-id<sup>*</sup></label>
                                    <div class="form-group"><input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>" readonly></div>
                                </div>
                               
                                <div class="col-md-12">
                                <label for="disabledSelect">Gender <sup>*</sup></label>
                                 <div class="form-control">
                                       <input  type="radio" name="gender" value="Male" required>Male&nbsp;
                                        <input  type="radio" name="gender" value="Female" >Female
                                    </div>
                                </div>

                                <div class="col-md-12" style="margin-top: 10px;">
                                <label for="disabledSelect">Select State <sup>*</sup></label>
                                    
                                    <select class="form-control selectpicker" name="state_tbl" >
                                            <?php 
                                                          
                                                  $state_id = $row['state_id'];
                                                  $qry2 = "SELECT * FROM state_tbl WHERE is_active=1";
                                                   $res2 = mysqli_query($conn,$qry2);
                                                  while ($row2 = mysqli_fetch_assoc($res2))
                                                  { 
                                            ?>
                                           <option value="<?php echo $row2['state_id']; ?>" <?php if ($state_id==$row2['state_id']) { echo "selected"; } ?>>
                                                      <?php echo $row2['state_name']; ?>
                                                     </option>
                                            
                                            <?php
                                               }
                                            ?>
                                    </select>
                                </div>

                                <div class="col-md-12" style="margin-top: 10px;">
                                    
                                <label for="disabledSelect">Select City <sup>*</sup></label>
                                
                                    <select class="form-control selectpicker" name="city_tbl" >
                                           <?php 
                                                          
                                                  $city_id = $row['city_id'];
                                                  $qry3 = "SELECT * FROM city_tbl WHERE is_active=1";
                                                   $res3 = mysqli_query($conn,$qry3);
                                                  while ($row3 = mysqli_fetch_assoc($res3))
                                                  { 
                                            ?>
                                           <option value="<?php echo $row3['city_id']; ?>" <?php if ($city_id==$row3['city_id']) { echo "selected"; } ?>>
                                                      <?php echo $row3['city_name']; ?>
                                                     </option>
                                            
                                            <?php
                                               }
                                            ?>
                                    </select>
                                </div>
                                
                                <div class="col-md-12" style="margin-top: 10px;">
                                 <label for="disabledSelect">Address <sup>*</sup></label>
                                    
                                    <input type="text" class="form-control" name="add1" value="<?php echo $row['add1']; ?>">
                                </div>

                               
                                 
                                
                                <div class="col-md-12" id="c2" style="margin-top: 10px;">
                                     <div class="col-md-4 col-md-offset-4" align="center">
                                         <button class="btn btn-block btn-theme btn-theme-dark btn-create" name="btn_sb" type="submit">Sign up</button>
                                     </div>
                                </div>
                                            
                                        </form>
                                    </div>
                                </section>
                            </div>
                            
                        </div>
                    </div>
                    <!-- page end-->
                </div>
            </section>

<?php
require "common/footer.php";
    ?> 