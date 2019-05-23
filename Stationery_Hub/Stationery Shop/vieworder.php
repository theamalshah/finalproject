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
                                   $prod_id=$row1['prod_id'];
                                 
                                   $qry2="SELECT * FROM product_tbl  WHERE is_active=1 AND prod_id=$prod_id ";
                                
                                   $rs2=mysqli_query($conn,$qry2);
                                  
                                   $row2=mysqli_fetch_assoc($rs2);
                                     $path=$row2['prod_img1'];
                              ?>
                    <!-- CONTENT -->
                    <div class="col-md-6 col-md-offset-3 content" id="content">

                        <!-- Products List -->
                        <div class="products list">
                            <!-- / -->
                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                          
                                                <img class="img-rounded img-responsive img-raised" src="../admin/<?php echo $path;?>" alt="" style="width: 200px; height: 200px;" />
                                               
                                            
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