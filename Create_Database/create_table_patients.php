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
$table="CREATE Table patients
(
Patients_Serial int(10) AUTO_INCREMENT NOT NULL PRIMARY KEY,
ID int(10) NOT NULL,
Name varchar(25) NOT NULL,
Age int(10) NOT NULL,
Gender varchar(10) NOT NULL,
Occupation varchar(20) NOT NULL,
Mobile varchar(15) NOT NULL,
Address varchar(30) NOT NULL
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