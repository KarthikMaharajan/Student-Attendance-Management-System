<html>
<head>
<title>STUDENT ATTENDANCE SYSTEM</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
</head>

<body>
<script type="text/javascript">
var ddmenuitem	= 0;
</script>
<script type="text/javascript">
function mopen(id)
{

if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
ddmenuitem = document.getElementById(id);
ddmenuitem.style.visibility = 'visible';
}

function mclose(id)
{
ddmenuitem = document.getElementById(id);
ddmenuitem.style.visibility = 'hidden';
}
</script>
<div id="wrapper">

				<div id="header">

	
			<h1><a href="staffhome.php">ATTENDANCE AUTOMATION SYSTEM</a></h1>
			

			
		</div>
    
    


<ul id="menu" class="cleaning-box">
			<li ><a href="staffhome.php" class="active">HOME</a></li>
			<li onmouseover="mopen('att')" onmouseout="mclose('att')"><a href="#" class="active">ATTENDANCE</a>
			<div id="att"><a href="attenreport.php">ATTENDANCE REPORT</a><a href="attenentry.php">ATTENDANCE ENTRY</a>
        <a href="attupdate.php">ATTENDANCE UPDATE</a></div></li>
			<li><a href="leaveform.php" class="active">LEAVEFROMENTRY</a></li>
			<li onmouseover="mopen('conf')" onmouseout="mclose('conf')"><a href="#" class="active">CONFIG</a><div id="conf"><a href="spass.php">CHANGE YOUR PASSWORD</a></div></li>

			<li><a href="search.php" class="active">SEARCH</a></li>
                        <li><a href="logout.php" class="active">LOGOUT</a></li>
		</ul>
</body>
</html>
