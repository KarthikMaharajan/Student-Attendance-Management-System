<?php 
$conn=mysql_connect('localhost','root','mysql');
mysql_select_db("attendance") or die('error in select db');

	    $rol=$_REQUEST['roll'];
            $sem=$_REQUEST['sem'];
		$hour=$_REQUEST['hour'];
            $batch=$_REQUEST['bat'];
		$sec=$_REQUEST['sec'];
	    $viewatt='`' . $batch . $sem . '`';
		$date=$_REQUEST['date'];
$somedate=strtotime($date);
$insdate=date('Y-m-d',$somedate);
$finddate='`' . $insdate . '`';
$find=mysql_query("select $finddate from $viewatt where rollno=$rol");
$dayarray=mysql_fetch_array($find);
$daycalc=$dayarray[$insdate];
$len=strlen($daycalc);

$batt=0;
for($c=0;$c<7;$c++)
{
if((substr($daycalc,$c,1))=='a')
$batt++;
}
$hnw1=substr($daycalc,0,$hour-1);
$hnw2=substr($daycalc,$hour,7);
$hnw=$hnw1 . 'a' . $hnw2;
if(!$insert=mysql_query("update $viewatt set $finddate='$hnw' where rollno=$rol")) die("Updation Failed");

$afatt=0;
for($c=0;$c<7;$c++)
{
if((substr($hnw,$c,1))=='a')
$afatt++;
}

if($batt>=3)
{
echo $rol . "Updated<br>for hour" . $hour;
}
else
{
if($afatt<3)
{
$fine=$afatt*10;
$fineinsert=mysql_query("update $finetable set fine=$fine where rollno=$rol"));
if(!$fineinsert)die("Updation Failed");
else echo $rol . "Updated<br>for hour" . $hour;
}
else
$fineinsert=mysql_query("update $finetable set fine=30 where rollno=$rol"));
if(!$fineinsert)die("Updation Failed");
else echo $rol . "Updated<br>for hour" . $hour;
}
?>
