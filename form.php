<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormBadWords</title>
    <link rel="stylesheet" href="./styleForm.css">
</head>
<body>
    <h1>Primo giorno di PHP</h1>

    <form action="paginaDiRicezione.php" method='GET'>

    <input type="text" placeholder='Inserisci qua il tuo testo' name='testoInserito' class='text'>
    <input type="text" placeholder='Quale parola vuoi cambiare?' name='parolaDaSost' class='request'>
    <input type="text" placeholder='Con cosa la vuoi sostituire?' name='sostituta' class='request'>

    <button type='submit'>Invia</button>
</form>

</body>
</html>