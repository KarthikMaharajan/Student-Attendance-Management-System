<html>
<body>
<link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
<?php
session_start();
if(!(isset($_SESSION['admin']))) header("location:index.php");
if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
unset($_SESSION['batch_create']);
unset($_SESSION['new_batch']);
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


<?php

echo"<div id='addblack'> ADD NEW DEPARTMENT </div>";
echo"<div id='adddatedis'><table>"; 
echo '<form name="batadd" action="createdept.php" method="post">';
       echo "<tr><td>Enter Department Name</td><td><input type='text' name='dept' id='dept'></td></tr>
<tr><td height=\"60\" colspan=\"2\" align=\"center\"><input type='submit' value='CREATE NEW' id='submit'></td></tr>";
        echo "</table>";
if($_REQUEST['err']==1) echo"<h3>Please Enter Department Name...</h3>";
if($_REQUEST['err']==-1) echo"<h3>A fatal Unrecoverable error occured that caused abnormal termination... This could lead to inconsistency in the Database... Please Contact your Admin Immediately..</h3>";
if($_REQUEST['err']==2) echo"<h3>The given Department already exists.....</h3>";
       echo "</div></form>";

?>
<div id="stat"></div>
</body>
</html>
