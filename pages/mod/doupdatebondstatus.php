<?php 

	include("connect.php");
	include("sessioncheck.php");

	session_start();

	$idbond = $_REQUEST['idbond'];
	$status = $_REQUEST['status'];
	
	
	


	$result2 = executeQuery("UPDATE msbond SET status='".$status."' where idbond = '".$idbond."'");

	header("Location:/pages/viewbond.php?msg=success");



 ?>