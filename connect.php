<?php

$con = mysqli_connect('localhost', 'root','','countries');
if(!$con)
{
	die('could not connect'. mysqli_connect_errno($con));
}
else
{
	//echo "Sucess";
}
?>
