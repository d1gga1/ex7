<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indovina il Numero</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Indovina il Numero</h1>
        <p>Il giocatore 1 ha generato un numero casuale tra 1 e 100.</p>
        <p>Giocatore 2, inserisci un numero e indovina!</p>
        <form method="post" action="guess.php">
            <input type="number" name="guess" required>
            <button type="submit">Controlla</button>
        </form>
    </div>
</body>
</html>