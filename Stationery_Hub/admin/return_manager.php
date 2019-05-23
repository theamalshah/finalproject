<?php 
session_start();
$name=$_SESSION['data'];
if (!isset($_SESSION['data'])) {
    header("location:login.php");
}
require "common/dbconnect.php";
require "common/header.php";

$qry="SELECT * FROM return_order_tbl WHERE is_active!=0";

$rs=mysqli_query($conn,$qry);

?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
   <div class="panel panel-default">
    <div class="panel-heading">
     RETURN-ORDER MANAGER
    </div>
    
      <div class="table-responsive">
      <table class="table" ui-jq="footable" >
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>User_id</th>
            <th>Order_id</th>
            <th>Order_no</th>
            <th>product_id</th>
            <th>Quntety</th>
            <th>price</th>
            <th>Reasone</th>
             <th>status</th>
            <th>Status_action</th>
            
          </tr>
        </thead>
        <?php
            while($row=mysqli_fetch_assoc($rs))
                {

        ?>
        <tbody>
            
          <tr data-expanded="true">
               <td><?php echo $row['return_id']; ?></td> 

               <td><?php echo $row['user_id']; ?></td>  

               <td><?php echo $row['order_id']; ?></td>   

               <td><?php echo $row['order_no']; ?></td>    

               <td><?php echo $row['product_id']; ?></td> 

               <td><?php echo $row['qun']; ?></td>

               <td><?php echo $row['price']; ?></td>  

               <td><?php echo $row['reasone']; ?></td>   

                <td><b><?php if($row['is_active']==1){ echo "request for return this order";}else { echo "this order is retunred.";} ?></b></td>

                <td><a href="action_return_order.php?id=<?php echo $row['return_id']; ?>&
                                      status=<?php echo $row['is_active']; ?>">Conform</a></td>

                <td><a href="delete_return_order.php?return_id=<?php echo $row['return_id']; ?>"><span class="glyphicon glyphicon-trash" style="color: red;"></a></td>

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