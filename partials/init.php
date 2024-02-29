<?php

require_once __DIR__ . "/function.php";

$password_length = (int) $_GET['password-length'] ?? 5;

//controllare sempre se il form è vuoto
$form_sent = !empty($_GET);

//funzione
if ($form_sent) {
    session_start();

    $_SESSION['generate-password'] = generate_password($password_length);

    header('Location: ./result.php');
};
