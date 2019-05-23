                                                    
<?php
require "common/dbconnect.php";
$id=$_POST['id'];

 $qry="SELECT * FROM sub_cat_tbl  WHERE is_active=1 AND cat_id=$id";
$rs = mysqli_query($conn,$qry);
if (mysqli_num_rows($rs) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($rs)) 
    {
            
          echo  '<option value = "'.$row['sub_cat_id'].'">'.$row['sub_cat_name'].'</option>';
             
            
            } 
} 
else {
    echo "0 results";
}
?>




                                                   