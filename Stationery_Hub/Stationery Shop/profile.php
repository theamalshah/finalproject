<?php
require "common/dbconnect.php";
require "common/header.php";
require "common/menu.php";
  
$userid=$_SESSION['user_id'];
$qry="SELECT * FROM user_tbl WHERE user_id=$userid";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);

$path=$row['profile_pic'];
?>

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Edit Profile</h1>
                </div>
                
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar">
            <div class="container">
                <div class="row">
                    <!-- SIDEBAR -->
                    <aside class="col-md-3 sidebar" id="sidebar">
                        
                        <div class="thumbnail thumbnail-team no-border no-padding">
                            <div class="media" style="margin-top: 70px;">
                                <img class="img-circle" src="<?php echo $path;?>" style="width: 500px; height: 200px;" alt=""/>
                            </div>
                            <div class="caption">
                               <div class="panel-body">
                                    <form class="form-login" id="ct_form" action="update_profile.php" method="post" enctype="multipart/form-data">

                                        <input  type="hidden"  name="id" value="<?php echo $row['user_id']; ?>" >
                                          
                                           
                                              <label for="disabledSelect">Change Your Profile</label>
                                
                                                <input type="file"  name="fileupload1" class="form-control" required/>

                                          <button class="btn btn-block btn-theme btn-theme-dark btn-create" style="margin-top: 10px;" name="btn_sb1" type="submit">Submit</button>
      
                                    </form>
                                    </div> 
                            </div>
                        </div>
                         <div class="widget widget-colors">
                            <a href=""><h4 class="widget-title"> Edit Business Details</h4></a>
                            
                        </div>
                    
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">

                       
`   
                        <!-- shop-sorting -->
                        <div class="shop-sorting">
                            <div class="row">
                                
                                <div  class="col-sm-12">
                             <form action="update_profile.php" id="" class="form-login" method="post" enctype="multipart/form-data">
                            <div id="a1" >
                                
                                <div class="col-md-6">
                                    <input  type="hidden"  name="id" value="<?php echo $row['user_id']; ?>" >
                                    <label for="disabledSelect">First Name<sup>*</sup></label>
                                    <div class="form-group"><input class="form-control" type="text"  name="fname" value="<?php echo $row['fname']; ?>" ></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="disabledSelect">Last Name<sup>*</sup></label>

                                    <div class="form-group"><input class="form-control" type="text" name="lname" value="<?php echo $row['lname']; ?>"></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="disabledSelect">Email-id<sup>*</sup></label>
                                    <div class="form-group"><input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>" readonly></div>
                                </div>
                               
                                <div class="col-md-6">
                                <label for="disabledSelect">Gender <sup>*</sup></label>
                                 <div class="form-control">
                                       <input  type="radio" name="gender" value="Male" required>Male&nbsp;
                                        <input  type="radio" name="gender" value="Female" >Female
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    
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
                                
                                <div class="col-md-6">
                                 <label for="disabledSelect">Address <sup>*</sup></label>
                                    
                                    <input type="text" class="form-control" name="add1" value="<?php echo $row['add1']; ?>">
                                </div>

                               
                                 
                                
                                <div class="col-md-12" id="c2">
                                     <div class="col-md-4 col-md-offset-4" align="center">
                                         <button class="btn btn-block btn-theme btn-theme-dark btn-create" name="btn_sb" type="submit">Sign up</button>
                                     </div>
                                </div>
                            </div>
                        </form>
                    </div>
                            </div>
                        </div>
                        <!-- /shop-sorting -->
                       
                        <!-- Products grid -->
                        <div class="row products grid">
                         
                            <div class="col-md-4 col-sm-6">
                                  <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                        
                                       </div>
                                  </div>
                            </div>
                          
                           
                         </div>
                       
                        

                       

                    </div>
                    <!-- /CONTENT -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

    

    </div>
    <!-- /CONTENT AREA -->

<?php

require "common/footer.php";

?>