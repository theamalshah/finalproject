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
                    <h1>Category List View</h1>
                </div>
               
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
                                                <a href="category-list.php?subcatid=<?php echo $row1['sub_cat_id']; ?>"><?php echo $row1['sub_cat_name']; ?>
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
                       
                       
                        <!-- widget tag cloud -->
                        
                        
                       
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">

                        <div class="main-slider sub">
                            <div class="owl-carousel" id="main-slider">

                                <!-- Slide 1 -->
                                <div class="item slide1 sub">
                                    <img class="slide-img" src="assets/img/preview/slider/slide-1-sub.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title"><span>Winter Fashion</span></h2>
                                                        <h3 class="caption-subtitle"><span>Collection Ready</span></h3>
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
                                <div class="item slide2 sub">
                                    <img class="slide-img" src="assets/img/preview/slider/slide-1-sub.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title"><span>Winter Fashion</span></h2>
                                                        <h3 class="caption-subtitle"><span>Collection Ready</span></h3>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Shop Now</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 2 -->

                            </div>
                        </div>

                        <!-- shop-sorting -->
                        <div class="shop-sorting">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form class="form-inline" action="#">
                                        <div class="form-group selectpicker-wrapper">
                                            <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="Select">
                                                <option>Product Name</option>
                                                <option>Product Name</option>
                                                <option>Product Name</option>
                                            </select>
                                        </div>
                                        <div class="form-group selectpicker-wrapper">
                                            <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="Select">
                                                <option>Select Manifacturers</option>
                                                <option>Select Manifacturers</option>
                                                <option>Select Manifacturers</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4 text-right-sm">
                                    <a class="btn btn-theme btn-theme-transparent btn-theme-sm" href="#"><img src="assets/img/icon-list.html" alt=""/></a>
                                    <a class="btn btn-theme btn-theme-transparent btn-theme-sm" href="#"><img src="assets/img/icon-grid.html" alt=""/></a>
                                </div>
                            </div>
                        </div>
                        <!-- /shop-sorting -->

                        <!-- Products List -->
                        <div class="products list">
                            <!-- / -->
                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-1l.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                            <h4 class="caption-title">Standard Product Header</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <a class="reviews" href="#">16 reviews</a>
                                            <div class="overflowed">
                                                <div class="availability">Availability: <strong>In stock</strong> 21 Item(s)</div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            </div>
                                            <div class="caption-text">Etiam eu justo ut nisi sollicitudin bibendum. Fusce sed dui ac turpis vulputate tincidunt vel sed magna. Pellentesque <strong>pretium</strong> mollis metus vel feugiat. Cum sociis natoque penatibus <strong>et magnis</strong> dis parturient montes, nascetur ridiculus mus. <strong>Vestibulum</strong> commodo mauris eget sapien posuere, id <strong class="text-color">efficitur mi tristique</strong>.</div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / -->
                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-2l.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                            <h4 class="caption-title">Standard Product Header</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <a class="reviews" href="#">16 reviews</a>
                                            <div class="overflowed">
                                                <div class="availability">Availability: <strong>In stock</strong> 21 Item(s)</div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            </div>
                                            <div class="caption-text">Etiam eu justo ut nisi sollicitudin bibendum. Fusce sed dui ac turpis vulputate tincidunt vel sed magna. Pellentesque <strong>pretium</strong> mollis metus vel feugiat. Cum sociis natoque penatibus <strong>et magnis</strong> dis parturient montes, nascetur ridiculus mus. <strong>Vestibulum</strong> commodo mauris eget sapien posuere, id <strong class="text-color">efficitur mi tristique</strong>.</div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / -->
                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-3l.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                            <h4 class="caption-title">Standard Product Header</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <a class="reviews" href="#">16 reviews</a>
                                            <div class="overflowed">
                                                <div class="availability">Availability: <strong>In stock</strong> 21 Item(s)</div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            </div>
                                            <div class="caption-text">Etiam eu justo ut nisi sollicitudin bibendum. Fusce sed dui ac turpis vulputate tincidunt vel sed magna. Pellentesque <strong>pretium</strong> mollis metus vel feugiat. Cum sociis natoque penatibus <strong>et magnis</strong> dis parturient montes, nascetur ridiculus mus. <strong>Vestibulum</strong> commodo mauris eget sapien posuere, id <strong class="text-color">efficitur mi tristique</strong>.</div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / -->
                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-4l.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                            <h4 class="caption-title">Standard Product Header</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <a class="reviews" href="#">16 reviews</a>
                                            <div class="overflowed">
                                                <div class="availability">Availability: <strong>In stock</strong> 21 Item(s)</div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            </div>
                                            <div class="caption-text">Etiam eu justo ut nisi sollicitudin bibendum. Fusce sed dui ac turpis vulputate tincidunt vel sed magna. Pellentesque <strong>pretium</strong> mollis metus vel feugiat. Cum sociis natoque penatibus <strong>et magnis</strong> dis parturient montes, nascetur ridiculus mus. <strong>Vestibulum</strong> commodo mauris eget sapien posuere, id <strong class="text-color">efficitur mi tristique</strong>.</div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / -->
                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-5l.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                            <h4 class="caption-title">Standard Product Header</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <a class="reviews" href="#">16 reviews</a>
                                            <div class="overflowed">
                                                <div class="availability">Availability: <strong>In stock</strong> 21 Item(s)</div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            </div>
                                            <div class="caption-text">Etiam eu justo ut nisi sollicitudin bibendum. Fusce sed dui ac turpis vulputate tincidunt vel sed magna. Pellentesque <strong>pretium</strong> mollis metus vel feugiat. Cum sociis natoque penatibus <strong>et magnis</strong> dis parturient montes, nascetur ridiculus mus. <strong>Vestibulum</strong> commodo mauris eget sapien posuere, id <strong class="text-color">efficitur mi tristique</strong>.</div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / -->
                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-6l.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                            <h4 class="caption-title">Standard Product Header</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <a class="reviews" href="#">16 reviews</a>
                                            <div class="overflowed">
                                                <div class="availability">Availability: <strong>In stock</strong> 21 Item(s)</div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            </div>
                                            <div class="caption-text">Etiam eu justo ut nisi sollicitudin bibendum. Fusce sed dui ac turpis vulputate tincidunt vel sed magna. Pellentesque <strong>pretium</strong> mollis metus vel feugiat. Cum sociis natoque penatibus <strong>et magnis</strong> dis parturient montes, nascetur ridiculus mus. <strong>Vestibulum</strong> commodo mauris eget sapien posuere, id <strong class="text-color">efficitur mi tristique</strong>.</div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / -->
                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-7l.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                            <h4 class="caption-title">Standard Product Header</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <a class="reviews" href="#">16 reviews</a>
                                            <div class="overflowed">
                                                <div class="availability">Availability: <strong>In stock</strong> 21 Item(s)</div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            </div>
                                            <div class="caption-text">Etiam eu justo ut nisi sollicitudin bibendum. Fusce sed dui ac turpis vulputate tincidunt vel sed magna. Pellentesque <strong>pretium</strong> mollis metus vel feugiat. Cum sociis natoque penatibus <strong>et magnis</strong> dis parturient montes, nascetur ridiculus mus. <strong>Vestibulum</strong> commodo mauris eget sapien posuere, id <strong class="text-color">efficitur mi tristique</strong>.</div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / -->
                        </div>
                        <!-- /Products list -->

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

        <!-- PAGE -->
        <section class="page-section no-padding-top">
            <div class="container">
                <div class="row blocks shop-info-banners">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-gift"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Buy 1 Get 1</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-comments"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Call to Free</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-trophy"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Money Back!</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
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