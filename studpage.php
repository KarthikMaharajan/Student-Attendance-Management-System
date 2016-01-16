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
                if(document.stud.rollno.value=="")
                    {
                        alert("enter Roll no.");
                        return false;

                    }
		
		if(document.stud.sem.value=="select")
                    {
                        alert("enter Sem");
                        return false;

                    }

		if(document.stud.batch.value=="select")
                    {
                        alert("enter Batch");
                        return false;

                    }

		if(document.stud.depts.value=="select")
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

if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
?>

 

            <form name="stud" action="attendisplay.php" method="post">
<div class="lhead1"> <a href="#"> View Attendance </a> </div>
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
           <center> <input type="submit" id="click1" value="submit" onclick="return validate();"></center>
             </div>
               
            </form>
<br><br><br>
    </body>
</html>
