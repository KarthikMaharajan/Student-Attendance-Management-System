<html>
<body onKeyPress="return disableEnterKey(event)">
<link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-ui.min.js"></script>

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
<?php
session_start();
if(!(isset($_SESSION['admin']))) header("location:index.php");
?>
<?php

if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
?>
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
function validate()
{
if(document.getElementById('roll').value=="")
{
alert("Enter the Roll no");
return false;
}

else if(document.getElementById('name').value=="")
{
alert("Enter Name");
return false;
}
else $("#stat").load("detailupdate.php",{roll:$("#roll").val(),nam:$("#name").val()});
return true;

}
</script>
<?php
$roll=$_REQUEST['rollno'];
include 'getdetails.php';
include 'phpdb.php';
$seldb="attendance-".$dept;
mysql_select_db($seldb) or die("<h3>A Fatal Unrecoverable Error Occured...Please Contact your Admin Immediately</h3>");
$tabme='`'.$bat.'1`';
$getquery=mysql_query("select rollno,name from $tabme where rollno=$roll") or die("<h3>A Fatal Unrecoverable Error Occured during getting details...Please Contact your Admin Immediately</h3>");
$getarr=mysql_fetch_array($getquery);
$rollno=$getarr['rollno'];
$name=$getarr['name'];
echo"<div id='addblack'> STUDENT UPDATION </div>";
echo"<div id='adddatedis'>";
echo "</center><table><tr><td>Roll No.</td><td><input type='text' name='roll' id='roll' value='$rollno'></td></tr>
<tr><td>Name </td><td><input type='text' name='name' id='name' value='$name'></td></tr>
<tr><td colspan='2' align='center'><input type='button' value='UPDATE' onclick='return validate()'></td></tr>";
        echo "</table></center></div>";
?>
<script type="text/javascript">
document.getElementById('roll').disabled=true;
</script>
<div id="stat"></div>
</body>
</html>
