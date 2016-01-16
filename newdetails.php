<?php
session_start();
if(!(isset($_SESSION['admin']))) header("location:index.php");
$roll=$_REQUEST['roll'];
$name=$_REQUEST['nam'];
$dept=$_SESSION['add_dept'];
$bat=$_SESSION['add_bat'];
$sec=$_SESSION['add_sec'];
$seldb="attendance-".$dept;
echo "D".$dept;
include 'phpdb.php';
mysql_select_db($seldb) or die("<h3>A Fatal Unrecoverable Error Occured...Please Contact your Admin Immediately</h3>");
for($i=1;$i<=8;$i++)
{
$tabme='`'.$bat.$i.'`';
$getquery=mysql_query("insert into $tabme (rollno,name,section) values ($roll,'$name','$sec')") or die("<h3>Abnormal termination while updation. This may result in inconsistency...Please Contact the Admin Immediately and correct the issue.Subsequent operations aborted.</h3>");
}

$fin='`'.$bat.'`';
$findb="fine-".$dept;
mysql_select_db($findb) or die("<h3>A Fatal Unrecoverable Error Occured...Please Contact your Admin Immediately</h3>");
$getquery=mysql_query("insert into $fin (rollno) values ($roll)") or die("<h3>Abnormal termination while updation in fines. This may result in inconsistency...Please Contact the Admin Immediately and correct the issue.Subsequent operations aborted.</h3>");

echo "<h3>Roll No. : ".$roll."<br>Name : ".$name;
echo "<br>Updated Successfully...";
?>
