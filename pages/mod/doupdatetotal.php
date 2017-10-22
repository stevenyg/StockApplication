<?php 

	include("connect.php");
	include("sessioncheck.php");

	session_start();

	$idbarang = $_REQUEST['idbarang'];
	$total = $_REQUEST['total'];
	$createdat = date('Y-m-d H:i:s');
	$createdby = $_SESSION['name'];
	$status = 'ganti harga';

	$result1 = executeQuery("select * from msbarang where idbarang = '".$idbarang."'");

	$row = mysqli_fetch_array($result1);


	$result2 = executeQuery("UPDATE msbarang SET hargabeli='".$total."' where idbarang = '".$idbarang."'");
	
	header("Location:/pages/viewdata.php?msg=success");

	
	



 ?>