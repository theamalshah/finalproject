<?php
require "common/dbconnect.php";
require "common/header.php";
require "common/menu.php";
 if(isset($_GET['id']))
    {
     $id=$_GET['id'];
    }
?>
    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
       
        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar">
            <div class="container">
                <div class="row">
                     <?php
                               
                                $qry1="SELECT * FROM order_tbl  WHERE is_active=1 AND id=$id ";
                                
                                 $rs1=mysqli_query($conn,$qry1);
                              while($row1=mysqli_fetch_assoc($rs1))
                               {
                                   $order_id=$row1['order_id'];
                                   $user_id=$row1['user_id'];
                                   $cart_id=$row1['cart_id'];
                                   $prod_id=$row1['prod_id'];
                                   $qun=$row1['qun'];
                                   $price=$row1['cart_price'];
                                 
                                   $qry2="SELECT * FROM product_tbl  WHERE is_active=1 AND prod_id=$prod_id ";
                                
                                   $rs2=mysqli_query($conn,$qry2);
                                  
                                   $row2=mysqli_fetch_assoc($rs2);
                                     $path=$row2['prod_img1'];
                              ?>
                    <!-- CONTENT -->
                    <div class="col-md-6 col-md-offset-2 content" id="content">

                        <!-- Products List -->
                        <div class="products list">
                            <!-- / -->
                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                          
                                                <img class="img-rounded img-responsive img-raised" src="../admin/<?php echo $path;?>" alt="" style="width: 200px; height: 100px;" />
                                               
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                            <h4 class="caption-title"><?php echo $row2['prod_name']; ?></h4>
                                            
                                            <div class="overflowed">
                                                <div class="availability">Quentety :- <strong><?php echo $row1['qun']; ?></strong> </div>
                                                <div class="price">Price :- <ins><?php echo $row1['cart_price']; ?></ins> <del></div>
                                            </div>
                                           
                                           <h5><?php echo $row2['prod_dec']; ?></h5>
                                           
                                        </div>

                                    </div>
                                    
                                    
                                </div>
                            </div>
                            
                           
                           
                           
                        </div>
                        <!-- /Products list -->
                    </div>
                    
                   <form action="return_order_insert.php" method="post">
                         <input  type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                         <input  type="hidden" name="order_id" value="<?php echo $id; ?>">
                         <input  type="hidden" name="order_no" value="<?php echo $row1['order_id']; ?>">
                         <input  type="hidden" name="product_id" value="<?php echo $row1['prod_id'];  ?>">
                         <input  type="hidden" name="qun" value="<?php echo $row1['qun']; ?>">
                         <input  type="hidden" name="price" value="<?php echo $row1['cart_price']; ?>">
                    <div class="row">
                         <div class="col-md-10 col-md-offset-1">
                          	
                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>Select reason when You Return Product ?</h3>
                <div class="panel-group payments-options" id="accordion" role="tablist"  aria-multiselectable="true">
                 
                    <div class="  panel radio panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <input  type="radio" name="return" value="The Product is No Longer Needed" required><a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapseOne" style="margin-left: 10px;" >
                                   The Product is No Longer Needed
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body">
                                <div class="alert alert-success" role="alert">It’s a challenge to anticipate or prevent customer returns for items that are no longer needed, but you may be able to turn it around.</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <input  type="radio" name="return" value="The Product Did not Match Its Description" required><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapseTwo" style="margin-left: 10px;">
                                  The Product Did not Match Its Description
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body">
                               Products that don’t measure up to consumers’ expectations are typically returned. This is like the customer buying the wrong item, but in this instance, you can’t really blame the customer.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <input  type="radio" name="return" value="The Product Was Damaged Upon Arrival" required><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapseThree" style="margin-left: 10px;">
                                  The Product Was Damaged Upon Arrival
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body">
                                Customers will be understandably upset if an item they paid for is damaged or defective upon arrival and will almost certainly return the item. With a little extra care, though, you can decrease the chances of the return being bypassed for a chargeback
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading4">
                            <h4 class="panel-title">
                                <input  type="radio" name="return" value="The Merchant Shipped the Wrong Item" required><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4" style="margin-left: 10px;">
                                  The Merchant Shipped the Wrong Item
                                </a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                            <div class="panel-body">
                               This is a scenario you want to avoid at all costs, as it is one of the most blatant merchant errors that could trigger a chargeback
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading5">
                            <h4 class="panel-title">
                                <input  type="radio" name="return" value="The Customer Engages in Wardrobing" required><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5" style="margin-left: 10px;">
                                       The Customer Engages in Wardrobing
                                </a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                            <div class="panel-body">
                                Wardrobing occurs when a consumer buys an item, uses it, then attempts to return the item for a full refund. It might involve, say, a job hunter who buys a suit for an interview, then returns it to save money. Despite its name, the scheme is not limited to clothing: For instance, a football fan might buy a big TV and then return it the day after the Super Bowl.
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                 <div class="overflowed">
                    <a class="btn btn-theme btn-theme-dark" href="index.php">Home Page</a>
                    
                    <button class="btn btn-theme pull-right" name="btn_ro" type="submit">Return Order</button>
                </div>
                         </div>
                    </div>
                    </form>
                    <?php
                         }
                    ?>
                    <!-- /CONTENT -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

      

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
    <?php

require "common/footer.php";

?>