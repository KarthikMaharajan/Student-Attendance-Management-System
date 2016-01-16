<?php
include 'phpdb.php';
echo "<center>";
$roll=$_REQUEST['roll'];
$rolllen=strlen($roll);
include 'getdetails.php';
$seldb="attendance-".$dept;
mysql_select_db($seldb) or die("Oops... A Fatal Error occured. Please contact your adminstrator immediately.");
$tab=$bat.'1';
$seltab='`'.$tab.'`';
if((substr($roll,0,1))==0)
{
$roll=substr($roll,1,$rolllen-1);
$nm=mysql_query("SELECT rollno,name FROM $seltab WHERE rollno like '%$roll%'");
}
else
$nm=mysql_query("SELECT rollno,name FROM $seltab WHERE rollno like '%$roll%'");

if($nm)
{
if(($num=mysql_num_rows($nm))==0) echo "<p style='color:#FF0000;font-size:12px;font-weight:bold'>Roll No. not found<br><br></p>";
else
{
echo "<table cellspacing=\"20\"><tr><td>RollNo</td><td>Name</td></tr>";
while($nma=mysql_fetch_array($nm))
{
$rollno=$nma['rollno'];
$name=$nma['name'];
echo "<tr><td>$rollno</td><td>$name</td></tr>";
}
echo "</table>";
}
}
?>
