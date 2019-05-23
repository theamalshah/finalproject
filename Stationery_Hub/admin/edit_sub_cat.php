<?php
session_start();
require "common/dbconnect.php";
require "common/header.php";

$name=$_SESSION['data'];
$sub_cat_id=$_GET['sub_cat_id'];
$qry="SELECT * FROM sub_cat_tbl WHERE sub_cat_id=$sub_cat_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);

$qry1="SELECT * FROM cat_tbl";
$rs1=mysqli_query($conn,$qry1);
if(!mysqli_num_rows($rs1)>0)
{
    header("location:add_category.php?msg=NO categary found plz first Add Category");
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
                            EDIT SUB-CATEGORY
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal" action="update_sub_cat.php" method="POST">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Sub-Category Name</label>
                                    <div class="col-lg-6">
                            			<input type="hidden" name="sub_cat_id" value="<?php echo $sub_cat_id; ?>">
                                        <input type="text" class="form-control" name="sub_cat_name" value="<?php echo $row['sub_cat_name']; ?>"><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Category Name</label>
                                    <div class="col-lg-6">
                                    
                                        <select class="form-control" name="cname">
                                        <?php  
                                           while($row1=mysqli_fetch_assoc($rs1))
                                           {
                                        ?>
                                      <option value="<?php echo $row1['cat_id']; ?>"><?php echo $row1['cname']; ?></option>

                                      <?php 
                                           } 
                                        ?>
                                             
                                        </select>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    
                                    <div class="col-lg-6" align="center">
                                        
                                        <button class="btn btn-primary" name="btn_sb" type="submit">Submit</button>
                                    </div>
                                </div><br>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
</section>
 <!-- footer -->
 <?php
require "common/footer.php";
	?>	 