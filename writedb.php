<?php
session_start();
if(!isset($_SESSION['admin'])) die(header("location:index.php"));
?>
<html>
<body>
<link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-ui.min.js"></script>

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
	if(document.getElementById('admin').value=="")
	{
	alert("Enter a Admin Pass");
	return false;
	}
	else if(document.getElementById('uname').value=="")
	{
	alert("Enter a DB User Name");
	return false;
	}
	else if(document.getElementById('dbpass').value=="")
	{
	alert("Enter a DB Password");
	return false;
	}
	else if(document.getElementById('confdbpass').value=="")
	{
	alert("ReEnter DB password");
	return false;
	}
	else $("#stat").load("setdbpass.php",{admin:$("#admin").val(),uname:$("#uname").val(),dbpass:$("#dbpass").val(),confdbpass:$("#confdbpass").val()});
	}
        </script>



<?php
//echo '<div id="content-box1">';
echo"<div id='addblack'> SET DB PASSWORD </div>";
echo"<div id='adddatedis'><table>"; 
//echo '<form name="commit">';
       echo "<tr><td>Admin Password</td><td>:<input type='password' name='admin' id='admin'></td></tr>
<tr><td>DB UserName</td><td>:<input type='text' name='uname' id='uname'></td></tr>
<tr><td>DB Password</td><td>:<input type='password' name='dbpass' id='dbpass'></td></tr>
<tr><td>Conform DB Password</td><td>:<input type='password' name='confdbpass' id='confdbpass'></td></tr>
<tr><td height=\"60\" colspan=\"2\" align=\"center\"><input type='button' value='UPDATE' id='submit' onclick=\"javascript:validate()\"></td></tr>";
        echo "</table></div>";
//        echo "</form>";

?>

<div id="stat"></div>
</body>
</html>
