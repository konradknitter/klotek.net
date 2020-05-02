<div id="results">
<?php

$dbc = mysql_connect('localhost', 'root', 'mangos');
mysql_select_db('telviewer');

$username = $_COOKIE['ID_my_site'];

$query = "SELECT id, telnum, name, concode FROM `telefony`  WHERE `user` LIKE '$username' ORDER BY `id` ASC";

$result = mysql_query($query);

echo "<table width='100%'><thead><th width='90'>Kod Kraju</th><th width='130'>Numer Telefonu</th><th width=>Osoba</th><th width='50'>Edycja</th></thead><tbody>";

while($row = mysql_fetch_assoc($result))
	echo "<tr><td>",$row['concode'],"</td><td>",$row['telnum'],"</td><td>",$row['name'],"</td>	<td><form action='edit.php?id=",$row['id'],"' method='post'><input type='submit' value='edytuj' /> </form> </td></tr>";
	
echo "</tbody></table>";

mysql_close($dbc);

?>
</div>