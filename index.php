<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Attendance System</title>
        <style type="text/css">
            #content-box1
            {
                background-color: white;
                height: 300px;
}
#black
{
    background-color: black;
    padding: 30px 30px;
    color: white;
    width: 200px;
    margin: 150px auto auto 200px;

}
            </style>
    </head>
    <body>
<?php
session_start(); 
if(isset($_SESSION['admin'])) header('location:adminhome.php');
elseif(isset($_SESSION['staff'])) header('location:staffhome.php');
?>
        <?php include 'menu.php';

        ?>
        <div id="content-box1">
            <div id="black">
                
            <a href="adminindex.php">ADMIN LOGIN</a><br/><br/><br/>
            <a href="studpage.php">STUDENTS</a><br/><br/><br/>
            <a href="staffindex.php">STAFF LOGIN</a><br/>
            </div>
            </div>
    </body>
</html>
