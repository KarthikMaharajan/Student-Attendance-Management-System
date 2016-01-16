<?php
session_start();
if(!((isset($_SESSION['staff']))||(isset($_SESSION['admin'])))) header("location:index.php");

$roll=$_REQUEST['roll'];
$date=$_REQUEST['date'];
$sem=$_REQUEST['sem'];

include 'getdetails.php';
$attbat='`'.$bat.$sem.'`';
$attdb='attendance-'.$dept;
$insdate=strtotime($date);
$indate=date('Y-m-d',$insdate);
$getdate='`'.$indate.'`';
mysql_select_db($attdb) or die("<h3>A Fatal Unrecoverable error occured.... Please Contact your adminstrator immediately..</h3>");

$studattch=mysql_query("select * from $attbat where rollno=$roll") or die("<h3>A Fatal Unrecoverable error occured.... Please Contact your adminstrator immediately..</h3>");
if(!mysql_num_rows($studattch)) 
{
echo "<h3>Roll no. Not Found... ! ! !</h3>";
die();
}
$studarr=mysql_fetch_array($studattch);
$studroll=$studarr['rollno'];
$studname=$studarr['name'];

$tablecheck=mysql_query("show columns from $attbat like '$indate'") or die("<h3>A Fatal Unrecoverable error occured during checking.... Please Contact your adminstrator immediately..</h3>");
if(!mysql_num_rows($tablecheck)) 
{
echo "<h3>No Attendance found for the given date</h3>";
die();
}

$studatt=mysql_query("select $getdate from $attbat where rollno=$roll") or die("<h3>A Fatal Unrecoverable error occured.... Please Contact your adminstrator immediately..</h3>");
$studarr=mysql_fetch_array($studatt);
$curratt=$studarr[$indate];
$oldatten=$curratt;

if($curratt==null)
{
echo "<h3>No Attendance found for the given date</h3>";
die();
}

$len=strlen($curratt);

for($i=1;$i<=$len+1;$i++)
{
$hnw=substr($curratt,$i-1,1);
if ($hnw=='a')
{
$absbfore=substr($curratt,0,$i-1);
$absafter=substr($curratt,$i,6);

$curratt=$absbfore.'l'.$absafter;

}

}

$markdef=mysql_query("update $attbat set $getdate='$curratt' where rollno=$roll") or die("<h3>A Fatal Unrecoverable error occured during markall updation.... Please Contact your adminstrator immediately..</h3>");
echo "<h3>Roll No.  : ".$studroll."<br>Name : ".$studname;
echo "<br>Leave Entry for Date : ".$date." successful..";
$newatten=$curratt;
include 'addregfine.php';
echo "<br>";

?>
