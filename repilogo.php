<?php

session_start();

if (isset($_SESSION['studenti']) && !empty($_SESSION['studenti'])) {
    foreach ($_SESSION['studenti'] as $studente) {
        echo "<tr><td>";
        echo htmlspecialchars($studente['Nome']); // Stampa il nome
        echo "</td><td>"; // Nuova cella per il messaggio
        echo htmlspecialchars($studente['Messaggio']); // Stampa il messaggio
        echo "</td></tr>";
        echo "<br>";
    }
} else {
    echo "<tr><td colspan='2'>Nessuno studente inserito</td></tr>";
}
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">Inserisci un nuovo studente</a>
<a href="termina.php">Termina scrutinio</a>
</body>
</html>