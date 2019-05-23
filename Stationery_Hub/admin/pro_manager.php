<?php 
session_start();
$name=$_SESSION['data'];
if (!isset($_SESSION['data'])) {
    header("location:login.php");
}
require "common/dbconnect.php";
require "common/header.php";

$qry="SELECT * FROM product_tbl WHERE is_active!=0";

$rs=mysqli_query($conn,$qry);

?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     PRODUCT MANAGER
    </div>
    
      <div class="table-responsive">
      <table class="table" ui-jq="footable" >
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Sub_Category</th>
            <th>Brand </th>
            <th>Color </th>
            <th>B2B_Price</th>
            <th>B2B_Quntety</th>
            <th>B2C_Price</th>
            <th>Image1</th>
            <th>Image2</th>
            <th>Image3</th>
            <th>Discription</th>
            <th>Insert_Date</th>
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
                                <td><?php echo $row['prod_id']; ?></td>
                                <td><?php echo $row['prod_name']; ?></td>
                                <td><?php $cat_id=$row['cat_id'];
                                      $qry1="SELECT cname FROM cat_tbl WHERE cat_id=$cat_id";
                                        $rs1=mysqli_query($conn,$qry1); 
                                          while($row1=mysqli_fetch_assoc($rs1))
                                                    {
                                                         echo $row1['cname'];
                                ?></td>
                                <?php } ?>

                                <td><?php $sub_cat_id=$row['sub_cat_id'];
                                      $qry2="SELECT sub_cat_name FROM sub_cat_tbl WHERE sub_cat_id=$sub_cat_id";
                                        $rs2=mysqli_query($conn,$qry2); 
                                          while($row2=mysqli_fetch_assoc($rs2))
                                                    {
                                                         echo $row2['sub_cat_name'];
                                ?></td>
                                          <?php } ?>

                                <td><?php $brand_id=$row['brand_id'];
                                      $qry3="SELECT bname FROM brand_tbl WHERE brand_id=$brand_id";
                                        $rs3=mysqli_query($conn,$qry3); 
                                          while($row3=mysqli_fetch_assoc($rs3))
                                                    {
                                                         echo $row3['bname'];
                                ?></td>
                                          <?php } ?>

                                <td><?php $color_id=$row['color_id'];
                                      $qry4="SELECT color_name FROM color_tbl WHERE color_id=$color_id";
                                        $rs4=mysqli_query($conn,$qry4); 
                                          while($row4=mysqli_fetch_assoc($rs4))
                                                    {
                                                         echo $row4['color_name'];
                                ?></td>
                                          <?php } ?>

                                <td><?php echo $row['b2b_price']; ?></td>
                                <td><?php echo $row['b2b_qun']; ?></td>
                                <td><?php echo $row['b2c_price']; ?></td>

                                <td><?php $path=$row['prod_img1']; ?><img src=<?php echo $path;?> width="90" height="70"/></td>

                                <td><?php $path2=$row['prod_img2']; ?><img src=<?php echo $path2;?> width="90" height="70"/></td>

                                <td><?php $path3=$row['prod_img3']; ?><img src=<?php echo $path3;?> width="90" height="70"/></td>

                                <td style="width: 200px;"><?php echo $row['prod_dec']; ?></td>

                                <td><?php echo $row['doi']; ?></td>

                                 <td><b><?php if($row['is_active']==1){ echo "Active";}else { echo "Block";} ?></b></td>

                                 <td><a href="action_product.php?id=<?php echo $row['prod_id']; ?>&
                                      status=<?php echo $row['is_active']; ?>">Change</a></td>

                                <td><a href="edit_product.php?prod_id=<?php echo $row['prod_id']; ?>"><span class="glyphicon glyphicon-pencil" style="color: green;"></a></td>

                                <td><a href="delete_product.php?prod_id=<?php echo $row['prod_id']; ?>"><span class="glyphicon glyphicon-trash" style="color: red;"></a></td>
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