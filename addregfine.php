<?php
include 'phpdb.php';
$finedb="fine-".$dept;

$bforeabs=0;
$afterabs=0;

for($c=0;$c<7;$c++)
{
if((substr($oldatten,$c,1))=='a')
$bforeabs++;
}

for($c=0;$c<7;$c++)
{
if((substr($newatten,$c,1))=='a')
$afterabs++;
}

if($bforeabs>=3)$bforefine=30;
else $bforefine=$bforeabs*10;

if($afterabs>=3)$afterfine=30;
else $afterfine=$afterabs*10;

mysql_select_db($finedb) or die("<p style='color:#FF0000;font-size:12px;font-weight:bold'>Fine tables not found....</p>");
$finetab='`'.$bat.'`';
$attfinedel=mysql_query("update $finetab set fine=fine-$bforefine where rollno=$roll") or die("<h3>A Fatal Unrecoverable error occured during fine updation step1.... Please Contact your adminstrator immediately..</h3>");
$attfinedel=mysql_query("update $finetab set fine=fine+$afterfine where rollno=$roll") or die("<h3>A Fatal Unrecoverable error occured during fine updation step1.... Please Contact your adminstrator immediately..</h3>");
echo "<p style='font-size:12px;font-weight:bold'>Fines Updated Successfully...</p>";
?>
