<!--(C) author - frankline bwire-->
<?php
session_start(); //start session
//connect to MYSqli database
$connect=mysqli_connect("localhost","root","") or die("could not connect " . mysqli_error($connect));
$db=mysqli_select_db($connect,"session") or die("ERROR 420!!!" . mysqli_error($connect));
?>