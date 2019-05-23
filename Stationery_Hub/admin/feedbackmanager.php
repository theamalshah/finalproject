<?php 
session_start();
$name=$_SESSION['data'];
if (!isset($_SESSION['data'])) {
    header("location:login.php");
}
require "common/dbconnect.php";
require "common/header.php";



?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     FEEDBACK MANAGER
    </div>
    <div class="table-responsive">
      <table class="table" ui-jq="footable" >
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Insert Date</th>
           
            <th>Is_Active</th>
            <th>Action</th>
            
            <th>Delete</th>
          </tr>
        </thead>
        <?php
            $qry="SELECT * FROM feedback_tbl WHERE is_active!=0";

                $rs=mysqli_query($conn,$qry);
            while($row=mysqli_fetch_assoc($rs))
                {

        ?>
        <tbody>
            
          <tr data-expanded="true">
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['subject'];?></td>

                                <td><?php echo $row['message'];?></td>
                                <td><?php echo $row['doi']; ?></td>
                               
                                 <td><b><?php if($row['is_active']==1){ echo "Active";}else { echo "Block";} ?></b></td>

                                 <td><a href="action_feedback.php?id=<?php echo $row['id']; ?>&
                                      status=<?php echo $row['is_active']; ?>">Change</a></td>
                               
                                <td><a href="delete_feedback.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash" style="color: red;"></a></td>
                                
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