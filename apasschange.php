<?php

session_start();
if(!isset($_SESSION['admin'])) die("Fatal Error...");
$user=$_SESSION['admin'];

$curpass=$_REQUEST['curpass'];
$newpass=$_REQUEST['newpass'];
$confpass=$_REQUEST['confpass'];


include 'phpdb.php';
mysql_select_db("authen") or die("Fatal Error..");

$cpasswd=mysql_query("select * from admin where User='$user'") or  die("Fatal Error..");

$passarr=mysql_fetch_array($cpasswd);
$adminpass=$passarr['Passwd'];

$mdcurpass=md5($curpass);
$mdnewpass=md5($newpass);
$mdconf=md5($confpass);

if($mdcurpass!=$adminpass)die("Invalid Password..");
if($mdnewpass!=$mdconf)die("Password didnot match");

$chan=mysql_query("update admin set Passwd='$mdnewpass' where User='$user'") or  die("Fatal Error..121");

echo "<h3>Password for User \"".$user."\" updated successfully..</h3>";
?>

