<?php

session_start();
require "common/dbconnect.php";



if(isset($_POST['btn_sb']))
{

	$prod_id=$_POST['prod_id'];
	$prod_name=$_POST['prod_name'];
	$cat_id=$_POST['cat_tbl'];
	$sub_cat_id=$_POST['sub_cat_tbl'];
	$brand_id=$_POST['brand_tbl'];
	$color_id=$_POST['color_tbl'];
	$b2b_price=$_POST['b2b_price'];
	$b2b_qun=$_POST['b2b_qun'];
	$b2c_price=$_POST['b2c_price'];
	
	$prod_dec=$_POST['prod_dec'];
	$dou=date("Y-m-d H:i:s");


	$sql="SELECT * FROM product_tbl WHERE prod_id=$prod_id";

	$res=mysqli_query($conn,$sql);

	$row=mysqli_fetch_assoc($res);

	if($row['prod_name']==$prod_name)
	{
		 echo '<script> alert("Product is Allready Exits")</script>';
		echo '<script> window.location="pro_manager.php"</script>';
		
	}
	else
	{
     $qry="UPDATE product_tbl SET prod_name='".$prod_name."',brand_id=$brand_id,color_id=$color_id,cat_id=$cat_id,sub_cat_id=$sub_cat_id,b2b_price='".$b2b_price."',b2b_qun=$b2b_qun,b2c_price='".$b2c_price."',prod_dec='".$prod_dec."',dou='".$dou."' WHERE prod_id=$prod_id";

	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		 echo '<script> alert("UPDATED Product sucessfully")</script>';
		echo '<script> window.location="pro_manager.php"</script>';
		
	}
	else
	{
		 echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="edit_product.php"</script>';
		
	}
	
}
	
	
}
elseif (isset($_POST['btn_sb2'])) 
{
	    require "common/edit_prod_img_upload1.php";
	    require "common/edit_prod_img_upload2.php";
        require "common/edit_prod_img_upload3.php";

	    $prod_id=$_POST['prod_id'];
        $prod_img1=$edit_target_file1;
	    $prod_img2=$edit_target_file2;
	    $prod_img3=$edit_target_file3;

	     $qry="UPDATE product_tbl SET prod_img1='".$prod_img1."',prod_img2='".$prod_img2."',prod_img3='".$prod_img3."' WHERE prod_id=$prod_id";

	    $rs=mysqli_query($conn,$qry);
	    if($rs)
	    {
	    	 echo '<script> alert("Product Images UPDATED  sucessfully")</script>';
		     echo '<script> window.location="pro_manager.php"</script>';
		   
	    }
	    else
	    {
		    echo '<script> alert("Something is worng plz check by admin")</script>';
		   echo '<script> window.location="pro_manager.php"</script>';
	    }

}
else
{
	 echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="edit_product.php"</script>';
	
}

?>