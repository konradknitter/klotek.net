<?php
ob_start();

	include ('dbc.php');

if(isset($_COOKIE['ID_admklonet']))
{
	$username = $_COOKIE['ID_admklonet'];
	$pass = $_COOKIE['Key_admklonet'];
	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
	while($info = mysql_fetch_array( $check ))
	{
	if ($pass != $info['password'])
	{
	header("Location: login.php");
	}  
 else {
echo "<html>
<head>
<title> Klotek.net - Administracja - Braino Edition </title>
		<style type='text/css'>
			@import url('css/default.css');
		</style>
</head>
<body bgcolor='#333333' text='#FFFFFF' link='#FFFFFF' vlink='#FFFFFF' alink='#FFFFFF'>
<div align='center' >
<table border='0' width='810'><tr><td><div style='float:left;'><img src='klotek.gif'></div></td><td>
<div style='float:right;'><img src='braino.gif'></div></td></tr>
<tr height='30'><td colspan='2'>
<a href='admin.php?dirc=news'>Dodaj Newsa</a> | <a href='admin.php?dirc=blog'>Dodaj Bloga</a> | <a href='admin.php?dirc=eblog'>Administracja Bloga</a> | Administracja Komentarzy | Administracja Linkami | <a href='logout.php'>Wyloguj się</a>
</td></tr>
<tr><td colspan='2'>";

$dirc = $_GET['dirc'];
include ('scripting/adm-'.$dirc.'.php');


echo " <br /><br />
</td></tr>
<tr><td colspan='2'><div id='footer'>";

include ('scripting/footer.php');

echo "</div></td></tr> </table> </div> </body> </html>";
}
}
}

ob_end_flush();
?>