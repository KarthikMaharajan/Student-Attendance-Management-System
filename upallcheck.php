<?php
include 'phpdb.php';
$sem=1;
$finehrs=0;
$fineamt=0;
$totfine=0;
$finetab='`2009`';
$viewtab='`20091`';
$seldb='attendance-it';

mysql_select_db($seldb);
$clmns=mysql_query("show columns from $viewtab");
if(!$clmns) echo '<h3>Oops.. No record found for the semester/batch in '.$dept[$k].'<br>If you think this is an error please contact the adminstrator immediately.</h3>';
$clmnsnum=mysql_num_rows($clmns);

$find=mysql_query("select rollno from $viewtab");
while($findrow=mysql_fetch_array($find))
{
$nowroll=$findrow['rollno'];
echo "<br>".$nowroll;
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
	echo "<br>Part fine ".$fineamt;
	$totfine=$totfine+$fineamt;
	$finehrs=$fineamt=0;
	}
echo "<br>Total Fine ".$totfine;
mysql_select_db('fine-it');
$fineupdt=mysql_query("update $finetab set fine=$totfine where rollno=$nowroll") or die("AAAA");
$totfine=0;
mysql_select_db($seldb);
}
?>
