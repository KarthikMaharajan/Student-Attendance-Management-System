<?php
session_start();
if(!((isset($_SESSION['staff'])) || (isset($_SESSION['admin'])))) header("location:index.php");
include 'phpdb.php';
mysql_select_db("authen") or die(header("location:attenentry.php?err=-1"));
$sem=$_REQUEST['sem'];
$somedate=$_REQUEST['date1'];
$insdate=strtotime($somedate);
$select=date('Y-m-d',$insdate);
$selecteddate=strtotime($select);
$find=mysql_query("select * from semdates where sem=$sem");
$dayarray=mysql_fetch_array($find);
$start=$dayarray['from'];
$end=$dayarray['to'];
$start1=strtotime($start);
$to1=strtotime($end);
$today=date("Y-m-d");
$today1=strtotime($today);

if(!($selecteddate>=$start1 && $selecteddate<=$to1 && $selecteddate<=$today1))
{
die(header("location:attenentry.php?err=1"));
}

$_SESSION['atten_date']=$select;
//$_SESSION['atten_batch']=$_REQUEST['batch'];
$_SESSION['atten_sem']=$_REQUEST['sem'];
$_SESSION['atten_sec']=$_REQUEST['sec'];
//$_SESSION['atten_dept']=$_REQUEST['dept'];

$h[1]=$_REQUEST['hr1'];
$h[2]=$_REQUEST['hr2'];
$h[3]=$_REQUEST['hr3'];
$h[4]=$_REQUEST['hr4'];
$h[5]=$_REQUEST['hr5'];
$h[6]=$_REQUEST['hr6'];
$h[7]=$_REQUEST['hr7'];

for($i=1;$i<=7;$i++)
{
if(isset($h[$i])) $_SESSION['h'.$i]=$i;
}
header("location:adddate.php")
?>
