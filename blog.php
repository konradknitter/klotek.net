<html>
<head>
<title> Klotek.net - Blog - Braino Edition </title>
		<style type="text/css">
			@import url("css/default.css");
		</style>
		 <link rel="alternate" type="application/atom+xml" href="http://feeds2.feedburner.com/blogklotek" title="Klotek.net Blog Atom" />
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
include ("scripting/include-blog.php");
?>
</td></tr>
<?
$id = $_GET['id'];
if ($id <> NULL) {
} else
{
		echo "<tr><td><p id='post'>";
			$query3 = "SELECT * FROM blog";
			$result3 = mysql_query($query3);
			$ilosc2 = mysql_num_rows($result3);
			$ilosc2 = $ilosc2 / 3;
			$archive = $_GET['archive'];
			
			if ($ilosc2 >1){
			echo "<a href='blog.php' style='text-decoration:none;";
						if ($archive == NULL) {
							echo "font-weight: bold;"; 
						}
			echo "'>aktualna</a> | archiwum: ";
			
			for($i=1;$i<$ilosc2;$i++)
			{
			echo "<a href='blog.php?archive=".$i."' style='text-decoration: none; ";
			if ($i == $archive) {
			echo "font-weight: bold;"; 
			}
			
			echo "'>".$i."</a> | ";
			}
			}
			
		echo "</p></td></tr>";
}
?>
<tr><td colspan="2"><div id="footer"> <? include ('scripting/footer.php') ?></div></td></tr>
</table>

</div>
</body>
</html>
<?
	    mysql_close($dbc);
?>