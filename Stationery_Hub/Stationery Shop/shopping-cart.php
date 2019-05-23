<?php
require "common/header.php";
require "common/menu.php";

    



?>

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Shopping Cart</h1>
                    <h1><?php //echo $qun; ?></h1>
                </div>
                
            </div>
        </section>
        <!-- /BREADCRUMBS -->
     

     <?php
        


     ?>
        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
                
                <h3 class="block-title alt"><i class="fa fa-angle-down color"></i>1. Account</h3>

                
                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>2. Orders</h3>
                <div class="row orders">
                    <div class="col-md-8">
                    <form action="qunt.php" method="post" >
                        <table class="table">
                            <thead>
                            <tr>
                                <th><h4>Image</h4></th>
                                <th><h4>Quantity</h4></th>
                                <th><h4></h4></th>
                                <th><h4>Product Name</h4></th>
                                <th><h4>Price</h4></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                             <?php
                                $user_id=$_SESSION['user_id'];  
                                $qry="SELECT * FROM cart_tbl  WHERE is_active=1 AND user_id=$user_id ";
                                $total=0;
                                 $rs=mysqli_query($conn,$qry);
                              while($row=mysqli_fetch_assoc($rs))
                               {
                                    $cart_id=$row['cart_id'];
                                    $prod_id=$row['prod_id'];
                                    $qry1="SELECT * FROM product_tbl  WHERE prod_id=$prod_id";
                                    $rs1=mysqli_query($conn,$qry1);
                                    $row1=mysqli_fetch_assoc($rs1);
                                    $path1=$row1['prod_img1'];
                                            
                                               if(isset($_SESSION['b2b']))
                                             {
                                                   $p=$row1['b2b_price'];
                                            }
                                            else
                                            {
                                                   $p=$row1['b2c_price'];
                                            }
                                    $m=$row['main_qun'];
                                    $t=$p*$m;
                              

                                   
                                ?>
                            <tr>
                              
                                <td class="image"><a class="media-link" href="#"><i class="fa fa-plus"></i><img src="../admin/<?php echo $path1;?>" style="width: 150px; height: 100px;" alt=""/></a></td>
                                        
                                    <td class="description" style="text-align: center; " >
                                    <?php 
                                       if(isset($_SESSION['b2b']))
                                             {
                                    ?>
                                    <p>1 box have Minimum <?php echo $row1['b2b_qun']; ?> pis</p>
                                      Box-<input type="number" name='main_qun' value="<?php echo $row['main_qun']; ?>" style="text-align: center; border-radius: 10px;  width: 40px;"/ readonly>
                                      <?php
                                         }
                                         else
                                         {
                                      ?>
                                      <input type="number" name='main_qun' value="<?php echo $row['main_qun']; ?>" style="text-align: center; border-radius: 10px;  width: 40px;"/ readonly>
                                      <?php
                                        }
                                      ?>

                                    </td>

                                      <td class="description" style="text-align: center; " >
                                     <input type="number" name='qun["<?php echo $row['cart_id']; ?>"]' value="0"  style="text-align: center; border-radius: 10px; width: 40px;"/>
                                     
                                        </td>   
                                      
 
                                
                                <td class="description">
                                    <h4><a href="#"><?php echo $row1['prod_name']; ?></a></h4>
                                
                                </td>
                                <td class="total"><?php echo $t;
                                  $qry1="UPDATE cart_tbl SET prod_price=$t  WHERE cart_id=$cart_id";
                                  $rs1=mysqli_query($conn,$qry1);
                                  ?>
                                  </td>
                                  <td class="total">
                                <a href="delete_cart.php?cart_id=<?php echo $row['cart_id']; ?>"><i class="fa fa-close"></i></a></td>
                                
                            </tr>
                            
                               <?php
                                   $total = $total + $t;
                                            }
                                ?>
                                 <tr>
                                <th><h4></h4></th>
                                <th></th>
                                <th><button class="btn btn-theme" type="submit" name="update" >Update</button></th>
                                <th></th>
                                <th ><h4 class="total"><?php echo $total; ?></h4></th>
                            </tr>
                            </tbody>
                        </table>
                      </form>  
                        
                    </div>
                     <?php
                     if (isset($_POST['btn_code'])) 
                     {
                              $code=$_POST['code'];

                              $qry="SELECT * FROM coupon_code WHERE coupon_code='".$code."' AND is_active=1";
                                  $rs=mysqli_query($conn,$qry);
                                  $row=mysqli_fetch_assoc($rs);
                                  if ($row)
                                   {
                                    $discount=$row['discount'];
                                     $qry1="UPDATE `coupon_code` SET `is_active`=2 WHERE `coupon_code`='".$code."' ";
                                  $rs1=mysqli_query($conn,$qry1);

                                  }
                                 
                                
                     } 



                    ?>
                    <div class="col-md-4">
                    <form action="" method="post" class="" >
                        <h3 class="block-title"><span>Shopping cart</span></h3>
                        <div class="shopping-cart">
                         <div class="form-group" style="margin-top: 5px; margin-bottom: 10px;">
                                <input class="form-control" name="code" type="text" placeholder="Enter your coupon code"/>
                           </div>
                          <button class="btn btn-theme btn-theme-dark btn-block" name="btn_code">Apply Coupon</button> 
                        </form> 
                            <table>
                                <tr>
                                    <td>Sub-total:</td>
                                    <td><?php echo $total; ?></td>
                                </tr>
                                <tr>
                                   <?php $stotal=50; ?>
                                    <td>Shipping:</td>
                                    <td><?php echo $stotal; ?></td>
                                </tr>
                                <tfoot>
                                <tr>
                                  <?php
                                   $maintotal = $total + $stotal;
                                   if (isset($discount)) 
                                   {
                                     $mt= $maintotal * $discount / 100;
                                     
                                    $a=$maintotal-$mt;
                                    $maintotal1=$a;
                                   }
                                   else
                                   {
                                    $maintotal1=$maintotal;
                                   }
                                  
                                            
                                ?>
                                    <td>Total:</td>
                                    <td><?php echo $maintotal1;  ?></td>
                                </tr>
                                </tfoot>
                            </table>
                            
                        </div>
                    </div>
                </div>
                 <form action="order_insert.php" method="post" class="form-delivery" >
                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>3. Delivery address</h3>
                
                    <div class="row">
                    <?php
                     $qry2="SELECT * FROM user_tbl  WHERE user_id=$user_id";
                                    $rs2=mysqli_query($conn,$qry2);
                                    $row2=mysqli_fetch_assoc($rs2);

                    ?>
                        
                         <input  type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                         <input  type="hidden" name="ship_price" value="<?php echo $stotal; ?>">
                         <input  type="hidden" name="price" value="<?php echo $maintotal1; ?>">
                        <div class="col-md-6">
                            <div class="form-group"><input class="form-control" type="text" name="fname" value="<?php echo $row2['fname']; ?>" required></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input class="form-control" type="text" name="lname" value="<?php echo $row2['lname']; ?>" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><input class="form-control" type="text" name="add" value="<?php echo $row2['add1']; ?>" required></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group selectpicker-wrapper">
                             <select class="selectpicker input-price" data-live-search="true" data-width="100%" name="city_tbl" required>
                                                       <?php 
                                                          
                                                          $city_id = $row['city_id'];
                                                          $qry3 = "SELECT * FROM city_tbl WHERE is_active=1";
                                                           $res3 = mysqli_query($conn,$qry3);
                                                          while ($row3 = mysqli_fetch_assoc($res3)){ 
                                                      ?>
                                                     <option value="<?php echo $row3['city_id']; ?>" <?php if ($city_id==$row3['city_id']) { echo "selected"; } ?>>
                                                      <?php echo $row3['city_name']; ?>
                                                     </option>
                                                  <?php } ?>
                             </select>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group selectpicker-wrapper">
                               <select class="selectpicker input-price" data-live-search="true" data-width="100%" name="state_tbl" required>
                                                       <?php 
                                                          
                                                          $state_id = $row['state_id'];
                                                          $qry4 = "SELECT * FROM state_tbl WHERE is_active=1";
                                                           $res4 = mysqli_query($conn,$qry4);
                                                          while ($row4 = mysqli_fetch_assoc($res4)){ 
                                                      ?>
                                                     <option value="<?php echo $row4['state_id']; ?>" <?php if ($state_id==$row4['state_id']) { echo "selected"; } ?>>
                                                      <?php echo $row4['state_name']; ?>
                                                     </option>
                                                  <?php } ?>
                             </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><input class="form-control" type="text" name="postcode" placeholder="Postcode/ZIP" required></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><input class="form-control" type="text" name="email" value="<?php echo $row2['email']; ?>"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><input class="form-control" type="text" name="mobile" placeholder="Phone Number" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><textarea class="form-control" placeholder="Addıtıonal Informatıon" name="decs"  cols="5" rows="10" required></textarea></div></br>
                        </div>
                       
                    </div>
                

                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>4. Payments options</h3>
                <div class="panel-group payments-options" id="accordion" role="tablist"  aria-multiselectable="true">
                 
                    <div class="  panel radio panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <input  type="radio" name="payment" value="online-payment" required><a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                                    ONLINE TRANSACTION
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body">
                                <div class="alert alert-success" role="alert">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus.</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <input  type="radio" name="payment" value="cod" required><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
                                  C O D
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body">
                                Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="overflowed">
                    <a class="btn btn-theme btn-theme-dark" href="index.php">Home Page</a>
                    
                    <button class="btn btn-theme pull-right" name="btn_or" type="submit">Place Order</button>
                </div>

        </form>

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