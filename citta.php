<?php
//apro la sessione
session_start();
 
//mostro gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//controllo se il session id è lo stesso che mi ero salvato
if($_SESSION['connessione'] != session_id()) {
	//il session id è diverso
	
	//reindirizzo alla index	
    header('location: index.php');
	
} else {
	//il session id è lo stesso
	
	//chiedo all'utente la città
	echo '
<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<title>esecizio città</title>
	</head>
	<body>
		<h1>
			esecizio città
		</h1>
		<br><br>
		in questo esercizio stamperò il nome della città che l\'utente inserisce
		<br><br>
		<form method="post" action="citta2.php">
			<input type="text" name="citta" placeholder="inserisci nome città" />
			<input type="submit" name="submit" value="Invia" />
		</form>
		<br><br>
		<a href="citta.php" targhet="_blank">riprova</a>
		<br><br>
		<a href="homepage.php" targhet="_blank">torna alla homepage</a>
		<br><br>
		<a href="logout.php" targhet="_blank">logout</a>
	</body>
</html>
	';
}

//https://www.html.it/pag/16026/introduzione22/
//https://www.html.it/pag/16069/struttura-del-tag-form/
//https://www.html.it/guide/guida-css-di-base/
//https://www.html.it/guide/guida-php-di-base/

?>