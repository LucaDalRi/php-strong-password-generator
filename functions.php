<?php

session_start();

$lunghezzaPassword = $_GET['lunghezzaPass'];

$caratteriPassword = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789!@#$%^&*_+=-?";

$passwordGenerata = '';

$stringaMischiata = str_shuffle($caratteriPassword);

$passwordGenerata = substr($stringaMischiata, 0, $lunghezzaPassword);

$_SESSION['password'] = $passwordGenerata;
    
header('Location: ./pswdPage.php');
