<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Genera un numero casuale tra 1 e 100
    $randomNumber = rand(1, 100);

    // Ottieni il numero inserito dal giocatore 2
    $guess = $_POST["guess"];
    
    if (empty($guess) || !is_numeric($guess) || $guess < 1 || $guess > 100) {
        $message = "Inserisci un numero valido tra 1 e 100.";
    } elseif ($guess < $randomNumber) {
        $message = "Il numero è troppo piccolo. Prova ancora.";
    } elseif ($guess > $randomNumber) {
        $message = "Il numero è troppo grande. Prova ancora.";
    } else {
        $message = "Complimenti! Hai indovinato il numero $randomNumber.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Risultato</h1>
        <p><?php echo $message; ?></p>
        <a href="index.php">Torna al gioco</a>
    </div>
</body>
</html>