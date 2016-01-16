<html>
<body OnKeyPress="return disableEnterKey(event)">
<link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
<?php
session_start();
if(!((isset($_SESSION['staff'])) || (isset($_SESSION['admin'])))) header("location:index.php");
include 'phpdb.php';
mysql_select_db("authen") or die(header("location:attenentry.php?err=-1"));
$sem=$_REQUEST['sem'];
$somedate=$_REQUEST['date1'];
$insdate=strtotime($somedate);
$select=date('Y-m-d',$insdate);
$selecteddate=strtotime($select);
$find=mysql_query("select * from semdates where sem=$sem");
$dayarray=mysql_fetch_array($find);
$start=$dayarray['from'];
$end=$dayarray['to'];
$start1=strtotime($start);
$to1=strtotime($end);
$today=date("Y-m-d");
$today1=strtotime($today);

if(!($selecteddate>=$start1 && $selecteddate<=$to1 && $selecteddate<=$today1))
{
die(header("location:attenentry.php?err=1"));
}

$_SESSION['atten_date']=$select;
//$_SESSION['atten_batch']=$_REQUEST['batch'];
$_SESSION['atten_sem']=$_REQUEST['sem'];
$_SESSION['atten_sec']=$_REQUEST['sec'];
//$_SESSION['atten_dept']=$_REQUEST['dept'];

$h[1]=$_REQUEST['hr1'];
$h[2]=$_REQUEST['hr2'];
$h[3]=$_REQUEST['hr3'];
$h[4]=$_REQUEST['hr4'];
$h[5]=$_REQUEST['hr5'];
$h[6]=$_REQUEST['hr6'];
$h[7]=$_REQUEST['hr7'];

for($i=1;$i<=7;$i++)
{
if(isset($h[$i])) $_SESSION['h'.$i]=$i;
}
?>
<?php

if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
?>

        
        <style type="text/css">
    #content-box1
            {
                background-color: white;
                height: 200px;

}
#adddatedis
{
    
               margin: auto auto auto auto;
               background-color: #b1eeff;
               padding: 50px 50px ;
               width: 400px;
}
#addblack
{
                background-color: black;
                margin: 30px auto auto auto;
                height: 30px;
                width: 480px;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: center;
    color:white;
    font-family: "Times New Roman", Times, serif;

    font-weight: bold;
	font-size:20px
}

#stat
{
    background-color: #B1EEFF;
    margin: 40px auto 40px auto;
    width: 395px;
    padding: 0px 6px;

}

        </style>
<script language="JavaScript">

function disableEnterKey(e)
{
     var key;     
     if(window.event)
          key = window.event.keyCode; //IE
     else
          key = e.which; //firefox     

     return (key != 13);
}

</script>

            
        <script type="text/javascript">

	var ischeck=0;
	
	function setradio()
	{
	ischeck=1;
	}
	function validate()
	{
	//document.commit.submit.disabled=true;
	//var ischeck=0;
	
	//alert(attvalue);
	
	if(document.getElementById('rollno').value=="")
	{
	alert("Enter a Roll Number");
	return false;
	}
	else if(ischeck!=1)
	{
	alert("Select Attendance to Update");
	return false;
	}
	else
	{
	var attvalue=document.commit.attendance;
	for(var i=0;i<3;i++)
	if(attvalue[i].checked==true)var radval=attvalue[i].value;
	$("#stat").load("newupdate.php",{roll:$("#rollno").val(),att:radval});
	}
	//else $("#stat").load("newupdate.php",{roll:$("#rollno").val()});
	}
        </script>

</script>


<?php
//echo '<div id="content-box1">';
echo"<div id='addblack'> ATTENDANCE UPDATION </div>";
echo"<div id='adddatedis'><table>"; 
echo '<form name="commit">';
       echo "<tr><td>Enter the roll no</td><td>:<input type='text' name='rollno' id='rollno' onKeyPress=”return disableEnterKey(event)”></td></tr>
	<tr><td height=\"50\"><input type=\"radio\" name=\"attendance\" id=\"attendance\" value=\"p\" onclick=\"javascript:setradio()\">  Present</td><td height=\"50\"><input type=\"radio\" name=\"attendance\" id=\"attendance\" value=\"a\" onclick=\"javascript:setradio()\">  Absent</td><td height=\"50\"><input type=\"radio\" name=\"attendance\" id=\"attendance\" value=\"o\" onclick=\"javascript:setradio()\">  OnDuty</td></tr>
<tr><td height=\"60\" colspan=\"2\" align=\"center\"><input type='button' value='UPDATE' id='submit' onclick=\"javascript:validate()\"></td></tr>";
        echo "</table></div>";
        echo "</form>";

?>

<div id="stat"></div>
</body>
</html>
