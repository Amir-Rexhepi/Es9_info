<?php 
session_start();
if(!isset($_SESSION['studenti'])){
    $_SESSION['studenti'] = array();
}

//recupero dati dal form;
$nome = $_POST['nome'];
$genere = $_POST['genere'];
$materie_insufficienti = isset($_POST['scelta']) ? $_POST['scelta'] : [];

//controllo che il nome sia unico
foreach ($_SESSION['studenti'] as $studente) {
    if($studente['Nome'] == $nome){
        echo "<p>Errore: lo studente $nome è gia stato inserito.</p>";
        echo "<a href=index.php>Torna alla pagina p</a>";
        exit();
    }
}
//determina l'esito dello studente 
$numero_materie_insuffficiente = count($materie_insufficienti);
$ammesso = true;
$messaggio = "";

//costruisce la fase di ammisione
if($numero_materie_insuffficiente >= 3){
    $ammesso = false;
    $messaggio =($genere === "F") ? " non è stato ammessa" : " non è stato ammesso";
} elseif ($numero_materie_insuffficiente > 0) {
    $debiti = implode(" e ", $materie_insufficienti);
    $messaggio = ($genere === 'F') ? " è stata ammessa con debito in $debiti" : " è stato ammesso con debito in $debiti";
}else {
    $messaggio = ($genere === "F") ? " è stata ammessa" : " è stato ammesso";
}
// salava i dati dello studente nella sessione
$_SESSION['studenti'][] = array(
    'Nome' => $nome,
    "Genere" => $genere,
    "Materie_Insufficenti" => $materie_insufficienti,
    "Messaggio" => $messaggio
);
echo "<h2>Esito dello Studente</h2>";
echo htmlspecialchars($nome);
echo htmlspecialchars($messaggio);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultati</title>
</head>
<body>
    <a href="index.php">Inserisci un nuovo studente</a> |
    <a href="repilogo.php">Visualizza tabellone definitivo</a>
</body>
</html>