<?php
session_start();
if(!(isset($_SESSION['admin']))) header("location:index.php");
if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
$newbat=$_REQUEST['bat'];
if(!$newbat) header("location:newbatch.php?err=1");
include 'phpdb.php';
mysql_select_db("authen") or die(header("location:newbatch.php?err=-1"));
if(!mysql_query("insert into batch(joiningyear) values($newbat)"))
{
if(mysql_errno()==1062) header("location:newbatch.php?err=2");
else header("location:newbatch.php?err=-1");
}
else
{
$deptquery=mysql_query("select depts from depts") or die(header("location:newbatch.php?err=-1"));
$j=0;
while($nowdept=mysql_fetch_array($deptquery))
{
$insdeptarr[$j++]=$nowdept['depts'];
}
mysql_close($conn);
include 'phpdb.php';
for($k=0;$k<$j;$k++)
{
$seldb="attendance-".$insdeptarr[$k];
mysql_select_db($seldb) or die(header("location:newbatch.php?err=-1"));
for($i=1;$i<=7;$i++)
{
$tabnow='`'.$newbat.$i.'`';
$creatquery=mysql_query("create table $tabnow (rollno int(5) primary key,name varchar(40) not null,section varchar(1) not null)") or die(header("location:newbatch.php?err=-1"));
}
}
$_SESSION['batch_create']=$newbat;
$_SESSION['new_batch']=$newbat;
header("location:addstud.php");
}
?>
