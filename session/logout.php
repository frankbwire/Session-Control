<!--(C) author - frankline bwire-->
<?php
session_start(); //start or check if session exists
session_destroy(); //destroy session
header("location:index.php"); //location of next page
exit;
?>