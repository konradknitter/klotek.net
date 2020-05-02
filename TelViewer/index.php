<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<style type="text/css">
			@import url("css/default.css");
		</style>
<title>TelViewer - by klotek.net</title>
		<script src="telviewer.js"></script>
</head>
<body>
            <div id='footer'>
                <p class='first'>TelViewer - wersja rozwojowa
                </p>
                <p class='last'><a href='#'>Zglaszanie bledow(offline)</a>|<a href='login.php'>Admin</a>
                </p>
            </div>
<br /><br />

			<div align='center' id="szukajka">
				<form action="javascript:startSearch()">
				<input type="text" size="40" id="field" />
				<input type="submit" value="Szukaj" />
				</form>
			</div>
			<div align ='center' id="results">
			</div>
<br />
<div id="centext">
<b><u>Update Status: 15:14 1 marca 2009</u></b><br />
<li />Wszelkie opcje administratorskie przeniesione do panelu administracji. login: "test", haslo: "test"<br/>
<li />Rozpoczecie obrobki graficznej strony glownej<br />
<li />Dodanie poziomow administratorskich dot. dostepu. Przykladem konta ograniczonego jest. login: "test2", haslo: "test2"<br /><br />
<b><u>Update Status: 14:15 1 marca 2009</u></b><br />
<li />Edycja Danych<br /><br />
<b><u>Update Status: 10:03 1 marca 2009</u></b><br />
<li />Formularz dodawania numerow do bazy<br/>
<li />Usuwanie numerow z bazy danych.
<br />
<br />
<b><u>Update Status: 21:01 28 lutego 2009</u></b><br />
No to tyle zrobione zostalo dzis.. troche nerwow z pomylka znaczka ` i ' - dla mnie to samo.. babskie problemy.<br /> 
W skrocie, baza ma trzy telefony. Przeszukuje telefony z niej zapomoca szukajki. na postawie: <br />
<li />CALEGO kodu kraju - czyt. cale 48, nie samo 4 albo 8.<br />
<li />Czesci, badz calego numeru - kazdej czesci, moge zrobic by jednak szukal tylko po poczatku <br />
<li />Imieniu, Nazwisku badz jego czesci. <br />
<li />Po wpisaniu znaku "%" (procent) pokazuje wszystkie numery jakie ma w bazie.
<br />
jutro bede bawil sie z administracja i dodawaniem numerow do bazy z poziomu przegladarki..<br />
</div>
</body>
</html>