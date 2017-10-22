<?php 

	include("connect.php");
	include("sessioncheck.php");

	session_start();

	$idbarang = $_REQUEST['idbarang'];
	$qty = $_REQUEST['qty'];
	$hargajual = $_REQUEST['hargajual'];
	$createdat = date('Y-m-d H:i:s');
	$createdby = $_SESSION['name'];
	$status = 'retur';

	$result1 = executeQuery("select * from msbarang where idbarang = '".$idbarang."'");

	$row = mysqli_fetch_array($result1);

	$qtynow= $row[7] + $qty; 

	$result2 = executeQuery("UPDATE msbarang SET qty='".$qtynow."' where idbarang = '".$idbarang."'");

	$result3 = executeQuery("INSERT INTO trbarang (idbarang,qty,harga,status,createdat,createdby) values ('".$idbarang."','".$qty."','".$hargajual."','".$status."','".$createdat."','".$createdby."')");

	header("Location:/pages/viewdata.php?msg=success");

	

	



 ?>