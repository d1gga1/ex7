<!DOCTYPE html>
<html>
<head>
    <title>Risultato del Gioco</title>
</head>
<body>
    <h1>Risultato del Gioco</h1>
    <?php
    $giocatore1 = $_POST['giocatore1'];
    $scelta1 = $_POST['scelta1'];
    $giocatore2 = $_POST['giocatore2'];
    $scelta2 = $_POST['scelta2'];

    echo "Giocatore 1: $giocatore1 ha scelto $scelta1<br>";
    echo "Giocatore 2: $giocatore2 ha scelto $scelta2<br>";

    // Determina il vincitore
    if ($scelta1 == $scelta2) {
        echo "È un pareggio!";
    } 
    elseif (
        ($scelta1 == "sasso" && $scelta2 == "forbice") ||
        ($scelta1 == "carta" && $scelta2 == "sasso") ||
        ($scelta1 == "forbice" && $scelta2 == "carta")
    ) {
        echo "Giocatore 1 ($giocatore1) vince!";
    } 
    else {
        echo "Giocatore 2 ($giocatore2) vince!";
    }
    ?>
</body>
</html>
