<?php  

include("connect.php");


session_start();

$username =$_REQUEST['username'];
$password = $_REQUEST['password'];
$passwordmd5 = md5($password);

$result1 = executeQuery("select * from msuser where username='$username' and password='$password' ");


if(!mysqli_num_rows($result1)){
	header("Location:/pages/login.php?msg=Incorrect Username or Password !");
}else{

	$row = mysqli_fetch_array($result1);	
	$_SESSION['userid'] = $row[0];	
	$_SESSION['name'] = $row[1];
	$_SESSION['username'] = $row[2];
	$_SESSION['role'] = $row[3];

	header("Location:/index.php");
	
	}






?>