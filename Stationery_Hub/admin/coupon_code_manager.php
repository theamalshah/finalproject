<?php 
session_start();
$name=$_SESSION['data'];
if (!isset($_SESSION['data'])) {
  
    echo '<script> alert("plz First of Login")</script>';
        echo '<script> window.location="login.php"</script>';
}
require "common/dbconnect.php";
require "common/header.php";

$qry="SELECT * FROM coupon_code WHERE is_active!=0";

$rs=mysqli_query($conn,$qry);

?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     COUPON CODE MANAGER
    </div>
    <div>
    <div class="table-responsive">
      <table class="table" ui-jq="footable" >
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Coupon Code</th>
            <th>Discount</th>
            <th>Insert Date</th>
            <th>Status</th>
           
            
            <th>Delete</th>
          </tr>
        </thead>
        <?php
            while($row=mysqli_fetch_assoc($rs))
                {
                     
        ?>
        <tbody>
                    
          <tr data-expanded="true">
                                <td><?php echo $row['code_id']; ?></td>
                                <td><?php echo $row['coupon_code']; ?></td>
                                <td><?php echo $row['discount']; ?>%</td>
                                <td><?php echo $row['doi']; ?></td>
                                 <td><b><?php if($row['is_active']==1){ echo "Active";}else { echo "Used";} ?></b></td>

                                
                                
                                <td><a href="delete_coupon_code.php?id=<?php echo $row['code_id']; ?>"><span class="glyphicon glyphicon-trash" style="color: red;"></a></td>
                                
          </tr>
          
        </tbody>
       <?php } ?>
      </table>
      </div>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
 <?php
require "common/footer.php";
	?>	  