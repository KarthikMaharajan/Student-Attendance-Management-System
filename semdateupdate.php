<?php
session_start();
if(!isset($_SESSION['admin'])) die("Fatal Error..1");

include 'phpdb.php';
mysql_select_db("authen") or die("Fatal Error..11");

$sem=$_REQUEST['sem'];
$fdate=$_REQUEST['fdate'];
$tdate=$_REQUEST['tdate'];

$insdate=strtotime($fdate);
$infdate=date('Y-m-d',$insdate);

$insdate=strtotime($tdate);
$intdate=date('Y-m-d',$insdate);


$cpasswd=mysql_query("update semdates set `from`='$infdate' ,`to`='$intdate' where sem=$sem") or  die("Fatal Error233..");

echo "<h3>Semester ".$sem." dates Updated Successfully..";
?>

