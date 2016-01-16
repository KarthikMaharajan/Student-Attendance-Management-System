<?php
session_start();
if(!((isset($_SESSION['staff'])) || (isset($_SESSION['admin'])))) header("location:index.php");
?>
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

                

}
#resultdis
{
    margin-left: 50px;
    font-weight: bold;
    padding-bottom: 30px;

}

#info
{
    font-weight: bold;

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
if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
?>

<?php 

include 'phpdb.php';
	$dept=$_REQUEST['dept'];
	    $section=$_REQUEST['sec'];
            $sem=$_REQUEST['sem'];
            $batch=$_REQUEST['batch'];
	    $viewatt='`' . $batch . $sem . '`';
		$fdate=$_REQUEST['fdate'];

$fsomedate=strtotime($fdate);
$finsdate=date('Y-m-d',$fsomedate);
$gnfromdate=strtotime($finsdate);
$fsearchdate= '`' . $finsdate . '`';

		$tdate=$_REQUEST['tdate'];

$tsomedate=strtotime($tdate);
$tinsdate=date('Y-m-d',$tsomedate);
$gntodate=strtotime($tinsdate);
$tsearchdate= '`' . $tinsdate . '`';
$db="attendance-".$dept;

mysql_select_db($db) or die("<h3>A Fatal, Unrecoverable Error Occured...<br>Please contact your adminstrator immediately..");
$clmns=mysql_query("show columns from $viewatt");
$clmnsnum=mysql_num_rows($clmns);

$find=mysql_query("select * from $viewatt where section='$section'");
echo "<div id='atten'>";
echo "<center><br><h2>Attendance Report</h2><br></center>";
echo '<p style="position:relative;left:15px;top:5px;font-size:15px;font-weight:bold;">';
echo "<table style=\"width:400px;\" id=\"info\"><tr><td>Department : ".$dept."</td><td>Batch : ".$batch."</td>"."</td><td></td><td>Section : ".$section."</td></tr>";
echo "<tr><td>From Date : ".$fdate."</td><td></td><td>To Date : ".$tdate."</td></tr></table>";
echo '<center><p style="position:relative;top:5px;">';
echo "<table border=\"1\"><tr><td width=\"80\" bgcolor=\"#56A5EC\">RollNo</td><td width=\"80\" bgcolor=\"#56A5EC\">Name</td>";
for($di=2;$di<$clmnsnum;$di++)
				{
					$showclmns=mysql_field_name($find,$di);
					$dbdate=strtotime($showclmns);
					if($dbdate>=$gnfromdate) break;
				}

						while($dbdate<=$gntodate)
						{
						$showclmns=mysql_field_name($find,$di++);
						$dbdate=strtotime($showclmns);
						if(!$dbdate)break;
						echo "<td width=\"100\" bgcolor=\"#56A5EC\">" . $showclmns . "</td>";
						$showclmns=mysql_field_name($find,$di);
						$dbdate=strtotime($showclmns);
						}
						
						echo "</tr>";


while($daydisp=mysql_fetch_array($find))
{
echo "<tr><td width=\"80\">" . $daydisp['rollno'] . "</td>";
echo "<td width=\"150\">" . $daydisp['name'] . "</td>";
	for($di=2;$di<$clmnsnum;$di++)
				{
					$showclmns=mysql_field_name($find,$di);
					$dbdate=strtotime($showclmns);
					if($dbdate>=$gnfromdate) break;
				}

						while($dbdate<=$gntodate)
						{
						$showclmns=mysql_field_name($find,$di++);
						$dbdate=strtotime($showclmns);
						if(!$dbdate)break;
						$atten=$daydisp[$showclmns];
						if(!$atten)
						echo "<td width=\"80\">" . "No Attendance" . "</td>";
						else
						echo "<td width=\"80\">" . $atten . "</td>";
						$showclmns=mysql_field_name($find,$di);
						$dbdate=strtotime($showclmns);
						}
						
						echo "</tr>";
}
				




echo "</table></p></center></div>";
?>
<?php
//<p style="position:absolute;bottom:2px;padding-left:50%;">
echo '<br><center><input type="button" value="Print Report" onclick="javascript:print()"></center><br><br>';
?>
</body></html>
