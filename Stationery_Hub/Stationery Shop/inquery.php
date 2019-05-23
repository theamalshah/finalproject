<?php
require "common/dbconnect.php";
require "common/header.php";
require "common/menu.php";
$user_id=$_SESSION['user_id'];
$qry="SELECT * FROM user_tbl WHERE user_id='".$user_id."' ";
    $rs=mysqli_query($conn,$qry);
    $row=mysqli_fetch_assoc($rs);
?>
<!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-offset-2">
                        
                         <form method="post" action="inq_insert.php" class="form-login">
                            <div class="row">
                                <div class="col-md-12 hello-text-wrap">
                                    <span class="hello-text text-thin">Hello, welcome For Inquery</span>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="hidden" name="inq_id">
                                    <label for="disabledSelect">Name <sup>*</sup></label>
                                    <div class="form-group"><input class="form-control" type="text" name="name" value="<?php echo $_SESSION['name']; ?>" readonly ></div>
                                </div>
                                <div class="col-md-6">
                                     <label for="disabledSelect">Email <sup>*</sup></label>
                                    <div class="form-group"><input class="form-control" type="text" name="email" value="<?php echo $row['email'];?>" readonly ></div>   
                                </div>
                                
                                <div class="col-md-10">
                                    <label for="disabledSelect">Mobile Number <sup>*</sup></label>
                                    <div class="form-group">
                                    <input class="form-control" type="text" name="mobile_no" required=""></div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                         <label for="disabledSelect">Message<sup>*</sup></label>
                                         <textarea class="form-control"  name="msg" required=""></textarea>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <input class="btn btn-theme btn-block btn-theme-dark" type="submit" name="btn_sb" value="Submit">
                                    
                                    </div>
                                </div>
                        </form>
                 
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
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

<?php
    require "common/footer.php";
?>