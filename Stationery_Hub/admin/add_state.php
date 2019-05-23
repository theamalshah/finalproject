<?php  
session_start();
require "common/dbconnect.php";
require "common/header.php";

$name=$_SESSION['data'];
if(!isset($_SESSION['data']))
{
        echo '<script> alert("plz First of Login")</script>';
        echo '<script> window.location="login.php"</script>';
}

$qry="SELECT * FROM state_tbl WHERE is_active=1";
$rs=mysqli_query($conn,$qry);
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
                            ADD State
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal" action="add_state_insert.php" method="post">
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">State Name</label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" name="state_name" required><br>
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