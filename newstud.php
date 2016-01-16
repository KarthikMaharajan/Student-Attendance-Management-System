<html>
<body>
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
$bat=$_REQUEST['bat'];
$dept=$_REQUEST['dept'];
$sec=$_REQUEST['sec'];

$_SESSION['add_bat']=$bat;
$_SESSION['add_dept']=$dept;
$_SESSION['add_sec']=$sec;
?>
<?php

if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
?>

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
else $("#stat").load("newdetails.php",{roll:$("#roll").val(),nam:$("#name").val()});
return true;

}

function validate1(e)
{
     var key;     
     if(window.event)
          key = window.event.keyCode; //IE
     else
          key = e.which; //firefox 
if(key==13)
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
else $("#stat").load("newdetails.php",{roll:$("#roll").val(),nam:$("#name").val()});
return true;
}
}
</script>
<?php
echo"<div id='addblack'> ADD STUDENT DETAILS </div>";
echo"<div id='adddatedis'>";
echo "</center><table><tr><td>Roll No.</td><td><input type='text' name='roll' id='roll' onkeypress='return validate1(event)'></td></tr>
<tr><td>Name </td><td><input type='text' name='name' id='name' onkeypress='return validate1(event)'></td></tr>
<tr><td colspan='2' align='center'><input type='button' value='UPDATE' onclick='return validate()'></td></tr>";
        echo "</table></center></div>";
?>

<div id="stat"></div>
</body>
</html>
