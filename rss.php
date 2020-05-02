<?= '<' . '?xml version="1.0" encoding="utf-8"?' . '>'
 ?>
   <feed xmlns="http://www.w3.org/2005/Atom">
     <id>tag:klotek.pl,2007-01-25:atom-http://klotek.pl/</id>
     <title>Blog Klotek.net</title>
     <link href="http://www.klotek.pl/"/>
     <updated><? echo (date(DATE_ATOM)); ?></updated>
     <author>
       <name>Klotek</name>
     </author>

		<?
		include ('dbc.php');
		$query = "SELECT * FROM blog ORDER by data DESC";
		$result = mysql_query($query);
		while($row = mysql_fetch_assoc($result)) {
		$tresc = trim($row['tresc']);
		$tresc = strip_tags($tresc);
		$tresc = htmlspecialchars($tresc);
		echo ("<entry>");
		echo ("<title>".$row['tytul']."</title>");
		echo ("<link href='http://klotek.pl/?id=".$row['id']."' />");
		echo ("<id>http://klotek.pl/?id=".$row['id']."</id>    <updated>".$row['data']."</updated>");
		echo ("<summary>".$tresc."</summary>");
		echo ("</entry>");
		}
		?>

	 
	 </feed>
