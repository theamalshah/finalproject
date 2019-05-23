<?php
require "common/dbconnect.php";

?>
<div class="navigation-wrapper">
            <div class="container">
                <!-- Navigation -->
                <nav class="navigation closed clearfix">
                    <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                    <ul class="nav sf-menu">
                        <li><a href="index.php">Home</a>
                            
                        </li>
                            
                        </li>
                        <?php
                               $qry="SELECT * FROM cat_tbl  WHERE is_active=1 ";
                               $rs=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($rs))
                                  {
                         ?> 
                        <li class=""><a href="#"><?php echo $row['cname']; ?></a>
                           
                               
                                    
                                        <?php $cat_id=$row['cat_id']; ?>
                                       
                                        <ul >
                                          <?php
                                                $qry1="SELECT * FROM sub_cat_tbl  WHERE is_active=1 AND cat_id=$cat_id";

                                                 $rs1=mysqli_query($conn,$qry1);
                                                  while($row1=mysqli_fetch_assoc($rs1))
                                                    {
                                           ?>
                                            <li style="text-align: center;"><a href="category.php?subcatid=<?php echo $row1['sub_cat_id']; ?>"><?php echo $row1['sub_cat_name']; ?></a></li>
                                            
                                            <?php
                                                 }
                                            ?>
                                        </ul>
                                    
                                       
                              
                        </li>
                        <?php  } ?>  
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <!-- /Navigation -->
            </div>
        </div>