<?php
// server data variables
$db_user = 'olof'; //DB username
$db_pass = 'olof'; //DB password
$db_host = 'localhost'; //DB serveraddress

$db = 'olofseuranta'; //Database name

/*
Contact DB with mysqli_connect() 
output to $link 
*/
$link = mysqli_connect($db_host, $db_user, $db_pass);

//Test DB connection
if(!$link){
	echo "Tietokantayhteys ei toimi <br>" . mysqli_error($link);
	exit();
}

// change DB charset
if(!mysqli_set_charset($link, 'UTF8')) {
	exit();
}

//select DB
if(!mysqli_select_db($link, $db)) {
	echo "Tietokantaan $db ei yhteyttä <br>" . mysqli_error($link);
	exit();
}
?>