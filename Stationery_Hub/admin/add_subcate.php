<?php  
session_start();
require "common/dbconnect.php";
require "common/header.php";

$name=$_SESSION['data'];
if(!isset($_SESSION['data']))
{
header("location:login.php");
}
$qry="SELECT * FROM cat_tbl WHERE is_active=1";

$rs=mysqli_query($conn,$qry);

if(!mysqli_num_rows($rs)>0)
{
  header("location:add_category.php?msg=No categary found plz first ADD Main categary");
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
                                        ADD SUB CATEGORY
                                    </header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" id="ct_form" action="add_sub_cat_insert.php" method="post">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Sub-Category Name</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" name="sub_cat_name" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Category Name</label>
                                                <div class="col-lg-6">
                                                    <select class="form-control country" name="cname" required>
                                                       <option disabled="" selected="">Select Category</option>
                                                        <?php while($row=mysqli_fetch_assoc($rs))
                                                                {
                                                          ?>
                                                        <option value="<?php echo $row['cat_id']; ?>">
                                                            <?php echo $row['cname']; ?>
                                                        </option>
                                                        
                                                        <?php
                                                           }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group" >
                                                
                                                <div class="col-lg-6" align="center" >
                                                    
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