<?php
session_start();
if(!(isset($_SESSION['admin']))) header("location:index.php");
$roll1=$_REQUEST['roll'];
if(strlen($roll1)==5)$roll='0'.$roll1;
$name=$_REQUEST['nam'];
include 'getdetails.php';
$attdb="attendance-".$dept;
include 'phpdb.php';

mysql_select_db($attdb) or die("<h3>A Fatal Unrecoverable Error1 Occured...Please Contact your Admin Immediately</h3>");
for($i=1;$i<=8;$i++)
{
$tabme='`'.$bat.$i.'`';
$getquery=mysql_query("update $tabme set name='$name' where rollno=$roll") or die("<h3>Abnormal termination while updation. This may result in inconsistency...Please Contact the Admin Immediately and correct the issue.Subsequent operations aborted.</h3>");
}
/*$findb="fine-".$dept;
$fntab='`'.$bat.'`';
$getquery=mysql_query("update $fntab set rollno=$roll where rollno=$roll") or die("<h3>Abnormal termination while updation. This may result in inconsistency...Please Contact the Admin Immediately and correct the issue.Subsequent operations aborted.</h3>");*/

$resquery=mysql_query("select rollno,name from $tabme where rollno=$roll") or die("<h3>A Fatal Unrecoverable Error2 Occured...Please Contact your Admin Immediately</h3>");
$resarr=mysql_fetch_array($resquery);
$roll=$resarr['rollno'];
$name=$resarr['name'];
echo "<h3>Roll No. : ".$roll."<br>Name : ".$name;
echo "<br>Updated Successfully...";
?>

