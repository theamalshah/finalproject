<?php 
session_start();
$name=$_SESSION['data'];
if (!isset($_SESSION['data'])) {
    header("location:login.php");
}
require "common/dbconnect.php";
require "common/header.php";

$qry="SELECT * FROM inq_tbl WHERE is_active!=0";

$rs=mysqli_query($conn,$qry);

?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
   <div class="panel panel-default">
    <div class="panel-heading">
     Inquery MANAGER
    </div>
    
      <div class="table-responsive">
      <table class="table" ui-jq="footable" >
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>

            <th>Name</th>
            <th>Email</th>
            <th>Product_id</th>
            <th>Product_name</th>
            <th>Mobile_No</th>
            <th>Message</th>
            <th>Insert_Date</th>
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
                                <td><?php echo $row['inq_id']; ?></td>
                                 <td><?php $user_id=$row['user_id'];
                                      $qry1="SELECT fname FROM user_tbl WHERE user_id=$user_id";
                                        $rs1=mysqli_query($conn,$qry1); 
                                          while($row1=mysqli_fetch_assoc($rs1))
                                                    {
                                                         echo $row1['fname'];
                                ?></td>
                                <?php } ?>
                                <td><?php $user_id=$row['user_id'];
                                      $qry1="SELECT email FROM user_tbl WHERE user_id=$user_id";
                                        $rs1=mysqli_query($conn,$qry1); 
                                          while($row1=mysqli_fetch_assoc($rs1))
                                                    {
                                                         echo $row1['email'];
                                ?></td>
                                <?php } ?>
                                 <td><?php echo $row['prod_id']; ?></td>
                                  <td><?php $prod_id=$row['prod_id'];
                                      $qry1="SELECT prod_name FROM product_tbl WHERE prod_id=$prod_id";
                                        $rs1=mysqli_query($conn,$qry1); 
                                          while($row1=mysqli_fetch_assoc($rs1))
                                                    {
                                                         echo $row1['prod_name'];
                                      ?>
                                  </td>
                                <?php } ?>
                                
                                <td><?php echo $row['mobile_no']; ?></td>

                                <td><?php echo $row['inq_msg']; ?></td>

                                <td><?php echo $row['doi']; ?></td>

                                 <td><b><?php if($row['is_active']==1){ echo "Active";}else { echo "Block";} ?></b></td>

                                 <td><a href="action_inq.php?id=<?php echo $row['inq_id']; ?>&
                                      status=<?php echo $row['is_active']; ?>">Change</a></td>

                                <td><a href="delete_inq.php?inq_id=<?php echo $row['inq_id']; ?>"><span class="glyphicon glyphicon-trash" style="color: red;"></a></td>
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