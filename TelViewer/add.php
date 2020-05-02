<?
	$dbc = mysql_connect('localhost', 'root', 'mangos');
	mysql_select_db('telviewer');
	
$concode = $_POST['concode'];
$telnum = $_POST['telnum'];
$name = $_POST['name'];

if(isset($_COOKIE['ID_my_site']))
{
$username = $_COOKIE['ID_my_site'];
}
else
$username = '';

if($concode and $telnum and $name) {
    

	
    $ins = @mysql_query("INSERT INTO `telefony` SET concode='$concode', telnum='$telnum', name='$name', user='$username'");
	
    if($ins) { header("Location: admcp.php"); }
    else { echo "<p>Podczas dodawania informacji nastapil b³¹d.". mysql_error(); 
	echo '<p>Najprawdopodobniej serwer bazy mySQL jest niedyzpozycyjny. Gdyby problem sie powtarzal wyslij powyzsze instrukcje do administratora systemu by uzyskac pomoc.</p>'; 
	}
    
	}
	
	    mysql_close($dbc);
?>

<div id='formtobase'>
Formularz dodawania numerow do bazy
<br /><br />
<form action='add.php' method='post'>
numer kraju:<br />
<input type='text' name='concode' value='48' /><br />
numer telefonu:<br />
<input type='text' name='telnum' /><br />
osoba:<br />
<input type='text' name='name' /><br />
<input type='submit' value='dodaj' />
</form>
</div>