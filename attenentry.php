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
    $("#datepicker").datepicker();
  });
  </script>
        
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
                margin: 50px auto auto auto;
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
            function clear1()
            {
                document.form1.date1.value="";

            }
            function display()
            {

                document.form1.date1.value="yyyy/mm/dd";

            }
            function validate()
            {
                if((document.form1.date1.value=="yyyy/mm/dd" || document.form1.date1.value==""))
                    {
                        alert("enter the date");
                        return false;

                    }
		

		if(document.form1.sem.value=="select")
                    {
                        alert("enter Sem");
                        return false;

                    }


		if(document.form1.sec.value=="")
                    {
                        alert("enter Section");
                        return false;

                    }
		if(document.form1.hr1.checked==false && document.form1.hr2.checked==false  && document.form1.hr3.checked==false && document.form1.hr4.checked==false && document.form1.hr5.checked==false && document.form1.hr6.checked==false && document.form1.hr7.checked==false)
			{
                        alert("select atleast one hour");
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
for($i=1;$i<=7;$i++)
{
unset($_SESSION['h'.$i]);
}
unset($_SESSION['def_atten']);
?>

        
 

            <form name="form1" action="attcheckdate.php" method="post">
<div class="lhead1"> <a href="#"> ATTENDANCE ENTRY </a> </div>
                <div class="date">
                    <table>
            <tr><td>Date</td><td><input type="text" id="datepicker" name='date1' value="yyyy/mm/dd" onfocus="clear1();" size="10"/></td></tr>
          <!--<tr><td>   Batch</td><td><select name="batch">
                                   <option>select</option>
                                   <?php include 'batch.php';?>
</select>(Joining Year)</td></tr>-->
<!--<tr><td>Department</td><td><select name="dept">
                                   <option>select</option><?php include 'depts.php';?></select></tr></td>-->
<tr><td>Semester</td><td><select name="sem"><option>select</option>
<?php
for($i=1;$i<=8;$i++)
echo '<option>'.$i.'</option>';
echo '</select><br>';
?></tr>
<tr><td>Section</td><td><input type="text" name="sec" id="sec" size="10"></td></tr><tr><td colspan="2" align="center" height="58" style="vertical-align:middle;">Select Hours</td></tr><tr>
<?php
for($i=1;$i<=7;$i++)
{
echo '<td width=\"80\">hour'.$i.'<input type="checkbox" name="hr'.$i.'" id="hr'.$i.'"></td>';
if($i==2 || $i==4 || $i==6) echo "</tr><tr>";
}

        echo "</tr>";
?></table>
           <center> <input type="submit" id="click1" value="submit" onclick="return validate();"></center>
<?php
if(!$_REQUEST['err'])
{
$err="";
}
else
{
if($_REQUEST['err']==1)
{
$err="Supplied Date is out of Range..";
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
               
            </form>

        </div>
    </body>
</html>
