<?php
//var_dump($_POST);
//var_dump($_FILES);

$target_dir2 = "upload/product/";
$target_file2 = $target_dir2 . basename($_FILES["fileupload2"]["name"]);
//echo $target_file;

$uploadOk = 1;

$imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);
//echo "<br>".$imageFileType;


if(isset($_POST['submit']))
{
	$check = getimagesize($_FILES["fileupload2"]["tmp_name"]);

	//var_dump($check);
	if($check !== false) 
	{
		$uploadOk = 1;
	}

}

if(file_exists($target_file2))
{
	echo "Sorry file is already exists";
	$uploadOk = 0;
}
if ($_FILES["fileupload2"]["size"] > 15000000)
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
	if (move_uploaded_file($_FILES["fileupload2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["fileupload2"]["name"]). " has been uploaded.";
      
    }
}
?>