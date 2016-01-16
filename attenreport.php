<?php 
session_start();
if(!((isset($_SESSION['staff'])) || (isset($_SESSION['admin'])))) header("location:index.php"); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
	<link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="jquery/jquery.min.js"></script>
  <script src="jquery/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#fromdate").datepicker();
  });
  $(document).ready(function() {
    $("#todate").datepicker();
  });
  </script>
        
        <style type="text/css">
            .date
            {
               margin: auto 300px auto 300px;
               background-color: #b1eeff;
               padding: 30px 30px ;
               width: 190px;
            }
            .lhead1
            {

                background-color: black;
                margin: 40px auto auto auto;
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
                height: 800px;
}
        </style>
        <script type="text/javascript">
            function clear1()
            {
                document.classatt.fdate.value="";

            }
            function clear2()
            {
                document.classatt.tdate.value="";

            }

            function validatestud()
            {
                if(document.stud.sem.value=="select")
                    {
                        alert("enter Sem");
                        return false;

                    }

		if(document.stud.rollno.value=="")
                    {
                        alert("enter Roll no.");
                        return false;

                    }
                    return true;
            }

	function validateclass()
            {
		if(document.classatt.dept.value=="select")
                    {
                        alert("enter dept");
                        return false;

                    }

                if(document.classatt.sem.value=="select")
                    {
                        alert("enter Sem");
                        return false;

                    }

                if(document.classatt.batch.value=="select")
                    {
                        alert("enter Batch");
                        return false;

                    }

		if(document.classatt.sec.value=="")
                    {
                        alert("enter Section");
                        return false;

                    }

		if((document.classatt.fdate.value=="yyyy/mm/dd" || document.classatt.fdate.value==""))
                    {
                        alert("enter from date");
                        return false;

                    }

		if((document.classatt.tdate.value=="yyyy/mm/dd" || document.classatt.tdate.value==""))
                    {
                        alert("enter to date");
                        return false;

                    }
                    return true;
            }
            </script>
    </head>
    <body>
<?php
if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
?>

 

<form name="stud" action="attendisplay.php" method="post">
<div class="lhead1"> <a href="#"> Student Attendance Report</a> </div>
                <div class="date">
                    <table>
         <tr><td>Roll No.</td><td><input type="text" name="rollno" size="10"></td></tr>
          
<tr><td>Semester</td><td><select name="sem"><option>select</option>
<?php
for($i=1;$i<=8;$i++)
echo '<option>'.$i.'</option>';
echo '</select></td>';
?></tr>
</table>
           <center> <input type="submit" id="click1" value="submit" onclick="return validatestud();"></center>
             </div>
               
            </form>

<form name="classatt" action="classdisplay.php" method="post">
<div class="lhead1"> <a href="#"> Class Attendance Report</a> </div>
                <div class="date">
                    <table>
         <tr><td>Department</td><td><select name="dept"><option>select</option><?php include'depts.php' ?></select></td></tr>
         <tr><td>Batch</td><td><select name="batch"><option>select</option><?php include'batch.php' ?></select></td></tr>       
            <tr><td>Section</td><td><input type="text" name="sec" size="10"></td></tr>
<tr><td>Semester</td><td><select name="sem"><option>select</option>
<?php
for($i=1;$i<=8;$i++)
echo '<option>'.$i.'</option>';
echo '</select></td>';
?></tr>
<tr><td>From Date</td><td><input type="text" id="fromdate" name='fdate' value="yyyy/mm/dd" onfocus="clear1();" size="10"/></td></tr>
<tr><td>To Date</td><td><input type="text" id="todate" name='tdate' value="yyyy/mm/dd" onfocus="clear2();" size="10"/></td></tr>
</table>
           <center> <input type="submit" id="click2" value="submit" onclick="return validateclass();"></center>
             </div>
               
            </form>

<br><br><br>

    </body>
</html>
