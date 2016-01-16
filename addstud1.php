<html>
<body onKeyPress="return disableEnterKey(event)">
<link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
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

#err
{
color:#FF0000;
font-size:12px;
font-weight:bold;
}
</style>
<script type="text/javascript">
function validate()
{
if(document.addstud.dept.value=="select")
{
document.getElementById('err').style.display="block";
document.getElementById('err').innerHTML="<tr><td colspan='2' align='center'>Select Dept<br></td></tr>";
}
else if(document.addstud.bat.value=="select")
{
document.getElementById('err').style.display="block";
document.getElementById('err').innerHTML="<tr><td colspan='2' align='center'>Select Batch<br></td></tr>";
}
else if(document.addstud.sec.value=="")
{
document.getElementById('err').style.display="block";
document.getElementById('err').innerHTML="<tr><td colspan='2' align='center'>Enter section<br></td></tr>";
}
}
</script>
<?php
session_start();
if(!(isset($_SESSION['admin']))) header("location:index.php");
?>
<?php

if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';




echo"<div id='addblack'> ADD NEW STUDENT </div>";
echo"<div id='adddatedis'><form name='addstud'>";
echo "</center><table><tr><td>Batch</td><td><select name='bat'><option>select</option>";
include 'batch.php';
echo "</select></td></tr>";
//if($_REQUEST['err']==1)echo "<tr><td colspan='2' align='center'><p style='color:#FF0000;font-size:12px;font-weight:bold'>Select Batch</p></td></tr>";
//echo "<div id='bat' style=\"display: none\"><tr><td colspan='2' align='center'>Select Batch</td></tr></div>";
echo "<tr><td>Department</td><td><select name='dept'><option>select</option>";
include 'depts.php';
echo "</select></td></tr>";
echo "<tr><td>Section </td><td><input type='text' name='sec' id='sec' size='10' onKeyPress=\"return disableEnterKey(event)\"></td></tr>";
//if($_REQUEST['err']==2)echo "<tr><td colspan='2' align='center'><p style='color:#FF0000;font-size:12px;font-weight:bold'>Enter Roll no.</p></td></tr>";
//echo "<div id='dept'><tr><td colspan='2' align='center'>Select Dept</td></tr></div>";
echo "<tr><td colspan='2' align='center'><input type='button' value='ADD NEW' onclick='validate()'></td></tr>";
        echo "</table></center><div id='err' style='display:none'></div></form></div>";

?>
</script>
<div id="stat"></div>
</body>
</html>
