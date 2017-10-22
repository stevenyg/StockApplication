<?php
include("connect.php");
include("sessioncheck.php");

session_start();

$createdat = date('Y-m-d H:i:s');
$createdby = $_SESSION['name'];

if(isset($_POST["Import"])){

echo $filename=$_FILES["file"]["tmp_name"];

$row =0;

if($_FILES["file"]["size"] > 0)
{

$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
{

//It wiil insert a row to our subject table from our csv file`
$result1 = executeQuery("INSERT INTO msbond (`supplier`, `date`, `nonota`, `total`, `sales`, `status`,`createdat`,`createdby`) 
VALUES('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','".$createdat."','".$createdby."')");
//we are using mysql_query function. it returns a resource on true else False on error


$row++;
}
fclose($file);
}


header("Location:/pages/viewbond.php?msg=$row");
} 
?> 