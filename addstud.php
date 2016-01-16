<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
	<link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="jquery/jquery.min.js"></script>
  <script src="jquery/jquery-ui.min.js"></script>
        <style type="text/css">
            .date
            {
               margin: auto 300px auto 300px;
               background-color: #b1eeff;
               padding: 50px 50px ;
               width: 150px;
            }
            .lhead1
            {

                background-color: black;
                margin: 30px auto auto auto;
                height: 30px;
                width: 230px;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: center;

}
.date a
{
    color:white;
    font-family: "Times New Roman", Times, serif;
    margin-right: 1000px;
    font-weight: bold;
    

}
            #content-box1
            {
                background-color: white;
                height: 400px;
}
</style>
<script type="text/javascript">
            function display()
            {

                document.stud.date1.value="yyyy/mm/dd";

            }
            function validate()
            {
            
		
		if(document.stud.sec.value=="")
                    {
                        alert("enter Section");
                        return false;

                    }

		if(document.stud.bat.value=="select")
                    {
                        alert("enter Batch");
                        return false;

                    }

		if(document.stud.dept.value=="select")
                    {
                        alert("enter department");
                        return false;

                    }
                    return true;
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
unset($_SESSION['add_bat']);
unset($_SESSION['add_dept']);
if(isset($_SESSION['batch_create'])) echo "<h3>Batch ".$_SESSION['new_batch']." created successfully....<br>Add New Students to ".$_SESSION['new_batch']." batch</h3>";
if(isset($_SESSION['new_dept'])) echo "<h3>Department ".$_SESSION['new_dept']." created successfully....<br>Add New Students to ".$_SESSION['new_dept']." department</h3>";
?>

 

            <form name="stud" action="newstud.php" method="post">
<div class="lhead1"> <a href="#"> ADD NEW STUDENT </a> </div>
                <div class="date">
                    <table>
         <tr><td>Batch</td><td><select name="bat"><option>select</option>
<?php include'batch.php'?></select></td></tr>
          <tr><td>Department</td><td><select name="dept"><option>select</option>
<?php include'depts.php'?></select></td></tr>
<tr><td>Section</td><td><input type="text" name="sec" size="10"></tr>
</table>
           <center> <input type="submit" id="click1" value="submit" onclick="return validate();"></center>
             </div>
               
            </form>
<br><br><br>
    </body>
</html>
