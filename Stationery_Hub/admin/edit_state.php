<?php
session_start();
require "common/dbconnect.php";
require "common/header.php";
$name=$_SESSION['data'];


$s_id=$_GET['sid'];
$qry="SELECT * FROM state_tbl WHERE state_id=$s_id";

$rs=mysqli_query($conn,$qry);

$row=mysqli_fetch_assoc($rs);


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
                            EDIT STATE
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal" action="update_state.php" method="POST">
                                 <div class="form-group">
                                    <label class="col-lg-3 control-label">State Name</label>
                                    <div class="col-lg-6">
                                        <input type="hidden" name="s_id" value="<?php echo $s_id; ?>">
                                        <input class="form-control" type="text" name="state_name" value="<?php echo $row['state_name']; ?>"><br>
                                        <button class="btn btn-primary" name="btn_sb" type="submit">Submit</button>
                                    </div>
                                </div>
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