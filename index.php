<!-- Creare una pagina html con il form di iscrizione ad una newsletter.
La pagina deve contenere un form con un input di tipo email e un bottone di invio.
I form invierà i dati alla stessa pagina index.php con metodo POST.
Nel momento in cui il form viene inviato recuperiamo la mail dell’utente e usando una funzione controlliamo che sia formattata bene con queste logiche:
la mail deve contenere la @
la mail deve contenere un punto .
Se la mail è corretta allora stampare nella pagina un messaggio si success usando il componente alert di Bootstrap
altrimenti stampate un messaggio di error sempre con un componente alert di Bootstrap.
Inizialmente mettere tutto il codice nel file index.php, poi quando funziona tutto. spostate la funzione in un file utilities.php ed includetelo nel file inde.php come visto in classe.
Stilizzate la pagina con Bootstrap a piacimento rendendola un minino presentabile.
BONUS 1
aggiungete anche un header e un footer nella pagina includendoli da file separati
BONUS 2
create una seconda pagina subscription.php che utilizzando la sessione mostrerà l’esito dell’iscrizione alla newsletter con gli alert di Bootstrap. Quindi nel file index.php dopo aver controllato la mail, salvate l’esito in una variabile di sessione e fate un redirect alla pagina subscription.php. -->


<?php
include __DIR__ . '/utilities.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="p-4">
    <form action="index.php" method="get" class="p-2">
        <div>
            <label for="email" class="mb-2">Inserisci mail</label>
            <input type="text" name="email" id="email">
        </div>
        <button>Send</button>
    </form>
    <?php
    if ($validator === true){
       echo '<div class="alert alert-primary" role="alert">success!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">  Inserisci un e-mail corretta! </div>';
    }
    ?>
    

</body>
</html>

