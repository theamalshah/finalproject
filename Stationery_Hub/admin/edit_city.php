<?php
session_start();
require "common/dbconnect.php";
require "common/header.php";

$name=$_SESSION['data'];
$c_id=$_GET['cid'];
$qry="SELECT * FROM city_tbl WHERE city_id=$c_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);

$qry1="SELECT * FROM state_tbl";
$rs1=mysqli_query($conn,$qry1);
if(!mysqli_num_rows($rs1)>0)
{
   echo '<script> alert("plz First of add State")</script>';
        echo '<script> window.location="add_state.php"</script>';
}


?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            EDIT CITY
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal" action="update_city.php" method="POST">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">City Name</label>
                                    <div class="col-lg-6">
                            			<input type="hidden" name="c_id" value="<?php echo $c_id; ?>">
                                        <input type="text" class="form-control" name="city_name" value="<?php echo $row['city_name']; ?>"><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Statr Name</label>
                                    <div class="col-lg-6">
                                    
                                        <select class="form-control" name="state_name">
                                        <?php 
                                                          
                                                          $state_id = $row['state_id'];
                                                          $qry2 = "SELECT * FROM state_tbl WHERE is_active=1";
                                                           $res2 = mysqli_query($conn,$qry2);
                                                          while ($row2 = mysqli_fetch_assoc($res2)){ 
                                                      ?>

                                                     <option value="<?php echo $row2['state_id']; ?>" <?php if ($state_id==$row2['state_id']) { echo "selected"; } ?>>
                                                      <?php echo $row2['state_name']; ?>
                                                     </option>
                                                  <?php } ?>
                                             
                                        </select>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    
                                    <div class="col-lg-6" align="center">
                                        
                                        <button class="btn btn-primary" name="btn_sb" type="submit">Submit</button>
                                    </div>
                                </div><br>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
</section>
 <!-- footer -->
		<?php
require "common/footer.php";
        ?>