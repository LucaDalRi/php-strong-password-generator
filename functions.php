<?php

session_start();

$lunghezzaPassword = $_GET['lunghezzaPass'];

function generatePassword($lunghezzaPassword)
{
    $caratteriPassword = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789!@#$%^&*_+=-?";

    $passwordGenerata = '';

    $stringaMischiata = str_shuffle($caratteriPassword);

    $passwordGenerata = substr($stringaMischiata, 0, $lunghezzaPassword);
    
    header('Location: ./pswdPage.php');

    return $passwordGenerata;
    
}

?>