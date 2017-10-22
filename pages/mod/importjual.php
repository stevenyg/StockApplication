<?php
include("connect.php");
include("sessioncheck.php");

session_start();

$createdat = date('Y-m-d H:i:s');
$createdby = $_SESSION['name'];
 $status = 'jual';




if(isset($_POST["Import"])){

echo $filename=$_FILES["file"]["tmp_name"];



if($_FILES["file"]["size"] > 0)
{

$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
{
	$result1 = executeQuery("select * from msbarang where idbarang ='$emapData[0]'");

	$row = mysqli_fetch_array($result1);

	$qtynow = $row[7] - $emapData[1];

	if($qtynow>=0){

$result2 = executeQuery("UPDATE msbarang SET qty ='".$qtynow."' where idbarang='$emapData[0]'");

//It wiil insert a row to our subject table from our csv file`
$result3 = executeQuery("INSERT INTO trbarang (`idbarang`, `qty`, `harga`, `status`,`createdat`,`createdby`) 
VALUES('$emapData[0]','$emapData[1]','$emapData[2]','".$status."','".$createdat."','".$createdby."')");
//we are using mysql_query function. it returns a resource on true else False on error

}
}
fclose($file);
}


header("Location:/pages/viewdata.php");
} 


?> 