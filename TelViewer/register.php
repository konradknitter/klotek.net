<?php
// Connects to your Database
mysql_connect("localhost", "root", "mangos") or die(mysql_error());
mysql_select_db("telviewer") or die(mysql_error());

//This code runs if the form has been submitted
if (isset($_POST['submit'])) {

//This makes sure they did not leave any fields blank
if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
die('You did not complete all of the required fields');
}

// checks if the username is in use
if (!get_magic_quotes_gpc()) {
$_POST['username'] = addslashes($_POST['username']);
}
$usercheck = $_POST['username'];
$check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'")
or die(mysql_error());
$check2 = mysql_num_rows($check);

//if the name exists it gives an error
if ($check2 != 0) {
die('Sorry, the username '.$_POST['username'].' is already in use.');
}

// this makes sure both passwords entered match
if ($_POST['pass'] != $_POST['pass2']) {
die('Your passwords did not match. ');
}

// here we encrypt the password and add slashes if needed
$_POST['pass'] = md5($_POST['pass']);
if (!get_magic_quotes_gpc()) {
$_POST['pass'] = addslashes($_POST['pass']);
$_POST['username'] = addslashes($_POST['username']);
}

// now we insert it into the database
$insert = "INSERT INTO users (username, password)
VALUES ('".$_POST['username']."', '".$_POST['pass']."')";
$add_member = mysql_query($insert);
?>

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
<div id="footer">
<p class="first">Uzytkownik zostal dodany.</p>
</div>
<p>Od teraz moze zalogowac sie do systemu z poziomu "kundzi". By go usunac, badz podwyzszyc poziom do "szefa" poinformuj administratora systemu.</a>.</p>
</body>
</html>
<?php
}
else
{
?>

<div id='formtobase'>
Rejestracja nowych uzytkownikow<br /><br />
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Nazwa uzytkownika:<br />
<input type="text" name="username" maxlength="60"><br />
Haslo:<br />
<input type="password" name="pass" maxlength="10"><br />
Potworz haslo:<br />
<input type="password" name="pass2" maxlength="10"><br />
<input type="submit" name="submit" value="Zarejestruj"></table>
</form>
</div>

<?php
}
?> 
