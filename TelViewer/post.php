 <?php
// odbieramy dane z formularza
$concode = $_POST['concode'];
$telnum = $_POST['telnum'];
$name = $_POST['name'];

if($concode and $telnum and $name) {
    
    // ��czymy si� z baz� danych
    $connection = @mysql_connect('localhost', 'root', 'mangos')
    or die('Brak po��czenia z serwerem MySQL');
    $db = @mysql_select_db('telviewer', $connection)
    or die('Nie mog� po��czy� si� z baz� danych');
    
    // dodajemy rekord do bazy
    $ins = @mysql_query("INSERT INTO telefony SET concode='$concode', telnum='$telnum', name='$name'");
    
    if($ins) echo "Rekord zosta� dodany poprawnie";
    else echo "B��d nie uda�o si� doda� nowego rekordu";
    
    mysql_close($connection);
}

?> 