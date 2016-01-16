<?php
session_start();
$usr=$_REQUEST['usrname'];
$pwd=$_REQUEST['pwd'];
?>
<?php include'phpdb.php' ?>
<?php
mysql_select_db("authen") or die(header("location:adminindex.php?err=-1"));
$cpass=md5($pwd);
$r=mysql_query("SELECT * FROM admin WHERE User='$usr' AND Passwd='$cpass'");
if(mysql_num_rows($r)==1)
{
$_SESSION['admin']=$_REQUEST['usrname'];
header("location:adminhome.php");
}
else
{
header("location:adminindex.php?err=1");
}
?>
