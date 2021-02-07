<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die ("Mysql connection failed: " .mysqli_connect_error());
}
echo "Mysql connected<br>";

//$db="CREATE DATABASE eHealth";
/*
if(mysqli_query($con,"CREATE DATABASE eHealth"))
{
	echo "Database create done<br>";
}
else
{
	echo "But error creating database: " .mysqli_error($con);
}
*/

//Table create
mysqli_select_db($con,"eHealth");
$table="CREATE Table users
(
Users_Serial int(10) AUTO_INCREMENT NOT NULL PRIMARY KEY,
username varchar(25) NOT NULL,
password varchar(20) NOT NULL
)";
if(mysqli_query($con,$table))
{
	echo "Table is created.";
}
else
{
	echo "Error creating table. " .mysqli_error($con);
}
mysqli_close($con);
?>