<?php 

	include("mod/connect.php");

	$namabarang = $_REQUEST['namabarang'];
	$type = $_REQUEST['type'];
	$merek = $_REQUEST['merek'];
	$partnum = $_REQUEST['partnum'];
	$satuan = $_REQUEST['satuan'];
	$keterangan = $_REQUEST['keterangan'];
	$supplier = $_REQUEST['supplier'];
	$createdat = date('Y-m-d H:i:s');
	$createdby = $_SESSION['name'];

	$result1 = executeQuery("insert into msbarang (namabarang,type,merek,partnum,satuan,keterangan,supplier,createdat,createdby) values ('".$namabarang."','".$type."','".$merek."','".$partnum."','".$satuan."','".$keterangan."','".$supplier."','".$createdat."','".$createdby."')");

	header("Location:../tables.php");


 ?>