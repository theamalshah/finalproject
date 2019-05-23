<?php
require "common/dbconnect.php";
require "common/header.php";
require "common/menu.php";
?>
    <!-- CONTENT AREA -->
    <div class="content-area">
        <!-- PAGE -->
        <section class="page-section no-padding slider">
            <div class="container full-width">

                <div class="main-slider">
                    <div class="owl-carousel" id="main-slider">

                        <!-- Slide 1 -->
                        <div class="item slide1 ">

                            <img class="slide-img" src="assets/img/preview/slider/banner4.png" alt=""/>
                             <div class="caption">
                                <div class="container">
                                    <div class="div-table">
                                        <div class="div-cell">
                                            <div class="caption-content">
                                                <h2 class="caption-title">The Biggest</h2>
                                                <h4 class="caption-subtitle">Sale</h4>
                                                <p class="caption-text">
                                                    <a class="btn btn-theme" href="#">Shop Now</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>
                        <!-- /Slide 1 -->

                        <!-- Slide 2 -->
                        <div class="item slide2 alt">
                            <img class="slide-img" src="assets/img/preview/slider/s6.jpg" alt=""/>
                            
                        </div>
                        <!-- /Slide 2 -->

                        <!-- Slide 3 -->
                        <div class="item slide3 dark">
                            <img class="slide-img" src="assets/img/preview/slider/banner2.jpg" alt=""/>
                           
                        </div>
                        <!-- /Slide 3 -->

                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
       
        <!-- /PAGE -->

        
          <section class="page-section">
            <div class="container full-width">
                 <?php
                                $qry="SELECT * FROM cat_tbl  WHERE is_active=1  ";

                                 $rs=mysqli_query($conn,$qry);
                              while($row=mysqli_fetch_assoc($rs))
                               {
                 ?>
                    <div class="col-md-4" >
                        <div class="thumbnail no-border no-padding thumbnail-banner size-1x3">
                            <div class="media">
                                <a class="media-link" href="category.php?catid=<?php echo $row['cat_id']  ?>">
                                    <div class="img-bg" style="background-image: url('assets/img/preview/slider/s4.jpg')"></div>
                                    <div class="caption">
                                      <div class="caption-wrapper div-table">
                                           <div class="caption-inner div-cell" style="text-align: center;">
                                                <h1 class="caption-title" ><span><?php echo $row['cname'];  ?></span></h1>
                                                
                                            
                                           </div>
                                      </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                 <?php } ?>   
                   
                    
                
            </div>
        </section>
        <!-- PAGE -->
        <section class="page-section">
            <div class="container ">

                <div class="tabs">
                    <ul id="tabs" class="nav nav-justified-off"><!--
                        --><li class=""><a href="#tab-1" data-toggle="tab">Featured</a></li><!--
                        --><li class="active"><a href="#tab-2" data-toggle="tab">Newest</a></li><!--
                        --><li class=""><a href="#tab-3" data-toggle="tab">Top Sellers</a></li>
                    </ul>
                </div>

                <div class="tab-content">
                 <!-- tab 1 -->
                    <div class="tab-pane fade active in" id="tab-2">
                        <div class="row">
                          <?php
                                $qry="SELECT * FROM product_tbl  WHERE is_active=1  LIMIT 12";

                                 $rs=mysqli_query($conn,$qry);
                              while($row=mysqli_fetch_assoc($rs))
                               {
                          ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <?php $path=$row['prod_img1']; ?>
                                        <a class="media-link" data-gal="prettyPhoto" href="../admin/<?php echo $path;?>" >

                                            <img class="img-rounded img-responsive img-raised" src="../admin/<?php echo $path;?>" alt="" style="width: 200px; height: 200px;"/>
                                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                        </a>
                                    </div>
                                    <div class="caption text-center" style="height: 200px;">
                                        <h4 class="caption-title"><a href="product_details.php?prodid=<?php echo $row['prod_id']; ?>"><?php echo $row['prod_name']; ?></a></h4>
                                        <?php
                                               if(isset($_SESSION['b2b']))
                                             {                      
                                         ?>
                                        <div class="price"><ins>Rs.<?php echo $row['b2b_price']; ?></ins></div>
                                        
                                        <p>1 box have Minimum <?php echo $row['b2b_qun']; ?> pis</p>

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
                                            <?php
                                                  $_SESSION['prod_id']=$row['prod_id'];
                                                 if(isset($_SESSION['user_id']))
                                                    {
                                                
                                             ?>
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="wishlist_insert.php?prodid=<?php echo $row['prod_id']; ?>"><i class="fa fa-heart"></i></a>
                                            <!---->
                                        
                                            <a class="btn btn-theme btn-theme-transparent btn-icon-left"  href="product_details.php?prodid=<?php echo $row['prod_id']; ?>"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                            <?php
                                                }
                                                else
                                                {
                                            ?>
                                             <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="login.php"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-icon-left"  href="login.php"><i class="fa fa-shopping-cart"></i>Add to Cart</a>

                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php
                               }
                           ?>
                          
                           
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="message-box">
                    <div class="message-box-inner">
                        <h2> shipping Price on all orders over Rs. 50</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <h2 class="section-title"><span>Top Rated Products</span></h2>
                <div class="top-products-carousel">
                    <div class="owl-carousel" id="top-products-carousel">
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
                            <h4 class="caption-title"><a href="product_details.php?prodid=<?php echo $row['prod_id']; ?>"><?php echo $row['prod_name']; ?></a></h4>
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