<?
$tytul = $_POST['tytul'];
$img = $_POST['img'];
$tresc = $_POST['tresc'];
$data = date(DATE_ATOM);

if($tytul and $tresc) {
    
	include ('../dbc.php');
	
	$ins = @mysql_query("INSERT INTO `blog` (tytul, img, tresc, data) VALUES ('$tytul', '$img', '$tresc', '$data')");
	
    if($ins) { 
	header("Location: ../admin.php");
	}
    else { echo "<p>Podczas dodawania informacji nastapil b≥πd.". mysql_error(); 
	echo '<p>Najprawdopodobniej serwer bazy mySQL jest niedyzpozycyjny. Gdyby problem sie powtarzal wyslij powyzsze instrukcje do administratora systemu by uzyskac pomoc.</p>'; 
	}
    
	} else { echo "
<div id='footer'><p class='first'>Dodawanie Posta</p><p class='last'></p></div>
<form action='scripting/adm-blog.php' method='post'>
<div align='center'>
<table>
<tr><td align='right'>
Tytu≈Ç:
</td><td>
<input type='text' name='tytul' size='80' />
</td></tr><tr><td align='right'>
IMG:
</td><td>
<input type='text' name='img' size='80' />
</td></tr><tr><td align='right' valign='top'>
Tresc Posta:
</td><td>
<textarea type='text' name='tresc' rows='7' cols='90'></textarea>
</td></tr>
<tr><td colspan='2' align='right'><input type='submit' value='dodaj posta' /></td></tr></table>
</div>
</form>";
}
?>