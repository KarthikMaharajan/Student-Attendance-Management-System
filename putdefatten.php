<?php

$tablecheck=mysql_query("show columns from $attbat like '$date'") or die("<h3>A Fatal Unrecoverable error occured during checking.... Please Contact your adminstrator immediately..</h3>");
if(!mysql_num_rows($tablecheck))
{
$alter=mysql_query("alter table $attbat add column $adddate varchar(7)") or die("<h3>A Fatal Unrecoverable error occured during alteration.... Please Contact your adminstrator immediately..</h3>");
$defval=mysql_query("update $attbat set $adddate='nnnnnnn'") or die("<h3>A Fatal Unrecoverable error occured during default updation.... Please Contact your adminstrator immediately..</h3>");
}

if(!isset($_SESSION['def_atten']))
{
$selall=mysql_query("select rollno from $attbat where section='$sec'") or die("<h3>A Fatal Unrecoverable error occured during cursor generate.... Please Contact your adminstrator immediately..</h3>");
while($selallarr=mysql_fetch_array($selall))
{
$curroll=$selallarr['rollno'];
$existatt=mysql_query("select $adddate from $attbat where rollno=$curroll") or die("<h3>A Fatal Unrecoverable error occured during cursor open.... Please Contact your adminstrator immediately..</h3>");
$existarr=mysql_fetch_array($existatt);

$setallpre=$existarr[$date];

for($i=1;$i<=7;$i++)
{
if(isset($_SESSION['h'.$i]))
{
$bfore=substr($setallpre,0,$i-1);
$after=substr($setallpre,$i,7);
$setallpre=$bfore.'p'.$after;
}
}
$markdef=mysql_query("update $attbat set $adddate='$setallpre' where rollno=$curroll") or die("<h3>A Fatal Unrecoverable error occured during markall updation.... Please Contact your adminstrator immediately..</h3>");
}
$_SESSION['def_atten']=true;
}


?>
