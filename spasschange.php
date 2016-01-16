<?php

session_start();
if(!((isset($_SESSION['staff']))||(isset($_SESSION['admin'])))) header("location:index.php");
$user=$_SESSION['staff'];

$curpass=$_REQUEST['curpass'];
$newpass=$_REQUEST['newpass'];
$confpass=$_REQUEST['confpass'];


include 'phpdb.php';
mysql_select_db("authen") or die("Fatal Error..");

$cpasswd=mysql_query("select * from staff where User='$user'") or  die("Fatal Error..");

$passarr=mysql_fetch_array($cpasswd);
$adminpass=$passarr['Passwd'];

$mdcurpass=md5($curpass);
$mdnewpass=md5($newpass);
$mdconf=md5($confpass);

if($mdcurpass!=$adminpass)die("Invalid Password..");
if($mdnewpass!=$mdconf)die("Password didnot match");

$chan=mysql_query("update staff set Passwd='$mdnewpass' where User='$user'") or  die("Fatal Error..121");

echo "<h3>Password for User \"".$user."\" updated successfully..</h3>";
?>

