<?php
session_start();
if(!(isset($_SESSION['admin']))) header("location:index.php");
$roll=$_REQUEST['roll'];
$fine=$_REQUEST['fine'];
include 'getdetails.php';
$attdb="attendance-".$dept;
$seldb="fine-".$dept;
$tab='`'.$bat.'`';
$dettab='`'.$bat.'1`';
include 'phpdb.php';
mysql_select_db($attdb) or die("<h3>A Fatal Unrecoverable Error Occured...Please Contact your Admin Immediately</h3>");
$getquery=mysql_query("select rollno,name from $dettab where rollno=$roll") or die("<h3>A Fatal Unrecoverable Error Occured during getting details...Please Contact your Admin Immediately</h3>");
if(mysql_num_rows($getquery)==0) die("<p style='color:#FF0000;font-size:12px;font-weight:bold'>Roll Number Not Found...</p>");
mysql_select_db($seldb) or die("<h3>A Fatal Unrecoverable Error Occured...Please Contact your Admin Immediately</h3>");
$query=mysql_query("update $tab set specialfine=specialfine+$fine where rollno=$roll") or die("<h3>A Fatal Unrecoverable Error Occured during updation...Please Contact your Admin Immediately</h3>");
$getarr=mysql_fetch_array($getquery);
$rollno=$getarr['rollno'];
$name=$getarr['name'];
echo "<h3>Roll No. : ".$rollno."<br>Name : ".$name."</h3>";
echo "<br>Special Fine <b>Rs.".$fine."</b> successfully updated<br>";
?>

