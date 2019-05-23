<?php 
session_start();
$name=$_SESSION['data'];
if (!isset($_SESSION['data'])) {
    header("location:login.php");
}
require "common/dbconnect.php";
require "common/header.php";

$qry="SELECT * FROM buss_det_tbl WHERE is_active!=0";

$rs=mysqli_query($conn,$qry);

?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
   <div class="panel panel-default">
    <div class="panel-heading">
     BUSINESS MANAGER
    </div>
    
      <div class="table-responsive">
      <table class="table" ui-jq="footable" >
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>User_Id</th>
            <th>Business_Name</th>
            <th>Business_Email</th>
            <th>Phone</th>
            <th>Business_ADD</th>
            <th>city</th>
            <th>state</th>
             <th>Con_Per_Name</th>
            <th>Con_Per_No</th>
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
                                <td><?php echo $row['buss_det_id']; ?></td>
                                
                                 <td><?php echo $row['user_id']; ?></td>
                                
                                <td><?php echo $row['buss_name']; ?></td>
                                
                                <td><?php echo $row['buss_email']; ?></td>

                                <td><?php echo $row['phone']; ?></td>

                                <td><?php echo $row['buss_add']; ?></td>

                                 <td><?php $city_id=$row['city_id'];
                                      $qry2="SELECT city_name FROM city_tbl WHERE city_id=$city_id";
                                        $rs2=mysqli_query($conn,$qry2); 
                                          while($row2=mysqli_fetch_assoc($rs2))
                                                    {
                                                         echo $row2['city_name'];
                                ?></td>
                                          <?php } ?>

                                <td><?php $state_id=$row['state_id'];
                                      $qry3="SELECT state_name FROM state_tbl WHERE state_id=$state_id";
                                        $rs3=mysqli_query($conn,$qry3); 
                                          while($row3=mysqli_fetch_assoc($rs3))
                                                    {
                                                         echo $row3['state_name'];
                                ?></td>
                                          <?php } ?>

                                <td><?php echo $row['con_per_name']; ?></td>

                                <td><?php echo $row['con_per_no']; ?></td>

                                <td><?php echo $row['doi']; ?></td>

                                 <td><b><?php if($row['is_active']==1){ echo "Active";}else { echo "Block";} ?></b></td>

                                 <td><a href="action_buss.php?id=<?php echo $row['buss_det_id']; ?>&
                                      status=<?php echo $row['is_active']; ?>">Change</a></td>

                                <td><a href="delete_buss.php?buss_det_id=<?php echo $row['buss_det_id']; ?>"><span class="glyphicon glyphicon-trash" style="color: red;"></a></td>
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