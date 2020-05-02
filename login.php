<?php
ob_start();
?>
<html>
<head>
<title> Klotek.net - Logowanie - Administracja - Braino Edition </title>
		<style type="text/css">
			@import url("css/default.css");
		</style>
</head>
<body bgcolor="#333333" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
<div align="center" >
<table border="0" width="800"><tr><td><div style="float:left;"><img src="klotek.gif"></div></td><td>
<div style="float:right;"><img src="braino.gif"></div></td></tr>
<tr><td></td></tr>
<tr><td colspan="2">
<?
include ('scripting/admin-login.php');
?>
<br /><br />
</td></tr>
<tr><td colspan="2"><div id="footer"> <? include ('scripting/footer.php') ?></div></td></tr>
</table>

</div>
</body>
</html>
<?
ob_end_flush();
?>