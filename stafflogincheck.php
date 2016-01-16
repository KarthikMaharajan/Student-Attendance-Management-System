<?php
session_start();
$usr1=$_REQUEST['usrname'];
$pwd1=$_REQUEST['pwd'];
include 'phpdb.php';
mysql_select_db('authen') or die(header("location:adminindex.php?err=-1"));
$cpass=md5($pwd1);
$r1=mysql_query("SELECT * FROM staff WHERE User='$usr1' AND Passwd='$cpass'");
if(mysql_num_rows($r1)==1)
{
session_start();
$_SESSION['staff']=$_REQUEST['usrname'];
header("location:staffhome.php");
}
else
{
header("location:staffindex.php?err=1");
}
?>
