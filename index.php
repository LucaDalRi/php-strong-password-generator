<?php

$lunghezzaPassword = intval($_GET['lunghezzaPass']);

function generatePassword($lunghezzaPassword)
{
    $caratteriPassword = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789!@#$%^&*_+=-?";

    $passwordGenerata = '';

    $prova = str_shuffle($caratteriPassword);

    $passwordGenerata = substr($prova, 1, $lunghezzaPassword);

    return $passwordGenerata;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PSWD GEN</title>
</head>

<body>

    <form method="get">
        <label for="lunghezzaPass">Inserisci la lunghezza della password che vuoi generare</label><br>
        <input type="number" name="lunghezzaPass" id="lunghezzaPass" min='0' max='30' placeholder="0-30">
        <button type="submit">Invio</button>
    </form>

    <h1>
        <?php
        echo generatePassword($lunghezzaPassword);
        ?>

    </h1>

</body>

</html>