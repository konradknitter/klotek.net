<html>
<head>
<title> Klotek.net - Blog - Braino Edition </title>
		<style type="text/css">
			@import url("css/default.css");
		</style>
</head>
<body bgcolor="#333333" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
<div align="center" >
<table border="0" width="810"><tr><td><div style="float:left;"><img src="klotek.gif"></div></td><td>
<div style="float:right;"><img src="braino.gif"></div></td></tr>
<tr height="30"><td colspan="2">
<?
include ('scripting/linki.php');
?>
</td></tr>
<tr><td colspan="2">
<?
	include ('dbc.php');
	
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
	
    if($ins) { 
	include ("scripting/include-blog.php");
	}
    else { echo "<p>Podczas dodawania informacji nastapil błąd.". mysql_error(); 
	echo '<p>Najprawdopodobniej serwer bazy mySQL jest niedyzpozycyjny. Gdyby problem sie powtarzal wyslij powyzsze instrukcje do administratora systemu by uzyskac pomoc.</p>'; 
	}
    
	}
?>
<br /><br />
</td></tr>
<!-- <tr><td colspan="2"><div align="center" id="wybor">PIERWSZA|POPRZEDNIA 1 <b>2</b> 3 4 5 6 7 8 9 10 NASTEPNA|OSTATNIA</center></td></tr> -->
<tr><td colspan="2"><div id="footer"> <? include ('scripting/footer.php') ?></div></td></tr>
</table>

</div>
</body>
</html>