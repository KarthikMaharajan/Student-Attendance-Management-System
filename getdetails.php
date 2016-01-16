<?php include'phpdb.php' ?>
<?php
//$roll=$_REQUEST['roll'];
$bt=substr($roll,0,2);
$dt=substr($roll,2,1);
$lt=substr($roll,3,1);
if($lt==9)$bt=$bt-1;

mysql_select_db("dept_details") or die("Oops... A Fatal Error occured. Please contact your adminstrator immediately.");

$bq=mysql_query("SELECT batch FROM batch WHERE year=$bt");
$ba=mysql_fetch_array($bq);
$bat=$ba['batch'];

$dq=mysql_query("SELECT dept FROM depts WHERE code=$dt");
$da=mysql_fetch_array($dq);
$dept=$da['dept'];
?>
