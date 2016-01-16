<html>
<head>
<title>STUDENT ATTENDANCE SYSTEM</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$(".lhead").click(function(){
    $("#bgcolor1").slideToggle("slow");
  });
});
</script>
<style type="text/css">
     #content-box1
            {
                background-color: white;
                height: 450px;

            }
    </style>
    <script type="text/javascript">
        function validate()
        {
        if(document.lform.usrname.value=="")
            {
            alert("Enter the username");
            return false;
            }
            else if(document.lform.pwd.value=="")
                {
                    alert("Enter the password");
                    return false;
                }
            return true;
        }

        </script>
</head>

<body>
<?php include 'menu.php' ?>
<div id="wrapper">

				
	<div id="content-box1">




<div id="login">
<div class="lhead"><a href="#">  STAFF LOGIN </a></div>
<div id="bgcolor1" style="display:block">
<form method="post" action="stafflogincheck.php" name="lform">


		user name <input type="text" name="usrname" size="14"/> <br/> <br/>
		password  <span style="margin-left: 9px" ><input type="password" name="pwd" size="14"/> </span><br/> <br/>
		<span style="margin-left: 90px"> <input type="submit" value="login" onclick="return validate();"/></span>


</form>
<?php
if(!$_REQUEST['err'])
{
$err="";
}
else
{
if($_REQUEST['err']==1)
{
$err="Invalid Username or Password";
echo "<h3>" . $err . "</h3>"	;
}
elseif($_REQUEST['err']==-1)
{
$err="Oops... An Unrecoverable Fatal Error Occured... Please contact your adminstrator immediately.";
echo "<h3>" . $err . "</h3>"	;
}
else
{
$err="Oops... Looks like something went wrong...";
echo "<h3>" . $err . "</h3>"	;
}
}
?>
	</div>
         </div></div>
    </body>
</html>

