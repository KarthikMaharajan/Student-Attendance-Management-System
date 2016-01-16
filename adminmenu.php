<html>
<head>
<title>STUDENT ATTENDANCE SYSTEM</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
</head>

<script type="text/javascript">
function mopen(id)
{

ddmenuitem = document.getElementById(id);
ddmenuitem.style.visibility = 'visible';
}

function mclose(id)
{
ddmenuitem = document.getElementById(id);
ddmenuitem.style.visibility = 'hidden';
}
</script>
<body>
<div id="wrapper">

				<div id="header">

	
			<h1><a href="adminhome.php">ATTENDANCE AUTOMATION SYSTEM</a></h1>
			

			
		</div>
    
    


<ul id="menu" class="cleaning-box">
			<li><a href="adminhome.php" class="active">HOME</a></li>
			<li onmouseover="mopen('att')" onmouseout="mclose('att')"><a href="#" class="active">ATTENDANCE</a>
			<div id="att"><a href="attenreport.php">ATTENDANCE REPORT</a>
        <a href="attenentry.php">ATTENDANCE ENTRY</a><a href="attupdate.php">ATTENDANCE UPDATE</a></div>
			</li>
 			<li onmouseover="mopen('fin')" onmouseout="mclose('fin')"><a href="#" class="active">FINES</a>
			<div id="fin"><a href="leaveform.php" class="active">LEAVE FROM ENTRY</a><a href="special.php">ADD SPECIAL FINE</a>
        <a href="calcfines.php">UPDATE ALL FINES</a></div>
			</li>
			<li onmouseover="mopen('det')" onmouseout="mclose('det')"><a href="#" class="active">STUD.DETAILS</a>
			<div id="det"><a href="addstud.php">ADD STUDENT DETAILS</a>
        <a href="editstud.php">EDIT STUDENT DETAILS</a></div>
			</li>
 			<li onmouseover="mopen('new')" onmouseout="mclose('new')"><a href="#" class="active">ADD.NEW</a>
			<div id="new"><a href="newbatch.php">ADD NEW BATCH</a><a href="newdept.php">ADD NEW DEPARTMENT</a>
        <a href="newadmin.php">ADD NEW ADMIN</a><a href="newstaff.php">ADD NEW STAFF</a></div>
			</li>
			<li onmouseover="mopen('conf')" onmouseout="mclose('conf')"><a href="#" class="active">CONFIG</a><div id="conf"><a href="writedb.php">SET DB PASSWORD</a><a href="apass.php">CHANGE YOUR PASSWORD</a>
        <a href="semdate.php">SET SEM DATES</a></div></li>
                        <li><a href="search.php" class="active">SEARCH</a></li>
                        <li><a href="logout.php" class="active">LOGOUT</a></li>
		</ul>
</body>
</html>
