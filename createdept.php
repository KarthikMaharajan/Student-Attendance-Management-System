<?php
session_start();
if(!(isset($_SESSION['admin']))) header("location:index.php");
if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
$newdept=$_REQUEST['dept'];
if(!$newdept) header("location:newdept.php?err=1");
include 'phpdb.php';
mysql_select_db("authen") or die(header("location:newdept.php?err=-11"));
if(!mysql_query("insert into depts(depts) values('$newdept')"))
{
if(mysql_errno()==1062) header("location:newdept.php?err=2");
else header("location:newdept.php?err=-12");
}
else
{
$newdb="attendance-".$newdept;
$crtdb='`'.$newdb.'`';
include 'phpdb.php';
$creatquery=mysql_query("create database $crtdb") or die(header("location:newdept.php?err=-13"));


$batquery=mysql_query("select joiningyear from batch") or die(header("location:newbatch.php?err=-14"));
$j=0;
while($nowbat=mysql_fetch_array($batquery))
{
$insbatarr[$j++]=$nowbat['joiningyear'];
}
mysql_close($conn);
include 'phpdb.php';
mysql_select_db($newdb) or die(header("location:newdept.php?err=-15"));
for($k=0;$k<$j;$k++)
for($i=1;$i<=7;$i++)
{
$tabnow='`'.$insbatarr[$k].$i.'`';
$creatquery=mysql_query("create table $tabnow (rollno int(5) primary key,name varchar(40) not null,section varchar(1) not null)") or die(header("location:newbatch.php?err=-1"));
}

}
$_SESSION['new_dept']=$newdept;
header("location:addstud.php");
?>
