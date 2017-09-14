<?php  

require_once("../pages/mod/connect.php");

$pass = false;
$post = $_POST;





switch ($post['key']) {
    case "insertbarang":

    	$result1 = executeQuery("select qty from msbarang where idbarang='".$post['idbarang']."'");

		$row=mysqli_fetch_array($result1);

		if($row[0]-$post['qty']>=0){

		$row[0]=$row[0]-$post['qty'];

    	unset($post['key']);
    	$q = "START TRANSACTION;";
        $q .= "INSERT INTO `trbarang` SET idbarang = '".$post['idbarang']."', qty = '".$post['qty']."', harga='".$post['harga']."', status = '".$post['status']."';";
        $q .= "Update msbarang set qty='".$row[0]."' where idbarang='".$post['idbarang']."';";
        $q .= "COMMIT;";
        

        if($data = executeQuery($q)){
    		$pass = true;
        }

    	}


        break;
    default:
        break;
}



if($pass){
	echo json_encode($data);
}else{
	return false;
}

?>