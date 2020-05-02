 <?php
// odbieramy dane z formularza
$concode = $_POST['concode'];
$telnum = $_POST['telnum'];
$name = $_POST['name'];

if($concode and $telnum and $name) {
    
    // ³¹czymy siê z baz¹ danych
    $connection = @mysql_connect('localhost', 'root', 'mangos')
    or die('Brak po³¹czenia z serwerem MySQL');
    $db = @mysql_select_db('telviewer', $connection)
    or die('Nie mogê po³¹czyæ siê z baz¹ danych');
    
    // dodajemy rekord do bazy
    $ins = @mysql_query("INSERT INTO telefony SET concode='$concode', telnum='$telnum', name='$name'");
    
    if($ins) echo "Rekord zosta³ dodany poprawnie";
    else echo "B³¹d nie uda³o siê dodaæ nowego rekordu";
    
    mysql_close($connection);
}

?> 