
<?php
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$occupation=$_POST['occupation'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$con=@mysqli_connect("localhost","root","") or die(mysqli_connect_error());
$db=@mysqli_select_db($con,"eHealth")or die(mysqli_error());
$str="insert into patients (ID,Name,Age,Gender,Occupation,Mobile,Address) values('$id','$name','$age','$gender','$occupation','$mobile','$address')";
$res=@mysqli_query($con,$str)or die(mysqli_error($con));
if($res>=0)

 
{
echo'<br><br><b>Patient added !!<br>';
}


?>
<html>
<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</html>
