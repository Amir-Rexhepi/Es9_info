<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="risultati.php" method="post">
        <p>Nominativo: <input type="text" name="nome" required></p>
        <p>Genere: <input type="radio" name="genere" value="M">M
        <input type="radio" name="genere" value="F">F</p>
        <p>Debiti:</p>
            <input type="checkbox" name="scelta[]" value="Informatica"> INF
            <input type="checkbox" name="scelta[]" value="Italiano"> ITA
            <input type="checkbox" name="scelta[]" value="Telecomunicazioni"> TEL
            <input type="checkbox" name="scelta[]" value="Matematica"> MAT
        <input type="submit">
    </form>
</body>
</html>