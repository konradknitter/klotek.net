<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<style type="text/css">
			@import url("css/default.css");
		</style>
<title>TelViewer - Panel Administracyjny - by klotek.net</title>
		<script src="telviewer.js"></script>
</head>
<body>
<?php
// Connects to your Database
mysql_connect("localhost", "root", "mangos") or die(mysql_error());
mysql_select_db("telviewer") or die(mysql_error());

//checks cookies to make sure they are logged in
if(isset($_COOKIE['ID_my_site']))
{
$username = $_COOKIE['ID_my_site'];
$pass = $_COOKIE['Key_my_site'];
$level = $_COOKIE['level_for_site'];
$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
while($info = mysql_fetch_array( $check ))
{

//if the cookie has the wrong password, they are taken to the login page
if ($pass != $info['password'])
{ header("Location: login.php");
}

//otherwise they are shown the admin area
else
{
if ($level == '2'){
echo "<div id='footer'>
               <p class='first'>TelViewer - panel admninistracyjny 
                </p>
                <p class='last'><a href=logout.php>Wyloguj sie</a>
                </p>
            </div><div id='footer'><table width='100%'><tr><td width='200px'>";
include("add.php");
echo "</td><td>Edycja/usuwanie danych: <b>[UWAGA! BRAK POTWIERDZEN PRZY USUWANIU DANYCH]</b> <br /><br />";
include("admin.php");
echo "</td><td width='200px'>";
include("register.php");
echo "</td></tr></table></div>";
}else {
echo "<div id='footer'>
               <p class='first'>TelViewer - panel admninistracyjny
                </p>
                <p class='last'><a href=logout.php>Wyloguj sie</a>
                </p>
            </div><div id='footer'><table width='100%'><tr><td width='200px'>";
include("add.php");
echo "</td><td>Edycja danych<br /><br />";
include("admogr.php");
echo "</td></tr></table></div>";
}

}
}
}
else

//if the cookie does not exist, they are taken to the login screen
{
header("Location: login.php");
}

?> 
</body>
</html>