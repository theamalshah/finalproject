<?php

// create connection....
$server="localhost";
$user="root";
$pass="";

$conn=mysqli_connect($server,$user,$pass);

if(!$conn)
{
	die("connection falied..".mysqli_connect_error());
}
else
{
	//echo "connection successfully..<br>";
}

// slelect database...

$db=mysqli_select_db($conn,"b2b");

if($db)
{
	//echo "database select successfully..<br>";
}
else
{
	echo "not select databse<br>";
}

?>