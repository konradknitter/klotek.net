<?php
include ('./dbc.php');

if(isset($_COOKIE['ID_admklonet']))
{
$username = $_COOKIE['ID_admklonet'];
$pass = $_COOKIE['Key_admklonet'];
$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
while($info = mysql_fetch_array( $check ))
{
if ($pass != $info['password'])
{
}
else
{
header('Location: ./admin.php');
}
}
}

if (isset($_POST['submit'])) { 

if(!$_POST['username'] | !$_POST['pass']) {
die('Blad logowania.');
}

$check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());
$check2 = mysql_num_rows($check);

if ($check2 == 0) {
die('Blad logowania.');
}

while($info = mysql_fetch_array( $check ))
{
$_POST['pass'] = stripslashes($_POST['pass']);
$info['password'] = stripslashes($info['password']);
$_POST['pass'] = md5($_POST['pass']);


if ($_POST['pass'] != $info['password']) {
die('Blad logowania.');
}
else
{

$_POST['username'] = stripslashes($_POST['username']);
$hour = time() + 3600;
setcookie(ID_admklonet, $_POST['username'], $hour);
setcookie(Key_admklonet, $_POST['pass'], $hour);
header('Location: ./admin.php');

}
}
}
else
{
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div id='footer'><p class='first'>Logowanie</p><p class='last'><a href="index.php">Powrót</a></p>
</div>
<div style="margin-left: 30px;">
<table><tr><td align='right'>Użytkownik:</td><td>
<input type="text" name="username" maxlength="40"></td></tr>
<tr><td align='right'>Hasło:</td>
<td><input type="password" name="pass" maxlength="50"></td></tr>
<tr><td colspan='2' align='right'><input type="submit" name="submit" value="Zaloguj sie"></td></tr>
</div>
</table>
</form>
<?php
}
?> 