<?
	include('../dbc.php');
		
$tytul = $_POST['tytul'];
$img = $_POST['img'];
$tresc = $_POST['tresc'];
$id = $_GET['id'];
$data = date('Y-m-d H:i:s');

if($tytul and $tresc) {
	$query = "UPDATE `blog` SET `tytul`='".$tytul."', `img`='".$img."', `tresc`='".$tresc."' WHERE `id`='".$id."'";
    $ins = @mysql_query($query);
    if($ins) { 
		header (Location: admin.php);
	}
    else { echo "<p>Podczas dodawania informacji nastapil błąd.". mysql_error(); 
	echo '<p>Najprawdopodobniej serwer bazy mySQL jest niedyzpozycyjny. Gdyby problem sie powtarzal wyslij powyzsze instrukcje do administratora systemu by uzyskac pomoc.</p>'; 
	}
    
	} else
	{
	if($id) {
	$query = ("SELECT * FROM blog WHERE id='$id'");
	$result = mysql_query($query);
	while($row = mysql_fetch_assoc($result)) {
	echo ("
<html>
<head>
<title> Klotek.net - Administracja - Braino Edition </title>
		<style type='text/css'>
			@import url('../css/default.css');
		</style>
</head>
<body bgcolor='#333333' text='#FFFFFF' link='#FFFFFF' vlink='#FFFFFF' alink='#FFFFFF'>
<div align='center'><table width='810'><tr><td>
<div id='footer'><p class='first'>Edytowanie Posta</p><p class='last'>Ostatnia zmiana: ".$row['data']."</p>
</div>
<form action='edit-blog.php?id=".$row['id']."' method='post'>
<div align='center'>
<table>
<tr><td align='right'>
Tytuł:
</td><td>
<input type='text' name='tytul' size='80' value='".$row['tytul']."' />
</td></tr><tr><td align='right'>
IMG:
</td><td>
<input type='text' name='img' size='80' value='".$row['img']."' />
</td></tr>
<tr><td align='right' valign='top'>
Tresc Posta:
</td><td>
<textarea type='text' name='tresc' rows='7' cols='90'>".$row['tresc']."</textarea>
</td></tr>
<tr><td colspan='2' align='right'><input type='submit' value='Edytuj Posta' /></td></tr></table>
</div>
</form>
 </td></tr></div></body> </html>");
	}
	}
	}	
	    mysql_close($dbc);
?>
