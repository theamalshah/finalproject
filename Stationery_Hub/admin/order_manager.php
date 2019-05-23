<?php 
session_start();
$name=$_SESSION['data'];
if (!isset($_SESSION['data'])) {
    header("location:login.php");
}
require "common/dbconnect.php";
require "common/header.php";

$qry="SELECT * FROM order_tbl WHERE is_active!=0";

$rs=mysqli_query($conn,$qry);

?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
   <div class="panel panel-default">
    <div class="panel-heading">
     ORDER MANAGER
    </div>
    
      <div class="table-responsive">
      <table class="table" ui-jq="footable" >
        <thead>
          <tr>
            
            <th>Order_No.</th>
            <th>User_Id</th>
            <th>Cart_Id</th>
            <th>prod_Id</th>
            <th>Quntety</th>
            <th>Price</th>
            <th>Payment</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Adderss</th>
            <th>city</th>
            <th>state</th>
            <th>Pincode</th>
            <th>Description</th>
            <th>Insert_Date</th>
            <th>status</th>
            <th>Status_action</th>
            <th>Is_Active</th>
            <th>Action</th>
            
            <th>Delete</th>
          </tr>
        </thead>
        <?php
            while($row=mysqli_fetch_assoc($rs))
                {

        ?>
        <tbody>
            
          <tr data-expanded="true">
                                
                                <td><?php echo $row['order_id']; ?></td>
                                
                                <td><?php echo $row['user_id']; ?></td>
                                
                                <td><?php echo $row['cart_id']; ?> </td>

                                <td><a href="pro_manager.php"><?php echo $row['prod_id']; ?></a> </td>

                                <td><?php echo $row['qun']; ?> </td>
                                
                                <td><?php echo $row['total_price']; ?></td>

                                <td><?php echo $row['payment']; ?></td>

                                <td><?php echo $row['fname']; ?>  <?php echo $row['lname']; ?></td>

                                <td><?php echo $row['email']; ?></td>

                                <td><?php echo $row['mobile']; ?></td>
                                
                                <td><?php echo $row['add1']; ?></td>

                                 <td><?php
                                       $city_id=$row['city_id'];
                                      $qry3="SELECT city_name FROM city_tbl WHERE city_id=$city_id";
                                        $rs3=mysqli_query($conn,$qry3); 
                                          while($row3=mysqli_fetch_assoc($rs3))
                                                    {
                                                         echo $row3['city_name'];

                                ?></td>
                                          <?php } ?>

                                <td><?php $state_id=$row['state_id'];
                                      $qry4="SELECT state_name FROM state_tbl WHERE state_id=$state_id";
                                        $rs4=mysqli_query($conn,$qry4); 
                                          while($row4=mysqli_fetch_assoc($rs4))
                                                    {
                                                         echo $row4['state_name'];
                                ?></td>
                                          <?php } ?>

                                <td><?php echo $row['pincode']; ?></td>

                                <td><?php echo $row['decs']; ?></td>

                                <td><?php echo $row['doi']; ?></td>

                                <td><b><?php if($row['status']==25){ echo "panding";}elseif($row['status']==50){
                                  echo "on packing";}elseif($row['status']==75){
                                  echo "on way";} else { echo "Delivered";} ?></b></td>

                                <td><a href="action_orderstatus.php?id=<?php echo $row['order_id']; ?>&
                                      status=<?php echo $row['status']; ?>">Change</a></td>

                                 <td><b><?php if($row['is_active']==1){ echo "Active";}else { echo "Block";} ?></b></td>

                                 <td><a href="action_order.php?id=<?php echo $row['order_id']; ?>&
                                      status=<?php echo $row['is_active']; ?>">Change</a></td>
                                
                                


                                <td><a href="delete_order.php?order_id=<?php echo $row['order_id']; ?>"><span class="glyphicon glyphicon-trash" style="color: red;"></a></td>
          </tr> 
          
        </tbody>
        <?php } ?>
      </table>
     </div> 
    
  </div>
</div>
</section>
 <!-- footer -->
 <?php
      require "common/footer.php";
	?>	 