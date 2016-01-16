<?php
session_start(); 
if(!isset($_SESSION['admin'])) header("location:index.php");
$uname=$_REQUEST['uname'];
$passwd=$_REQUEST['passwd'];
$confpasswd=$_REQUEST['confpasswd'];

if($passwd!=$confpasswd) echo"<h3>Passwords didnot match</h3>";
else
{
$inspass=md5($passwd);
include 'phpdb.php';
mysql_select_db("authen") or die("<h3>A Fatal Unrecoverable error occured.... Please Contact your Admin Immediately...</h3>");
if(!mysql_query("insert into staff(User,Passwd) values('$uname','$inspass')"))
{
if(mysql_errno()==1062) echo"<h3>User name already exists</h3>";
}
else
{
echo "<h3>User : ".$uname." successfully created";
}
}
?>

