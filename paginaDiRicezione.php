<?php
$testoVar = $_GET["testoInserito"];


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
        
    <p><?php echo $testoVar ?></p>
</body>
</html>