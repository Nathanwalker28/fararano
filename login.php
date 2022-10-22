<?php
require_once('libraries/Autoload.php');
require_once('libraries/auth.php');
$model = new \Models\Users();

if (isset($_POST['username'])) {
    $username = stripslashes($_POST['username']);

    $_SESSION['username'] = $username;
    $password = stripslashes($_POST['password']);

    $result = $model->checkUser($username);


    if ($result) {
        if (password_verify($password, $result['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            Http::redirect('article.php');
        } else {
            $error = "mot de passe invalide";
        }
    } else {
        $error = "nom d'utilisateur invalide";
    }
}

$pageTitle = "Se connecter";
require_once('templates/header.html.php'); ?>

<div class="container">

    <form method="POST" action="" id="login">
        <h1>Indentifiez-vous :</h1>
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php endif ?>

        <div class="alert alert-warning" role="alert">
            Identifiez-vous pour pouvoir profitez de nos offre
        </div>
        <div class="field-input">
            <label for="username">Adresse Email ou Nom</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="field-input">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="field-input">
            <input type="submit" value="se connecter">
        </div>
    </form>
</div>

<?php require_once('templates/footer.html.php') ?>