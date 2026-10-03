<?php

session_start();

$nome = $_SESSION['nome'];

    echo "Bem vindo";
    echo " Olá" . $nome; 
?>

