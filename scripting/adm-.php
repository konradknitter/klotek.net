<div id='footer'><p class='first'>Witaj w panelu adminsitratorskim</p><p class='last'><a href="index.php">Wróć do str. głównej</a> | <a href="blog.php">Wróć do bloga</a></p></div>
<table><tr><td width="400" valign='top'>
5 ostatnich blogów
<?
$query = "SELECT * FROM `blog` ORDER BY `id` DESC LIMIT 0,5";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result))
	echo "<p id='post'><a href='scripting/edit-blog.php?id=".$row['id']."' style='text-decoration: none;'>".$row['tytul']."</a> z dnia ".$row['data']."</p>";

?>
</td>
<td valign='top'>
Ostatnio dodane komentarze
<?
$query2 = "SELECT * FROM `blog_comments` ORDER BY `id` DESC LIMIT 0,5";
$result2 = mysql_query($query2);

while($row = mysql_fetch_assoc($result2)) 
	echo "<p id='post'>	&bdquo;".$row['comment']."&rdquo; napisał <b>".$row['nick']."</b> do posta o id: <b>".$row['post_id']."</b></b></p>";
?>
</td></tr></table>