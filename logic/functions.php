<?php
$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?@$%&';
$lenght = $_GET['lenght'];
$password = '';
$character_count = strlen($characters);
//  var_dump ($character_count);
for ($i = 0; $i < $lenght; $i++) {
    $random_character = $characters[rand(0, $character_count - 1)];
    // var_dump($random_character);
    $password = $password . $random_character;
}
// echo $password;



?>