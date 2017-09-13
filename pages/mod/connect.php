<?php

// $con = mysql_connect('Localhost','u644997102_test1','test12');
// mysql_select_db('u644997102_test1');



function executeQuery($query)
{
	 $con = mysqli_connect('Localhost','root','','web');
		$temp = mysqli_query($con,$query);
			if(!$temp)
			{
				die("Error ".mysqli_error());
			}
			else
			{
				return $temp;
			}
}



