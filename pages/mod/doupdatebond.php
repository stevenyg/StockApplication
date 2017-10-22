<?php 

	include("connect.php");
	include("sessioncheck.php");

	session_start();

	$idbond = $_REQUEST['idbond'];
	$total = $_REQUEST['total'];
	$keterangan = $_REQUEST['keterangan'];
	$createdat = date('Y-m-d H:i:s');
	$createdby = $_SESSION['name'];
	

	$result1 = executeQuery("select * from msbond where idbond = '".$idbond."'");

	$row = mysqli_fetch_array($result1);

	$totalnow= $row[4] - $total; 

	if($totalnow >= 0){

	$result2 = executeQuery("UPDATE msbond SET total='".$totalnow."',keterangan='".$keterangan."' where idbond = '".$idbond."'");

	header("Location:/pages/viewbond.php?msg=success");

	}else{

	header("Location:/pages/viewbond.php?msg=total retur error");

	}

	



 ?>