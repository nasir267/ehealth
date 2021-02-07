<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$con = mysqli_connect($dbhost, $dbuser, $dbpass);
$id=$_POST['id'];
$medicine=$_POST['medicine'];
$diagnosis=$_POST['diagnosis'];
$instructions=$_POST['instructions'];
$doc_name=$_POST['doc_name'];

mysqli_select_db($con,'eHealth');
$str="insert into prescription (Paitent_ID,Doctor_Name,Medicine,Diagnosis,Instruction) values('$id','$doc_name','$medicine','$diagnosis','$instructions')";

		
if(!$id==0 and !$doc_name==0 and !$medicine==0 and !$diagnosis==0 and !$instructions==0){
$res=@mysqli_query($con,$str)or die(mysqli_error($con));
}
		
		

if(!$con )
{
  die('Could not connect: ' . mysqli_error());
}
$id = $_POST['id']; 
$sql="SELECT * FROM patients WHERE id='$id'";


$retval = mysqli_query($con,$sql );

if(!$retval)
{
  die('Could not get data: ' . mysqli_error($con));
}
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
	echo "<big><b>PRESCRIPTION : </b></big><br><br><br>";
	echo "DOCTOR NAME : $doc_name<br>"; 
	echo "<b>Patient Details : </b><br>";
    echo "PATIENT ID : {$row['ID']}  <br><br> ".
         "NAME 		 : {$row['Name']} <br><br> ".
         "AGE		 : {$row['Age']} <br><br> ".
         "GENDER	 : {$row['Gender']} <br><br> ".
         "MOBILE	 : {$row['Mobile']} <br><br> ".
        
         "--------------------------------<br>";
} 

if(!$medicine==0 and !$diagnosis==0 and !$instructions==0){
echo "MEDICINE : $medicine <br><br>".
	 "DIAGNOSIS : $diagnosis <br><br>".	
	 "ADDITIONAL INSTRUCTIONS : $instructions <br><br>".
	     "--------------------------------<br>";
}
else{
	echo "Please Enter all valid Information<br><br>";
	header("Refresh:2; url=prescription.html");
}
mysqli_close($con);
?>
<html>
<input type="button" onclick="window.print();" value="Print Prescription"/><br><br>

<a href="home.html"><b>HOME</b></a><br>

<br>
<a href="index.html"><b>Click here to return to the main page</b></a>
</html>

