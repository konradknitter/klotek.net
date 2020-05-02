<?
	include ('./dbc.php');
		
$tytul = $_POST['tytul'];
$tresc = $_POST['tresc'];
$data = date('Y-m-d H:i:s');

if($tytul and $tresc) {
	$query = "INSERT INTO `news` SET `tytul`='$tytul', `tresc`='$tresc', `data`='$data'";
	$ins = @mysql_query($query);
    if($ins) { 
	header (Location: admin.php);
	}
    else { echo "<p>Podczas dodawania informacji nastapil błąd.". mysql_error(); 
	echo '<p>Najprawdopodobniej serwer bazy mySQL jest niedyzpozycyjny. Gdyby problem sie powtarzal wyslij powyzsze instrukcje do administratora systemu by uzyskac pomoc.</p>'; 
	}
    
	}
	    mysql_close($dbc);
?>
<div id='footer'><p class='first'>Dodawanie Newsa</p><p class='last'></p></div>
<form action='scripting/adm-blog.php' method='post'>
<div align='center'>
<table>
<tr><td align='right'>
Tytuł:
</td><td>
<input type='text' name='tytul' size='80' value='Update Status' />
</td></tr><tr><td align='right' valign='top'>
Tresc Newsa:
</td><td>
<textarea type='text' name='tresc' rows='7' cols='90' ></textarea>
</td></tr>
<tr><td colspan='2' align='right'><input type='submit' value='Dodaj Newsa' /></td></tr></table>
</div>
</form>