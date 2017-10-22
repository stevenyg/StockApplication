<?php

// function executeQuery($query)
// {
// 	 $con = mysqli_connect('Localhost','berkatm2_stock','berkatmotoridi','berkatm2_stockapplication');
// 		$temp = mysqli_query($con,$query);
// 			if(!$temp)
// 			{
// 				return false;
// 			}
// 			else
// 			{
// 				return $temp;
// 			}
// }

function executeQuery($query)
{
	 $con = mysqli_connect('Localhost','root','','stockapplication');
		$temp = mysqli_query($con,$query);
			if(!$temp)
			{
				return false;
			}
			else
			{
				return $temp;
			}
}



