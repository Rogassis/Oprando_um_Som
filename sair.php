<?php
session_start();
unset($_SESSION['email']); //Destroi email e senha caso não
unset($_SESSION['senha']); //existam no banco de dados.
header('Location: login.php');
?>