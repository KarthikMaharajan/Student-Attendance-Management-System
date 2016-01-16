<?php
session_start();
if(!((isset($_SESSION['staff'])) || (isset($_SESSION['admin'])))) header("location:index.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            #contentbox
            {
                height: 500px;
            }
            #contentbox1
            {
                height: 500px;
            }
            #tabledis
            {
               margin-left: 200px;
               margin-bottom: 50px;
                background-color: #B1EEFF;
                border: solid black 1px;
                padding: 20px;

            }
            #back
            {
                margin-top: -150px;
}
#blackdis
            {
                background-color: black;
                color: white;
                padding: 15px;
                margin: 120px auto auto 200px;
                text-indent:50px;
                font-weight: bold;
                text-transform: uppercase;
                width: 293px;
            }
            .date
            {
               margin: auto auto auto auto;
               background-color: #b1eeff;
               padding: 30px 30px ;
               width: 300px;
            }
            .lhead1
            {

                background-color: black;
                margin: 30px auto auto auto;
                height: 30px;
                width: 340px;
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
        <script type="text/JavaScript" src="javascript/jquery.js"></script>

<script type="text/javascript">
function searchname()
{
var iroll;
iroll=document.getElementById('roll').value;
if((iroll.length)>=3)
$("#result").load("dbsearch.php",{roll:$("#roll").val()});
else
document.getElementById('result').innerHTML="";
}

</script>

        <script type="text/javascript">
$(document).ready(function(){
   $("#search").click(function(){
       $("#result").load("dbsearch.php",{roll:$("#roll").val()});
   });
 });
</script>

<script type="text/javascript">
    window.onerror = function (msg, url, num) {
        alert(msg + ';' + url + ';' + num);
        return true;
    }
    </script>

<?php
if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
?>
<div class="lhead1"> <a href="#"> Student Attendance Report</a> </div>
                <div class="date">
                    <table>

         <tr><td>Roll No.</td><td><input type="text" size="10" name="roll" id="roll" onKeyUp="searchname()"></td></tr>
        
<tr><td colspan="2" align="center"><input type="button" value="Search" id="search"></td></tr>
</table></div><br><br><br>
<div id="result">
</div>
</body></html>
