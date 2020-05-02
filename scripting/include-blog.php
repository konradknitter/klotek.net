<?php
// Polaczenie z baza danych
include ('./dbc.php');
// Znalezienie czy sa jakies wartosci GETowe
$archive = $_GET['archive'];
$coms = $_GET['id'];


if ($archive > NULL) {
// Archiwum
$archive = 3 * $archive;
$query = "SELECT * FROM blog ORDER by data DESC limit ".$archive.",3";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result)) {
	$query2 = "SELECT * FROM blog_comments WHERE post_id LIKE ".$row[id]." ";
	$result2 = mysql_query($query2);
	$ilosc = mysql_num_rows($result2);
		if ($row['img'] > NULL)
			{ 
				echo "<div id='footer'><p class='first'><b>".$row[tytul]." -- ";
				//
				$podstawa = $row['data'];
				$dzien = date("d", strtotime($podstawa));
				$dzientygodnia= date("l", strtotime($podstawa));
				$miesiac = date("n", strtotime($podstawa));
				$rok = date("Y", strtotime($podstawa));
				$miesiacnowy = array(1 => 'stycznia', 2 => 'lutego', 3 => 'marca', 4 => 'kwietnia', 5 => 'maja', 6 => 'czerwca', 7 => 'lipca', 8 => 'sierpnia', 9 => 'września', 10 => 'października', 11 => 'listopada', 12 => 'grudnia');
				$dzientygodnianowy = array('Monday' => 'Poniedziałek', 'Tuesday' => 'Wtorek', 'Wednesday' => 'Środa', 'Thursday' => 'Czwartek', 'Friday' => 'Piątek', 	'Saturday' => 'Sobota', 'Sunday' => 'Niedziela');
				$nowadata = " ".$dzientygodnianowy[$dzientygodnia].", ".$dzien." ".$miesiacnowy[$miesiac]." ".$rok." " ;
				echo $nowadata;
				//
				echo "</b></p> <p class='last'><a href='?id=".$row[id]."' style='text-decoration: none;'>Komentarze (".$ilosc.")</a></p></div>
				<div id='post'>".$row[tresc]."</div><br />";
			}	else
			{
				echo "<div id='footer'><p class='first'><b>".$row[tytul]." -- ";
				//
				$podstawa = $row['data'];
				$dzien = date("d", strtotime($podstawa));
				$dzientygodnia= date("l", strtotime($podstawa));
				$miesiac = date("n", strtotime($podstawa));
				$rok = date("Y", strtotime($podstawa));
				$miesiacnowy = array(1 => 'stycznia', 2 => 'lutego', 3 => 'marca', 4 => 'kwietnia', 5 => 'maja', 6 => 'czerwca', 7 => 'lipca', 8 => 'sierpnia', 9 => 'września', 10 => 'października', 11 => 'listopada', 12 => 'grudnia');
				$dzientygodnianowy = array('Monday' => 'Poniedziałek', 'Tuesday' => 'Wtorek', 'Wednesday' => 'Środa', 'Thursday' => 'Czwartek', 'Friday' => 'Piątek', 	'Saturday' => 'Sobota', 'Sunday' => 'Niedziela');
				$nowadata = " ".$dzientygodnianowy[$dzientygodnia].", ".$dzien." ".$miesiacnowy[$miesiac]." ".$rok." " ;
				echo $nowadata;
				//
				echo "</b></p> <p class='last'><a href='?id=".$row[id]."' style='text-decoration: none;'>Komentarze (".$ilosc.")</a></p></div>
				<div id='post'>".$row[tresc]."</div><br />";
			}
}
		
