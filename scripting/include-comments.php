<?php

	include ('./dbc.php');

$coms = $_GET['id'];

$query = "SELECT * FROM blog_comments WHERE post_id LIKE ".$coms." ORDER by data ASC";
$result = mysql_query($query);
$ilosc = mysql_num_rows($result);
echo "<div align='center'><table width='680'>";
if ($ilosc > 0){
		
		while($row = mysql_fetch_assoc($result))
			echo "<tr><td><div id='footer' width='680'><p class='first'>Użytkownik <b>".$row[nick]."</b> w dniu ".$row[data]." napisał: </p></div><p id='post'>".$row[comment]."</p><br /></td></tr>";
		} else {
		echo ('<tr><td><p id="post">Brak Komentarzy</p></td></tr>');
		}
?>
<tr height='30'><td>
<b>Dodaj swój komentarz:</b>
</td></tr><tr><td>
<form action='add-comment.php?id=<? echo $coms; ?>' method='post'>
<div align="center">
<table><tr><td align='right'>
Nickname:</td><td>
<input type='text' name='nick' size='50'/></td>
<tr><td valign='top' align='right'>Tresc:</td><td>
<textarea type='text' name='comment' rows='7' cols='90'></textarea></td></tr><tr><td colspan='2' align="right"><input type='submit' value='Wyslij Komentarz' /></td></tr>
</div>
</table>
</form>
</td></tr>
</div>
<?
echo "</table></div>";
?>