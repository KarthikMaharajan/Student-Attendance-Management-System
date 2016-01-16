
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            #display
            {
             font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
             width:80%;
             border-collapse:collapse;
             margin: auto 50px 10px 50px;
}
#display th
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:black;
color:#ffffff;
}
#display th, #display td
{
    font-size: 1em;
    border: 1px solid black;
    padding: 1px 1px ;
    margin-right: 3px;
   
}
#namestyle
{

    color: black;
    text-transform: uppercase;
    font-weight: bold;
   
    margin-left: 50px;
    padding: 5px 5px;
}
 #content-box1
            {
                background-color: white;
                height: 800px;
                

}
#resultdis
{
    margin-left: 50px;
    font-weight: bold;
    padding-bottom: 30px;

}
#atten
{
}

            </style>
    </head>
    <body>

<script type="text/javascript">

function print()
{
  var content_value = document.getElementById("atten").innerHTML;

  var docprint=window.open("",'_blank');
   docprint.document.open();
   docprint.document.write('<html><body onLoad="self.print()">');
   docprint.document.write(content_value);
   docprint.document.write('</body></html>');
   docprint.document.close();
   docprint.focus();

}
</script>

<?php
session_start(); 
if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
$exists=0;
?>
<?php

		include 'phpdb.php';
                    $roll=$_REQUEST['rollno'];
            $sem=$_REQUEST['sem'];
            include 'getdetails.php';
		$sel_db='attendance-'.$dept;
                    mysql_select_db($sel_db) or die('<h3>Oops...A Fatal Error Occured.<br>Please Contact your Administrator immediately.</h3>');
	    $viewatt='`' . $bat . $sem . '`';


$clmns=mysql_query("show columns from $viewatt");
if(!$clmns) die('<h3>Oops.. No record found for the semester/batch.<br>If you think this is an error please contact the adminstrator immediately.</h3>');
$clmnsnum=mysql_num_rows($clmns);

$find=mysql_query("select * from $viewatt where rollno=$roll");
$findrow=mysql_num_rows($find);
if($findrow==0) die('<h3>Oops, Roll Number not found...</h3>');

echo "<div id=\"atten\">";
echo "<center><br><h2>Attendance Report</h2><br></center>";
echo '<p style="position:relative;left:15px;top:5px;font-size:15px;font-weight:bold;">';
			for($di=0;$di<2;$di++)
				{
					$showclmns=mysql_field_name($find,$di);
					$dayquery=mysql_query("select $showclmns from $viewatt where rollno=$roll");
					$dayarray=mysql_fetch_array($dayquery);
					$daycalc=$dayarray[$showclmns];
					if($di==0)echo "RollNo : " . $daycalc . "<br>";
					if($di==1)echo "Name : " . $daycalc . "<br>";
					
				}

echo "Department : ".$dept."<br></p>";

echo "<center><table border=\"1\" ><tr><td align=\"center\" width=\"80\" bgcolor=\"#56A5EC\">Date</td>";
for($h=1;$h<=7;$h++)echo "<td align=\"center\" width=\"80\" bgcolor=\"#56A5EC\">Hour" . $h . "</td>";
echo "</tr>";
$tothr=0;
$prehr=0;
			for($di=3;$di<$clmnsnum;$di++)
				{
					$showclmns=mysql_field_name($find,$di);
					$dayquery=mysql_query("select * from $viewatt where rollno=$roll");
					$dayarray=mysql_fetch_array($dayquery);
					$daycalc=$dayarray[$showclmns];

					if($daycalc!=null)
					{
					$exists=1;
					$len=strlen($daycalc);

					echo "<tr><td align=\"center\" width=\"80\" bgcolor=\"#E3E4FA\">" . $showclmns . "</td>";
						for($i=0;$i<$len;$i++)
						{
							$tothr++;
							$hnw=substr($daycalc,$i,1);
							if ($hnw=='o')
							{
							$prehr++;
							$hnw='OD';
							echo "<td align=\"center\" width=\"80\" bgcolor=\"yellow\">" . $hnw . "</td>";
							}

							if ($hnw=='a')
							{
							$hnw='A';
							echo "<td align=\"center\" width=\"80\" bgcolor=\"red\">" . $hnw . "</td>";
							}
							
							if ($hnw=='l')
							{
							$hnw='A/L';
							echo "<td align=\"center\" width=\"80\" bgcolor=\"red\">" . $hnw . "</td>";
							}

							if ($hnw=='n')
							{
							$hnw='NE';
							echo "<td align=\"center\" width=\"80\" bgcolor=\"grey\">" . $hnw . "</td>";
							}
							
							if ($hnw=='p')
							{
							$prehr++;
							$hnw='P';
							echo "<td align=\"center\" width=\"80\" bgcolor=\"#6AFB92\">" . $hnw . "</td>";
							}
					
						}
					echo "</tr>";
					}
				}
if($exists==1)
{
echo "</table></center><br><br>";
/*$pcount=$totalhr-($a+$od);*/
$attper=($prehr/$tothr)*100;
echo "<table id='resultdis'> <tr>";
echo "<tr><td>Total Hour </td><td>: ".' '.$tothr.'</td></tr>';
echo "<tr><td>No. of hour present </td><td>: ".' '.$prehr.'</td></tr>';
//echo "<tr><td>no of hour absent </td><td>:".' '.$a.'</td></tr>';
echo "<td >Attendance percentage </td><td>: ".round($attper,2).'%'.'</td></tr>';

$fine_db='fine-'.$dept;
mysql_select_db($fine_db) or die("<h3>Could not get fine info.</h3>");
$finetab='`'.$bat.'`';
$finequery=mysql_query("select fine,specialfine from $finetab where rollno=$roll");
$finearr=mysql_fetch_array($finequery);
$fineamt=$finearr['fine'];
$splamt=$finearr['specialfine'];
$fine=$fineamt+$splamt;
$time=date("d-M-Y H:i:s");
echo "<tr><td>Total Fine as on ".$time." </td><td>: Rs.".$fine."</tr>";
echo "</table></div>";
echo '<br><center><input type="button" value="Print Report" onclick="javascript:print()"></center><br><br>';
}
else
{
echo "<tr><td colspan='8' align='center' style='color:#FF0000;font-size:18px;font-weight:bold'>No records found for the Roll No.</td></tr></table><br><br><br>";
}
                    
?>
    </body>
</html>
