<?php
$testoVar = $_GET["testoInserito"];
// bonus testo modificato
$parolaDaSostituire = $_GET['parolaDaSost'];
$sostituta = $_GET['sostituta'];

$testoModificato = str_replace('ciao', 'PHP', strtolower($testoVar));
$testoModificato2 = str_replace($parolaDaSostituire, $sostituta, $testoVar);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaginaConDatiRicevuti</title>
</head>
<body style='background-color: #222; color: white;'>
    
    <h1>Il tuo testo contiene <?php echo strlen($testoVar) ?> caratteri</h1>

    <h2>il messaggio inviato è:</h2>
    <!-- FUNZIONE PER RENDERE MINUSCOLO UN TESTO -->
    <p><?php echo strtolower($testoVar) ?></p>

    <h2>BONUS testo modificato</h2>
    <!-- APPORTO LA MODIFICA DIRETTAMENTE NEL TESTO -->
    <p><?php echo str_replace('ciao', 'saluti', strtolower($testoVar)) ?></p>
    
    <!-- RICHIAMO LA VARIABILE IN CUI HO GIà SALVATO LA MODIFICA -->
    <p><?php echo $testoModificato ?></p>

    <!-- TESTO MODIFICATO CON LA PAROLA DELL'UTENTE -->
     <h1 style='color: crimson;'>Testo modificato con la parola dell'utente</h1>
    <p><?php echo $testoModificato2 ?></p>
</body>
</html>