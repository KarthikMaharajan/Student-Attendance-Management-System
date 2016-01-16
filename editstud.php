<html>
<body onKeyPress="return disableEnterKey(event)">
<link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
<?php
session_start();
if(!(isset($_SESSION['admin']))) header("location:index.php");
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
<script type="text/javascript">
function validate()
{
if(document.getElementById('rollno').value=="")
{
alert("Enter the Roll no");
return false;
}
return true;

}
</script>
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
<?php
echo"<div id='addblack'> EDIT STUDENT DETAILS</div>";
echo"<form name='edit' action='editdetails.php' method='post'><div id='adddatedis'><table>
<tr><td>Enter the roll no</td><td>:<input type='text' name='rollno' id='rollno' onKeyPress=\"return disableEnterKey(event)\"></td></tr>
<tr><td height=\"60\" colspan=\"2\" align=\"center\"><input type='submit' value='GET DETAILS' id='submit' onclick=\"return validate()\"></td></tr>
</table></div></form>";
?>
<br><br><br>
<div id="stat"></div>
</body>
</html>
