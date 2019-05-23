<?php 
session_start();
$name=$_SESSION['data'];
if (!isset($_SESSION['data'])) {
    header("location:login.php");
}
require "common/dbconnect.php";
require "common/header.php";

$qry="SELECT * FROM sec_que_tbl WHERE is_active!=0";

$rs=mysqli_query($conn,$qry);

?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     SECURITY QUESTION MANAGER
    </div>
    <div class="table-responsive">
      <table class="table" ui-jq="footable" >
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Security Question</th>
            <th>Insert Date</th>
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
                                <td><?php echo $row['sec_que_id']; ?></td>
                                <td><?php echo $row['sec_que']; ?></td>
                                <td><?php echo $row['doi']; ?></td>
                                 <td><b><?php if($row['is_active']==1){ echo "Active";}else { echo "Block";} ?></b></td>

                                 <td><a href="action_sec_que.php?id=<?php echo $row['sec_que_id']; ?>&
                                      status=<?php echo $row['is_active']; ?>">Change</a></td>
                                <td><a href="delete_sec_que.php?sec_que_id=<?php echo $row['sec_que_id']; ?>"><span class="glyphicon glyphicon-trash" style="color: red;"></a></td>
                                
          </tr>
          
        </tbody>
       <?php } ?>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  
  <!-- / footer -->
<?php
require "common/footer.php";
?>