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

$query = "SELECT id, telnum, name, concode FROM `telefony` WHERE `id` LIKE '$id'";
$result = mysql_query($query);

?>
<div id="footer">
<p class="first">Edycja danych do wpisu o id: <? echo $id ?>.  </p>
</div>
<div id="result">
<table width=><thead><th width='50'>ID</th><th width='90'>Kod Kraju</th><th width='130'>Numer Telefonu</th><th width="370">Osoba</th><th width="50">Zapisz</th></thead>
<tbody>
<?
while($row = mysql_fetch_assoc($result))
	echo "<form action='editpost.php?id=",$id,"' method='post'> <tr><td>",$id,"</td><td><input type='text' name='concode' value='",$row['concode'],"' /></td><td><input type='text' name='telnum' value='",$row['telnum'],"'/></td><td><input type='text' size='50' name='name' value='",$row['name'],"'/></td><td><input type='submit' value='Zapisz' /></td></tr></form>"
?>

</tbody>
</table>
</div>
</body>
</html>