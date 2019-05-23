<?php  
session_start();
require "common/dbconnect.php";
require "common/header.php";
$name=$_SESSION['data'];
if(!isset($_SESSION['data']))
{
    header("location:login.php");
}
$qry="SELECT * FROM coupon_code where is_active=1";
$rs=mysqli_query($conn,$qry);

if(!mysqli_num_rows($rs)>0)
{
  header("location:add_coupon_code.php?msg=No coupon code found plz first ADD code");
}

?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Send  Coupon Code
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal" action="email_coupon_code.php" method="post">
                                 <div class="form-group">
                                                <label class="col-lg-3 control-label">Coupon code</label>
                                                <div class="col-lg-6">
                                                    <select class="form-control country" name="coupon_code">
                                                       <option >Select Coupon Code</option>
                                                        <?php while($row=mysqli_fetch_assoc($rs))
                                                                {
                                                          ?>
                                                          
                                                        <option value="<?php echo $row['code_id']; ?>" >
                                                            <?php echo $row['coupon_code']; ?>
                                                        </option>
                                                        
                                                        <?php
                                                           }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                               
                                <div class="form-group">
                                    
                                    
                                     <label class="col-lg-3 control-label">email</label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="email" name="email" required=""><br>
                                        <button class="btn btn-primary" name="btn_sb" type="submit">Submit</button>
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
 <!-- footer -->
		  <?php
require "common/footer.php";
?>
