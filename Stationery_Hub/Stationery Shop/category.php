<?php
require "common/dbconnect.php";
require "common/header.php";
require "common/menu.php";
  


?>

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Category Page</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="active">Category Grid View Page With Left Sidebar</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar">
            <div class="container">
                <div class="row">
                    <!-- SIDEBAR -->
                    <aside class="col-md-3 sidebar" id="sidebar">
                        <!-- widget search -->
                        <div class="widget">
                            <div class="widget-search">
                                <input class="form-control" type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- /widget search -->
                        <!-- widget shop categories -->
                        <div class="widget shop-categories">
                            <h4 class="widget-title">Categories</h4>
                            <div class="widget-content">

                                <ul><?php
                                                 $qry="SELECT * FROM cat_tbl  WHERE is_active=1 ";
                                                 $rs=mysqli_query($conn,$qry);
                                                  while($row=mysqli_fetch_assoc($rs))
                                                    {
                                           ?>
                                    <li>
                                        
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <?php $cat_id=$row['cat_id']; ?>
                                        <a href="#"><?php echo $row['cname']; ?></a>
                                        <ul class="children">
                                            <li>
                                            <?php
                                                 $qry1="SELECT * FROM sub_cat_tbl  WHERE is_active=1 AND cat_id=$cat_id";

                                                 $rs1=mysqli_query($conn,$qry1);
                                                  while($row1=mysqli_fetch_assoc($rs1))
                                                    {
                                           ?>
                                                <a href="category.php?catid=<?php echo $row1['cat_id']; ?>"><?php echo $row1['sub_cat_name']; ?>
                                                    <span class="count">12</span>
                                                </a>
                                                 <?php
                                                   }
                                                ?>
                                            </li>
                                            
                                        </ul>
                                        
                                    </li>
                                   
                                   <?php
                                                   }
                                                ?>
                                   
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- /widget shop categories -->
                        <!-- widget product color -->
                        <div class="widget widget-colors">
                            <h4 class="widget-title">Colors</h4>
                            <div class="widget-content">
                                <ul>

                                            <?php
                                                 $qry="SELECT * FROM color_tbl  WHERE is_active=1 ";

                                                 $rs=mysqli_query($conn,$qry);
                                                  while($row=mysqli_fetch_assoc($rs))
                                                    {

                                           ?>
                                                 <li><a href="category.php?color_id=<?php echo $row['color_id']; ?>"><span style="background-color: <?php echo $row['color_name']; ?>"></span></a></li>
                                             <?php
                                                   }
                                              ?>
                                </ul>
                            </div>
                        </div>
                        <!-- /widget product color -->
                        <!-- widget price filter -->
                        
                        
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">

                       
`   
                        <!-- shop-sorting -->
                        <div class="shop-sorting">
                            <div class="row">
                                
                                <div class="col-sm-4 text-right-sm">
                                   
                                </div>
                            </div>
                        </div>
                        <!-- /shop-sorting -->
                        <?php
                         if(isset($_GET['catid']))
                           {
                                $catid=$_GET['catid'];
                           
                         ?>  
                        <!-- Products grid -->
                        <div class="row products grid">
                          <?php
                                $qry="SELECT * FROM product_tbl  WHERE cat_id=$catid ";

                                 $rs=mysqli_query($conn,$qry);
                              while($row=mysqli_fetch_assoc($rs))
                               {
                          ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                        <?php $path=$row['prod_img1']; ?>
                                            <img src="../admin/<?php echo $path;?>" alt="" style="width: 270px; height: 370px;"/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i></strong>
                                    </span>
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
                        <?php
                           }
                        ?>
                         <?php
                         if(isset($_GET['subcatid']))
                           {
                                $subcatid=$_GET['subcatid'];
                           
                         ?>  
                        <!-- Products grid -->
                        <div class="row products grid">
                          <?php
                                $qry="SELECT * FROM product_tbl  WHERE sub_cat_id=$subcatid ";

                                 $rs=mysqli_query($conn,$qry);
                              while($row=mysqli_fetch_assoc($rs))
                               {
                          ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                        <?php $path=$row['prod_img1']; ?>
                                            <img src="../admin/<?php echo $path;?>" alt="" style="width: 270px; height: 370px;"/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i></strong>
                                    </span>
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
                        <?php
                           }
                        ?>
                        <!-- /Products grid -->
                        <?php
                         if(isset($_GET['color_id']))
                           {
                                $colorid=$_GET['color_id'];
                           
                         ?>  
                        <!-- Products grid -->
                        <div class="row products grid">
                          <?php
                                $qry="SELECT * FROM product_tbl  WHERE color_id=$colorid ";

                                 $rs=mysqli_query($conn,$qry);
                              while($row=mysqli_fetch_assoc($rs))
                               {
                          ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                        <?php $path=$row['prod_img1']; ?>
                                            <img src="../admin/<?php echo $path;?>" alt="" style="width: 270px; height: 370px;"/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i></strong>
                                    </span>
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
                        <?php
                           }
                        ?>
                        <!-- /Products grid -->

                        <!-- Pagination -->
                        <div class="pagination-wrapper">
                            <ul class="pagination">
                                <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i> Previous</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next <i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- /Pagination -->

                    </div>
                    <!-- /CONTENT -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

       

    </div>
    <!-- /CONTENT AREA -->

<?php

require "common/footer.php";

?>