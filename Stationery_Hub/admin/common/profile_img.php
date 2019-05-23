<?php
//var_dump($_POST);
//var_dump($_FILES);
$target_dir = "upload/profile/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
//echo $target_file;

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//echo "<br>".$imageFileType;


if(isset($_POST['submit']))
{
	$check = getimagesize($_FILES["fileupload"]["tmp_name"]);

	//var_dump($check);
	if($check !== false) 
	{
		$uploadOk = 1;
	}

}

if(file_exists($target_file))
{
	echo "Sorry file is already exists";
	$uploadOk = 0;
}
if ($_FILES["fileupload"]["size"] > 15000000)
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
	if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.";
      
    }
}
?>