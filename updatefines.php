<?php
session_start();
if(!(isset($_SESSION['admin']))) header("location:index.php");
include 'phpdb.php';
mysql_select_db('authen') or die("<h3>A Fatal Unrecoverable error occured.... Please Contact your adminstrator immediately..</h3>");
$sem=$_REQUEST['sem'];
$finehrs=0;
$fineamt=0;
$totfine=0;

$query=mysql_query("select joiningyear from batch") or die("<h3>A Fatal Unrecoverable error occured while reading batches.... Please Contact your adminstrator immediately..</h3>");
$i=0;
while($row=mysql_fetch_array($query))
{
$year[$i++]=$row['joiningyear'];
}
//print_r($year);
$query=mysql_query("select depts from depts") or die("<h3>A Fatal Unrecoverable error occured while reading departments.... Please Contact your adminstrator immediately..</h3>");
$j=0;
while($row=mysql_fetch_array($query))
{
$dept[$j++]=$row['depts'];
}
for($l=0;$l<$i;$l++)
{
$finetab='`'.$year[$l].'`';
$viewtab='`'.$year[$l].$sem.'`';
//echo "<br>".$finetab;
for($k=0;$k<$j;$k++)
{
$seldb='attendance-'.$dept[$k];
$finedb='fine-'.$dept[$k];
//echo "<br>".$seldb;
mysql_select_db($seldb) or die("<h3>Updation failed for ".$dept[$k]." department.Subsequent operations aborted.</h3>");

$clmns=mysql_query("show columns from $viewtab");
if(!$clmns) echo '<h3>Oops.. No record found for the semester/batch in '.$dept[$k].'<br>If you think this is an error please contact the adminstrator immediately.</h3>';
else
{
$clmnsnum=mysql_num_rows($clmns);
//echo "<h3> Columns ".$clmnsnum."</h3>";
echo "Started Updation for ".$dept[$k]."Dept.....      ";
$find=mysql_query("select rollno from $viewtab");
while($findrow=mysql_fetch_array($find))
{
$nowroll=$findrow['rollno'];
$getabs=mysql_query("select * from $viewtab where rollno=$nowroll");
$getarr=mysql_fetch_array($getabs);

	for($di=3;$di<$clmnsnum;$di++)
	{
	$showclmns=mysql_field_name($getabs,$di);
	$dayfine=$getarr[$showclmns];
	$len=strlen($dayfine);
		for($i=0;$i<$len;$i++)
		{
		$res=substr($dayfine,$i,1);
		if($res=='a')$finehrs++;
		}
	if($finehrs>=3)$fineamt=30;
	else $fineamt=$finehrs*10;
	$totfine=$totfine+$fineamt;
	$finehrs=$fineamt=0;
	}

	mysql_select_db($finedb);
	$fineupdt=mysql_query("update $finetab set fine=$totfine where rollno=$nowroll") or die("<h3>Abnormal termination while updation. This may result in inconsistency...Please Contact the Admin Immediately and correct the issue.Subsequent operations aborted.</h3>");
	$totfine=0;
	mysql_select_db($seldb);

}
}
echo $dept[$k]." Updation Complete";
}
}
?>
