<?php 

	include("connect.php");
	include("sessioncheck.php");
	session_start();

	$namabarang = $_REQUEST['namabarang'];
	$type = $_REQUEST['type'];
	$merek = $_REQUEST['merek'];
	$partnum = $_REQUEST['partnum'];
	$satuan = $_REQUEST['satuan'];
    $hargabeli = $_REQUEST['hargabeli'];
    $qty= $_REQUEST['qty'];
	$keterangan = $_REQUEST['keterangan'];
	$supplier = $_REQUEST['supplier'];
	$createdat = date('Y-m-d H:i:s');
	$createdby = $_SESSION['name'];
	$status = 'Beli';

	$result1 = executeQuery("insert into msbarang (namabarang,type,merek,partnum,satuan,hargabeli,qty,keterangan,supplier,createdat,createdby) values ('".$namabarang."','".$type."','".$merek."','".$partnum."','".$satuan."','".$hargabeli."','".$qty."','".$keterangan."','".$supplier."','".$createdat."','".$createdby."')");

	$result2 = executeQuery("select idbarang from msbarang order by msbarang.idbarang desc limit 1");

	$row = mysqli_fetch_array($result2);

	$result3 = executeQuery("insert into trbarang (idbarang,qty,harga,status,createdat,createdby) values ('".$row[0]."','".$qty."','".$hargabeli."','".$status."','".$createdat."','".$createdby."')");

	header("Location:/pages/inputdata.php");



 ?>