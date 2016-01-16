<?php
session_start();
if(!isset($_SESSION['admin']))
{ 
header("location:index.php");
}

?>
<html>
    <head>
        <style type="text/css">
            #content-box1
            {
                background-color: white;
                height: 500px;
                overflow:hidden;

}
#weldis
{
    margin: 10px auto auto 100px;
    font-weight: bold;
    font-size: 16px;
    font-family: sans-serif,monospace;
}
#textcontent
{
    text-align: justify;
    margin: 50px;
    font-size: 13px;
    
}
            </style>
        </head>

<body>
    <?php include 'adminmenu.php';?>
<div id="content-box1">
   
   
<?php
echo "<div id='weldis'>Welcome:".$_SESSION['admin'].'</div>';

?>
    <div id="textcontent">
<h3>The Attendance Automation System, Admin Home Page.<br>
Create and Update Student Information and Attendance Details from here.</h3>
</div>
    </div>


</body>
</html>

