<?php
session_start();
if(!((isset($_SESSION['staff'])) || (isset($_SESSION['admin'])))) header("location:index.php");
include 'phpdb.php';

$roll=$_REQUEST['roll'];
$date=$_SESSION['atten_date'];
$sec=$_SESSION['atten_sec'];
$adddate='`'.$date.'`';
include 'getdetails.php';


$attbat='`'.$bat.$_SESSION['atten_sem'].'`';

$attdb='attendance-'.$dept;
mysql_select_db($attdb) or die("<h3>A Fatal Unrecoverable error occured.... Please Contact your adminstrator immediately..</h3>");


$detailqr=mysql_query("select rollno,name from $attbat where rollno=$roll and section='$sec'") or die("<h3>A Fatal Unrecoverable error occured.... Please Contact your adminstrator immediately..</h3>");
if(($detailnum=mysql_num_rows($detailqr))==0)echo "<p style='color:#FF0000;font-size:12px;font-weight:bold'>Roll No. not found<br><br></p>";
else
{
$detailstud=mysql_fetch_array($detailqr);
echo "<p style='font-size:12px;font-weight:bold'>";
$rollno=$detailstud['rollno'];
$name=$detailstud['name'];

echo "Roll No : ".$rollno."<br>Name : ".$name."<br></p>";

include 'putdefatten.php';

$studatt=mysql_query("select $adddate from $attbat where rollno=$roll and section='$sec'") or die("<h3>A Fatal Unrecoverable error occured.... Please Contact your adminstrator immediately..</h3>");
$studarr=mysql_fetch_array($studatt);
$curratt=$studarr[$date];
$oldatten=$curratt;

for($i=1;$i<=7;$i++)
{
if(isset($_SESSION['h'.$i])) 
{
$absbfore=substr($curratt,0,$i-1);
$absafter=substr($curratt,$i,7);
$curratt=$absbfore.'a'.$absafter;
$markdef=mysql_query("update $attbat set $adddate='$curratt' where rollno=$roll") or die("<h3>A Fatal Unrecoverable error occured during markall updation.... Please Contact your adminstrator immediately..</h3>");
echo "Absent for the <b>Hour ".$_SESSION['h'.$i]."</b><br>";
}
}

$newatten=$curratt;
include 'addregfine.php';
echo "<br>";
}
?>
