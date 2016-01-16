<?php
session_start();
if(!isset($_SESSION['staff']))
{
header("location:index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            #content-box1
            {
                background-color: white;
                height: 400px;
}
        </style>
    </head>
    <body>

        <?php        include 'staffmenu.php';?>
        <div id="content-box1">
<h3>The Attendance Automation System, Staff Home Page.<br>
Create and Update Student Information and Attendance Details from here.</h3>
            </div>
    </body>
</html>
