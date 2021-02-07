<?php
session_start();
session_destroy();
//echo "Logout Successfully";
//header('Location:index.html');
header("refresh:1; url=index.html");

?>