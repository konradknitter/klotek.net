<div id="results">
<?php
$query = "SELECT * FROM `blog` ORDER BY `id` DESC";

$result = mysql_query($query);

echo "<div id='footer'><p class='first'>Administracja Postami</p><p class='last'></p></div>
<div align='center'><table><thead><th width='30' align='right'>ID</th><th width='200' align='left'>Tytuł</th><th >Data</th><th width='40'></th></thead><tbody>";

while($row = mysql_fetch_assoc($result))
	echo "<tr><td align='right' valign='top'>",$row['id'],"</td><td valign='top'><a href='scripting/edit-blog.php?id=",$row['id'],"' style='text-decoration: none;'>",$row['tytul'],"</a></td><td valign='top'>",$row['data'],"</td><td align='right'><a style='text-decoration: none;' href='scripting/delete-blog.php?id=",$row['id'],"'>Usuń</a></td> </tr>";
	
echo "</tbody></table></div>";
?>
</div>