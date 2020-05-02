<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<style type="text/css">
			@import url("css/default.css");
		</style>
<title>TelViewer - Edycja Danych - Panel Administracyjny - by klotek.net</title>
		<script src="telviewer.js"></script>
</head>
<body>
<?
$link = mysql_connect('localhost', 'root', 'mangos') or die('Nie mozna polaczyc z baza bo: ' . mysql_error());
mysql_select_db('telviewer') or die('Nie mozna wybrac bazy');

$id = $_GET['id']; 
$concode = $_POST['concode'];
$telnum = $_POST['telnum'];
$name = $_POST['name'];

echo "<div id='footer'><p class='first'>Nowe dane dla podmoiotu o id: ".$id.".</p></div><br />";
echo "<table><tr><td>Kod Kraju</td><td>Numer Telefonu</td><td>Osoba</td></tr>";
echo "<tr><td>";
echo $concode;
echo "</td>";
echo "<td>";
echo $telnum;
echo "</td>";
echo "<td>";
echo $name;
echo "</td>";
echo "</tr>";
echo "</table>";
$query = "UPDATE `telefony` SET `concode` = '$concode', `telnum` = '$telnum', `name` = '$name' WHERE `id` = '$id'";
mysql_query($query);


if(mysql_affected_rows() == 1)
{
print '<p>Numer zostal zaktualizowany</p><p><a href="admcp.php">Wroc do administracji</a></p>';
}
else
{
print '<p>Nie udalo sie zaktualziowac numeru, poniewaz: </p>'. mysql_error() ;
print '<p>jezeli widzisz przyczyne wyslij ja swojemu administratorowki systemu, tymczasem mozesz <a href="admcp.php">Wrocic do administracji</a></p>';
}

mysql_close($link);
?>
</body>
</html>