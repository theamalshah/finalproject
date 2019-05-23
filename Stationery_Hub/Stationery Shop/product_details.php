<?php
      

 
require "common/header.php";
require "common/menu.php";
require "common/dbconnect.php";

            $prod_id=$_GET['prodid'];
        

                                $qry="SELECT * FROM product_tbl  WHERE prod_id=$prod_id";
                                 $rs=mysqli_query($conn,$qry);
                                 $row=mysqli_fetch_assoc($rs);
                        
                        
?>
    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <div class="row product-single">
                    <div class="col-md-6">
                        <div class="badges">
                            <div class="new">new</div>
                        </div>
                        <div class="owl-carousel img-carousel">
                            <div class="item">
                              <?php $path1=$row['prod_img1']; ?>
                                <a class="btn btn-theme btn-theme-transparent btn-zoom" href="../admin/<?php echo $path1;?>" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                                <a href="../admin/<?php echo $path1;?>" data-gal="prettyPhoto"><img class="img-responsive" src="../admin/<?php echo $path1;?>" alt="" style="width: 570px; height: 470px;"/></a></div>
                            <div class="item">
                              <?php $path2=$row['prod_img2']; ?>
                                <a class="btn btn-theme btn-theme-transparent btn-zoom" href="../admin/<?php echo $path2;?>" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                                <a href="../admin/<?php echo $path2;?>" data-gal="prettyPhoto"><img class="img-responsive" src="../admin/<?php echo $path2;?>" alt="" style="width: 570px; height: 470px;"/></a></div>
                            <div class="item">
                               <?php $path3=$row['prod_img3']; ?>
                                <a class="btn btn-theme btn-theme-transparent btn-zoom" href="../admin/<?php echo $path3;?>" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                                <a href="../admin/<?php echo $path3;?>" data-gal="prettyPhoto"><img class="img-responsive" src="../admin/<?php echo $path3;?>" alt="" style="width: 570px; height: 470px;"/></a></div>
                           
                        </div>
                        <div class="row product-thumbnails">
                            <div class="col-xs-2 col-sm-2 col-md-3"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [0,300]);"><img src="../admin/<?php echo $path1;?>" alt=""/></a></div>
                            <div class="col-xs-2 col-sm-2 col-md-3"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [1,300]);"><img src="../admin/<?php echo $path2;?>" alt=""/></a></div>
                            <div class="col-xs-2 col-sm-2 col-md-3"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [2,300]);"><img src="../admin/<?php echo $path3;?>" alt=""/></a></div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="back-to-category">
                            <span class="link"><i class="fa fa-angle-left"></i> Back to <a href="category.html">Category</a></span>
                            <div class="pull-right">
                                <a class="btn btn-theme btn-theme-transparent btn-previous" href="#"><i class="fa fa-angle-left"></i></a><!--
                                --><a class="btn btn-theme btn-theme-transparent btn-next" href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <h2 class="product-title"><?php echo $row['prod_name']; ?></h2>
                        
                        <div class="product-availability">Availability: <strong>In stock</strong> 21 Item(s)</div>
                        <hr class="page-divider small"/>
                                        <?php
                                               if(isset($_SESSION['b2b']))
                                             {     

                                         ?>
                                        <div class="product-price">Rs.<?php echo $row['b2b_price']; ?></div>
                                        
                                        <p>Minimum <?php echo $row['b2b_qun']; ?> is Requery</p>

                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                        <div class="product-price">Rs.<?php echo $row['b2c_price']; ?></div>
                                        <?php
                                            }
                                            
                                        ?>
                        
                        <hr class="page-divider"/>

                        <div class="product-text">
                            <p><?php echo $row['prod_dec']; ?></p>
                           
                        </div>
                        <hr class="page-divider"/>

                        <table>
                            <tr>
                                <td class="title"><b>Category:</b></td>
                                 <?php
                                   $cat_id=$row['cat_id'];
                                    $qry1="SELECT * FROM cat_tbl  WHERE cat_id=$cat_id";
                                    $rs1=mysqli_query($conn,$qry1);
                                    $row1=mysqli_fetch_assoc($rs1);
                                  ?>
                                <td><?php echo $row1['cname']; ?></td>
                            </tr>
                            <tr>
                                <td class="title"><b>Sub_Category:</b></td>
                                 <?php
                                   $sub_cat_id=$row['sub_cat_id'];
                                    $qry2="SELECT * FROM sub_cat_tbl  WHERE sub_cat_id=$sub_cat_id";
                                    $rs2=mysqli_query($conn,$qry2);
                                    $row2=mysqli_fetch_assoc($rs2);
                                  ?>
                                <td><?php echo $row2['sub_cat_name']; ?></td>
                            </tr>
                            <tr>
                                <td class="title"><b>Brand:</b></td>
                                 <?php
                                   $brand_id=$row['brand_id'];
                                    $qry3="SELECT * FROM brand_tbl  WHERE brand_id=$brand_id";
                                    $rs3=mysqli_query($conn,$qry3);
                                    $row3=mysqli_fetch_assoc($rs3);
                                  ?>
                                <td><?php echo $row3['bname']; ?></td>
                            </tr>
                            <tr>
                                <td class="title"><b>color:</b></td>
                                 <?php
                                   $color_id=$row['color_id'];
                                    $qry4="SELECT * FROM color_tbl  WHERE color_id=$color_id";
                                    $rs4=mysqli_query($conn,$qry4);
                                    $row4=mysqli_fetch_assoc($rs4);
                                  ?>
                                <td><?php echo $row4['color_name']; ?></td>
                            </tr>
                        </table>
                        <hr class="page-divider small"/>


                        <div class="buttons">
                           <?php
                              $_SESSION['prod_id']=$row['prod_id'];
                                  if(isset($_SESSION['b2b']))
                                    {  
                                        $_SESSION['prod_price']=$row['b2b_price'];
                                        $_SESSION['main_qun']=$row['b2b_qun'];
                                         $_SESSION['b2b_qun']=0;   
                                    }
                                    else
                                    {
                                           $_SESSION['prod_price']=$row['b2c_price'];
                                           $_SESSION['main_qun']=1;
                                           $_SESSION['b2b_qun']=0;
                                    }
                              if(isset($_SESSION['user_id']))
                                        {
                                                
                           ?>
                        <button class="btn btn-theme btn-cart btn-icon-left" type="submit"><a href="inquery.php">Inquery</a></button>
                           
                        
                            <button class="btn btn-theme btn-cart btn-icon-left" type="submit" ><a  href="cart.php"><i class="fa fa-shopping-cart"></i>Add to cart</a></button>
                            
                            
                           
                            
                        
                            <?php
                               }
                               else
                               {
                             ?>  
                              <button class="btn btn-theme btn-cart btn-icon-left" type="submit"><a href="login.php?var=1">Inquery</a></button>
                            <button class="btn btn-theme btn-cart btn-icon-left" type="submit"><a href="login.php?"><i class="fa fa-shopping-cart" ></i>Add to cart</a></button>
                            <button class="btn btn-theme btn-wish-list"><i class="fa fa-heart"></i></button>
                            
                            <?php
                                 }
                            ?>
                        </div>

                        <hr class="page-divider small"/>

                        
                        <hr class="page-divider small"/>

                       

                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->
 
        <!-- PAGE -->
        
        <!-- /PAGE -->

        
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <h2 class="section-title section-title-lg"><span>Related Products</span></h2>
                <div class="featured-products-carousel">
                    <div class="owl-carousel" id="featured-products-carousel">
                       <?php
                                $qry="SELECT * FROM product_tbl  WHERE is_active=1";

                                 $rs=mysqli_query($conn,$qry);
                              while($row=mysqli_fetch_assoc($rs))
                               {
                          ?>

                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                        <?php $path=$row['prod_img1']; ?>
                            <a class="media-link" data-gal="prettyPhoto" href="../admin/<?php echo $path;?>" >
                                <img src="../admin/<?php echo $path;?>" alt="" style="width: 200px; height: 200px;"/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="product_details.php?prod_id=<?php echo $row['prod_id']; ?>"><?php echo $row['prod_name']; ?></a></h4>
                            
                                <?php
                                    if(isset($_SESSION['b2b']))
                                       {                      
                                ?>
                                 <div class="price"><ins>Rs.<?php echo $row['b2b_price']; ?></ins></div>
                                        
                                        <p>Minimum <?php echo $row['b2b_qun']; ?> is Requery</p>

                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                        <div class="price"><ins>Rs.<?php echo $row['b2c_price']; ?></ins></div>
                                        <?php
                                            }
                                            
                                        ?>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="wishlist_insert.php?prodid=<?php echo $row['prod_id']; ?>"><i class="fa fa-heart"></i></a><!--
                                --><a class="btn btn-theme btn-theme-transparent" href="product_details.php?prodid=<?php echo $row['prod_id']; ?>">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                    ?>
                       
                        
                
                    </div>
                </div>
                <hr class="page-divider half"/>
                <a class="btn btn-theme btn-view-more-block" href="#" style="max-width: 100%;">View More</a>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <h2 class="section-title"><span>Brand &amp; Clients</span></h2>
                <div class="partners-carousel">
                    <div class="owl-carousel" id="partners">
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
 <?php
require "common/footer.php";


?>