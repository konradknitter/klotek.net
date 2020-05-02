<?
	$dbc = mysql_connect('localhost', 'root', 'mangos');
	mysql_select_db('telviewer');
	
$nick = trim($_POST['nick']);
$nick = strip_tags($nick);
$nick = htmlspecialchars($nick);
$comment = trim($_POST['comment']);
$comment = strip_tags($comment);
$comment = htmlspecialchars($comment);
$post_id = $_GET['id'];
$date = date('Y-m-d H:i:s');

if($nick and $comment and $post_id) {
    

	
    $ins = @mysql_query("INSERT INTO `blog_comments` SET post_id='$post_id', comment='$comment', nick='$nick', data='$date'");
	
    if($ins) { header("Location: blog.php?id=$post_id"); }
    else { echo "<p>Podczas dodawania informacji nastapil błąd.". mysql_error(); 
	echo '<p>Najprawdopodobniej serwer bazy mySQL jest niedyzpozycyjny. Gdyby problem sie powtarzal wyslij powyzsze instrukcje do administratora systemu by uzyskac pomoc.</p>'; 
	}
    
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