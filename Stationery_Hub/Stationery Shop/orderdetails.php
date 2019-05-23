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
                    <h1>Order List </h1>
                </div>
                
            </div>
        </section>
        <!-- /BREADCRUMBS -->
         <section class="page-section color no-padding-bottom">
            <div class="container wishlist">

                        <table class="table">
                            <thead>
                            <tr>
                                
                                <th style="text-align: center;">Order Number</th>
                                <th style="text-align: center;"> Price</th>
                                <th style="text-align: center;">Order Status</th>
                                <th style="text-align: center;"></th>
                                <th style="text-align: center;"></th>
                                
                            </tr>
                            </thead>
                            

                            <tbody>
                             <?php
                               if(isset($_SESSION['user_id']))
                                { 
                                $user_id=$_SESSION['user_id'];  
                                $qry="SELECT * FROM order_tbl  WHERE is_active=1 AND user_id=$user_id ";
                                
                                 $rs=mysqli_query($conn,$qry);
                              while($row=mysqli_fetch_assoc($rs))
                               {
                                   
                              ?>
                            <tr>
                               
                                
                                <td class="description" style="text-align: center;">
                                    <h4><?php echo $row['order_id']; ?></h4>    
                                </td>
                                <td class="price" style="text-align: center;"><?php echo $row['total_price']; ?></td>
                                 <td class="price" style="width: 700px;">    
                                    
                                       <div class="progress">
                                       <?php
                                          if($row['status']==25)
                                          {
                                       ?>
                                           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['status']; ?>%;">
                                               <b style="text-decoration-color: black;">pandding</b>
                                           </div>
                                        <?php
                                           }
                                           elseif($row['status']==50)
                                           {
                                        ?>   
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['status']; ?>%;">
                                               <b style="text-decoration-color: black;">On Packing</b>
                                        </div>
                                        <?php
                                           }
                                           elseif($row['status']==75)
                                           {   
                                        ?> 
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['status']; ?>%;">
                                               <b style="text-decoration-color: black;">On Way</b>
                                        </div>
                                        <?php
                                           }
                                           elseif($row['status']==100)
                                           {   
                                        ?> 
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['status']; ?>%;">
                                               <b style="text-decoration-color: black;">Deliverd</b>
                                        </div>
                                        <?php 
                                           }
                                           else
                                           {
                                         ?>
                                        <div class="progress-bar " role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:100%;">
                                               <b style="text-decoration-color: black;">This Order Is Returned</b>
                                        </div>
                                         
                                           <?php 
                                           }
                                    
                                         ?>
                                       </div>
                                    
                                 </td>   
                                 
                                
                                <td class="total" style=""><a href="vieworder.php?id=<?php echo $row['id']; ?>"> View Order</a></td>
                                
                                <td class="total" style="">
                                  <?php
                                    if ($row['status'] == 75 or $row['status'] == 200) {
                                     
                                 ?>
                                 <a href=""></a>
                                 <?php 
                                  }
                                  elseif ($row['status'] == 100  ) 
                                  {
                                ?>
                                 <a href="return_order.php?id=<?php echo $row['id']; ?>">Return Order</a>
                                
                                  <?php 
                                  }
                                  else
                                  {
                                ?>
                                <a href="cancle_order.php?id=<?php echo $row['id']; ?>"><i class="fa fa-close"></i></a>
                                <?php     
                                  }
                                 ?>
                                </td>
                                  
                                     
                                
                            </tr>
                             <?php
                               }
                            }
                            
                             ?>
                            
                            
                            </tbody>

                        </table>
                       
                  
            </div>
        </section>
        <!-- PAGE WITH SIDEBAR -->
       
        <!-- /PAGE WITH SIDEBAR -->

      

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
    <?php

require "common/footer.php";

?>