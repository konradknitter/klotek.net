<?php

$link = mysql_connect('localhost', 'root', 'mangos') or die('Nie mozna polaczyc z baza bo: ' . mysql_error());
mysql_select_db('telviewer') or die('Nie mozna wybrac bazy');

$id = $_GET['id']; 

$query = "DELETE FROM `telefony` WHERE `id`= '$id'";

$result = mysql_query($query);

if(mysql_affected_rows() == 1)
{
header("Location: admcp.php");
}
else
{
echo '<p>Nastapil blad podczas usuwania numeru, BLAD: </p>'. mysql_error() ;
echo '<p>Najprawdopodobniej serwer bazy mySQL jest niedyzpozycyjny. Gdyby problem sie powtarzal wyslij powyzsze instrukcje do administratora systemu by uzyskac pomoc.</p>';
}
mysql_close($link);

?> 