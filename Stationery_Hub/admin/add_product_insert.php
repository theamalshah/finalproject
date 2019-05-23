<?php
session_start();
require "common/dbconnect.php";
require "common/prod_img_upload1.php";
require "common/prod_img_upload2.php";
require "common/prod_img_upload3.php";

if(isset($_POST['btn_sb']))
{
	$cat_id=$_POST['cat_tbl'];
	$sub_cat_id=$_POST['sub_cat_tbl'];
	$brand_id=$_POST['brand_tbl'];
	$color_id=$_POST['color_tbl'];
	$prod_name=$_POST['prod_name'];
	$b2b_price=$_POST['b2b_price'];
	$b2b_qun=$_POST['b2b_qun'];
	$b2c_price=$_POST['b2c_price'];
	$prod_dec=$_POST['prod_dec'];
	$prod_img1=$target_file1;
	$prod_img2=$target_file2;
	$prod_img3=$target_file3;
	$is_active=1;
	$doi=date("Y-m-d H:i:s");

	 $qryy="SELECT * FROM product_tbl WHERE prod_name='".$prod_name."'";
	

	$ress=mysqli_query($conn,$qryy);
	
	if(mysqli_num_rows($ress)>0)
	{
		echo '<script> alert("product Allready Exist")</script>';
		echo '<script> window.location="add_product.php"</script>';
    }
    else
    {
    $qry="INSERT INTO product_tbl(prod_name,brand_id,color_id,cat_id,sub_cat_id,b2b_price,b2b_qun,b2c_price,prod_img1,prod_img2,prod_img3,prod_dec,is_active,doi) VALUES ('".$prod_name."',$brand_id,$color_id,$cat_id,$sub_cat_id,'".$b2b_price."',$b2b_qun,'".$b2c_price."','".$prod_img1."','".$prod_img2."','".$prod_img3."','".$prod_dec."',$is_active,'".$doi."')";
    
	$rs=mysqli_query($conn,$qry);
     
	if($rs)
	{
		echo '<script> alert("Sucessfully add Product")</script>';
		echo '<script> window.location="pro_manager.php"</script>';
		
	}
	else
	{
         echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="add_product.php"</script>';
	}
  }
   
}
else
{
	    echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="add_product.php"</script>';
	
}
?>