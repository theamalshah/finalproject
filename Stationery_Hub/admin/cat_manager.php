<?php 
session_start();
$name=$_SESSION['data'];
if (!isset($_SESSION['data'])) {
    header("location:login.php");
}
require "common/dbconnect.php";
require "common/header.php";

$qry="SELECT * FROM cat_tbl WHERE is_active!=0";

$rs=mysqli_query($conn,$qry);

?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     CATEGORY MANAGER
    </div>
    <div class="table-responsive">
      <table class="table" ui-jq="footable" >
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Category Name</th>
            <th>Insert Date</th>
            <th>Update Date</th>
            <th>Is_Active</th>
            <th>Action</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <?php
            while($row=mysqli_fetch_assoc($rs))
                {
                     
        ?>
        <tbody>
                    
          <tr data-expanded="true">
                                <td><?php echo $row['cat_id']; ?></td>
                                <td><?php echo $row['cname']; ?></td>
                                <td><?php echo $row['doi']; ?></td>
                                <td><?php echo $row['dou']; ?></td>
                                 <td><b><?php if($row['is_active']==1){ echo "Active";}else { echo "Block";} ?></b></td>

                                 <td><a href="action_cat.php?id=<?php echo $row['cat_id']; ?>&
                                      status=<?php echo $row['is_active']; ?>">Change</a></td>
                                      
                                <td><a href="edit_cat.php?cat_id=<?php echo $row['cat_id']; ?>"><span class="glyphicon glyphicon-pencil" style="color: green;"></a></td>
                                <td><a href="delete_cat.php?cat_id=<?php echo $row['cat_id']; ?>"><span class="glyphicon glyphicon-trash" style="color: red;"></a></td>
                                
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