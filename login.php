<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=@mysqli_connect("localhost","root","") or die(mysqli_connect_error());
$db=@mysqli_select_db($con,"eHealth")or die(mysqli_error());

$sql="SELECT * FROM users WHERE username='$username' and password='$password'";

$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);

if($username==0 and $password==0)
{
	echo "Please enter valid Username and Password";
	header("refresh:2; url=index.html");
}

elseif($count==1){

$_SESSION["username"]=$username;
$_SESSION["password"]=$password;

//session_register("password");


ob_start();
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
header("refresh:2; url=index.html");
}
ob_end_flush();

?>
