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
<?php
$characters ='abcdefghijklmnopqrstuvwzyzABCDEFGHIJKLMNOPQRTSUVWXYZZ1234567890!?@$%&';
$character = str_split($characters);
//var_dump ($prova);
$random_index = array_rand($character);
// var_dump ($provaP);
$random_character =  $character[$random_index];
// var_dump ($random_character);
$lenght = $_GET ['lenght'];
var_dump ($lenght);


?>

<body>
    <h1>Ciao</h1>
    <div class="container">
        <form action="index.php" method="GET">
            <input type="number" name="lenght" placeholder="inserisci la lunghezza della password" class="w-25">

            <button type="submit">Invia</button>
        </form>
    </div>

</body>

</html>