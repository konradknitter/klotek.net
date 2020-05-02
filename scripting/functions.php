<?
function getNewData($podstwowa){
$staradata=$podstawowa;
$dzien=date("d", strtotime($staradata));
$dzientygodnia=date("l", strtotime($staradata));
$miesiac = date("n", strtotime($staradata));
$rok = date("Y", strtotime($staradata));

$miesiacnowy = array(1 => 'stycznia', 2 => 'lutego', 3 => 'marca', 4 => 'kwietnia', 5 => 'maja', 6 => 'czerwca', 7 => 'lipca', 8 => 'sierpnia', 9 => 'wrzeœnia', 10 => 'paŸdziernika', 11 => 'listopada', 12 => 'grudnia');

$dzientygodnianowy = array('Monday' => 'Poniedzia³ek', 'Tuesday' => 'Wtorek', 'Wednesday' => 'Œroda', 'Thursday' => 'Czwartek', 'Friday' => 'Pi¹tek', 'Saturday' => 'Sobota', 'Sunday' => 'Niedziela');
				
$nowadata = " ".$dzientygodnianowy[$dzientygodnia].", ".$dzien." ".$miesiacnowy[$miesiac]." ".$rok." " ;

echo $podstawa;
};
?>