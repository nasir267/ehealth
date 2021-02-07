<p align='center'>

<?php
$user=$_POST['userName'];
$pass=$_POST['passWord'];
$con=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
$db=mysqli_select_db($con,"eHealth")or die(mysqli_error());
$str="insert into users (username,password) values('$user','$pass')";
if(!$user==0 and !$pass==0){
$res=mysqli_query($con,$str)or die(mysqli_error($con));
//if(!$res==0){
echo'<br><br><b>Thank you for registeration !! <br>';
}
else
	echo "<h1 align='center'>Please give valid input</h1><br><br><br>";

?>
</p>
<html>
<br>
<a href="index.html"><b align='center'><h3>Click here to return to the main page</h3></b></a>
</html>

