<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die ("Mysql connection failed: " .mysqli_connect_error());
}
echo "Mysql connected<br>";
//$db="CREATE DATABASE E-Health Care System";
if(mysqli_query($con,"CREATE DATABASE eHealth"))
{
	echo "Database created";
}
else
{
	echo "But error creating database: " .mysqli_error($con);
}
//Table create
/* mysqli_select_db($con,"eHealth");
$table="CREATE Table info
(
name varchar(20),
age int(5),
email varchar(35)
)";
if(mysqli_query($con,$table))
{
	echo "Table is created.";
}
else
{
	echo "Error creating table. " .mysqli_query($con);
} */
mysqli_close($con);
?>