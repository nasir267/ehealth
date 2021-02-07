<?php
session_start();
//if(!session_is_registered(myusername)){

if(isset($_SESSION)){
header("location:home.html");
}
?>

<html>
<body>
Login Successful
</body>
</html>
