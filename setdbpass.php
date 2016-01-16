<?php

session_start();
if(!isset($_SESSION['admin'])) die("Fatal Error...");
$user=$_SESSION['admin'];

$admin=$_REQUEST['admin'];
$uname=$_REQUEST['uname'];
$dbpass=$_REQUEST['dbpass'];
$confdbpass=$_REQUEST['confdbpass'];

include 'phpdb.php';
mysql_select_db("authen") or die("Fatal Error..");

$cpasswd=mysql_query("select * from admin where User='$user'") or  die("Fatal Error..");

$passarr=mysql_fetch_array($cpasswd);
$curpass=$passarr['Passwd'];

$mdadmin=md5($admin);
$mduname=md5($uname);
$mddbpass=md5($dbpass);
$mdconf=md5($confdbpass);

if($mdadmin!=$curpass)die("Invalid Password..");
if($mddbpass!=$mdconf)die("Password didnot match");

$file=fopen("phpdb.php","w+") or exit("Failed to save. Please try again later.");
$conn='$conn';

$uname='\''.$uname.'\',';
$passwd='\''.$dbpass.'\'';
$param="<?php\n$conn=mysql_connect('localhost',$uname$passwd);\n?>";
fwrite($file, $param);
fclose($file);
echo $param;
echo "<h3>Successfully Updated...</h3>";
?>
