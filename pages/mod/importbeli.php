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
$result1 = executeQuery("INSERT INTO msbarang (`namabarang`, `type`, `merek`, `partnum`,satuan, `hargabeli`, `qty`,`keterangan`,`supplier`,`createdat`,`createdby`) 
VALUES('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','".$createdat."','".$createdby."')");
//we are using mysql_query function. it returns a resource on true else False on error


$row++;
}
fclose($file);
}
// select


$result2 = executeQuery("select * from msbarang order by idbarang desc limit $row");

$status = 'beli';

// $row = $row + mysqli_num_rows($result2);



while($idbr = mysqli_fetch_array($result2)){

	$row++;

	 $result3 = executeQuery("INSERT INTO trbarang (`idbarang`,`qty`,`harga`,`status`,`createdat`,`createdby`) VALUES ('".$idbr[0]."','".$idbr[6]."','".$idbr[7]."','".$status."','".$createdat."','".$createdby."') ");

}







header("Location:/pages/viewdata.php?msg=$row");
} 
?> 