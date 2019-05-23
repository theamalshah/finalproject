<?php
//var_dump($_POST);
//var_dump($_FILES);
$target_dir1 = "upload/product/";
$target_file1 = $target_dir1 . basename($_FILES["fileupload1"]["name"]);
//echo $target_file;

$uploadOk = 1;

$imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);
//echo "<br>".$imageFileType;


if(isset($_POST['submit']))
{
	$check = getimagesize($_FILES["fileupload1"]["tmp_name"]);

	//var_dump($check);
	if($check !== false) 
	{
		$uploadOk = 1;
	}

}

if(file_exists($target_file1))
{
	echo "Sorry file is already exists";
	$uploadOk = 0;
}
if ($_FILES["fileupload1"]["size"] > 15000000)
{
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" )
{
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
}

if ($uploadOk == 0)
{
    echo "Sorry, your file was not uploaded.";

}
else
{
	if (move_uploaded_file($_FILES["fileupload1"]["tmp_name"], $target_file1)) {
        echo "The file ". basename( $_FILES["fileupload1"]["name"]). " has been uploaded.";
      
    }
}
?>