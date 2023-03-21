<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ciao</title>
</head>

<body>
    <?php
require_once(__DIR__.'/logic/functions.php');
?>
    <div class="container">
        <h1>La tua passowrd è :
            <span class="text-danger">
                <?php  echo $password ?>
            </span>
        </h1>
        <form action="index.php" method="GET">
            <input type="number" name="lenght" placeholder="inserisci la lunghezza della password" value="0"
                class="w-25">
            <button type="submit">Invia</button>
        </form>
    </div>

</body>

</html>