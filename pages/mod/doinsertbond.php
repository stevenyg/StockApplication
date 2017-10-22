<?php 

	include("connect.php");
	include("sessioncheck.php");

	session_start();

	$supplier = $_REQUEST['supplier'];
	$date = $_REQUEST['date'];
	$nonota = $_REQUEST['nonota'];
	$total = $_REQUEST['total'];
	$sales = $_REQUEST['sales'];
    $status = $_REQUEST['status'];
    $keterangan = $_REQUEST['keterangan'];
	$createdat = date('Y-m-d H:i:s');
	$createdby = $_SESSION['name'];


	$result1 = executeQuery("insert into msbond (supplier, date, nonota, total, sales, status,keterangan,createdat,createdby)  values ('".$supplier."','".$date."','".$nonota."','".$total."','".$sales."','".$status."','".$keterangan."','".$createdat."','".$createdby."')");

	header("Location:/pages/viewbond.php");



 ?>