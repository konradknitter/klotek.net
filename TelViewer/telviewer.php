<?php

$dbc = mysql_connect('localhost', 'root', 'mangos');
mysql_select_db('telviewer');


$terms = mysql_real_escape_string($_POST['q']);

$query = "SELECT id, telnum, name, concode FROM `telefony` WHERE `telnum` LIKE '%$terms%' OR `name` LIKE '%$terms%' OR `concode` LIKE '$terms'";

$result = mysql_query($query);

echo "<table><th width='100'>Kod Kraju</th><th width='150'>Numer Telefon</th><th width='400'>Osoba</th>";

while($row = mysql_fetch_assoc($result))
	echo "<tr><td id='ce'>",$row['concode'],"</td><td>",$row['telnum'],"</td><td>",$row['name'],"</tr>";
	
echo "</table>";
mysql_close($dbc);

?>