<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<style type="text/css">
			@import url("css/default.css");
		</style>
<title>TelViewer - Logowanie - Panel Administracyjny - by klotek.net</title>
		<script src="telviewer.js"></script>
</head>
<body>
<?php
// Connects to your Database
mysql_connect("localhost", "root", "mangos") or die(mysql_error());
mysql_select_db("telviewer") or die(mysql_error());

//Checks if there is a login cookie
if(isset($_COOKIE['ID_my_site']))

//if there is, it logs you in and directes you to the members page
{
$username = $_COOKIE['ID_my_site'];
$pass = $_COOKIE['Key_my_site'];
$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
while($info = mysql_fetch_array( $check ))
{
if ($pass != $info['password'])
{
}
else
{
header("Location: admcp.php");

}
}
}
//if the login form is submitted
if (isset($_POST['submit'])) { // if form has been submitted

// makes sure they filled it in
if(!$_POST['username'] | !$_POST['pass']) {
die('Nie wypelniles wszystkich pol.');
}
// checks it against the database

if (!get_magic_quotes_gpc()) {
$_POST['email'] = addslashes($_POST['email']);
}
$check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());

//Gives error if user dosen't exist
$check2 = mysql_num_rows($check);
if ($check2 == 0) {
die(' Blad logowania. ');
}
while($info = mysql_fetch_array( $check ))
{
$_POST['pass'] = stripslashes($_POST['pass']);
$info['password'] = stripslashes($info['password']);
$_POST['pass'] = md5($_POST['pass']);

//gives error if the password is wrong
if ($_POST['pass'] != $info['password']) {
die('Incorrect password, please try again.');
}
else
{

// if login is ok then we add a cookie
$_POST['username'] = stripslashes($_POST['username']);
$hour = time() + 3600;
setcookie(ID_my_site, $_POST['username'], $hour);
setcookie(Key_my_site, $_POST['pass'], $hour);
setcookie(level_for_site, $info['level'], $hour);

//then redirect them to the members area
header("Location: admcp.php");
}
}
}
else
{

// if they are not logged in
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<div id='footer'><p class='first'>Login</p><p class='last'><a href='index.php'>Powrot</a></p>
</div>
Uzytkownik:
<input type="text" name="username" maxlength="40">
Haslo:
<input type="password" name="pass" maxlength="50">
<input type="submit" name="submit" value="Zaloguj sie">
</form>
<?php
}

?> 

</body>
</html>