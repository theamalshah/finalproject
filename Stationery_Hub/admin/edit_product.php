<?php  
session_start();
require "common/dbconnect.php";
require "common/header.php";


$name=$_SESSION['data'];
$prod_id=$_GET['prod_id'];
if(!isset($_SESSION['data']))
{
        echo '<script> alert("plz First of Login")</script>';
        echo '<script> window.location="login.php"</script>';
}

$qry="SELECT * FROM cat_tbl";
$rs=mysqli_query($conn,$qry);

if(!mysqli_num_rows($rs)>0)
{
    echo '<script> alert("No categary found plz first ADD Main categary")</script>';
        echo '<script> window.location="add_category.php"</script>';
  //header("location:add_category.php?msg=No categary found plz first ADD Main categary");
}

$qry1="SELECT * FROM sub_cat_tbl";
$rs1=mysqli_query($conn,$qry1);
if(!mysqli_num_rows($rs1)>0)
{
    echo '<script> alert("No sub-categary found plz first ADD Sub categary")</script>';
    echo '<script> window.location="add_subcate.php"</script>';
    
}

$qry2="SELECT * FROM brand_tbl";
$rs2=mysqli_query($conn,$qry2);
if(!mysqli_num_rows($rs2)>0)
{
    echo '<script> alert("Brand  is not found plz first Add Brand")</script>';
    echo '<script> window.location="add_brand.php"</script>';
    
}

$qry3="SELECT * FROM color_tbl";
$rs3=mysqli_query($conn,$qry3);
if(!mysqli_num_rows($rs3)>0)
{
    echo '<script> alert("Color  is not found plz first Add Color")</script>';
    echo '<script> window.location="add_color.php"</script>';
   
}
?>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <div class="form-w3layouts">
                        <!-- page start-->
                        <div class="row">
                            <div class="col-lg-6">
                                <section class="panel">
                                    <header class="panel-heading">
                                        EDIT PRODUCT
                                    </header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" id="ct_form" action="update_product.php" method="post">
                                        <div class="form-group">
                                                <label class="col-lg-4 control-label">Product Name</label>
                                                <div class="col-lg-6">
                                                <input type="hidden" name="prod_id" value="<?php echo $prod_id; ?>">
                                                    <input class="form-control" type="text" name="prod_name" value="<?php echo $row['prod_name']; ?>">
                                                </div>
                                        </div>
                                           <div class="form-group">
                                                <label class="col-lg-4 control-label">Category Name</label>
                                                <div class="col-lg-6">
                                                    <select class="form-control country" name="cat_tbl">
                                                       <?php 
                                                          
                                                          $cat_id = $row['cat_id'];
                                                          $qry2 = "SELECT * FROM cat_tbl WHERE is_active=1";
                                                           $res2 = mysqli_query($conn,$qry2);
                                                          while ($row2 = mysqli_fetch_assoc($res2)){ 
                                                      ?>

                                                     <option value="<?php echo $row2['cat_id']; ?>" <?php if ($cat_id==$row2['cat_id']) { echo "selected"; } ?>>
                                                      <?php echo $row2['cname']; ?>
                                                     </option>
                                                  <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Sub-Category Name</label>
                                                <div class="col-lg-6">
                                                    <select class="form-control country" name="sub_cat_tbl">
                                                       <?php 
                                                          
                                                          $sub_cat_id = $row['sub_cat_id'];
                                                          $qry2 = "SELECT * FROM sub_cat_tbl WHERE is_active=1";
                                                           $res2 = mysqli_query($conn,$qry2);
                                                          while ($row2 = mysqli_fetch_assoc($res2)){ 
                                                      ?>
                                                     <option value="<?php echo $row2['sub_cat_id']; ?>" <?php if ($sub_cat_id==$row2['sub_cat_id']) { echo "selected"; } ?>>
                                                      <?php echo $row2['sub_cat_name']; ?>
                                                     </option>
                                                  <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">brand Name</label>
                                                <div class="col-lg-6">
                                                    <select class="form-control country" name="brand_tbl">
                                                       <?php 
                                                          
                                                          $brand_id = $row['brand_id'];
                                                          $qry2 = "SELECT * FROM brand_tbl WHERE is_active=1";
                                                           $res2 = mysqli_query($conn,$qry2);
                                                          while ($row2 = mysqli_fetch_assoc($res2)){ 
                                                      ?>
                                                      
                                                     <option value="<?php echo $row2['brand_id']; ?>" <?php if ($brand_id==$row2['brand_id']) { echo "selected"; } ?>>
                                                      <?php echo $row2['bname']; ?>
                                                     </option>
                                                     <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">color Name</label>
                                                <div class="col-lg-6">
                                                    <select class="form-control country" name="color_tbl">
                                                       <?php 
                                                          
                                                          $color_id = $row['color_id'];
                                                          $qry2 = "SELECT * FROM color_tbl WHERE is_active=1";
                                                           $res2 = mysqli_query($conn,$qry2);
                                                          while ($row2 = mysqli_fetch_assoc($res2)){ 
                                                      ?>
                                                      
                                                     <option value="<?php echo $row2['color_id']; ?>" <?php if ($color_id==$row2['color_id']) { echo "selected"; } ?>>
                                                      <?php echo $row2['color_name']; ?>
                                                     </option>
                                                     <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Product B2B price</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" name="b2b_price" value="<?php echo $row['b2b_price']; ?>">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-4 control-label">Product B2B Quntety</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" name="b2b_qun" value="<?php echo $row['b2b_qun']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Product B2C price</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" name="b2c_price" value="<?php echo $row['b2c_price']; ?>">
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="form-group">
                                               <label class="col-lg-4 control-label">Product Discription</label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control"  name="prod_dec"> <?php echo $row['prod_dec']; ?></textarea>
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
                            <div class="col-lg-5">
                                <section class="panel">
                                    <header class="panel-heading">
                                        EDIT PRODUCT Image
                                    </header>
                                    <div class="panel-body">
                                       <form class="form-horizontal" id="ct_form" action="update_product.php" method="post" enctype="multipart/form-data">
                                          <input type="hidden" name="prod_id" value="<?php echo $prod_id; ?>">
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Product Image-1</label>
                                                <div class="col-lg-6">
                                    
                                                    <input class="form-control" type="file" name="fileupload1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Product Image-2</label>
                                                <div class="col-lg-6">
                                    
                                                    <input class="form-control" type="file" name="fileupload2">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Product Image-3</label>
                                                <div class="col-lg-6">
                                    
                                                    <input class="form-control" type="file" name="fileupload3">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group" >
                                                
                                                <div class="col-lg-6" align="center" >
                                                    
                                                    <button class="btn btn-primary"  name="btn_sb2" type="submit">Submit</button>
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