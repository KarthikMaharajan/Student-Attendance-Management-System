<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
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
<script type="text/javascript">

            function validate()
            {
            
		
		if(document.getElementById('uname').value=="")
                    {
                        alert("enter Username");
                        return false;

                    }

		else if(document.getElementById('passwd').value=="")
                    {
                        alert("enter Password");
                        return false;

                    }

		else if(document.getElementById('confpasswd').value=="")
                    {
                        alert("Reenter password");
                        return false;

                    }
                    else $("#stat").load("createstaff.php",{uname:$("#uname").val(),passwd:$("#passwd").val(),confpasswd:$("#confpasswd").val()});
            }
            </script>
    </head>
    <body>
<?php
session_start(); 
if(!isset($_SESSION['admin'])) header("location:index.php");
if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
?>

 

            
<div id='addblack'> ADD STAFF ADMIN </div>
                <div id='adddatedis'><table>
         <tr><td>User Name</td><td><input type="text" name="uname" id="uname"></td></tr>
         <tr><td>Password</td><td><input type="password" name="passwd" id="passwd"></td></tr>
         <tr><td>Conform Password</td><td><input type="password" name="confpasswd" id="confpasswd"></td></tr>

</table>
           <center> <input type="button" id="click1" value="CREATE NEW" onclick="validate();"></center>
             </div>
               
            </form>
<br><br><br>

<div id="stat"></div>
    </body>
</html>
