<!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="row">
                <?php
                     $qry="SELECT * FROM cat_tbl  WHERE is_active=1";

                     $rs=mysqli_query($conn,$qry);
                    while($row=mysqli_fetch_assoc($rs))
                     {
                        $cat_id=$row['cat_id'];
                ?>
                    <div class="col-md-4">
                        <div class="product-list">
                             
                            <h4 class="block-title"><span> <?php echo $row['cname']; ?></span></h4>
                           <?php
                                   $qry1="SELECT * FROM product_tbl  WHERE is_active=1 AND cat_id=$cat_id LIMIT 4";

                                   $rs1=mysqli_query($conn,$qry1);
                                   while($row1=mysqli_fetch_assoc($rs1))
                                  {
                                     $path=$row1['prod_img1']; 
                               ?>
                            <div class="media">
                              
                                <a class="pull-left media-link" href="#">
                                    
                                    <img class="media-object" src="../admin/<?php echo $path;?>" style="width: 100px; height: 90px;" alt="">
                                    
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="product_details.php?prodid=<?php echo $row1['prod_id']; ?>"><?php echo $row1['prod_name']; ?></a></h4>
                                    
                                    <div class="price">
                                     <?php
                                       if(isset($_SESSION['b2b']))
                                          {                      
                                      ?>
                                    <ins> Rs. <?php echo $row1['b2b_price']; ?></ins> 
                                    <p>1 box have Minimum <?php echo $row1['b2b_qun']; ?> pis</p>
                                    <?php
                                       }
                                       else
                                       {
                                    ?>
                                     <ins>Rs. <?php echo $row1['b2c_price']; ?></ins>
                                    <?php } ?>   
                                     </div> 
                                </div>
                                
                            </div>
                            <?php } ?>
                            
                           
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </section>
        <!-- /PAGE -->
<footer class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">About Us</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <ul class="social-icons">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">News Letter</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <form action="#">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Enter Your Mail and Get $10 Cash"/>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-theme btn-theme-transparent">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-categories">
                            <h4 class="widget-title">Information</h4>
                            <ul>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="feedback.php">Contact Us</a></li>
                                <li><a href="faq.php">Terms and Conditions</a></li>
                                <li><a href="#">Private Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-tag-cloud">
                            <h4 class="widget-title">Item Tags</h4>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Top Sellers</a></li>
                                <li><a href="#">E commerce</a></li>
                                <li><a href="#">Hot Deals</a></li>
                                <li><a href="#">Supplier</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Theme</a></li>
                                <li><a href="#">Website</a></li>
                                <li><a href="#">Isamercan</a></li>
                                <li><a href="#">Themeforest</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-meta">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="copyright">Copyright 2018 STATIONERY SHOP   |   All Rights Reserved   |   Designed By Hub-Team</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="payments">
                            <ul>
                                <li><img src="assets/img/preview/payments/visa.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/mastercard.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/paypal.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/american-express.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/visa-electron.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/maestro.jpg" alt=""/></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
      </div>
      <form method="post" action="changepass.php" class="form-login">
           <div class="modal-body">
               <div class="col-md-12">
                   <div class="col-md-10 col-md-offset-1" style="margin-bottom: 10px;">
                     <div class="form-group"><input class="form-control" type="password" name="opass" value="" placeholder="old password"></div>
                  </div>
                  <div class="col-md-10 col-md-offset-1" style="margin-bottom: 10px;">
                     <div class="form-group"><input class="form-control" type="password" name="npass" value="" placeholder="enter new password"></div>
                  </div>
                  <div class="col-md-10 col-md-offset-1" style="margin-bottom: 10px;">
                     <div class="form-group"><input class="form-control" type="password" name="cpass" value="" placeholder="conform new password"></div>
                  </div>
               </div>
               
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button class="btn btn-primary" name="btn_sb" type="submit">Submit</button>
           </div>
      </form>
    </div>
  </div>
</div>    

<div class="modal fade" id="singup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document" style="margin-top: 200px;" >
    <div class="modal-content" >
     
                       <div class="col-md-6">
                            <a class="btn btn-theme btn-block btn-theme-dark" href="signup.php">I'm Business men</a>
                      </div>
                      <div class="col-md-6">
                                     <a class="btn btn-theme btn-block btn-theme-dark" href="signupb2c.php">I'M Customer</a>
                      </div>
      
                         
    </div>
  </div>
</div>

<div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document" style="padding-top: 100px;" >
    <div class="modal-content" >
     
                       <div class="col-md-12" style=" padding-top: 50px; background-color: gray; ">
                            <form action="forgotpassword.php" method="post">

                              <div class="col-md-8">
                                <div class="form-group">
                                    <input class="form-control" name="forgotemail" type="text" placeholder="Enter Your Registration Email"/>
                                </div>
                              </div>  
                              <div class="col-md-4">
                                <div class="form-group">

                                    <button class="btn btn-theme btn-theme-transparent" name="forgot_btn">email</button>
                                </div>
                              </div>
                                
                            </form>


                      </div>
                      
    </div>
  </div>
</div>



</div>

<!-- /WRAPPER -->

<!-- JS Global -->
<script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/plugins/superfish/js/superfish.min.js"></script>
<script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="assets/plugins/jquery.sticky.min.js"></script>
<script src="assets/plugins/jquery.easing.min.js"></script>
<script src="assets/plugins/jquery.smoothscroll.min.js"></script>
<script src="assets/plugins/smooth-scrollbar.min.js"></script>


<!-- JS Page Level -->
<script src="assets/js/theme.js"></script>
<script src="assets/js/material.min.js"></script>
<script>
    $('#plus').click(function(){
      var a=$('#qun').val();
      a++;
      $('#qun').val(a);
    });

    $('#min').click(function(){
      var b=$('#qun').val();
      var c=$('#qun').val();
      if (b <= 0) {
        return false;
      }
      b--;
      $('#qun').val(b);
    });

     

     

</script>


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/plugins/jquery.cookie.js"></script>

<!--<![endif]-->

</body>

<!-- Mirrored from eazzy.me/html/bella-shop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Feb 2015 08:19:37 GMT -->
</html>