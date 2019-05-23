<?php
require "common/header.php";
require "common/menu.php";
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

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
                <div class="row">
                       
                      <div  class="col-sm-12">
                        <h3 class="block-title"><span>Sign Up</span></h3>
                        <form action="signupinsert.php" id="" class="form-login" method="post" enctype="multipart/form-data">
                            <div id="a1" >
                               
                                <div class="col-md-12 hello-text-wrap">
                                    <span class="hello-text text-thin">Hello, welcome Create your account</span>
                                </div>
                                
                                <div class="col-md-6">
                                    
                                    <label for="disabledSelect">First Name<sup>*</sup></label>
                                    <div class="form-group"><input class="form-control" type="text" placeholder="First Name" name="fname" required></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="disabledSelect">Last Name<sup>*</sup></label>

                                    <div class="form-group"><input class="form-control" type="text" placeholder="Last Name" name="lname" required></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="disabledSelect">Email-id<sup>*</sup></label>
                                    <div class="form-group"><input class="form-control" type="text" placeholder="Email-Id" name="email" required></div>
                                </div>
                                <div class="col-md-6">
                                     <label for="disabledSelect">password<sup>*</sup></label>
                                    <div class="form-group"><input class="form-control" type="password" name="pass" required></div>
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
                                    
                                    <select class="form-control selectpicker" name="state_tbl" required>
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
                                <div class="col-md-6">
                                    
                                <label for="disabledSelect">Select City <sup>*</sup></label>
                                
                                    <select class="form-control selectpicker" name="city_tbl" required>
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
                                
                                <div class="col-md-6">
                                 <label for="disabledSelect">Address <sup>*</sup></label>
                                    
                                    <input type="text" class="form-control" name="add1" placeholder=" Address........" required>
                                </div>

                                <div class="col-md-6">
                            <label for="disabledSelect">Select Security Question <sup>*</sup></label>
                                
                                    <select class="form-control selectpicker" name="sec_que_tbl" >
                                           <option value="0">Select Question</option>
                                            <?php while($row3=mysqli_fetch_assoc($rs3))
                                                    {
                                              ?>
                                            <option value="<?php echo $row3['sec_que_id']; ?>" required>
                                                <?php echo $row3['sec_que']; ?>
                                            </option>
                                            
                                            <?php
                                               }
                                            ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                 <label for="disabledSelect">Answer Security Question <sup>*</sup></label>
                                    
                                    <input type="text" class="form-control" name="sec_ans" placeholder=" Answer..." required>
                                </div>
                                 <div class="col-md-6">
                                    
                                     <label for="disabledSelect">Upload Your Picture<sup>*</sup></label>
                                
                                    <input type="file"  name="fileupload" class="form-control" required/>
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
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
       
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
    <?php
require "common/footer.php";


?>