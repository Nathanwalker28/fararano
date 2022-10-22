<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'libraries/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon superbe blog - <?= $pageTitle ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="images/logo.png" alt="our logo" width="200">
        </div>
        <ul class="menu" id="menu">
            <li><a href="index.php">Acceuil</a></li>
            <li class="dropdown">
                <a href="about.php">Qui sommes nous</a>
                <ul class="dropdown-content">
                    <li><a class="dropdown-item" href="about.php#apropos">A Propos</a></li>
                    <li><a class="dropdown-item" href="about.php#offre">Nos offres</a></li>
                    <li><a class="dropdown-item" href="about.php#objectif">Objectif</a></li>
                    <li><a class="dropdown-item" href="about.php#engagement">Engagement</a></li>
                </ul>
            </li>
            <li><a href="article.php">Nos producteurs</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="subscribe.php">deposer une annonce</a></li>  
            <?php if (!is_connected()) : ?>
                <li><a href="signup.php">S'inscrire</a></li>
                <li><a href="login.php">Se connecter</a></li>
            <?php endif ?>
            <?php if (is_connected()) : ?>
                <li><a href="index.php">Mon profil</a></li>
                <li><a href="logout.php">Se déconnecter</a></li>
            <?php endif ?>

        </ul>
    </div>