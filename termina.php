<?php 

session_start();
session_destroy(); //termina la sessione e cancella tutti i dati degli studenti
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Scrutinio Terminato</h1>
    <p>I dati degli studenti sono stati cancellati. Lo scrutinio è concluso.</p>
    <a href="index.php">Inizia nuovo scrutinio</a>
</body>
</html>