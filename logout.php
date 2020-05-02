<?php
$past = time() - 100;
setcookie(ID_admklonet, gone, $past);
setcookie(Key_admklonet, gone, $past);
header("Location: index.php");
?> 