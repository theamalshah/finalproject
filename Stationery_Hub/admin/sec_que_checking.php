<?php
require "common/dbconnect.php";
 require "common/header.php";
   require "common/menu.php";
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

  
    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h3 class="block-title"><span>Login</span></h3>
                         <form method="post" action="forgotpassword_email.php" class="form-login">
                            <div class="row">
                                <div class="col-md-12 hello-text-wrap">
                                    <span class="hello-text text-thin">Hello, Give right answer of this Security Question</span>
                                </div>
                                <div class="col-md-4">
                                <input type="hidden" name="email" value="<?php echo $email; ?>">
                                <input type="hidden" name="main_sec_ans" value="<?php echo $sec_ans; ?>">
                                    <div class="form-group"><input class="form-control" type="text" name="sec_que" value="<?php echo $sec_que; ?>" readonly></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><input class="form-control" type="text" name="enter_sec_ans" value="<?php  ?>" placeholder="enter right answer"></div>
                                </div>
                                
                                <div class="col-md-3 text-right-lg">
                                     <input class="btn btn-theme btn-block btn-theme-dark" type="submit" name="btnsubmit" value="CONFORM">
                                    
                                </div>
                            </div>
                        </form>
                 
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- /PAGE -->

       

    </div>
    <!-- /CONTENT AREA -->

  <!-- FOOTER -->
 <?php require "common/footer.php"; ?>
 <!-- FOOTER -->