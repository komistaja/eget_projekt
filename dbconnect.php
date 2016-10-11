<?php
//Sparar server-data i variablar
$db_user = 'olof'; //databas(DB) användarnamn
$db_pass = 'olof'; //DB lösenord
$db_host = 'localhost'; //DB serveradress/namn

$db = 'olofseuranta'; //Databasens namn

/*
Kontaktar databasen med mysqli_connect()-funktionen 
och sparar i en variabel $link 
*/
$link = mysqli_connect($db_host, $db_user, $db_pass);

//Testar kontakten till databasen
if(!$link){
	echo "Kunde inte kontakta databasen <br>" . mysqli_error($link);
	exit(); //stoppar koden
}

if(!mysqli_set_charset($link, 'UTF8')) {
	echo "Kunde inte ställa in UTF-8";
	exit();
}

//Väljer DB
if(!mysqli_select_db($link, $db)) {
	echo "Kunde inte välja databasen $db <br>" . mysqli_error($link);
	exit();
}
?>