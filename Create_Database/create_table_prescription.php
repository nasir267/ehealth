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
$table="CREATE Table prescription
(
Prescription_Serial int(10) AUTO_INCREMENT NOT NULL PRIMARY KEY,
Paitent_ID int(10) NOT NULL,
Doctor_Name varchar(15) NOT NULL,
Medicine varchar(50) NOT NULL,
Diagnosis varchar(50) NOT NULL,
Instruction varchar(20) NOT NULL

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