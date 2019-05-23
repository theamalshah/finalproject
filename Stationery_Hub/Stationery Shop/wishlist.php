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
                    <h1>Wishlist</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="active">Shopping Cart</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
        <section class="page-section color no-padding-bottom">
            <div class="container">

                <div class="row wishlist">
                    <div class="col-md-9">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Unit Price</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            

                            <tbody>
                             <?php
                               if(isset($_SESSION['user_id']))
                                { 
                                $user_id=$_SESSION['user_id'];  
                                $qry="SELECT * FROM wishlist_tbl  WHERE is_active=1 AND user_id=$user_id ";
                                
                                 $rs=mysqli_query($conn,$qry);
                              while($row=mysqli_fetch_assoc($rs))
                               {
                                    $prod_id=$row['prod_id'];
                                    $qry1="SELECT * FROM product_tbl  WHERE prod_id=$prod_id";
                                    $rs1=mysqli_query($conn,$qry1);
                                    $row1=mysqli_fetch_assoc($rs1);
                                    $path1=$row1['prod_img1'];
                              ?>
                            <tr>
                                <td class="image"><a class="media-link" href="#"><i class="fa fa-plus"></i><img src="../admin/<?php echo $path1;?>" width="70" height="100" alt=""/></a></td>
                                <td class="description">
                                    <h4><a href="product_details.php?prodid=<?php echo $row['prod_id']; ?>"><?php echo $row1['prod_name']; ?></a></h4>
                                    
                                </td>
                                <td class="price"><?php echo $row['prod_price']; ?></td>
                                <?php
                                 $_SESSION['prod_id']=$row['prod_id'];
                                 $_SESSION['prod_price']=$row['prod_price'];
                                ?>
                                <td class="add"><a class="btn btn-theme btn-theme-dark btn-icon-left" href="cart.php"><i class="fa fa-shopping-cart"></i> Add to cart</a></td>
                                <td class="total"><a href="delete_wishlist.php?id=<?php echo $row['id']; ?>"><i class="fa fa-close"></i></a></td>
                            </tr>
                             <?php
                               }
                            }
                            
                             ?>
                            
                            
                            </tbody>

                        </table>
                        <a class="btn btn-theme btn-theme-transparent btn-icon-left btn-continue-shopping" href="index.php"><i class="fa fa-shopping-cart"></i>Continue shopping</a>
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