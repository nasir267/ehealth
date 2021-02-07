<p align='center'>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$con = mysqli_connect($dbhost, $dbuser, $dbpass);
if(!$con)
{
  die('Could not connect: ' . mysqli_error());
}
$sql = 'SELECT * from patients';

mysqli_select_db($con,'eHealth');
$retval = mysqli_query( $con,$sql);
if(!$retval )
{
  die('Could not get data: ' . mysqli_error($con));
}
while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC))
	
{
    echo "PATIENT ID : {$row["ID"]} <br>".
         "NAME 		 : {$row["Name"]}<br>".
         "AGE		 : {$row['Age']} <br> ".
         "GENDER	 : {$row['Gender']} <br> ".
         "OCCUPATION : {$row['Occupation']} <br> ".
         "MOBILE	 : {$row['Mobile']} <br> ".
         "ADDRESS	 : {$row['Address']} <br> ".
         "----------------Thank you----------------<br><br>";
} 
mysqli_close($con);
?>
</p>
