<?php

// $con = mysql_connect('Localhost','u644997102_test1','test12');
// mysql_select_db('u644997102_test1');



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



