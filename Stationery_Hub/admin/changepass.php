<?php     
session_start();
require "common/dbconnect.php";
require "common/header.php";
?>


<section id="main-content">
                <section class="wrapper">
                    <div class="form-w3layouts">
                        <!-- page start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Change Password
                                    </header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" id="ct_form" action="cpassdb.php" method="post">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Old Password</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="password" name="opass" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">New Password</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="password" name="npass" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Confirm Password</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="password" name="cpass" required="">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group" >
                                                
                                                <div class="col-lg-6" align="center" >
                                                    
                                                    <button class="btn btn-primary" name="btn_sb" type="submit">Submit</button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!-- page end-->
                </div>
            </section>
 <?php
require "common/footer.php";
?>