// koniec archiwum
} else {
if ($coms > NULL) {
// komentarze
				$query = "SELECT * FROM blog WHERE id LIKE ".$coms." ORDER by data DESC limit 0,3";
				$result = mysql_query($query);
				
				while($row = mysql_fetch_assoc($result))
				{
				$staradata=$row['data'];
				$nowadata=date("Y-m-d", strtotime($staradata));
				if (count($row[img]) > NULL)
			{ 
				echo "<div id='footer'><p class='first'><b>".$row[tytul]." -- ";
				//
				$podstawa = $row['data'];
				$dzien = date("d", strtotime($podstawa));
				$dzientygodnia= date("l", strtotime($podstawa));
				$miesiac = date("n", strtotime($podstawa));
				$rok = date("Y", strtotime($podstawa));
				$miesiacnowy = array(1 => 'stycznia', 2 => 'lutego', 3 => 'marca', 4 => 'kwietnia', 5 => 'maja', 6 => 'czerwca', 7 => 'lipca', 8 => 'sierpnia', 9 => 'września', 10 => 'października', 11 => 'listopada', 12 => 'grudnia');
				$dzientygodnianowy = array('Monday' => 'Poniedziałek', 'Tuesday' => 'Wtorek', 'Wednesday' => 'Środa', 'Thursday' => 'Czwartek', 'Friday' => 'Piątek', 	'Saturday' => 'Sobota', 'Sunday' => 'Niedziela');
				$nowadata = " ".$dzientygodnianowy[$dzientygodnia].", ".$dzien." ".$miesiacnowy[$miesiac]." ".$rok." " ;
				echo $nowadata;
				//
				echo "</b></p> <p class='last'><a href='?' style='text-decoration: none;'>Powrót</a></p></div>
				<div align='center'><img src='".$row[img]."' /></div>
				<div id='post'>".$row[tresc]."</div><br />";
			}
			else
			{
				echo "<div id='footer'><p class='first'><b>".$row[tytul]." -- ";
				//
				$podstawa = $row['data'];
				$dzien = date("d", strtotime($podstawa));
				$dzientygodnia= date("l", strtotime($podstawa));
				$miesiac = date("n", strtotime($podstawa));
				$rok = date("Y", strtotime($podstawa));
				$miesiacnowy = array(1 => 'stycznia', 2 => 'lutego', 3 => 'marca', 4 => 'kwietnia', 5 => 'maja', 6 => 'czerwca', 7 => 'lipca', 8 => 'sierpnia', 9 => 'września', 10 => 'października', 11 => 'listopada', 12 => 'grudnia');
				$dzientygodnianowy = array('Monday' => 'Poniedziałek', 'Tuesday' => 'Wtorek', 'Wednesday' => 'Środa', 'Thursday' => 'Czwartek', 'Friday' => 'Piątek', 	'Saturday' => 'Sobota', 'Sunday' => 'Niedziela');
				$nowadata = " ".$dzientygodnianowy[$dzientygodnia].", ".$dzien." ".$miesiacnowy[$miesiac]." ".$rok." " ;
				echo $nowadata;
				//
				echo "</b></p> <p class='last'><a href='?' style='text-decoration: none;'>Powrót.</a></p></div><div id='post'>".$row[tresc]."</div><br />";
			}
				}
				echo "<div id='footer'><p class='first'><b>Komentarze</b></p></div>";
				include('include-comments.php');
				//koniec komentarzy
} else
{
//strona glowna
$query = "SELECT * FROM blog ORDER by data DESC limit 0,3";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result)) {
			$query2 = "SELECT * FROM blog_comments WHERE post_id LIKE ".$row[id]." ";
			$result2 = mysql_query($query2);
			$ilosc = mysql_num_rows($result2);
	if (count($row[img]) > NULL)
			{ 
				echo "<div id='footer'><p class='first'><b>".$row[tytul]." -- ";
				
				//
				$podstawa = $row['data'];
				$dzien = date("d", strtotime($podstawa));
				$dzientygodnia= date("l", strtotime($podstawa));
				$miesiac = date("n", strtotime($podstawa));
				$rok = date("Y", strtotime($podstawa));
				$miesiacnowy = array(1 => 'stycznia', 2 => 'lutego', 3 => 'marca', 4 => 'kwietnia', 5 => 'maja', 6 => 'czerwca', 7 => 'lipca', 8 => 'sierpnia', 9 => 'września', 10 => 'października', 11 => 'listopada', 12 => 'grudnia');
				$dzientygodnianowy = array('Monday' => 'Poniedziałek', 'Tuesday' => 'Wtorek', 'Wednesday' => 'Środa', 'Thursday' => 'Czwartek', 'Friday' => 'Piątek', 	'Saturday' => 'Sobota', 'Sunday' => 'Niedziela');
				$nowadata = " ".$dzientygodnianowy[$dzientygodnia].", ".$dzien." ".$miesiacnowy[$miesiac]." ".$rok." " ;
				echo $nowadata;
				//
				
				echo "</b></p> <p class='last'><a href='?id=".$row[id]."' style='text-decoration: none;'>Komentarze (".$ilosc.")</a></p></div>
				<div align='center'><img src='".$row[img]."' /></div>
				<div id='post'>".$row[tresc]."</div><br />";
			}
			else
			{
				echo "<div id='footer'><p class='first'><b>".$row[tytul]." -- ";
				//
				$podstawa = $row['data'];
				$dzien = date("d", strtotime($podstawa));
				$dzientygodnia= date("l", strtotime($podstawa));
				$miesiac = date("n", strtotime($podstawa));
				$rok = date("Y", strtotime($podstawa));
				$miesiacnowy = array(1 => 'stycznia', 2 => 'lutego', 3 => 'marca', 4 => 'kwietnia', 5 => 'maja', 6 => 'czerwca', 7 => 'lipca', 8 => 'sierpnia', 9 => 'września', 10 => 'października', 11 => 'listopada', 12 => 'grudnia');
				$dzientygodnianowy = array('Monday' => 'Poniedziałek', 'Tuesday' => 'Wtorek', 'Wednesday' => 'Środa', 'Thursday' => 'Czwartek', 'Friday' => 'Piątek', 	'Saturday' => 'Sobota', 'Sunday' => 'Niedziela');
				$nowadata = " ".$dzientygodnianowy[$dzientygodnia].", ".$dzien." ".$miesiacnowy[$miesiac]." ".$rok." " ;
				echo $nowadata;
				//
				echo "</b></p> <p class='last'><a href='?id=".$row[id]."' style='text-decoration: none;'>Komentarze (".$ilosc.")</a></p></div>
				<div id='post'>".$row[tresc]."</div><br />";
			}
		}
	}
	//koniec strony glownej
}
?>